<?php
include('assets/config.php');
if (isset($_POST['fgtemail']) && isset($_POST['fgtcontact'])) {
    $email = $_POST['fgtemail'];
    $mobile = $_POST['fgtcontact'];
    $newpassword = md5($_POST['fgtpass']);
    $sql = "SELECT * FROM student WHERE email='" . $email . "' and contact='" . $mobile . "';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "update student set password='" . $newpassword . "' WHERE email='" . $email . "' and contact='" . $mobile . "';";
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> The password has been successfully reset
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
  <strong>Error!</strong>Email id or Mobile no is invalid
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}
?>
<form method="post">
    <div class="modal fade" id="PasswordReset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Password Reset</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="fgtemail" class="form-control validate" name="fgtemail">
                        <label for="fgtemail">Your email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-mobile prefix grey-text"></i>
                        <input type="number" id="fgtcontact" class="form-control validate" name="fgtcontact">
                        <label for="fgtcontact">Your Contact</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="fgtpass" class="form-control validate" name="fgtpass">
                        <label for="fgtpass">New password</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="fgtcfrmpass" class="form-control validate" name="fgtcfrmpass">
                        <label for="fgtcfrmpass">Confirm password</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-default" id="resetbtn">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    const password = document.getElementById("fgtpass")
        , confirm_password = document.getElementById("fgtcfrmpass")
        , resetbtn = document.getElementById("resetbtn");

    function validatePassword() {
        if (password.value !== confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            resetbtn.disable = true;
        } else {
            confirm_password.setCustomValidity('');
            resetbtn.disable = false;
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>