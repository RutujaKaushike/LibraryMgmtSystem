<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <?php
    include_once("assets/css.php");
    ?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a href="/">
            <img src="assets/img/logo.png" alt="logo" id="logo"></a>
        <div class="navbar-header">
            <h1>Online Library Service</h1>
        </div>
        <div class="navbar-nav nav-flex-icons" style="float: right">
            <?php
            if ($_SESSION['login']['user_level'] != 'admin') {
                echo '<a class="nav-link waves-effect" href="cart.php" style="text-decoration: none!important;">
                    <span class="badge red z-depth-1 mr-1" id="numberofitems"> S </span>
                    <i class="fas fa-shopping-cart fa-2x" style="padding-right: 10px;color: #212529"></i>
                </a>';
            }
            if (isset($_SESSION['login'])) {
                echo '<div class="btn-group">
            <button class="btn btn-default dropdown-toggle mr-4" type="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Hi ' . $_SESSION['login']['user'] . '</button>
  
<div class="dropdown-menu">
  <a class="dropdown-item" href="change-password.php">Change Password</a>';
                if ($_SESSION['login']['user_level'] != 'admin') {
                    echo '<a class="dropdown-item" href = "manage-order.php" > Order History </a >';
                }
                echo '<a href="logout.php" class="dropdown-item">Logout</a>
</div>';
            } else {
                include_once("register.php");
                include_once("login.php");
                echo '<div class="btn-group">
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#LoginForm">Login</a> &nbsp
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#RegisterForm">Register</a>
            </div>';
            }
            ?>
        </div>
    </div>
</nav>
<?php
include_once("assets/scripts.php");
?>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('#numberofitems').text(<?php echo count($_SESSION['cartArr'])?>);
    })
</script>
</body>
</html>
