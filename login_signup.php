<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/login_signup.css">
<script src="js/login_signup.js"></script>
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
                <h1>Login</h1>
                <form name="login" onsubmit="return validateLogin()" method="POST" action="php/login.php">
                    <label for="username">Username</label><input type="text" class="form-control" name="username">
                    <label for="password">Password</label><input type="password" class="form-control" name="password"> <br>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
            <div class="col-8 offset-2">
                <h1>Signup</h1>
                <form name="signup" onsubmit="return validateSignup()" method="POST" action="php/signup.php">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"> <br>
                    <input type="submit" class="btn btn-primary" value="Signup"> <br> <br>
                </form>
            </div>
        </div>
        <?php include 'php/footer.php';?>
    </div>
</body>

</html>