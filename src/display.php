<?php
include_once "config.php";
    $txt="";
    // print_r($_POST["date"]);
    if ($_POST["date"]){
        foreach ($_SESSION["Todo"] as $key => $value) {
            if ($_POST["date"]==$value["Date"]){
                $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
                    <input class='form-check-input me-2' type='checkbox' onclick='check(".$value["ID"].")'/>
                    <input type='text' class='form-cotrol col-11' value='".$value["Text"]."'>
                    <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
                </li>";
            }
        }
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
        foreach ($_SESSION["Todo"] as $key => $value) {
        $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
            <input class='form-check-input me-2' type='checkbox' onclick='check(".$value["ID"].")'/>
            <input type='text' class='form-cotrol col-11' value='".$value["Text"]."'>
            <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
        </li>";
        }
        foreach ($_SESSION["Completed"] as $key => $value) {
            $txt .= "<li class='list-group-item d-flex align-items-center border-0 mb-2 rounded' style='background-color: #f4f6f7;'>
            <input class='form-check-input me-2' type='checkbox' onclick='uncheck(".$value["ID"].")' checked/>
            <input type='text' class='form-cotrol col-11' value='".$value["Text"]."' disabled>
            <button class='bg-danger mx-2' onclick='deletes(".$value["ID"].")'>X</button>
        </li>";
        }
    }
    echo $txt;
?>