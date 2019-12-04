<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/park.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEY&callback=initMap">
</script>
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/park.css">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ghazi Salam">
    <meta name="description" content="4WW3 Rating App">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML,CSS">
    <title>Parks & Rec</title>
</head>

<body>
    <div class="flex-wrapper">
        <?php include 'php/header.php';?>
        <div class="content">
            <h1 class="offset-2">Green Hills Park</h1>
            <div class="row">
                <img src="assets/park.jpg" alt="Picture of Park" class="col-sm-4 offset-2">
                <!-- <img src="assets/parkLoc.PNG" alt="Park Location on Map pic" class="col-sm-4"> -->
                <div class="col-sm-4" id="map"></div>
            </div>
            <div class="row">
                <div class="col-4 offset-2">
                    <h3>Details</h3>
                    <p>Latitude: 114.4</p>
                    <p>Longitude: 114.7</p>
                    <p>Trail Park</p>
                    <p>Activities: Trails, Cycling, Public Classes</p>
                    <p>Facilities: Washrooms, Bike Rental</p>
                    <p>Rating: 3.5/5</p>
                </div>
                <div class="col-4">
                    <h3>Reviews</h3>
                    <div>
                        <h4>Clint East</h4>
                        <p>Had a mexican standoff here. 10/10 would get shot here again</p>
                        <strong>4/5</strong>
                    </div>
                    <div>
                        <h4>Karen Manager</h4>
                        <p>The grass is never maintained but good for kids
                        </p>
                        <strong>3/5</strong>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'php/footer.php';?>
    </div>
</body>

</html>