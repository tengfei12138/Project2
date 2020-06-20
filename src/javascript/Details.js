$(document).ready(function(){
    let imagePath=1;
    let url = window.location.href;
    let position = url.indexOf("?path=")+6;
    if(position!==5){
        imagePath = url.substring(position);
    }
    $.post("../php/detailsShow.php",{path:imagePath}, function (data) {
        console.log(data);
        data = JSON.parse(data);
        let titleDetail = document.getElementById("titleDetail");
        titleDetail.innerHTML=data[1];
        let imgDetail = document.getElementById("imgDetail");
        imgDetail.innerHTML="";
        imgDetail.style.background = 'url(../../img/travel-images/normal/medium/'+data[3]+')';
        imgDetail.style.width="400px";
        imgDetail.style.height="400px";
        let like = document.getElementById("like");
        like.innerHTML = data[8];
        if (data[9]) {
            let likeButton = document.getElementById("likeButton");
            likeButton.innerHTML = "";
            let likeBtn = document.createElement("button");
            likeBtn.style.width = "100px";
            likeBtn.style.height = "50px";
            likeBtn.style.backgroundColor = "lightblue";
            if (data[10]) {
                likeBtn.innerHTML = "dislike";
                likeBtn.onclick = function () {
                    detailsDislike();
                    window.location.reload();
                }
            } else {
                likeBtn.innerHTML = "like";
                likeBtn.onclick = function () {
                    detailsLike();
                    window.location.reload();
                }
            }
            likeButton.append(likeBtn);
        }
       let contentDetail = document.getElementById("contentDetail");
        contentDetail.innerHTML="Content :"+data[4];
        let countriesDetail = document.getElementById("countryDetail");
        countriesDetail.innerHTML="Country :"+data[5];
        let cityDetail = document.getElementById("cityDetail");
        cityDetail.innerHTML="City :"+data[6];
        let upload = document.getElementById("uploader");
        upload.innerHTML="";
        let m = document.createElement("h4");
        m.innerHTML="by "+data[7];
        upload.append(m);
        let des = document.getElementById("desDetail");
        if(data[2]!== null) {
            des.innerHTML = data[2];
        }
        else des.innerHTML="null";
        function detailsLike() {
            $.post("../php/detailLike.php",{imageID:data[0]}, function (data) {
                console.log(data);
            })
        }
        function detailsDislike() {
            $.post("../php/detailDislike.php",{imageID:data[0]}, function (data) {
                console.log(data);
            })
        }
    })
})