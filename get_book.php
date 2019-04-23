<?php
include_once("assets/config.php");
if ($_COOKIE['category'] > 0) {
    $isbns = "(";
    $sql = "select isbn from categorybook where category_id=" . $_COOKIE['category'];
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $isbns = $isbns . $row['isbn'] . ',';
    }
    $sql = "select * from books where isbn in " . $isbns . '0)';
} else
    $sql = "SELECT * FROM books";
$result = $conn->query($sql);
$ans = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ans = $ans . "<tr><td><img alt='" . $row["isbn"] . "' data-toggle='modal' data-target='#objectInfo' id='" . $row["isbn"] . " ' src='assets/img/bookcover/" . $row["image"] . "' height='320px' width='200px' onclick='myFunction(" . $row["isbn"] . ")' /><span style='display: none'>" . $row["name"] . "</span></td></tr>";
    }
}
echo $ans;
