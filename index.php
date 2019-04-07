<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <style>
        .md-form {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="text-center">
    <a href="login.php" class="btn btn-default btn-rounded mb-1" data-toggle="modal" data-target="#LoginForm">Login</a>
</div>
<div class="text-center">
    <a href="register.php" class="btn btn-default btn-rounded mb-1" data-toggle="modal" data-target="#RegisterForm">Launch
        Modal Register Form</a>
</div>
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
?>
</body>
</html>