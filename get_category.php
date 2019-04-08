<script>$(function() {
        $('.selectpicker').selectpicker();
    });</script>
<div>
    <label>
        <select class="selectpicker" data-live-search="true" multiple title="Categories" name="category[]">
            <?php
            include ("assets/config.php");
            $query = "select * from category;";
            $result = mysqli_query($conn, $query);
            $category = "";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $category = $category . '<option data-tokens="' . $row['category_id'] . '">' . ucfirst($row['name']) . '</option>';
                }
            }
            echo $category;
            ?>
        </select>
    </label>
</div>
