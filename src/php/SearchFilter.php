<?php
header('Content-type:application/x-www-form-urlencoded;charset=utf-8');
$connection =mysqli_connect("localhost","root","Csf2002010","travels");
@$isTitle=$_POST["byTitle"];
@$isDescription=$_POST["byDescription"];
@$title = $_POST["title"];
@$description = $_POST["description"];
if(!is_null($isTitle)){
    $findSearchSql="SELECT Title,Description,PATH FROM travelimage WHERE Title LIKE'%{$title}%';";
}
else if(!is_null($isDescription)){
    $findSearchSql="SELECT Title,Description,PATH FROM travelimage WHERE Description LIKE '%{$description}%';";
}

$searchResult=mysqli_query($connection,$findSearchSql);
$title=[];
$des=[];
$imageName=[];
while($photoRow =mysqli_fetch_assoc($searchResult))
{
    array_push($title,$photoRow["Title"]);
    array_push($des,$photoRow["Description"]);
    array_push($imageName,$photoRow["PATH"]);
}
$result = [];
array_push($result,$title);
array_push($result,$des);
array_push($result,$imageName);
echo json_encode($result);