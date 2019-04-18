<?php
include('assets/config.php');
include('assets/css.php');
include ('header.php');
if (isset($_POST['changenewpass'])) {
    $student_id = $_COOKIE['student_id'];
    $oldpass = md5($_POST['changeoldpass']);
    $newpass = md5($_POST['changenewpass']);
    $sql = "select * from student where student_id='" . $student_id . "' and password='" . $oldpass . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "update student set password='" . $newpass . "' where student_id='" . $student_id . "';";
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Password has been successfully changed
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $conn->error . ' 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Old Password is incorrect 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}
?>
<div class="col-md-3"></div>
<div class="container container-fluid col-md-6">
    <form class="border border-light p-5" method="post" role="form">
        <button style="float: left" class="btn btn-default btn-sm" type="button" onclick="window.history.go(-1)">
            <i class="fas fa-long-arrow-alt-left fa-lg"></i></button>
        <p class="h4 text-center mb-4">Change Password</p>
        <div class="md-form">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="changeoldpass" name="changeoldpass"
                   class="form-control validate" required>
            <label for="changeoldpass">Old password</label>
        </div>
        <div class="md-form">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="changenewpass" name="changenewpass" class="form-control validate"
                   required>
            <label for="changenewpass">New password</label>
        </div>
        <div class="md-form">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="changecfrmpass" name="changecfrmpass" class="form-control validate"
                   required>
            <label for="changecfrmpass">Confirm password</label>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-default" id="changesubmit" type="submit">Change Password</button>
        </div>
    </form>
</div>

<?php
include("assets/scripts.php");
include ('footer.php');
?>
<script>
    const passwd = document.getElementById("changenewpass")
        , cfrm_passwd = document.getElementById("changecfrmpass")
        , submitbtn = document.getElementById("changesubmit");

    function validatePassword() {
        if (passwd.value !== cfrm_passwd.value) {
            cfrm_passwd.setCustomValidity("Passwords Don't Match");
            submitbtn.disable = true;
        } else {
            cfrm_passwd.setCustomValidity('');
            submitbtn.disable = false;
        }
    }

    passwd.onchange = validatePassword;
    cfrm_passwd.onkeyup = validatePassword;
</script>
