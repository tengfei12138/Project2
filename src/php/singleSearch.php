<?php
header('Content-type:text/html;charset=utf-8');
$connection =mysqli_connect("localhost","root","Csf2002010","travels");
$content = $_POST['input'];
$sql="SELECT Title,Description,PATH FROM travelimage WHERE Title LIKE '%{$content}%';";
$res=mysqli_query($connection,$sql);
$title=[];
$des=[];
$path=[];
while ($result=mysqli_fetch_assoc($res)){
    array_push($title,$result['Title']);
    array_push($des,$result['Description']);
    array_push($path,$result['PATH']);
}
$conseq = [];
array_push($conseq,$title);
array_push($conseq,$des);
array_push($conseq,$path);
echo json_encode($conseq);
