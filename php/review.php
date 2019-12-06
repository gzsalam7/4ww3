<?php
    session_start();
    require_once('connect.php');

    if ($_SESSION['loggedIn']) {
        $name = $_POST['name'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $parkType = $_POST['parkType'];
        $activities = $_POST['activities'];
        $facilities = $_POST['facilities'];
        $review = $_POST['review'];
        $rating = $_POST['rating'];
        $email = $_SESSION['email'];

        $checkExistsQuery = ("SELECT name FROM park WHERE name='$name'");
        echo $checkExistsQuery;
        if ($checkExists=$dbc->query($checkExistsQuery)) {
          if(!($checkExists->num_rows == 0)) {
            $reviewQuery = ("INSERT INTO reviews (email, name, review, rating) VALUES ('$email', $name', '$review', '$rating')");
            echo $reviewQuery;
          } else {
            $query = ("INSERT INTO park (name, latitude, longitude, parkType, activities, facilities) VALUES ('$name', '$latitude', '$longitude', '$parkType', '$activities', '$facilities')");
            $reviewQuery = ("INSERT INTO reviews (email, name, review, rating) VALUES ('$email', '$name', '$review', '$rating')");
            echo $query;
            echo $reviewQuery;
          }
        }
        
        $response = '';
        if ($response=$dbc->query($reviewQuery)) {
            if (isset($query)) {
              if ($response=$dbc->query($query)) {
                $result = "Park Added";
              }
            }
            $result = "Review Submitted";
            echo ("<script LANGUAGE='JavaScript'>
          window.alert('Thank you for your review');
          window.location.href='../index.php';
          </script>");
        }else { $result = "error";}
    } else {
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('You must be logged in to submit a review');
          window.location.href='../review.php';
          </script>");
    }
    
?>