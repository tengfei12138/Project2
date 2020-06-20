<?php
session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];
    $conn=mysqli_connect("localhost","root","Csf2002010","travels");
    $photoSql = "SELECT Title,Description,PATH,ImageID FROM travelimage WHERE UID={$userUid}";
    $photoResult = mysqli_query($conn, $photoSql);
    $title = [];
    $description = [];
    $imageName = [];
    $imageID = [];
    while ($photoRow = mysqli_fetch_assoc($photoResult)) {
        array_push($title, $photoRow["Title"]);
        array_push($description, $photoRow["Description"]);
        array_push($imageName, $photoRow["PATH"]);
        array_push($imageID, $photoRow["ImageID"]);
    }
    $result = [];
    array_push($result, $title);
    array_push($result, $description);
    array_push($result, $imageName);
    array_push($result, $imageID);
    echo json_encode($result);
}