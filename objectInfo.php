<?php
include_once("assets/config.php");
$sql = "SELECT * FROM books where books.isbn=" . $_GET['p'] . ";";
$sqlauthor = "select * from author INNER JOIN authorbook on author.author_id=authorbook.author_id AND authorbook.isbn=" . $_GET['p'] . ";";
$sqlcat = "select * from category INNER JOIN categorybook on category.category_id=categorybook.category_id AND categorybook.isbn=" . $_GET['p'] . ";";
$result = $conn->query($sql);
$result1 = $conn->query($sqlauthor);
$result2 = $conn->query($sqlcat);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='view overlay zoom BookData' align='center' >";
        echo "<img class='img-fluid' src='assets/img/bookcover/" . $row["image"] . "' height='320px' width='200px'/>";
        echo "<div>";
        echo "</br>";
        echo "</div>";
        echo "</div>";
        echo "<div class='BookData' align='center'>";
        echo "<p class='lead font-weight-bold'>" . $row['name'] . "</p>";
        echo "<p> ISBN: " . $row["isbn"] . "</p>";
        echo "<p> Author(s): ";
        $author = "";
        $category = "";
        if ($result1->num_rows > 0) {
            while ($row1 = $result1->fetch_assoc()) {
                $author = $author . ucfirst($row1['name']) . ", ";
            }
        }
        echo substr($author, 0, strlen($author) - 2);
        echo("</p>");
        echo "<p> Category: ";
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $category = $category . ucfirst($row2['name']) . ", ";
            }
        }
        echo substr($category, 0, strlen($category) - 2);
        echo("</p>");
        if ($row['availablecopies'] > 0) {
            echo "<button class='btn btn-primary btn-md my-0' type='submit' onclick='myFunction1(" . $row["isbn"] . ")'> Add to cart <i class='fas fa-shopping-cart ml-1'></i></button></br>";
        } else {
            echo "<button class='btn btn-primary btn-md my-0' type='submit' disabled> Add to cart <i class='fas fa-shopping-cart ml-1' ></i></button></br>";
        }
        echo "</div>";
        echo "<div>";
        echo "</br>";
        echo "</div>";
    }
} else {
    echo "0 results sadfghj";
}
?>
<script>
    function myFunction1(objId) {
        jQuery.ajax({
            url: 'cartAdd.php?p=' + objId,
            type: 'GET',
            success: function (result) {
                $("#placeholder1").html(result)
            }
        });
        window.reload();
    }

</script>
