<?php
include_once("header.php");
if ($_SESSION['login']['user_level'] != 'student')
    header('Location: /');
include_once('assets/config.php');
include_once("assets/css.php");
if (isset($_POST['order_id'])) {
    $sql = "update orders set BookStatus='Return Requested' where orderID=" . $_POST['order_id'];
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Online Library Management System | Manage Order</title>
    <style>
        .btn-danger {
            margin-left: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="col-md-2"></div>
<div class="container container-fluid col-md-8">
    <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="location.href = '/'">
        <i class="fas fa-long-arrow-alt-left fa-3px"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Your Order History</p>
        <div>
            <table id="orders" class="table table-sm table-striped table-bordered">
                <thead>
                <tr>
                    <th class="th-sm">Book Name
                    </th>
                    <th class="th-sm">Status
                    </th>
                    <th style="width: 100px"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "select name, BookStatus,orderID  from orders, books where orders.StudentID='" . $_SESSION['login']['id'] . "' and orders.isbn=books.isbn";
                $result = mysqli_query($conn, $query);
                $orders = "";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $orders = $orders . '<tr><td>' . $row['name'] . '</td>
                                                 <td>' . $row['BookStatus'] . '</td>';
                        if ($row['BookStatus'] == 'Issued') {
                            $orders = $orders . '<td style="padding: 0" "><button type="button" class="btn-danger btn-sm" onclick="returnbook(this)">Return</button>
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
        if (confirm('Are you sure you want to return the book?')) {
            elem = $(elem).siblings("input").attr('value');
            jQuery.ajax({
                url: "manage-order.php",
                data: 'order_id=' + elem,
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
