function imgPreview(fileDom) {
    let reader;
    reader = new FileReader();

    const file = fileDom.files[0];
    const imageType = /^image\//;
    if(!imageType.test(file.type)) {
        alert("请选择图片！");
        return;
    }
    reader.onload = function(e) {
        document.getElementsByClassName('photos')[0].src = e.target.result;
    };
    reader.readAsDataURL(file);
}
function submit(){
    let imgFile = document.getElementById("fileUpload").value;
    let title = document.getElementById("imgTitle").value;
    let description = document.getElementById("imgDescription").value;
    let content = document.getElementById("contents").value;
    let country = document.getElementById("countries").value;
    if(imgFile === ""){
        alert("请上传照片")
    }
    else if(title===""){
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
        document.getElementById("form").submit();
    }
}