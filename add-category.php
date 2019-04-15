<?php
include('assets/config.php');
if ($_POST['category'] !== null || $_POST['category'] != "") {
    $category = $_POST['category'];
    $sql = "INSERT INTO category(name) VALUES ('" . $category . "');";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The category has been successfully added
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $conn->error . ' 
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
    <title>Online Library Management System | Add Category</title>
    <?php
    include("assets/css.php");
    ?>
</head>
<body>
<br>
<br>
<br>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <form class="text-center border border-light p-5" method="post" role="form">
        <p class="h4 mb-4">Add Category</p>
        <label for="category"></label><input type="text" name="category" class="form-control mb-4"
                                           id="category" placeholder="Category">

        <div class="btn-group" style="float: left">
            <button type="button" style="float: left" class="btn btn-default" onclick="location.href = 'manage-categories.php'">Cancel</button>
        </div>
        <div class="btn-group" style="float: right;">
            <button style="clear: right ;float: right" class="btn btn-default" type="submit">Add Category</button>
        </div>

        <br>
    </form>
</div>
<div class="col-md-3"></div>
<?php
include("assets/scripts.php");
?>
</body>
</html>
