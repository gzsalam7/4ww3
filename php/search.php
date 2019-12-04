<?php
    session_start();
    require_once('connect.php');

    if ($_SESSION['loggedIn']) {
        $name = $_POST['name'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $parkType = $_POST['parkType'];
        $rating = $_POST['rating'];
        
        $sql_array = array()
        if(!empty($name)) {
            $sql_array[] = "name=$name";
        }

        if(!empty($latitude)) {
            $lat_range_1 = $latitude - 10;
            $lat_range_2 = $latitude + 10;
            $sql_array[] = "latitude BETWEEN $lat_range_1 AND $lat_range_2"; }
            
        if(empty($longitude)) {
            $long_range_1 = $longitude - 10;
            $long_range_2 = $longitude + 10;
            $sql_array[] = "longitude BETWEEN $long_range_1 AND $long_range_2"; }
    
        switch ($rating) {
            case 'One Stars':
                break;
            case 'Two Stars':
                $sql_array[] = 'rating BETWEEN 2 AND 5';
                break;
            case 'Three Stars':
                $sql_array[] = 'rating BETWEEN 3 AND 5';
                break;
            case 'Four Stars':
                $sql_array[] = 'rating BETWEEN 4 AND 5';
                break;
            case 'Five Stars':
                $sql_array[] = 'rating=5 ';
                break;
        }
        $query = "SELECT * FROM parks"
        if (!empty($sql_array))
            $query .= " WHERE ".implode(" AND " , $sql_array);
        
        echo $query;
    
?>