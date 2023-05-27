<?php
$server="localhost";
$user="root";
$bd="dailyblog";
$pswd="";

$con=new mysqli($server,$user,$pswd,$bd);

if($con->connect_error)
die("connection failed".$con->connect_error);


?>