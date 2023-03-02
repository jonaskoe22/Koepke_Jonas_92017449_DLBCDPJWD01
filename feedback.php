<?php


$feedback = $_POST["feedback"];


$host = "localhost";
$dbname = "Burrito_db";
$username = "root";
$password = "";

mysqli_connect($host, $username, $password, $dbname);

$sql = "INSERT INTO feedbacklist (feedback)
        VALUES ('$feedback)";