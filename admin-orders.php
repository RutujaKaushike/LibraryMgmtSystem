<?php
session_start();
include_once('assets/config.php');
include_once("assets/css.php");
include_once("header.php");
if (isset($_POST['order_id'])) {
    if ($_POST['type'] == 'return')
        $sql = "update orders set BookStatus='Returned' where orderID=" . $_POST['order_id'];
    else if ($_POST['type'] == 'approve')
        $sql = "update orders set BookStatus='Issued' where orderID=" . $_POST['order_id'];
    else if ($_POST['type'] == 'return')
        $sql = "update orders set BookStatus='Denied' where orderID=" . $_POST['order_id'];
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Online Library Management System | Manage Order</title>
    <style>
        .btn-sm {
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
        }
    </style>

</head>
<body>
<div class="col-md-2"></div>
<div class="container container-fluid col-md-8">
    <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="location.href = 'dashboard.php'">
        <i class="fas fa-long-arrow-alt-left fa-3px"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Active Issue/ Return Requets</p>
        <div>
            <table id="orders" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="th-sm">Student Name
                    </th>
                    <th class="th-sm">Book Name
                    </th>
                    <th class="th-sm">Status
                    </th>
                    <th style="width: 100px"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "select b.name as bookname, BookStatus,orderID, s.name as studentname  from orders, books b, student s where orders.isbn=b.isbn and s.student_id=orders.StudentID and BookStatus like '%requested'";
                $result = mysqli_query($conn, $query);
                $orders = "";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $orders = $orders . '<tr><td>' . $row['studentname'] . '</td><td>' . $row['bookname'] . '</td>
                                                 <td>' . $row['BookStatus'] . '</td>';
                        if ($row['BookStatus'] == 'Return Requested') {
                            $orders = $orders . '<td style="padding: 0" "><button type="button" class="btn-info btn-sm" onclick="returnbook(this)"><i class="fas fa-undo-alt fa-2x"></i></button>
                           <input name="order_id" value="' . $row['orderID'] . '" type="hidden">
                        </td>';
                        }
                        else if ($row['BookStatus'] == 'Issue Requested') {
                            $orders = $orders . '<td style="padding: 0" "><button type="button" class="btn-success btn-sm" onclick="approvebook(this)"><i class="fas fa-check fa-2x"></i></button>
                            <button type="button" class="btn-danger btn-sm" onclick="denybook(this)"><i class="fas fa-times fa-2x"></i></button>
                           <input name="order_id" value="' . $row['orderID'] . '" type="hidden">
                        </td>';
                        } else
                            $orders = $orders . '<td></td>';
                        $orders = $orders . '</tr>';
                    }
                }
                echo $orders;
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
        $('#orders').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    function returnbook(elem) {
        if (confirm('Are you sure you want to ACCEPT return of the book?')) {
            elem = $(elem).siblings("input").attr('value');
            jQuery.ajax({
                url: "admin-orders.php",
                data: {'order_id': elem, 'type': 'return'},
                type: "POST",
                success: function () {
                }, error: function () {

                }
            })
        }
    }
    function approvebook(elem) {
        if (confirm('Are you sure you want to APPROVE issuing the book?')) {
            elem = $(elem).siblings("input").attr('value');
            jQuery.ajax({
                url: "admin-orders.php",
                data: {'order_id': elem, 'type': 'approve'},
                type: "POST",
                success: function () {
                }, error: function () {

                }
            })
        }
    }
    function denybook(elem) {
        if (confirm('Are you sure you want to  DENY issuing the book?')) {
            elem = $(elem).siblings("input").attr('value');
            jQuery.ajax({
                url: "admin-orders.php",
                data: {'order_id': elem, 'type': 'deny'},
                type: "POST",
                success: function () {
                }, error: function () {

                }
            })
        }
    }
</script>
</body>
</html>
