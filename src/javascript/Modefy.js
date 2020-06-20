function modify() {
    let imageID=1;
    let url = window.location.href;
    let position = url.indexOf("?imageID=")+9;
    if(position!==8){
        imageID = url.substring(position);
    }

    let title = document.getElementById("imgTitle").value;
    let description = document.getElementById("imgDescription").value;
    let content = document.getElementById("contents").value;
    let country = document.getElementById("countries").value;
    let city = document.getElementById("cities").value;
    if(title===""){
        alert("请填写标题");
    }
    else if(description===""){
        alert("请填写描述");
    }
    else if(content==="null"){
        alert("请选择内容分类");
    }
    else if(country==="null"){
        alert("请选择国家");
    }
    else{
        $.post("../php/Modify1.php",{imageID:imageID,title:title,description:description,content:content,country:country,city:city}, function (data) {
            window.location.href="../html/myphoto.php";
            console.log(data);
        })

    }
    console.log("imageID="+imageID);
    console.log("title="+title);
    console.log("description="+description);
    console.log("content="+content);
    console.log("country="+country);
    console.log("city="+city);

}