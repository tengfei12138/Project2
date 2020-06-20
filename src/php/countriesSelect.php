<?php
$connection =mysqli_connect("localhost","root","Csf2002010","travels");
$sql="SELECT CountryName,ISO FROM geocountries ORDER  BY CountryName";
$result=mysqli_query($connection,$sql);
$countryName=[];
$iso=[];
while ($row=mysqli_fetch_assoc($result)){
    array_push($countryName,$row['CountryName']);
    array_push($iso,$row['ISO']);
}
$counseq = [];
array_push($counseq,$countryName);
array_push($counseq,$iso);
echo json_encode($counseq);
