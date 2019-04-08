<?php
//session_start();
//error_reporting(0);
//include('includes/config.php');
//if(strlen($_SESSION['alogin'])==0)
//{
//    header('location:index.php');
//}
//else{
//
//    if(isset($_POST['create']))
//    {
//        $author=$_POST['author'];
//        $sql="INSERT INTO  tblauthors(AuthorName) VALUES(:author)";
//        $query = $dbh->prepare($sql);
//        $query->bindParam(':author',$author,PDO::PARAM_STR);
//        $query->execute();
//        $lastInsertId = $dbh->lastInsertId();
//        if($lastInsertId)
//        {
//            $_SESSION['msg']="Author Listed successfully";
//            header('location:manage-authors.php');
//        }
//        else
//        {
//            $_SESSION['error']="Something went wrong. Please try again";
//            header('location:manage-authors.php');
//        }
//
//    }
//    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Online Library Management System | Manage Category</title>
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
        table.table td, table.table th {
            padding-top:10px;
            padding-bottom: 1px;
        }
    </style>
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
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Manage Authors</p>
        <table id="authors" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Author ID
                </th>
                <th class="th-sm">Author Name
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $username = "root";
            $password = "root";
            $database = "library";
            $conn = new mysqli("localhost", $username, $password, $database);
            $query = "select * from author;";
            $result = mysqli_query($conn, $query);
            $author = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $author = $author . '<tr><td>' . $row['author_id'] . '</td><td><div class="md-form mb-1 mt-1">
  <input type="text" class="form-control" disabled>
  <label for="inputDisabledEx" class="disabled">'.$row['name'].'</label>
</div></td><td><button type="submit" class="btn-gray btn-sm"><i
                            class="fas fa-edit"></i></button> <button type="submit" class="btn-gray btn-sm"
                            onclick="return confirm(\'Are you sure you want to delete?\');"
                            ><i class="fa fa-trash"></i></button></td></tr>';
                }
            }
            echo $author;
            ?>
            </tbody>
        </table>
        <br>
    </div>
</div>
<div class="col-md-3"></div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/mdb.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/addons/datatables.js"    ></script>
<script>
    $(document).ready(function () {
        $('#authors').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>
