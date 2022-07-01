<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "buisness";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);

if($conn -> connect_error){
    die("Error: ".$conn->connect_error);
}

session_start();


?>