<div class="modal fade" id="objectInfo" >


    <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">


            <?php

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "library";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM books INNER JOIN categorybook on categorybook.isbn=books.isbn where books.isbn=" .  $_POST['p'];

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {


                $i = 0;

                while ($row = $result->fetch_assoc()) {

                    echo "<div class='col-md-6 mb-4 view overlay zoom'>";

                    echo "<img class='img-fluid'" . $row["image"] . "' src='assets/img/bookcover/" . $row["image"] . "' height='320px' width='200px'/>";

                    echo "</div>";

                    echo "<div class='col-md-6 mb-4'>";

                    echo "<p class='lead font-weight-bold'>" . $row['name'] . "</p>";

                    echo "<p> ISBN: " . $row["isbn"] . "</p>";

                    if ($row['no_of_copies'] > 0) {
                        echo "<button class='btn btn-primary btn-md my-0 p' type='submit'> Add to cart <i class='fas fa-shopping-cart ml-1'></i>
                                    </button>";
                    } else {
                        echo "<button class='btn btn-primary btn-md my-0 p' type='submit' disabled> Add to cart <i class='fas fa-shopping-cart ml-1' ></i>
                                    </button>";
                    }


                    echo "</div>";
                }

            } else {
                echo "0 results sadfghj";
            }


            $conn->close();

            ?>

        </div>
    </div>
</div>

<!--<html>-->
<!--<head>-->

<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">-->

<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">-->

<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">-->
<!---->

<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>-->
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>-->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<?php
//        $servername = "localhost";
//        $username = "root";
//        $password = "root";
//        $dbname = "library";
//
//   // Create connection
//        $conn = new mysqli($servername, $username, $password, $dbname);
//        // Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//        $p=$_GET['p'];
//        $sql = "SELECT * FROM books INNER JOIN categorybook on categorybook.isbn=books.isbn where books.isbn=".$p;
//
//        $result = $conn->query($sql);
//
//        if ($result->num_rows > 0) {
//
//
//            $i=0;
//
//            while($row = $result->fetch_assoc()) {
//
//                echo "<div class='col-md-6 mb-4 view overlay zoom'>";
//
//                echo "<img class='img-fluid'".$row["image"]."' src='assets/img/bookcover/".$row["image"]."' height='320px' width='200px'/>";
//
//                echo "</div>";
//
//                echo "<div class='col-md-6 mb-4'>";
//
//                echo "<p class='lead font-weight-bold'>".$row['name']."</p>";
//
//                echo "<p> ISBN: ".$row["isbn"]."</p>";
//
//                if($row['no_of_copies']>0)
//                {
//                    echo "<button class='btn btn-primary btn-md my-0 p' type='submit'> Add to cart <i class='fas fa-shopping-cart ml-1'></i>
//                        </button>";
//                }
//                else
//                {
//                    echo "<button class='btn btn-primary btn-md my-0 p' type='submit' disabled> Add to cart <i class='fas fa-shopping-cart ml-1' ></i>
//                        </button>";
//                }
//
//
//                echo "</div>";
//            }
//
//        }
//
//        else {
//            echo "0 results";
//        }
//
//
//        $conn->close();
//        ?>
<!---->
<!--<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>-->
<!---->
<!--<script type="text/javascript" src="js/popper.min.js"></script>-->
<!---->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!---->
<!--<script type="text/javascript" src="js/mdb.min.js"></script>-->
<!---->
<!--<script type="text/javascript">-->
<!--    -->
<!--    new WOW().init();-->
<!---->
<!--</script>-->
<!--</body>-->
<!--</html>-->
