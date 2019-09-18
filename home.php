<?php   ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="#"><i class='fas fa-child' style='font-size:19px;'></i>BabyTracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="video_monitor.php">Video monitor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="homeGPS.php">Home GPS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="house_alarm.php">House alarm</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown" style="margin-left: 480px">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    More
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>

</nav>
<br/>

        <div class="jumbotron" style="width: 600px;margin-right: 80px;margin-left: 50px;">
            <h1 class="display-4">Hello,  John </h1>
            <p class="lead">
            Welcome to the Baby Tracker System.<br>
            The aim of the system is to track the movements of the baby, <br>
            and sound alerts when they are in a dangerous room.
            </p>
        </div>

</body>
</html>
