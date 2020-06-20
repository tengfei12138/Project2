<?php
$con =mysqli_connect("localhost","root","Csf2002010","travels");
$sql = "SELECT ImageID FROM travelimagefavor;";
$result = mysqli_query($con,$sql);
$img = [];
while ($res = mysqli_fetch_assoc($result)){
    if (!isset($img[$res['ImageID']])){
        $img[$res['ImageID']]=1;
    }
    else {
        $img[$res['ImageID']]++;
    }
}
arsort($img);
$select = array_slice(array_keys($img),0,6);
$title = [];
$des = [];
$path = [];
$imageID = [];
$in =implode(',',$select);
$photosql = "SELECT ImageID,Title,Description,PATH FROM travelimage WHERE ImageID IN ({$in});";
$photores = mysqli_query($con,$photosql);
while ($photorow = mysqli_fetch_assoc($photores)){
    array_push($title,$photorow["Title"]);
    array_push($des,$photorow["Description"]);
    array_push($path,$photorow["PATH"]);
    array_push($imageID,$photorow["ImageID"]);
}
$conseq = [];
array_push($conseq,$title);
array_push($conseq,$des);
array_push($conseq,$path);
array_push($conseq,$imageID);
echo json_encode($conseq);