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

//Dynamic Display Function 
$operation = $_POST["operation"];
switch ($operation) {
    case 'todo':
        if ($_POST["date"]){
            $_SESSION["Count"]=sizeof($_SESSION["Todo"]);
            foreach ($_SESSION["Todo"] as $key => $value) {
                if ($_POST["date"]==$value["Date"]){
                    $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
                        <input class='form-check-input me-2' type='checkbox' onclick='check(".$value["ID"].")'/>
                        <input type='text' class='form-cotrol col-11' value='".$value["Text"]."'>
                        <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
                    </li>";
                }
            }
        }
        else{
            $_SESSION["Count"]=sizeof($_SESSION["Todo"]);
            foreach ($_SESSION["Todo"] as $key => $value) {
                $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
                    <input class='form-check-input me-2' type='checkbox' onclick='check(".$value["ID"].")'/>
                    <input type='text' class='form-cotrol col-11' value='".$value["Text"]."'>
                    <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
                </li>";
            }
        }
        $txt.="<p>Task Left: ".$_SESSION["Count"]."</p>";
        echo $txt;
        break;
    case 'completed':
        if ($_POST["date"]){
            foreach ($_SESSION["Completed"] as $key => $value) {
                if ($_POST["date"]==$value["Date"]) {
                    $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
                        <input class='form-check-input me-2' type='checkbox' onclick='uncheck(".$value["ID"].")' checked/>
                        <input type='text' class='form-cotrol col-11' value='".$value["Text"]."' disabled>
                        <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
                    </li>";
                }
            }
        }
        else{
            foreach ($_SESSION["Completed"] as $key => $value) {
                $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
                <input class='form-check-input me-2' type='checkbox' onclick='uncheck(".$value["ID"].")' checked/>
                <input type='text' class='form-cotrol col-11' value='".$value["Text"]."' disabled>
                <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
            </li>";
            }
        }
        $txt.="<p>Task Left: ".$_SESSION["Count"]."</p>";
        echo $txt;
        break;
    case 'clear':
        $sql = "DELETE FROM `mytodo` WHERE `mytodo`.`Type` = 'Completed'";
        $result = mysqli_query($conn, $sql);
        print_r($result);
        break;
    default:
        break;
}

?>