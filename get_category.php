<?php
include_once("assets/css.php");
session_start();
?>
<link rel="stylesheet" href="assets/css/prettydropdowns.css">
<div>
    <label id="listofcategory">
        <select class="pretty-dropdown-demo" multiple title="Categories" name="category[]">
            <?php
            include_once("assets/config.php");
            $query = "select * from category order by name;";
            $result = mysqli_query($conn, $query);
            if ($_COOKIE['category'] > 0)
                $category = '<option value="-1">All</option>';
            else
                $category = '<option value="-1" selected>All</option>';
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($_COOKIE['category'] == $row['category_id'])
                        $category = $category . '<option value="' . $row['category_id'] . '" selected>' . ucfirst($row['name']) . '</option>';
                    else
                        $category = $category . '<option value="' . $row['category_id'] . '">' . ucfirst($row['name']) . '</option>';
                }
            }
            echo $category;
            ?>
        </select>
    </label>
</div>
<?php
include_once("assets/scripts.php")
?>
<script src="assets/js/jquery.prettydropdowns.js"></script>
<script>
    $(document).ready(function () {
        $('.pretty-dropdown-demo').prettyDropdown({});
    });
</script>