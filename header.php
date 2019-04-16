<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect">
                    <span class="badge red z-depth-1 mr-1"> 1 </span>
                    <i class="fas fa-shopping-cart"></i>
                    <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                </a>
            </li>
        <div class="btn-group">
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#LoginForm">Login</a> &nbsp
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#RegisterForm">Register</a>
        </div>
    </div>
</nav>
<?php
include ("register.php");
include ("login.php");
include ("assets/scripts.php");
?>
</body>
</html>

