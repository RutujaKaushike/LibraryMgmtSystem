<head>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
</head>
<?php

include_once("header.php");
if ($_SESSION['login']['user_level'] != 'admin')
    header('Location: /');
include_once("assets/config.php");
if (isset($_POST['_id'])) {
    $student_id = $_POST['_id'];
    $sql = 'UPDATE student SET isactive = IF(isactive = 1, 0, 1) WHERE student_id = "' . $student_id . '";';
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The student\'s account have been changed
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
    <title>Online Library Management System | Manage Student</title>
    <style>
        table.table td, table.table th {
            padding-top: 10px;
            padding-bottom: 1px;
        }

        .btn-sm {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .toggle-handle {
            height: 34px !important;
            clear: top;
        }

    </style>
</head>
<body>



<div class="col-md-2"></div>
<div class="container container-fluid col-md-8">
    <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="location.href = 'dashboard.php'">
        <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Manage Students</p>
        <table id="students" class="table table-striped table-bordered table-sm">
            <thead>
            <tr>
                <th class="th-sm">ID
                </th>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Email
                </th>
                <th class="th-sm">Contact
                </th>
                <th class="th-sm"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query = "select * from student where student_id>999";
            if ($_GET['q'] == "inactive") {
                $query = $query . " and isactive=0;";
            }
            $result = mysqli_query($conn, $query);
            $category = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $toggle = 'data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="sm"
data-on="Active" data-off="Inactive  ."></td>';
                    $category = $category .
                        '<tr style="font-weight: bolder">
                            <td>' . $row['student_id'] . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['contact'] . '</td>';
                    if ($row['isactive'] == 1) {
                        $active = '<td style="width: 100px!important;"><input type="checkbox" checked ' . $toggle;
                    } else {
                        $active = '<td style="width: 100px!important;"><input type="checkbox" ' . $toggle;
                    }
                    $category = $category . $active . '</tr>';
                }
            }
            echo $category;
            ?>
            </tbody>
        </table>

    </div>
</div>
<div class="col-md-2"></div>
<?php
include_once("assets/scripts.php");
include_once("footer.php");
?>
<script>
    $(document).ready(function () {
        $('#students').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script src="assets/js/bootstrap_toggle.js"></script>
<script>
    $(function () {
        $('input').change(function () {
            const this_elem = $(this);
            const elem = this_elem.closest("tr");
            const id = elem.children("td").html();
            jQuery.ajax({
                type: "POST",
                url: "",
                data: "_id=" + id
            }).done(function (resultData) {
                $("body").html(resultData);
            });
        });
    });
</script>
</body>
</html>
