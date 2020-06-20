$(document).ready(function(){
    $.post("../php/HotSelect.php", function (data) {
        data = JSON.parse(data);
        let frame = document.getElementById("hotTags");
        for(let i =0; i <data[0].length;i++){
            if(data[0][i]!==undefined) {
                let line = document.createElement("a");
                line.innerText = data[0][i];
                line.id = data[0][i];
                line.classList.add("list-group-item", "list-group-item-action","Tags");
                line.title = "contentTag";
                frame.append(line);
            }
        }
        for(let i =0; i <data[1].length;i++){
            if(data[1][1][i]!==undefined&&data[1][0][i]!==undefined) {
                let line = document.createElement("a");
                line.innerText = data[1][1][i];
                line.id = data[1][0][i];
                line.classList.add("list-group-item", "list-group-item-action","Tags");
                line.title="countryTag";
                frame.append(line);
            }
        }
        for(let i =0; i <data[2].length;i++){
            if(data[2][1][i]!==undefined&&data[2][0][i]!==undefined){
                let line = document.createElement("a");
                line.innerText = data[2][1][i];
                line.id=data[2][0][i];
                line.classList.add("list-group-item","list-group-item-action","Tags");
                line.title = "cityTag";
                frame.append(line);
            }
        }
        $(".Tags").click(function() {
            $.post("../php/HotFilter.php",{lineID:$(this).attr("id"),lineClass:$(this).attr("title")}, function (data) {
                data = JSON.parse(data);
                if(data[0].length!==0){
                   resultShowing(data,1,true);
                }
                else alert("无相关内容");
            })
        })
    })

});