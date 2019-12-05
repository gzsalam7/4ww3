<?php
    session_start();
    require_once('connect.php');

    if ($_SESSION['loggedIn']) {
        $name = $_POST['name'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        if (isset($parkType)) {
            $parkType = $_POST['parkType'];
        } else {
            $parkType = '';
        }
        $rating = $_POST['rating'];
        
        $sql_array = array();
        if(!empty($name)) {
            $sql_array[] = "name=$name";
        }

        if(!empty($latitude)) {
            $lat_range_1 = $latitude - 10;
            $lat_range_2 = $latitude + 10;
            $sql_array[] = "latitude BETWEEN $lat_range_1 AND $lat_range_2"; }
            
        if(!empty($longitude)) {
            $long_range_1 = $longitude - 10;
            $long_range_2 = $longitude + 10;
            $sql_array[] = "longitude BETWEEN $long_range_1 AND $long_range_2"; }

        switch ($parkType) {
            case '':
                break;
            case 'dog':
                $sql_array[] = 'parkType = dog';
                break;
            case 'children\'s':
                $sql_array[] = 'parkType = children\'s';
                break;
            case 'exercise':
                $sql_array[] = 'parkType = exercise';
                break;
            case 'national':
                $sql_array[] = 'parkType = national';
                break;
            case 'trail':
                $sql_array[] = 'parkType = trail';
                break;
        }
    
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
        $table = '';
        $query = "SELECT * FROM park";
        if (!empty($sql_array)) {
            $query .= " WHERE ".implode(" AND " , $sql_array); }
        $response=$dbc->query($query);
        while ($row = mysqli_fetch_array($response)) {
            $name = $row["name"];

            $table .= '<tr>
                <td><a href="park.php?name=' . urlencode($row["name"]) . '">' . $row["name"] . '</a></td>
                <td>' . $row["latitude"] / $row["longitude"] . '</td>
                <td>' . $row["parkType"] . '</td>
                <td>' . 10 . '</td>
            </tr>';
        }
        $_SESSION['results'] = $table;
        echo ("<script LANGUAGE='JavaScript'>
          window.location.href='../searchResults.php';
          </script>");
    }

?>
