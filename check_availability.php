<?php
require_once("assets/config.php");
if (!empty($_POST["emailid"])) {
    $email = $_POST["emailid"];
    $sql = "SELECT email FROM student WHERE email='" . $email . "';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "False";
    } else {
        echo "True";
    }
}

