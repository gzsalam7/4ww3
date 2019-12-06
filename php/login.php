<?php
    if (!isset($_SESSION)) {
      session_start();
    }
    require_once('connect.php');

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        header("location: index.php");
        exit;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = ("SELECT * FROM account WHERE email='$email' AND password='$password'");
    $response = '';
    if ($response=$dbc->query($query)) {
        if($response->num_rows == 1) {
            
          //grab logged in name and id
          
          $_SESSION['email'] = $email;
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