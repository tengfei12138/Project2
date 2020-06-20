<?php
$imageID = $_POST["imageID"];
$connection =mysqli_connect("localhost","root","Csf2002010","travels");
session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];
}
$photoSql = "INSERT INTO travelimagefavor (ImageID,UID) VALUES ({$imageID},{$userUid});";
mysqli_query($connection, $photoSql);
