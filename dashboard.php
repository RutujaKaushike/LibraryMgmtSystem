<?php
include_once("header.php");
include_once('assets/config.php');
$sql = "select * from author";
$result = $conn->query($sql);
$noBooks = mysqli_num_rows($result);
$sql = "select * from author";
$result = $conn->query($sql);
$noAuthor = mysqli_num_rows($result);
$sql = "select * from category";
$result = $conn->query($sql);
$noCategory = mysqli_num_rows($result);
$sql = "select * from student";
$result = $conn->query($sql);
$noStudents = mysqli_num_rows($result) - 1;
$sql = "select * from student where isactive=0";
$result = $conn->query($sql);
$noAccnt = mysqli_num_rows($result);
$query = "select b.name as bookname, BookStatus,orderID, s.name as studentname  from orders, books b, student s where orders.isbn=b.isbn and s.student_id=orders.StudentID and BookStatus like '%requested'";
$result = $conn->query($query);
$noBookIssue = mysqli_num_rows($result);
?>
<html lang="en">
<head>
    <style>
       .alert{
           cursor: pointer;
       }
    </style>
</head>
<body>
<br>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-success back-widget-set text-center"
                     onclick="location.href='manage-books.php'">
                    <i class="fa fa-book fa-8x"></i>
                    <h3><?php echo $noBooks; ?></h3>
                    Books Listed
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-info back-widget-set text-center"
                     onclick="location.href='admin-orders.php'">
                <i class="fa fa-bars fa-8x"></i>
                    <h3><?php echo $noBookIssue; ?></h3>
                    Book Issue/ Return Requests
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-warning back-widget-set text-center"
                     onclick="location.href='get_student.php?q=inactive'">
                    <i class=" fa fa-recycle fa-8x
                "></i>
                    <h3><?php echo $noAccnt; ?></h3>
                    Account Activate Requests
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-danger back-widget-set text-center"
                     onclick="location.href='get_student.php'">
                    <i class="fa fa-users fa-8x"></i>
                    <h3><?php echo $noStudents; ?></h3>
                    Registered Users
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="alert alert-success back-widget-set text-center"
                     onclick="location.href='manage-authors.php'">
                    <i class="fa fa-user fa-8x"></i>
                    <h3><?php echo $noAuthor; ?></h3>
                    Authors Listed
                </div>
            </div>
            <div class="col-md-4 col-sm-4 rscol-xs-6">
                <div class="alert alert-info back-widget-set text-center"
                     onclick="location.href='manage-categories.php'">
                    <i class="far fa-newspaper fa-8x"></i>
                    <h3><?php echo $noCategory; ?></h3>
                    Categories Listed
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<?php include_once('assets/scripts.php');
include_once("footer.php");
?>
</body>
</html>
