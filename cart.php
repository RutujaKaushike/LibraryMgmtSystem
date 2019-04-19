<?php


include("assets/config.php");

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();

}

if(!isset($_SESSION['cartArr']))
{
    $_SESSION['cartArr']=array();
}


$id=$_GET['p'];

array_push($_SESSION['cartArr'],$id);

echo "<table><tr><th>No.</th><th>Name</th><th></th></tr>";

for($i=0; $i<count($_SESSION['cartArr']);$i++)
{
//    echo " ".$_SESSION['cartArr'][$i];
        $sql = "SELECT * FROM books where books.isbn=" . $_SESSION['cartArr'][$i] . ";";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<tr><td>".($i+1)."</td><td>".$row['name']."</td><td><button>Remove</button></td></tr>";

            }
        }



}


?>

<?php

//
//include("assets/config.php");
//
//if(session_id() == '' || !isset($_SESSION)) {
//    // session isn't started
//    session_start();
//
//}
//$_SESSION['cartArr']=array();
//$id=$_GET['p'];
//array_push($_SESSION['cartArr'],$id);
//
//echo "<table><tr><th>No.</th><th>Name</th><th><button>Remove</button></th></tr>";
//for($i=0; $i<count($_SESSION['cartArr']);$i++) {
//    $sql = "SELECT * FROM books where books.isbn=" . $_SESSION['cartArr'][$i] . ";";
//    $result = $conn->query($sql);
//
//    if ($result->num_rows > 0) {
//
//        while ($row = $result->fetch_assoc()) {
//
//            echo "<table><tr><td>".($i+1)."</td><td>".$row['name']."</td><td><button>Remove</button></td></tr>";
//
//        }
//    }
//}
//
//?>
