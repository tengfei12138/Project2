<?php
function refresh(){
    $con =mysqli_connect("localhost","root","Csf2002010","travels");
    $sql = "SELECT Title,Description,PATH FROM travelimage ORDER BY rand() limit 6;";
    $result = mysqli_query($con,$sql);
    $title=[];
    $des=[];
    $path=[];
    while ($res=mysqli_fetch_assoc($result)){
        array_push($title,$res['Title']);
        array_push($des,$res['Description']);
        array_push($path,$res['PATH']);
    }
    $conseq = [];
    array_push($conseq,$title);
    array_push($conseq,$des);
    array_push($conseq,$path);
    echo json_encode($conseq);
}
refresh();
