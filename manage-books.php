<?php
include_once('assets/config.php');
include_once("assets/css.php");
include_once("header.php");
if (strlen($_POST['_id']) > 0) {
    $sql = "delete from authorbook where isbn='" . $_POST['_id'] . "';";
    if ($conn->query($sql) === TRUE) {
        $sql = "delete from categorybook where isbn='" . $_POST['_id'] . "';";
        if ($conn->query($sql) === TRUE) {
            $sql = "delete from books where isbn='" . $_POST['_id'] . "';";
            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>The book has been successfully deleted
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
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $conn->error . ' 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
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
    <title>Online Library Management System | Manage Books</title>

</head>
<body>
<div class="col-md-2"></div>
<div class="container container-fluid col-md-8">
    <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="location.href = 'dashboard.php'">
        <i class="fas fa-long-arrow-alt-left fa-3px"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Manage Books</p>
        <button style="float: right" class="btn btn-default btn-md" type="button"
                onclick="location.href = 'add-book.php'">Add Book
        </button>
        <div>
            <table id="books" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="th-sm">ISBN
                    </th>
                    <th class="th-sm">Book Name
                    </th>
                    <th class="th-sm">Image
                    </th>
                    <th class="th-sm">No of Copies
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("assets/config.php");
                $query = "select * from books;";
                $result = mysqli_query($conn, $query);
                $book = "";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $book = $book . '<tr><td>' . $row['isbn'] . '</td>
<td>' . $row['name'] . '</label></div></td>
<td><img src="assets/img/bookcover/' . $row['image'] . '" height="100px" width="60px" alt="' . $row['image'] . '"></label></div></td>
<td>' . $row['no_of_copies'] . '</label></div></td>
<td style="padding-top: 10px; width: 100px;"><div style="float: left">
<form action="edit_book.php" method="get">
<button type="submit" class="btn-gray btn-sm"><i
                            class="fas fa-edit"></i></button>
                            <input type="hidden" value=' . $row['isbn'] . ' name="_id"/>
                            <input type="hidden" value="book" name="type"/>
</form></div>
<div style="float: left;">
<form action="" method="post">
<button type="submit" class="btn-gray btn-sm"
                            onclick="return confirm(\'Are you sure you want to delete?\');"
                            ><i class="fa fa-trash"></i></button>
                             <input type="hidden" value=' . $row['isbn'] . ' name="_id"/>
</form></div></td></tr>';
                    }
                }
                echo $book;
                ?>
                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>
<div class="col-md-2"></div>
<?php
include_once("assets/scripts.php");
include_once("footer.php");
?>
<script>
    $(document).ready(function () {
        $('#books').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>
