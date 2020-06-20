<?php
$connection =mysqli_connect("localhost","root","Csf2002010","travels");
$country = $_POST["iso"];
$sql="SELECT GeoNameID,AsciiName From geocities WHERE CountryCodeISO='{$country}' ORDER BY AsciiName;";
$result = mysqli_query($connection,$sql);
$cityName=[];
$geo = [];
while ($row=mysqli_fetch_assoc($result)){
    array_push($cityName,$row['AsciiName']);
    array_push($geo,$row['GeoNameID']);
}
$counseq = [];
array_push($counseq,$cityName);
array_push($counseq,$geo);
echo json_encode($counseq);

