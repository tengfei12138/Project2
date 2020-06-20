<?php
$imageID = $_POST["imageID"];
session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];
    $conn=mysqli_connect("localhost","root","Csf2002010","travels");
    $findPhotoSql = "SELECT * FROM travelimage WHERE UID={$userUid} AND ImageID = {$imageID} ;";
    $searchResult = mysqli_query($conn, $findPhotoSql);
    $title = [];
    $description = [];
    $path = [];
    $imageID = [];
    $cityCode=[];
    $countryCodeISO=[];
    $content = [];
    while ($photoRow = mysqli_fetch_assoc($searchResult)) {
        array_push($title, $photoRow["Title"]);
        array_push($description, $photoRow["Description"]);
        array_push($path, $photoRow["PATH"]);
        array_push($imageID,$photoRow["ImageID"]);
        array_push($cityCode,$photoRow["CityCode"]);
        array_push($countryCodeISO,$photoRow["CountryCodeISO"]);
        array_push($content,$photoRow["content"]);
    }
    $result = [];
    array_push($result, $title);
    array_push($result, $description);
    array_push($result, $path);
    array_push($result,$imageID);
    array_push($result,$cityCode);
    array_push($result,$countryCodeISO);
    array_push($result,$content);

    echo json_encode($result);
}