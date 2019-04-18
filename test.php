<?php
$galleries = array(1,2,5);
$ids = join("','",$galleries);
$sql = "SELECT * FROM category WHERE category_id IN ('$ids')";
echo $sql;