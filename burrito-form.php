<?php

$burritobowl = $_POST["burritobowl"];
$protein = $_POST["protein"];
$toppings = $_POST["toppings"];
$sauce = $_POST["sauce"];

$fname = $_POST["fnmae"];
$lname = $_POST["lnmae"];
$streetandnumber = $_POST["streetandnumber"];
$city = $_POST["city"];
$postalcode = $_POST["postalcode"];
$cardtype = $_POST["cardtype"];
$ccnumber = $_POST["cc-number"];
$ccexperation = $_POST["ccexperation"];

$host = "localhost";
$dbname = "Burrito_db";
$username = "root";
$password = "";

mysqli_connect($host, $username, $password, $dbname);

$sql = "INSERT INTO burrito (burritobowl, protein, toppings, sauce, fname, lname, streetandnumber, city, postalcode, cardtype, ccnumber, ccexperation
        VALUES ('$burritobowl', '$protein', '$toppings', '$sauce', '$fname', '$lname', '$streetandnumber', '$city', '$postalcode', '$cardtype', '$ccnumber', '$ccexperation')";