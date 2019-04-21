
<?php
header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "dnsrjswnd";
$password = "rjswnd9870!#";
$dbname = "dnsrjswnd";


 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    mysql_query("SET NAMES euckr"); 
    mysql_query("set session character_set_connection=utf8;

set session character_set_results=utf8;

set session character_set_client=utf8;");




    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO info2 (name, email, message)
    VALUES ('$_POST[user_name]', '$_POST[user_email]', '$_POST[user_message]')";
    // use exec() because no results are returned
    $conn->exec($sql);

header("Location: http://dnsrjswnd.dothome.co.kr/"); 
    


$conn = null;
?>