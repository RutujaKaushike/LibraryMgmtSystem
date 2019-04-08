<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System</title>
    <?php
    include ("assets/css.php");
    ?>
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <img src="assets/img/logo.png" alt="logo" id="logo">
        <div class="navbar-header">
            <h1>Online Library Service</h1>
        </div>
        <div class="btn-group">
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#LoginForm">Login</a> &nbsp
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#RegisterForm">Register</a>
        </div>
    </div>
</nav>
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/carousel1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel3.jpeg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pg-blue justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item">
                <a class="page-link">Next</a>
            </li>
        </ul>
    </nav>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <?php
    include ("register.php");
    include ("login.php");
    include ("assets/scripts.php");
    ?>
</body>
</html>