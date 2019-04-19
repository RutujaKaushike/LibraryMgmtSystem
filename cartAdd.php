<?php
include("assets/config.php");

if(session_id() == '' || !isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['cartArr']))
{
    $_SESSION['cartArr']=array();
}


$id=$_GET['p'];

if(in_array($id,$_SESSION['cartArr']))
{
    $message = "This book is already present in the cart!";

    echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
    array_push($_SESSION['cartArr'],$id);
    sort($_SESSION['cartArr']);

    $message1 = "Successfully added book with ISBN ".$id;

    echo "<script type='text/javascript'>alert('$message1');</script>";
}



