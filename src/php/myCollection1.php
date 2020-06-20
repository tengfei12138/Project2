<?php
session_start();
if (isset($_SESSION["uid"])) {
    $userUid = $_SESSION["uid"];


    $conn=mysqli_connect("localhost","root","Csf2002010","travels");

    $findSearchSql = "SELECT ImageID FROM travelimagefavor WHERE UID={$userUid};";

    $searchResult = mysqli_query($conn, $findSearchSql);
    $imageID = [];
    while ($photoID = mysqli_fetch_assoc($searchResult)) {
        array_push($imageID, $photoID["ImageID"]);
    }
    $result = [];
    if(count($imageID)!=0){
        $in = implode(',', $imageID);
        $favorSql = "SELECT Title,Description,PATH,ImageID FROM travelimage WHERE ImageID IN ({$in})";
        $favorResult = mysqli_query($conn, $favorSql);
        $title = [];
        $description = [];
        $imageName = [];
        $imageID = [];

        while ($photoRow = mysqli_fetch_assoc($favorResult)) {
            array_push($title, $photoRow["Title"]);
            array_push($description, $photoRow["Description"]);
            array_push($imageName, $photoRow["PATH"]);
            array_push($imageID,$photoRow["ImageID"]);
        }

        array_push($result, $title);
        array_push($result, $description);
        array_push($result, $imageName);
        array_push($result,$imageID);
        echo json_encode($result);
    }
    else echo json_encode([[],[],[],[]]);
}