<?php
include ("header.php");
include ("footer.php");
include('assets/config.php');
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
$sql = "select * from student where isactive=0";
$result = $conn->query($sql);
$noBookIssue = mysqli_num_rows($result) + 10;
?>
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
                <div class="alert alert-info back-widget-set text-center">
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
                Listed Categories
            </div>
        </div>
    </div>
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<?php include('assets/scripts.php'); ?>
</body>
</html>
