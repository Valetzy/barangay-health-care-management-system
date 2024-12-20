<?php

$sname = "localhost";
$username = "root";
$password = "";
$dbname = "veterans_hcpms";

$conn = mysqli_connect($sname,$username, $password, $dbname);
if (!$conn){
    die("Connection Failed!: " .mysqli_connect_error());
}

