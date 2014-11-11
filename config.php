<?php


$hostname = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "db"; 

$connect = new mysqli($hostname, $username, $password, $dbname);
if(mysqli_connect_errno($connect)) {
    echo "Er is iets misgelopen";
}

// website settings //
$sitename = "Q-upload";
$title = "Upload hier gratis uw bestanden";
?>
