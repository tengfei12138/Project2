$(document).ready(function(){
    $("#chooseBtn").click(function() {
        if($("#countries option:selected").val()==="null"&&$("#cities option:selected").val()==="null"&&$("#contents option:selected").val()==="null"){
            alert("请先选择！")
        }else{
            $.post("../php/filterChoose.php",{countryISO:$("#countries option:selected").val(),cityID:$("#cities option:selected").val(),content:$("#contents option:selected").val()},function (data) {
                console.log(data);
                data =JSON.parse(data);
                if (data[0].length!==0){
                    let flag=true;
                    resultShowing(data,1,flag)
                }
            else alert("没有可匹配项");
            })
        }
    })
});
/*$(document).ready(function(){
    $("#chooseBtn").click(function() {
        if($("#countries option:selected").val()==="null"&&$("#cities option:selected").val()==="null"&&$("#contents option:selected").val()==="null"){
            alert("请先选择部分内容");
        }else{
            $.post("filterChoose.php",{countryISO:$("#countries option:selected").val(),cityID:$("#cities option:selected").val(),content:$("#contents option:selected").val()}, function (data) {
                data = JSON.parse(data);
                if(data[0].length!==0){
                    resultShowing(data,1,true);
                }
                else alert("没有可匹配项");

            });
        }
    });
});*/