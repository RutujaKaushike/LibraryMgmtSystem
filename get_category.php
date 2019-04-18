<div>
    <label>
        <select class="pretty-dropdown-demo" multiple title="Categories" name="category[]">
            <?php
            include_once ("assets/config.php");
            $query = "select * from category order by name;";
            $result = mysqli_query($conn, $query);
            $category = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $category = $category . '<option value="' . $row['category_id'] . '">' . ucfirst($row['name']) . '</option>';
                }
            }
            echo $category;
            ?>
        </select>
    </label>
</div>
