<?php
session_start();
$_SESSION = array();
setcookie('login_user', '', time() - 7000000, '/');
session_destroy();
header("location:/");



