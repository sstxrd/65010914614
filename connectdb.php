<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "shop";

$conn = mysqli_connect($host,$user,$pwd)or die ("cannot connection");
mysqli_select_db($conn,$db)or die ("cannot select database");
mysqli_query($conn,"set names utf8");
?>