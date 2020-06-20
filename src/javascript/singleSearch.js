$(document).ready(function () {
    $("#singleSearch").click(function () {
        if (document.getElementById('searchInput').value === ""){
            alert("请输入字符！")
        }else {
            $.post("../php/singleSearch.php",{input:$("input:text[id='searchInput']").val()},function (data) {
                      data = JSON.parse(data);
                      if (data[0].length!==0){
                          let flag=true;
                          resultShowing(data,1,flag)
                      }
                      else alert("没有可匹配项");
            })
        }

    })
})