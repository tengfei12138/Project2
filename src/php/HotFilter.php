<?php
header('Content-type:application/x-www-form-urlencoded;charset=utf-8');
$conn=mysqli_connect("localhost","root","Csf2002010","travels");
$id = $_POST["lineID"];
$kind = $_POST["lineClass"];
if($kind=="contentTag"){
    $findHotSql="SELECT Title,Description,PATH FROM travelimage WHERE (content = '{$id}');";
}else if($kind=="countryTag"){
    $findHotSql="SELECT Title,Description,PATH FROM travelimage WHERE (CountryCodeISO = '{$id}') ;";
}else if($kind=="cityTag"){
    $findHotSql="SELECT Title,Description,PATH FROM travelimage WHERE (CityCode = '{$id}') ;";
}
else{

}
$hotResult=mysqli_query($conn,$findHotSql);
$title=[];
$des=[];
$imageName=[];
while($photoRow =mysqli_fetch_assoc($hotResult))
{
    array_push($title,$photoRow["Title"]);
    array_push($des,$photoRow['Description']);
    array_push($imageName,$photoRow["PATH"]);
}
$result = [];
array_push($result,$title);
array_push($result,$des);
array_push($result,$imageName);
echo json_encode($result);