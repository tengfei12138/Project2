<?php
$imageID = $_POST["imageID"];
session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];
    $conn=mysqli_connect("localhost","root","Csf2002010","travels");
    $photoSql = "SELECT PATH FROM travelimage WHERE UID={$userUid} AND ImageID = {$imageID}";
    $photoResult = mysqli_query($conn, $photoSql);
    while ($photoRow = mysqli_fetch_assoc($photoResult)){
        $path = $photoRow["PATH"];
    }
    unlink("../../img/travel-images/normal/medium/".$path);
    $findPhotoSql = "DELETE FROM travelimage WHERE UID={$userUid} AND ImageID = {$imageID} ;";
    $searchResult = mysqli_query($conn, $findPhotoSql);
    $findPhotoSql = "DELETE FROM travelimagefavor WHERE UID={$userUid} AND ImageID = {$imageID} ;";
    $searchResult = mysqli_query($conn, $findPhotoSql);
}