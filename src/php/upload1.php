<?php
$imgFile = $_FILES["file"];
$title = $_POST["title"];
$description = $_POST["description"];
$content = $_POST["content"];
$country = $_POST["country"];
$city = $_POST["city"];


session_start();
if (isset($_SESSION['uid'])) {
    $userUid=$_SESSION['uid'];
    $connection =mysqli_connect("localhost","root","Csf2002010","travels");

    $sql = "SHOW TABLE STATUS FROM travel WHERE Name = 'travelimage';";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $autoIncrement = $row["Auto_increment"];
    }
    $name =intval($autoIncrement).substr($imgFile["name"],strripos($imgFile["name"],"."));

    if(move_uploaded_file($imgFile["tmp_name"],"../../img/travel-images/normal/medium/".$name)){

        $changeSql = "INSERT INTO travelimage (Title,Description,content,CityCode,CountryCodeISO,PATH,UID) VALUES ('{$title}','{$description}','{$content}',{$city},'{$country}','{$name}',{$userUid});";
        echo $changeSql;
        if (mysqli_query($connection, $changeSql)){
            echo "
        <script>alert('上传成功！将跳转至我的照片页面');window.location.href='../html/myphoto.php';</script>";
        }else{
            echo "
                <script>window.location.href='../html/myphoto.php';</script>";
        }
    }
    else{
        echo "
<script>window.location.href='../html/myphoto.php';</script>";
    }

}

