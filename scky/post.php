<?php
$servername = "localhost";
$username = "dnsrjswnd";
$password = "rjswnd9870!#";
$dbname = "dnsrjswnd";
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    mysql_query("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO info (name, email, message)
    VALUES ('$_POST[user_name]', '$_POST[user_email]', '$_POST[user_message]')";
    // use exec() because no results are returned
    $conn->exec($sql);

header("Location: http://dnsrjswnd.dothome.co.kr/"); 
    


$conn = null;
?>