<?php
    require_once('connect.php');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = ("INSERT INTO account (firstName, lastName, username, email, password) VALUES ('$firstName', '$lastName', '$username', '$email', '$password')");
    $response = '';
    if ($response=$dbc->query($query)) {
        $result = "review submit";
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Signup Successful');
          window.location.href='../index.php';
          </script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Signup Unsuccessful. Try again');
          window.location.href='../login_signup.php';
          </script>");
    }
?>