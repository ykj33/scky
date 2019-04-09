<?php
$servername = "localhost";
$username = "root";
$password = "dbsrjswnd";
$dbname = "customer";

 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO info(name, email, message)
    VALUES ('$_POST[name]', '$_POST[email]', '$_POST[message]')";
    // use exec() because no results are returned
    $conn->exec($sql);
    


$conn = null;
?>