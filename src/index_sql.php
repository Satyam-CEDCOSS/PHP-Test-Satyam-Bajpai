<?php
session_start();
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$text = $_POST["text"];
$date = $_POST["date"];
if ($date){
    $sql = "INSERT INTO mytodo (`Text`, `Type`, `Date`) VALUES ('$text','TODO','$date')";
    // print_r($sql);
    $result = mysqli_query($conn, $sql);
    print_r($result);
}
else{
    $date = date("Y-m-d");
    $sql = "INSERT INTO mytodo (`Text`, `Type`, `Date`) VALUES ('$text','TODO','$date')";
    // print_r($sql);
    $result = mysqli_query($conn, $sql);
    print_r($result);
}

?>