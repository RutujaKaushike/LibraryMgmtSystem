<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Online Library Management System | Add Author</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<!------MENU SECTION START-->
<!--    --><?php //include('includes/header.php');?>
<!-- MENU SECTION END-->
<!-- Default form subscription -->
<br>
<br>
<br>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <form class="text-center border border-light p-5" role="form" method="post">
        <p class="h4 mb-4">Add Book</p>
        <label for="book"></label><input type="text" name="book" class="form-control" placeholder="Book">
        <label for="quantity"></label><input type="text" name="quantity" class="form-control mb-3"
                                             placeholder="No. of copies">
        <p style="float: left; padding-left: 10px; font-weight: normal; color: #495057">Select Author(s)</p>
        <?php
        include("get_author.php");
        ?>
        <p style="float: left; padding-left: 10px; font-weight: normal; color: #495057">Select Category(s)</p>
        <?php
        include("get_category.php");
        ?>
        <div class="btn-group" style="float: left">
            <button style="float: left" class="btn btn-default" type="submit">Cancel</button>
        </div>
        <div class="btn-group" style="float: right;">
            <button style="clear: right ;float: right" class="btn btn-default" type="submit">Add Book</button>
        </div>

        <br>
    </form>
</div>
<div class="col-md-3"></div>

<!--    --><?php //include('includes/footer.php');?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>
