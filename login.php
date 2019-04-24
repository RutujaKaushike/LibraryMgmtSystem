<?php
include_once("passwordReset.php");
if (isset($_POST['loginemail']) && isset($_POST['loginpass'])) {
    $email = $_POST['loginemail'];
    $password = md5($_POST['loginpass']);
    $sql = "SELECT * FROM student WHERE email='" . $email . "' and password='" . $password . "';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['isactive'] == '1') {
            if ($row['student_id'] == '999') {
                $user_level = "admin";
            } else {
                $user_level = "student";
            }
            $_SESSION['login'] = array('user' => $row['name'],
                'id' => $row['student_id'],
                'user_level' => $user_level);
            setcookie("login_user", session_id(), time() + (86400 * 7), '/');
            header('Location: /');
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>The account is InActive.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
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
                                     data-target="#PasswordReset" class="none">Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
