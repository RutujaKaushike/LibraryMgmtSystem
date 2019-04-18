<?php
session_start();
include_once ("header.php");
if($_SESSION['login']['user_level'] == 'admin')
    header('Location: dashboard.php');
?>
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
    <table class="table" id="table">
        <tr>
            <?php
            include_once("assets/config.php");
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    echo "<td><img alt='" . $row["isbn"] . "' data-toggle='modal' data-target='#objectInfo' id='" . $row["isbn"] . " ' src='assets/img/bookcover/" . $row["image"] . "' height='320px' width='200px' onclick='myFunction(" . $row["isbn"] . ")' /></td>";
                    $i++;
                    if ($i % 6 == 0) {
                        echo "</tr>";
                        $i = 0;
                        echo "<tr>";
                    }
                }
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td><img src='assets/img/bookcover/" . $row["image"] . "' height='300px' width='180px' alt=" . $row["image"] . "/><br>" . $row["name"] . "</td></tr>";
                }
            }
            ?>
        </tr>
    </table>
</div>
<div class="modal fade" id="BookData" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Book Info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="placeholder">
            </div>
        </div>
    </div>
</div>
<?php
include_once("assets/scripts.php");
include_once ("footer.php");
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
<script>
    $(document).ready(function () {
        $('#books').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>