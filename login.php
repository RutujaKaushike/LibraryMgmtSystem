<?php
session_start();
include("passwordReset.php");
if (isset($_POST['loginemail']) && isset($_POST['loginpass'])) {
    $email = $_POST['loginemail'];
    $password = md5($_POST['loginpass']);
    $sql = "SELECT * FROM student WHERE email='" . $email . "' and password='" . $password . "';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        setcookie("student_id", $row["student_id"]);
        if ($row["student_id"] == 999) {
            setcookie("admin", true);
            $_SESSION["admin"] = true;
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Login Unsuccessful
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
}

?>
<form role="form" method="post">
    <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="loginemail" class="form-control validate" name="loginemail">
                        <label for="loginemail">Your email</label>
                    </div>
                    <div class="md-form mb-1">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="loginpass" class="form-control validate" name="loginpass">
                        <label for="loginpass">Your password</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-default" type="submit">Login</button>
                    </div>
                    <div class="options">
                        <p>Not a member? <a href="" data-dismiss="modal" data-toggle="modal"
                                            data-target="#RegisterForm">Sign Up</a></p>
                        <p>Forgot <a href="" data-dismiss="modal" data-toggle="modal"
                                     data-target="#PasswordReset">Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
