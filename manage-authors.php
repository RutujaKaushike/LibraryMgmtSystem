<?php
include_once('assets/config.php');
include_once("assets/css.php");
include_once("header.php");
if ($_SESSION['login']['user_level'] != 'admin')
    header('Location: /');

if (strlen($_POST['_id']) > 0) {
    $name = $_POST['author_name'];
    $sql = "update author set name='" . $name . "' where author_id='" . $_POST['_id'] . "';";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The author has been successfully updated
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
    <title>Online Library Management System | Manage Author</title>
    <style>
        table.table td, table.table th {
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .md-form .form-control {
            padding-bottom: 2px !important;
        }

        form {
            margin-block-end: 0;
        }
    </style>
</head>
<body>



<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="location.href = 'dashboard.php'">
        <i class="fas fa-long-arrow-alt-left fa-3px"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Manage Authors</p>
        <button style="float: right" class="btn btn-default btn-md" type="button"
                onclick="location.href = 'add-author.php'">Add Author
        </button>
        <div>
            <table id="authors" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">
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
                include_once("assets/config.php");
                $query = "select * from author;";
                $result = mysqli_query($conn, $query);
                $author = "";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $author = $author . '<tr><td>' . $row['author_id'] . '</td><td><div class="md-form mb-1 mt-1">
  <input type="text" class="form-control" disabled>
  <label for="inputDisabledEx" class="disabled">' . ucfirst($row['name']) . '</label>
</div></td>
<td style="padding-top: 10px"><div style="float: left">
<button type="button" class="btn-gray btn-sm" onclick="update(' . $row['author_id'] . ', \'' . ucfirst($row['name']) . '\')"><i
                            class="fas fa-edit"></i></button>          
</div>';
                    }
                }
                echo $author;
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-3"></div>
<form role="form" method="post">
    <div class="modal fade" id="UpdateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Update Author</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <span>Author ID</span>
                        <input type="text" id="author_id" class="form-control validate" name="author_id" disabled>
                        <label for="author_id"></label>
                    </div>
                    <div class="md-form mb-1">
                        <span>Author Name</span>
                        <input type="text" id="author_name" class="form-control validate" name="author_name">
                        <label for="author_name"></label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-default" type="submit">Update Author</button>
                    </div>
                    <input type="hidden" id="_id" class="form-control validate" name="_id">
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include_once("assets/scripts.php");
?>
<script>
    $(document).ready(function () {
        $('#authors').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    function update(id, name) {
        $('#UpdateForm').modal('show');
        $('#author_name').val(name);
        $('#author_id').val(id);
        $('#_id').val(id);
    }
</script>
<?php
include_once("footer.php");
?>
</body>
</html>
