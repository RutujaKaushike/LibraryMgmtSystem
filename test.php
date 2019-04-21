<?php
session_start();
include_once("header.php");
if ($_SESSION['login']['user_level'] == 'admin')
    header('Location: dashboard.php');
?>
    <head>
        <style>
            tr {
                display: inline-block;
                border: 2px #0d0d0d;
                padding: 1px;
                width: 215.6px !important;
            }

            td {
                padding: 6px !important;
            }

            .prettydropdown ul {
                height: 300px !important;
            }

            #books_filter {
                margin: 0 !important;
            }
        </style>
    </head>
    <body>
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
    <br>
    <div class="container container-sm">
        <div class="col-md-12">
            <table id="books">
                <thead>
                <tr>
                    <th></th>
                </tr>
                </thead>
                <tbody class="table table-bordered" id="tbody_book">
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="BookData" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Book Information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="placeholder">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CartData" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Cart</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="placeholder1">
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once("assets/scripts.php");
    include_once("footer.php");
    ?>
    <script>
        function myFunction(objId) {
            jQuery.ajax({
                url: 'objectInfo.php?p=' + objId,
                type: 'GET',
                success: function (result) {
                    $("#placeholder").html(result);
                    $("#BookData").modal("show")
                }
            });
        }
    </script>
    <?php
    include_once("assets/scripts.php");
    include_once("footer.php");
    ?>
    <script src="assets/js/jquery.prettydropdowns.js"></script>
    <script>
        $(document).ready(function () {
            document.cookie = "category=";
            var data = "<?php echo getbook(); ?>";
            $("#tbody_book").html(data);
            $("#books").DataTable();
            $.get('get_category.php', function (data) {
                data = data.replace("multiple", "onchange=changebook(this)");
                $("#books_length").html(data);
                $("#listofcategory").css("padding-left", "20px");
                $("#books_filter").addClass("md-form");
            });
        });

        function changebook(elem) {
            var value1 = $(elem).val();
            document.cookie = "category=" + value1;
            location.reload(true);
        }

    </script>
    </body>

<?php
function getbook()
{
// DB credentials.
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'library');
// Establish database connection.
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($_COOKIE['category'] > 0) {
        $isbns = "(";
        $sql = "select isbn from categorybook where category_id=" . $_COOKIE['category'];
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $isbns = $isbns . $row['isbn'] . ',';
        }

        $sql = "select * from books where isbn in " . $isbns . '0)';
        echo $sql;
    } else
        $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    $ans = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ans = $ans . "<tr><td><img alt='" . $row["isbn"] . "' data-toggle='modal' data-target='#objectInfo' id='" . $row["isbn"] . " ' src='assets/img/bookcover/" . $row["image"] . "' height='320px' width='200px' onclick='myFunction(" . $row["isbn"] . ")' /><span style='display: none'>" . $row["name"] . "</span></td></tr>";
        }
    }
    return $ans;
}