<?php
$imageID = $_POST["imageID"];
session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];
}

$connection =mysqli_connect("localhost","root","Csf2002010","travels");

$photoSql = "DELETE FROM travelimagefavor WHERE ImageID = '{$imageID}' AND UID = '{$userUid}';";

mysqli_query($connection, $photoSql);
