<?php
session_start();
// All SESSIONS 
$_SESSION["Todo"]=array();
$_SESSION["Completed"]=array();
$_SESSION["Count"]=0;


$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Main Config Data 
$sql_todo = "SELECT * FROM mytodo WHERE `Type`='TODO'";
$result = mysqli_query($conn, $sql_todo);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      array_push($_SESSION["Todo"],$row);
    }
} 

$sql_complete = "SELECT * FROM mytodo WHERE `Type`='Completed'";
$result = mysqli_query($conn, $sql_complete);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      array_push($_SESSION["Completed"],$row);
    }
} 
?>