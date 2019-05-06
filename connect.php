<?php

$host = "localhost";
$db = "login";
$uname = "root";
$pass = "";

$connect = mysqli_connect($host, $uname, $pass, $db);

if(!$connect)
{
    echo "Gagal mengakses database : " . mysqli_connect_error();
}

?>