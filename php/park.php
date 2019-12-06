<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once('connect.php');

    $name = $_GET['name'];
    $query = ("SELECT * FROM park WHERE name='$name'");
    $reviewQuery = ("SELECT * FROM reviews WHERE name='$name'");
    $response=$dbc->query($query);
    if ($response->num_rows == 1) {
        // output data of each row
        $output = $response->fetch_assoc();
        $details =  '<p>Latitude: ' . $output['latitude'] . '</p>
        <p>Longitude: ' . $output['longitude'] . '</p>
        <p>Type: ' . $output['parkType'] . '</p>
        <p>Activities: ' . $output['activities'] . '</p>
        <p>Facilities: ' . $output['facilities'] . '</p>
        <p>' . $output['name'] . '</p>';

        $_SESSION['parkName'] = $output['name'];
        $_SESSION['parkDetails'] = $details;

        $reviewResponse=$dbc->query($reviewQuery);
        $reviews = '';
        while ($row = mysqli_fetch_array($reviewResponse)) {

            $reviews .= '<div><h2>' . $row['email'] . '</h2>
                        <p>' . $row['review'] . '</p>
                        <strong>' . $row['rating'] . ' / 5 </strong></div>';
        }
        $_SESSION['reviews'] = $reviews;


        echo ("<script LANGUAGE='JavaScript'>
        window.location.href='../park.php';
        </script>");
    } else {
        echo "0 results";
    }
    
?>
