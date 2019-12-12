<?php session_start();
        if (!isset($_SESSION['loggedIn'])) {
            $_SESSION['loggedIn'] = false;
        } ?>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Parks & Rec</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="topNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="review.php">Review</a>
        </li>
        <li class="nav-item">
            <?php if ($_SESSION['loggedIn']) { ?>
                <a class="nav-link" href="php/logout.php">Logout</a>
            <?php } else { ?>
                <a class="nav-link" href="login_signup.php">Login/Signup</a>
            <?php } ?>
        </li>
        </ul>
    </div>
</nav>