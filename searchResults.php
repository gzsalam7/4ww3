<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/searchResults.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEY&callback=initMap">
</script>
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/searchResults.css">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ghazi Salam">
    <meta name="description" content="4WW3 Rating App">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML,CSS">
    <title>Parks & Rec</title>
</head>

<body class="parallax">
    <div class="flex-wrapper">
        <?php include 'php/header.php';?>
        <div class="container table-responsive content">
            <div class="col-8 offset-2">
                <h2>Search Results</h2>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Latitude - Longitude</th>
                            <th>Type</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!isset($_SESSION)) { 
                                session_start(); 
                            } 
                            echo $_SESSION['results'];
                        ?>
                    </tbody>
                </table>
                <br>
                <div class="col-8 offset-2" id="map"></div>
                <br> <br>
            </div>
        </div>
        <?php include 'php/footer.php';?>
    </div>

</body>

</html>