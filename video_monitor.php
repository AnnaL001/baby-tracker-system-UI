<?php ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="#"><i class='fas fa-child' style='font-size:19px;'></i>BabyTracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="video_monitor.php">Video monitor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="homeGPS.php">Home GPS</a>
            </li>
            <li class="nav-item dropdown">
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

<div class="card" style="padding-bottom: 29px;">
    <div class="card-body">
        <div class="card bg-light text-dark" style="width:200px; height:50px;margin-left: 20px;">
            <div class="card-body"> <i class='fas fa-user' style='font-size:17px'></i>  John Smith </div>
        </div>
        <br/>
        <div class="card bg-light text-dark" style="width:730px;margin-left: 20px;">

        <!-- A vertical navbar -->
        <nav class="navbar bg-light" >

            <!-- Links -->
            <ul class="navbar-nav" style="float:top">
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class='fas fa-video' style='font-size:17px'></i>Stored recordings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class='fas fa-camera' style='font-size:17px'></i>Smart Camera </a>
                </li>
            </ul>
            <video style="margin-left:auto;" width="500" height="300" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </nav>

        </div>
</div>






</body>
</html>