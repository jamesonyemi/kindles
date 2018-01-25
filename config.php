<?php
session_start();
$servername = "ec2-54-235-220-220.compute-1.amazonaws.com";
$username = "tqcldbjguvavxn";
$password = "d044dc5d51b0c73f3558f79494e3a3070793b1a30479ed2b85da0aa49659bf7f";
$dbname = "kindle";

try {
    $conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

?>