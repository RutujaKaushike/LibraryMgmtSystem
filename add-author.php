<?php
include_once('assets/config.php');
if ($_POST['author'] !== null || $_POST['author'] != "") {
    $author = $_POST['author'];
    $sql = "INSERT INTO author(name) VALUES ('" . $author . "');";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The author has been successfully added
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
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Online Library Management System | Add author</title>
    <?php
    include_once("assets/css.php");
    ?>
</head>
<body>
<br>
<br>
<br>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <form class="text-center border border-light p-5" method="post" role="form">
        <p class="h4 mb-4">Add Author</p>
        <label for="author"></label><input type="text" name="author" class="form-control mb-4"
                                             id="author" placeholder="Author">

        <div class="btn-group" style="float: left">
            <button type="button" style="float: left" class="btn btn-default" onclick="location.href = 'manage-authors.php'">Cancel</button>
        </div>
        <div class="btn-group" style="float: right;">
            <button style="clear: right ;float: right" class="btn btn-default" type="submit">Add Author</button>
        </div>

        <br>
    </form>
</div>
<div class="col-md-3"></div>
<?php
include_once("assets/scripts.php");
?>
</body>
</html>
