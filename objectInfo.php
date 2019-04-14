<?php
include("assets/config.php");
$sql = "SELECT * FROM books INNER JOIN categorybook on categorybook.isbn=books.isbn where books.isbn=" . $_GET['p'] . ";";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-md-6 mb-4 view overlay zoom'>";
        echo "<img class='img-fluid' src='assets/img/bookcover/" . $row["image"] . "' height='320px' width='200px'/>";
        echo "</div>";
        echo "<div class='col-md-6 mb-4'>";
        echo "<p class='lead font-weight-bold'>" . $row['name'] . "</p>";
        echo "<p> ISBN: " . $row["isbn"] . "</p>";
        if ($row['no_of_copies'] > 0) {
            echo "<button class='btn btn-primary btn-md my-0 p' type='submit'> Add to cart <i class='fas fa-shopping-cart ml-1'></i>
                                    </button>";
        } else {
            echo "<button class='btn btn-primary btn-md my-0 p' type='submit' disabled> Add to cart <i class='fas fa-shopping-cart ml-1' ></i>
                                    </button>";
        }
        echo "</div>";
    }
} else {
    echo "0 results sadfghj";
}
?>
