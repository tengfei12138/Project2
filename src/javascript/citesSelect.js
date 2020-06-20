$(document).ready(function(){
    $("#countries").change(function() {
        $.post("../php/citesSelect.php",{iso:$("#countries option:selected").val()}, function (data) {
            data = JSON.parse(data);
            let list = document.getElementById("cities");
            list.innerHTML = "";
            let entry = document.createElement("option");
            entry.value = 'null';
            entry.innerHTML = "Filter by City";
            list.append(entry);
            for (let i = 0; i < data[1].length; i++) {
                entry = document.createElement("option");
                entry.value = data[1][i];
                entry.innerHTML = data[0][i];
                list.append(entry);
            }
        })
    })
});