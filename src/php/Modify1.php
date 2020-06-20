<?php
$imageID = $_POST["imageID"];
$title = addslashes($_POST["title"]);
$description = addslashes($_POST["description"]);
$content = $_POST["content"];
$countryCodeISO = $_POST["country"];
$cityCode = $_POST["city"];

session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];
    $conn=mysqli_connect("localhost","root","Csf2002010","travels");
    $Sql = "UPDATE travelimage SET Title='{$title}',Description='{$description}',content='{$content}',CityCode={$cityCode},CountryCodeISO='{$countryCodeISO}' WHERE ImageID = {$imageID} AND UID={$userUid};";
    $Result = mysqli_query($conn, $Sql);

}