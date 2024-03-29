<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/search.css">
<script src="js/search.js"></script>
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
            <div class="col-8 offset-2 form-group">
                <h1>Search for a Park</h1>
                <form name="search" method="POST" action="php/search.php" >
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="latitude">Latitude</label>
                    <input type="number" step="any" name="latitude" placeholder="100.0" class="form-control">
                    <label for="longitude">Longitdue</label>
                    <input type="number" step="any" name="longitude" placeholder="-100.0" class="form-control"> <br>
                    <button type="button" onclick="getCoordinates()" class="btn btn-primary">Use Location</button> <br>
                    <fieldset class="form-check">
                        <legend>What type of park do you want to go to?</legend>
                        <input type="radio" name="parkType" value="Dog">Dog <br>
                        <input type="radio" name="parkType" value="Chlidrens">Children's <br>
                        <input type="radio" name="parkType" value="Exercise">Excercise <br>
                        <input type="radio" name="parkType" value="Trails">Trails <br>
                        <input type="radio" name="parkType" value="National">National
                    </fieldset>

                    <label for="rating">Maximum rating?</label>
                    <select name="rating" class="form-control">
            <option value="1">One Stars</option>
            <option value="2">Two Stars</option>
            <option value="3">Three Stars</option>
            <option value="4">Four Stars</option>
            <option value="5">Five Stars</option>
          </select>
                    <br>
                    <input type="submit" name="Submit" class="btn btn-primary">
                    <br> <br>


                </form>
            </div>
        </div>
        <?php include 'php/footer.php';?>
    </div>
</body>

</html>