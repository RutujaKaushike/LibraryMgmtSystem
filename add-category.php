<?php
include('includes/config.php');
if ($_POST['category'] !== null) {
    $category = $_POST['category'];
    $sql = "INSERT INTO category(name) VALUES ('" . $category . "');";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your category has been successfully added
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$conn->error.' 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Online Library Management System | Add Category</title>
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
    <form class="text-center border border-light p-5" method="post" role="form">
        <p class="h4 mb-4">Add Category</p>
        <label for="category"></label><input type="text" name="category" class="form-control mb-4"
                                             placeholder="Category">

        <!-- Sign in button -->
        <div class="btn-group" style="float: left">
            <button style="float: left" class="btn btn-default" onclick="goBack()">Cancel</button>
        </div>
        <div class="btn-group" style="float: right;">
            <button style="clear: right ;float: right" class="btn btn-default" type="submit">Add Category</button>
        </div>

        <br>
    </form>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
<div class="col-md-3"></div>
<!-- Default form subscription -->
<!-- CONTENT-WRAPPER SECTION END-->
<!--    --><?php //include('includes/footer.php');?>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="assets/js/bootstrap.js"></script>
<!-- CUSTOM SCRIPTS  -->
<script src="assets/js/custom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>
