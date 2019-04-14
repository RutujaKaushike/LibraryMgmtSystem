<?php
include("assets/css.php");
include("assets/config.php");
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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <style>
        table.table td, table.table th {
            padding-top: 10px;
            padding-bottom: 1px;
        }

        .toggle-handle {
            padding: 0;
            background-color: rgb(222, 226, 230) !important;
        }

        .btn {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .toggle-off {
            border-top-left-radius: 5px !important;
            border-bottom-left-radius: 5px !important;
        }

        .toggle-on {
            border-top-right-radius: 5px !important;
            border-bottom-right-radius: 5px !important;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<div class="col-md-2"></div>
<div class="container container-fluid col-md-8">
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Manage Students</p>
        <table id="students" class="table table-striped table-bordered">
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
                    $toggle = ' data-toggle="toggle" data-on="Active" data-off="Disabled" data-onstyle="success" data-offstyle="danger" data-size="small"></td>';
                    $category = $category .
                        '<tr style="font-weight: bolder">
                            <td>' . $row['student_id'] . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['contact'] . '</td>';
                    if ($row['isactive'] == 1) {
                        $active = '<td style="width: 100px"><input type="checkbox" checked ' . $toggle;
                    } else {
                        $active = '<td style="width: 100px"><input type="checkbox" ' . $toggle;
                    }
                    $category = $category . $active . '</tr>';
                }
            }
            echo $category;
            ?>
            </tbody>
        </table>
        <br>
    </div>
</div>
<div class="col-md-2"></div>
<?php
include("assets/scripts.php");
?>
<script>
    $(document).ready(function () {
        $('#students').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
