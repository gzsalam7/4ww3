<?php
    session_start();
    require_once('connect.php');

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        header("location: index.php");
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = ("SELECT * FROM account WHERE username='$username' AND password='$password'");
    $response = '';
    if ($response=$dbc->query($query)) {
        if($response->num_rows == 1) {
            
          //grab logged in name and id
          
          $_SESSION['username'] = $username;
          $_SESSION['loggedIn'] = true;
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Successful');
          window.location.href='../index.php';
          </script>");

        } else {
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Unsuccesful');
          window.location.href='../login_signup.php';
          </script>");

        }
    }

    
?>