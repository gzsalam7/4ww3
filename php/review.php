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
        
        $query = ("INSERT INTO reviews (name, latitude, longitude, parkType, activities, facilities, review, rating) VALUES ('$name', '$latitude', '$longitude', '$parkType', '$activities', '$facilities', '$review', '$rating')");
        $response = '';
        if ($response=$dbc->query($query)) {
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