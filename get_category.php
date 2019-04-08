<div>
    <label>
        <select class="selectpicker" data-live-search="true" multiple title="categories" name="category[]">
            <?php
            $username = "root";
            $password = "root";
            $database = "library";
            $conn = new mysqli("localhost", $username, $password, $database);
            $query = "select * from category;";
            $result = mysqli_query($conn, $query);
            $category = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $category = $category . '<option data-tokens="' . $row['category_id'] . '">' . $row['name'] . '</option>';
                }
            }
            echo $category;
            ?>
        </select>
    </label>
</div>