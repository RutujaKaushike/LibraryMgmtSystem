<div>
            <label>
        <select class="selectpicker" data-live-search="true" multiple title="Authors" name="author[]">
            <?php
            $username = "root";
            $password = "root";
            $database = "library";
            $conn = new mysqli("localhost", $username, $password, $database);
            $query = "select * from author;";
            $result = mysqli_query($conn, $query);
            $author = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $author = $author . '<option data-tokens="' . $row['author_id'] . '">' . $row['name'] . '</option>';
                }
            }
            echo $author;
            ?>
        </select>
    </label>
</div>