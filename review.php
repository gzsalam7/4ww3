<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/review.css">
<script src="js/review.js"></script>
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
        <div class="container content">
            <div class="col-8 offset-2">
                <h1>Submit a Review</h1>
                <p>Parks & Rec needs user submitted reviews as its lifeblood. If you have found a new park and wish to submit its details then please enter the name, location, activities and review of the park below. If the park is a new park then we will
                    review the submission and add it to our databse and you will get credit. If the park exists then your review will be added to the parks page and will help inform other users if the park is a great place to go or not!
                </p>
                <form name="review" onsubmit="return validateReview()" method="POST" action="php/review.php">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control"> <br>

                    <label for="latitude">Latitude</label>
                    <input type="text" name="latitude" class="form-control"> <br>
                    <label for="longitude">Longitude</label>
                    <input type="text" name="longitude" class="form-control"> <br>
                    <button type="button" onclick="getCoordinates()" class="btn btn-primary" style="display: inline-block;">Use Location</button>
                    <br> <br>
                    <fieldset class="form-check">
                        <legend>What type of park is it?</legend>
                        <input type="radio" name="parkType" value="Dog">Dog</label>
                        <input type="radio" name="parkType" value="Chlidrens">Children's <br>
                        <input type="radio" name="parkType" value="Exercise">Excercise <br>
                        <input type="radio" name="parkType" value="Trails">Trails <br>
                        <input type="radio" name="parkType" value="National">National <br>
                    </fieldset>
                    <label for="activities">Activities</label>
                    <input type="text" name="activities" class="form-control"> <br>
                    <label for="facilities">Facilities</label>
                    <input type="text" name="facilities" class="form-control"> <br>
                    <label for="review">Review</label>
                    <input type="text" name="review" class="form-control"> <br>
                    <label for="rating">Rating (1-5)</label><input type="number" name="rating" min="1" max="5" class="form-control"> <br>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Image">
                            <label class="custom-file-label" for="Image">Choose file</label>
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Send">
                    <br>
                    <br>
                </form>
            </div>
        </div>
        <?php include 'php/footer.php';?>
    </div>


</body>

</html>