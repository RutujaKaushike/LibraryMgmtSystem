

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <?php
    include ("assets/css.php");
    ?>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>



</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <img src="assets/img/logo.png" alt="logo" id="logo">
        <div class="navbar-header">
            <h1>Online Library Service</h1>
        </div>
        <div class="btn-group">
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#LoginForm">Login</a> &nbsp
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#RegisterForm">Register</a>
        </div>
    </div>
</nav>
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/carousel1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/carousel3.jpeg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <div>
        <table class="table" id="table"> <tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "library";
    $rec_limit = 10;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {


        $i=0;

        while($row = $result->fetch_assoc()) {

            echo "<td><img data-toggle='modal' data-target='#objectInfo' id=''".$row["isbn"]."' src='assets/img/bookcover/".$row["image"]."' height='320px' width='200px' onclick='myFunction(".$row["isbn"].")' /></td>";


            $i++;
            if($i%6==0)
            {
                echo "</tr>";
                $i=0;
                echo "<tr>";
            }
        }

    }

    else {
        echo "0 results";
    }

    $conn->close();
    ?>
            </tr>
        </table>

    </div>



    <?php

    include ("register.php");
    include ("login.php");
    include ("assets/scripts.php");
    include("objectInfo.php");

    ?>

<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $('#table').DataTable();-->
<!--            $('.dataTables_length').addClass('bs-select');-->
<!--        });-->
<!--    </script>-->


    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
     function myFunction(objId)
    {
        // $(location).attr('href','objectInfo.php?p='+objId);

        alert('Inside My Function'+ objId);

        jQuery.ajax({
            url: 'objectInfo.php',
            data: 'p='+objId,
            type: 'POST',
            success: function(result){
                $("body").append(result);
            }});

    } </script>

</body>

</html>