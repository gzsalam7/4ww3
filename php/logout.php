<?php
    session_start();
    require_once('connect.php');

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        $_SESSION['loggedIn'] = false;
        header("location: ../index.php");
        exit;
    }

    
?>