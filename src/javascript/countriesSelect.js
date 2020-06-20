$(document).ready(function(){
    $.post("../php/countriesSelect.php",function(data) {
        data = JSON.parse(data);
        let list = document.getElementById("countries");
        list.innerHTML="";
        let entry= document.createElement("option");
        entry.value='null';
        entry.innerHTML = "Filter by Country";
        list.append(entry);
        for(let i =0;i<data[1].length;i++){
            entry =document.createElement("option");
            entry.value = data[1][i];
            entry.innerHTML = data[0][i];
            list.append(entry);
        }
    })
});
