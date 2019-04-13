<?php
include('assets/config.php');
include("assets/css.php");
if (strlen($_POST['_id']) > 0) {
    $sql = "delete from author where author_id='" . $_POST['_id'] . "';";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>The author has been successfully deleted
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
    <title>Online Library Management System | Manage Category</title>
    <style>
        table.table td, table.table th {
            padding-top: 10px;
            padding-bottom: 1px;
        }
    </style>
</head>
<body>
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
           include ("assets/config.php");
            $query = "select * from author;";
            $result = mysqli_query($conn, $query);
            $author = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $author = $author . '<tr><td>' . $row['author_id'] . '</td><td><div class="md-form mb-1 mt-1">
  <input type="text" class="form-control" disabled>
  <label for="inputDisabledEx" class="disabled">' . $row['name'] . '</label>
</div></td>
<td><div style="float: left">
<form action="edit.php" method="post">
<button type="submit" class="btn-gray btn-sm"><i
                            class="fas fa-edit"></i></button>
                            <input type="hidden" value=' . $row['author_id'] . ' name="_id"/>
                            <input type="hidden" value="author" name="type"/>
</form></div>
<div style="float: left">
<form action="" method="post">
<button type="submit" class="btn-gray btn-sm"
                            onclick="return confirm(\'Are you sure you want to delete?\');"
                            ><i class="fa fa-trash"></i></button>
                             <input type="hidden" value=' . $row['author_id'] . ' name="_id"/>
</form></div></td></tr>';
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
<?php
include ("assets/scripts.php");
?>
<script>
    $(document).ready(function () {
        $('#authors').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>
