<?php
session_start();
foreach ($_SESSION['complete_todo'] as $key => $value) {
    if($key == $_GET['id']){
        array_splice($_SESSION['complete_todo'],$key,1);
    }
}

header("Location:index.php");die();
?>