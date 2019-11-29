<?php
    DEFINE ("DB_HOST", 'localhost');
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', '');
    DEFINE ('DB_NAME', '4ww3');
    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect' .
    mysqli_connect_error());

?>