<?php 
session_start();
ob_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
foreach ($_SESSION["complete_todo"] as $key => $value) {
// print_r($_SESSION["complete_todo"]);
    if(($key == $_POST['unchk'])&&($key>=0)){
        array_push($_SESSION['todo'],$value);
        array_splice($_SESSION['complete_todo'],$key,1);

    }
}

header("Location:index.php");die();
?>