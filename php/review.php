<?php
    require_once('connect.php');

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
        $result = "review submit";
    }else { $result = "error";}
?>