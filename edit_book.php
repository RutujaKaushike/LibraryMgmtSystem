<?php
include_once("header.php");
if ($_SESSION['login']['user_level'] != 'admin')
    header('Location: /');
$get_isbn = $_GET['_id'];
include_once("assets/config.php");
$sql = "select * from books where isbn='" . $get_isbn . "';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$get_name = $row['name'];
$get_image = $row['image'];
$get_copies = $row['no_of_copies'];
$sql = "select category_id from categorybook where isbn='" . $get_isbn . "';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $categorylist[] = $row['category_id'];
}
$sql = "select author_id from authorbook where isbn='" . $get_isbn . "';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $authorlist[] = $row['author_id'];
}
if (isset($_POST["author"]) && isset($_POST["category"])) {
    $isbn = $_POST["isbn"];
    $book = $_POST['book'];
    $copies = $_POST['quantity'];
    $file_name = $_POST['file_name'];
    $file = $_FILES["file"]["name"];
    $target_dir = "assets/img/bookcover/";
    $filename = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($filename == '')
        $filename = $file_name;
    $uploadOk = 1;
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    $sql = "delete from authorbook where isbn='" . $get_isbn . "';";
    if ($conn->query($sql) === TRUE) {
        $sql = "delete from categorybook where isbn='" . $get_isbn . "';";
        if ($conn->query($sql) === TRUE) {
            $sql = "delete from books where isbn='" . $get_isbn . "';";
            if ($conn->query($sql) === TRUE)
                $sql = 'insert into books (isbn, name, image, no_of_copies) values (' . $get_isbn . ', "' . $book . '", "' . $filename . '", ' . $copies . ');';
            if ($conn->query($sql) === FALSE) {
                $uploadOk = 0;
            } else {
                foreach ($_POST['author'] as $author_id) {
                    $sql = 'insert into authorbook(isbn, author_id) values(' . $get_isbn . ',' . $author_id . ');';
                    if ($conn->query($sql) === FALSE) {
                        $uploadOk = 0;
                    }
                }
                foreach ($_POST['category'] as $category_id) {
                    $sql = 'insert into categorybook(isbn, category_id) values(' . $get_isbn . ',' . $category_id . ');';
                    if ($conn->query($sql) === FALSE) {
                        $uploadOk = 0;
                    }
                }
            }
        } else {
            $uploadOk = 0;
        }
    }
    if ($uploadOk) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The book has been successfully updated
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
    <title>Online Library Management System | Update Book</title>
    <?php
    include_once("assets/css.php");
    ?>
    <style>
        ul {
            height: 300px !important;
        }
    </style>
    <link rel="stylesheet" href="assets/css/prettydropdowns.css">
</head>
<body>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <form class="text-center border border-light p-5" role="form" method="post" enctype="multipart/form-data">
        <p class="h4 mb-4">Update Book</p>
        <label for="isbn"></label>
        <input type="number" name="isbn" class="form-control" value="<?php echo $get_isbn ?>" id="isbn"
               disabled>
        <label for="book"></label>
        <input type="text" name="book" class="form-control" value="<?php echo $get_name ?>" id="book">
        <label for="quantity"></label>
        <input type="text" name="quantity" class="form-control mb-3" id="quantity"
               value="<?php echo $get_copies ?>">
        <div class="input-default-wrapper mt-3">
            <span class="input-group-text mb-3" id="input1">Upload Book Cover</span>
            <input type="file" id="file" class="input-default-js" name="file">
            <label class="label-for-default-js rounded-right mb-3" for="file"><span
                        class="span-choose-file"><?php echo $get_image ?></span>
                <span class="float-right span-browse">Browse</span>
            </label>
        </div>
        <label for="file_name"></label><input hidden id="file_name" value="<?php echo $get_image ?>" name="file_name">
        <p style="float: left; padding-left: 10px; font-weight: normal; color: #495057">Select Category(s)</p>
        <div>
            <label>
                <select class="pretty-dropdown-demo" multiple title="Categories" name="category[]">
                    <?php
                    $query = "select * from category order by name;";
                    $result = mysqli_query($conn, $query);
                    $category = "";
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if (in_array($row['category_id'], $categorylist))
                                $category = $category . '<option selected value="' . $row['category_id'] . '">' . ucfirst($row['name']) . '</option>';
                            else
                                $category = $category . '<option value="' . $row['category_id'] . '">' . ucfirst($row['name']) . '</option>';
                        }
                    }
                    echo $category;
                    ?>
                </select>
            </label>
        </div>
        <p style="float: left; padding-left: 10px; font-weight: normal; color: #495057">Select Author(s)</p>
        <div>
            <label>
                <select class="pretty-dropdown-demo" multiple title="Authors" name="author[]">
                    <?php
                    $query = "select * from author order by name;";
                    $result = mysqli_query($conn, $query);
                    $category = "";
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if (in_array($row['author_id'], $authorlist))
                                $category = $category . '<option selected value="' . $row['author_id'] . '">' . ucfirst($row['name']) . '</option>';
                            else
                                $category = $category . '<option value="' . $row['author_id'] . '">' . ucfirst($row['name']) . '</option>';
                        }
                    }
                    echo $category;
                    ?>
                </select>
            </label>
        </div>
        <div class="btn-group" style="float: left">
            <button style="float: left" class="btn btn-default" type="button"
                    onclick="location.href = 'manage-books.php'">Cancel
            </button>
        </div>
        <div class="btn-group" style="float: right;">
            <button style="clear: right ;float: right" class="btn btn-default" type="submit">Update Book</button>
        </div>
    </form>
</div>
<div class="col-md-3"></div>
<?php
include_once('footer.php');
include_once("assets/scripts.php");
?>
<script src="assets/js/jquery.prettydropdowns.js"></script>
<script>
    $(document).ready(function () {
        $('.pretty-dropdown-demo').prettyDropdown();
    });
</script>
</body>
</html>
