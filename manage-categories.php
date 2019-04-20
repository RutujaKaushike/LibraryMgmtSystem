<?php
include_once('assets/config.php');
include_once("assets/css.php");
include_once("header.php");
if ($_SESSION['login']['user_level'] != 'admin')
    header('Location: /');
if (strlen($_POST['_id']) > 0) {
    $name = $_POST['category_name'];
    $sql = "update category set name='".$name."' where category_id='" . $_POST['_id'] . "';";
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>The category has been successfully updated
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
        <i class="fas fa-long-arrow-alt-left fa-lg"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Manage Categories</p>
        <button style="float: right" class="btn btn-default btn-md" type="button"
                onclick="location.href = 'add-category.php'">Add Category
        </button>
        <div>
            <table id="categories" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="th-sm">Category ID
                    </th>
                    <th class="th-sm">Category Name
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("assets/config.php");
                $query = "select * from category;";
                $result = mysqli_query($conn, $query);
                $category = "";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category = $category . '<tr><td>' . $row['category_id'] . '</td><td><div class="md-form mb-1 mt-1">
  <input type="text" class="form-control" disabled>
  <label for="inputDisabledEx" class="disabled">' . ucfirst($row['name']) . '</label>
</div></td>
<td style="padding-top: 10px"><div style="float: left">
<button type="button" class="btn-gray btn-sm" onclick="update(' . $row['category_id'] . ', \'' . ucfirst($row['name']) . '\')"><i
                            class="fas fa-edit"></i></button>          
</div>';
                    }
                }
                echo $category;
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-3"></div>
<?php
include_once("assets/scripts.php");
?>
<form role="form" method="post">
    <div class="modal fade" id="UpdateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Update Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <span>Category ID</span>
                        <input type="text" id="category_id" class="form-control validate" name="category_id" disabled>
                        <label for="category_id"></label>
                    </div>
                    <div class="md-form mb-1">
                        <span>Category Name</span>
                        <input type="text" id="category_name" class="form-control validate" name="category_name">
                        <label for="category_name"></label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-default" type="submit">Update Category</button>
                    </div>
                    <input type="hidden" id="_id" class="form-control validate" name="_id">
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        $('#categories').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    function update(id, name) {
        $('#UpdateForm').modal('show');
        $('#category_name').val(name);
        $('#category_id').val(id);
        $('#_id').val(id);
    }
</script>
<?php
include_once("footer.php");
?>
</body>
</html>
