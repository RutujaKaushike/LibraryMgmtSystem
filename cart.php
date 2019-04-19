
<html>

<body>


<?php

session_start();

include("assets/config.php");
include("assets/css.php");
include("assets/scripts.php");
include_once ("header.php");


echo "<table class='table table-striped'><thead><tr><th>No.</th><th>Name</th><th></th></tr></thead>";

for($i=0; $i<count($_SESSION['cartArr']);$i++)
{

    $sql = "SELECT * FROM books where books.isbn=" . $_SESSION['cartArr'][$i] . ";";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo "<tr><td>".($i+1)."</td><td>".$row['name']."</td><td><button onclick='myFunction3(" . $row["isbn"] . ")'>Remove</button></td></tr>";

        }
    }
}
?>


</body>
</html>

<script>
    function myFunction3(objId)
    {
        jQuery.ajax({
            url: 'cartRemove.php?p=' + objId,
            type: 'GET',
            success: function (result) {
                $("#placeholder2").html(result)
            }
        });
    }
</script>