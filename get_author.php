<?php
include_once("header.php");
if ($_SESSION['login']['user_level'] != 'admin')
    header('Location: /');
?>
<head>
    <link rel="stylesheet" href="assets/css/prettydropdowns.css">
</head>
<div>
    <label>
        <select class="pretty-dropdown-demo" multiple title="Authors" name="author[]">
            <?php
            include_once("assets/config.php");
            $query = "select * from author order by name;";
            $result = mysqli_query($conn, $query);
            $author = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $author = $author . '<option value="' . $row['author_id'] . '">' . $row['name'] . '</option>';
                }
            }
            echo $author;
            ?>
        </select>
    </label>
</div>