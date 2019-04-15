<?php
$servername = "localhost";
$username = "dnsrjswnd";
$password = "rjswnd9870!#";
$dbname = "dnsrjswnd";

 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO info (name, email, message)
    VALUES ('$_POST[user_name]', '$_POST[user_email]', '$_POST[user_message]')";
    // use exec() because no results are returned
    $conn->exec($sql);

header("Location: http://dnsrjswnd.dothome.co.kr/"); 
    


$conn = null;
?>