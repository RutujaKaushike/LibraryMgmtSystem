<?php
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'library');
// Establish database connection.
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
