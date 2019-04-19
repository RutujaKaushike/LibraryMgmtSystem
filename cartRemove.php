<?php

include("assets/config.php");
include("assets/css.php");
include("assets/scripts.php");
include_once ("header.php");


if(session_id() == '' || !isset($_SESSION)) {
    session_start();
}

$id=$_GET['p'];

if(in_array($id,$_SESSION['cartArr']))
{
        $q= array_search($id,$_SESSION['cartArr']);

        unset($_SESSION['cartArr'][$q]);

        $message = "Book with ISBN ".$id." has been removed from cart";

        echo "<script type='text/javascript'>alert('$message');</script>";

}

