<html lang="en">
<body>
<?php
include_once("header.php");
include_once("assets/config.php");
include_once("assets/css.php");
include_once("assets/scripts.php");
if(count($_SESSION['cartArr'])<=0)
{
    $message = "No items present!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = '/'; 
    </script>";
}
sort($_SESSION['cartArr']);
?>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="location.href = '/'">
        <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
    <div class="text-center border border-light p-5">
        <p class="h4 mb-4">Your Cart</p>
        <table id="students" class="table table-striped table-bordered table-sm">
            <thead>
            <tr>
                <th class="th-sm">No.
                </th>
                <th class="th-sm">Name
                </th>
                <th class="th-sm"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < count($_SESSION['cartArr']); $i++) {
                $sql = "SELECT * FROM books where books.isbn=" . $_SESSION['cartArr'][$i] . ";";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . ($i + 1) . "</td><td>" . $row['name'] . "</td><td>"
                            . '<button type="button" class="btn btn-danger btn-sm" onclick="myFunction3(' . $row["isbn"] . ')"><i class="fas fa-times"></i> Remove</button>' . "</td></tr>";
                    }
                }
            }
            ?>
            </tbody>
        </table>
        <?php
        if (!$_SESSION['login']['user_level']) {
            include_once("login.php");
                echo '<a href="#" class="btn btn-success" data-toggle="modal" data-target="#LoginForm">Checkout</a>';
        }
        else
        {
            echo '<button class="btn btn-success" onclick="myFunction4()">Checkout</button>';
        }
        ?>
    </div>
</div>
<div class="col-md-3"></div>
<?php
include_once("footer.php");
?>
</body>
</html>
<script>
    function myFunction3(objId) {
        jQuery.ajax({
            url: 'cartRemove.php?p=' + objId,
            type: 'GET',
            success: function (result) {
                $("body").html(result)
            }
        });
    }
    function myFunction4() {
        jQuery.ajax({
            url: 'cartCheckout.php',
            type: 'GET',
            success: function (result) {
                $("body").html(result)
            }
        });
    }
</script>
