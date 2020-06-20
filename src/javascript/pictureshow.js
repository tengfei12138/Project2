$(document).ready(function () {
        $.get("src/php/favorpictures.php",function(data) {
             data =JSON.parse(data);
             let table = document.getElementById("shows");
             let tr = table.getElementsByTagName("tr");
             let td1 = tr[0].getElementsByTagName("td");
             let td2 = tr[1].getElementsByTagName("td");
             for (let i=0;i<3;i++) {
                 let div = document.createElement("div");
                 let a = document.createElement("a");
                 a.href = "src/html/Details.php?path="+data[2][i];
                 let image = document.createElement("img");
                 image.src="img/travel-images/normal/medium/"+data[2][i];
                 image.classList.add("photo");
                 a.append(image);
                 let h3 = document.createElement("h3");
                 h3.innerHTML=data[0][i];
                 let p = document.createElement("p");
                 p.innerHTML=data[1][i];
                 div.append(a,h3,p);
                 td1[i].append(div);
             }
             for (let j=3;j<6;j++){
                 let div1 = document.createElement("div");
                 let a1 = document.createElement("a");
                 a1.href = "src/html/Details.php?path="+data[2][j];
                 let image1 = document.createElement("img");
                 image1.src="img/travel-images/normal/medium/"+data[2][j];
                 image1.classList.add("photo");
                 a1.append(image1);
                 let h31 = document.createElement("h3");
                 h31.innerHTML=data[0][j];
                 let p1 = document.createElement("p");
                 p1.innerHTML=data[1][j];
                 div1.append(a1,h31,p1);
                 td2[j-3].append(div1);
             }
        });
});