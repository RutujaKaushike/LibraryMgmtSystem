<?php
include_once("assets/config.php");
session_start();

    $cnt=0;
    for ($i = 0; $i < count($_SESSION['cartArr']); $i++)
    {
        $sql = "INSERT INTO orders (isbn, StudentID, BookStatus) VALUES (" . $_SESSION['cartArr'][$i] . ", " . $_SESSION['login']['id'] . ", 'Issue Requested');";
        if ($conn->query($sql) == TRUE)
        {
            $cnt++;
        }
    }

    if($cnt==count($_SESSION['cartArr']))
    {
        unset($_SESSION['cartArr']);
        $message = "Records Inserted successfully!";
        echo "<script type='text/javascript'>
        alert('$message');
        window.location.href = '/';
        </script>";
    }
    else
    {
        $message = "Error!";
        echo "<script type='text/javascript'>
        alert('$message');
        window.location.href = '/';
        </script>";
    }




