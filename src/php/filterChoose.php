<?php
header('Content-type:application/x-www-form-urlencoded;charset=utf-8');
$conn=mysqli_connect("localhost","root","Csf2002010","travels");
$selectedCountry=$_POST["countryISO"];
$selectedCity = $_POST["cityID"];
$selectedContent = $_POST["content"];

if($selectedContent ==="null"||$selectedContent ==="0"||is_null($selectedContent)){
    if($selectedCity==="null"||$selectedCity ==="0"||is_null($selectedCity)){
        $chooseSql = "SELECT Title,PATH,Description FROM travelimage WHERE CountryCodeISO='{$selectedCountry}'";
    }
    else if($selectedCountry==="null"||$selectedCountry ==="0"||is_null($selectedCountry)){
        $chooseSql = "SELECT Title,PATH,Description FROM travelimage";
    }
    else{
        $chooseSql = "SELECT Title,PATH,Description FROM travelimage WHERE CityCode='{$selectedCity}' AND CountryCodeISO='{$selectedCountry}'";
    }
}
else if($selectedCountry==='null'||$selectedCountry ==="0"||is_null($selectedCountry)){
    $chooseSql = "SELECT Title,PATH,Description FROM travelimage WHERE Content='{$selectedContent}'";
}
else if($selectedCity==="null"||$selectedCity ==="0"||is_null($selectedCity)){
    $chooseSql = "SELECT Title,PATH,Description FROM travelimage WHERE Content='{$selectedContent}' AND CountryCodeISO='{$selectedCountry}'";
}
else{
    $chooseSql = "SELECT Title,PATH,Description FROM travelimage WHERE CityCode='{$selectedCity}' AND CountryCodeISO='{$selectedCountry}' AND Content='{$selectedContent}'";
}
$chooseResult=mysqli_query($conn,$chooseSql);
$title = [];
$path = [];
$des = [];
while ($row = mysqli_fetch_assoc($chooseResult)) {
        array_push($title, $row['Title']);
        array_push($path, $row['PATH']);
        array_push($des, $row['Description']);
    }


$result = [];
array_push($result,$title);
array_push($result,$des);
array_push($result,$path);
echo json_encode($result);