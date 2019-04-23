<?php
include_once("header.php");
if ($_SESSION['login']['user_level'] != 'admin')
    header('Location: /');
if (isset($_POST["author"]) && isset($_POST["category"])) {
    include_once("assets/config.php");
    $isbn = $_POST['isbn'];
    $book = $_POST['book'];
    $copies = $_POST['quantity'];
    $file = $_FILES["file"]["name"];
    $target_dir = "assets/img/bookcover/";
    $filename = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
        $sql = 'insert into books (isbn, name, image, no_of_copies) values (' . $isbn . ', "' . $book . '", "' . $filename . '", ' . $copies . ');';
        if ($conn->query($sql) === FALSE) {
            $uploadOk = 0;
        } else {
            foreach ($_POST['author'] as $author_id) {
                $sql = 'insert into authorbook(isbn, author_id) values(' . $isbn . ',' . $author_id . ');';
                if ($conn->query($sql) === FALSE) {
                    $uploadOk = 0;
                }
            }
            foreach ($_POST['category'] as $category_id) {
                $sql = 'insert into categorybook(isbn, category_id) values(' . $isbn . ',' . $category_id . ');';
                if ($conn->query($sql) === FALSE) {
                    $uploadOk = 0;
                }
            }
        }
    } else {
        $uploadOk = 0;
    }
    if ($uploadOk) {
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The book has been successfully added
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
    <title>Online Library Management System | Add Book</title>
    <?php
    include_once("assets/css.php");
    ?>
    <style>
        ul {
            height: 300px !important;
        }
    </style>
</head>
<body>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <form class="text-center border border-light p-5" role="form" method="post" enctype="multipart/form-data">
        <p class="h4 mb-4">Add Book</p>
        <label for="isbn"></label>
        <input required type="number" name="isbn" class="form-control" placeholder="ISBN of Book" id="isbn">
        <label for="book"></label>
        <input required type="text" name="book" class="form-control" placeholder="Name of Book" id="book">
        <label for="quantity"></label>
        <input required type="text" name="quantity" class="form-control mb-3" id="quantity" placeholder="No. of copies">
        <div class="input-default-wrapper mt-3">
            <span class="input-group-text mb-3" id="input1">Upload Book Cover</span>
            <input required type="file" id="file" class="input-default-js" name="file">
            <label class="label-for-default-js rounded-right mb-3" for="file"><span
                        class="span-choose-file">Choose file</span>
                <div class="float-right span-browse">Browse</div>
            </label>
        </div>
        <p style="float: left; padding-left: 10px; font-weight: normal; color: #495057">Select Author(s)</p>
        <?php
        include_once("get_author.php");
        ?>
        <p style="float: left; padding-left: 10px; font-weight: normal; color: #495057">Select Category(s)</p>
        <?php
        include_once("get_category.php");
        ?>
        <div class="btn-group" style="float: left">
            <button style="float: left" class="btn btn-default" type="button"
                    onclick="location.href = 'manage-books.php'">Cancel
            </button>
        </div>
        <div class="btn-group" style="float: right;">
            <button style="clear: right ;float: right" class="btn btn-default" type="submit">Add Book</button>
        </div>
    </form>
</div>
<div class="col-md-3"></div>
<?php
include_once("assets/scripts.php")
?>
<script src="assets/js/jquery.prettydropdowns.js"></script>
<script>
    $(document).ready(function () {
        $('.pretty-dropdown-demo').prettyDropdown();
    });
</script>
<?php
include_once('footer.php');
?>
</body>
</html>
