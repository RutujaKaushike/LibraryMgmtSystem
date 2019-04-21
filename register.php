<?php
include_once('assets/config.php');
if (isset($_POST['email']) && isset($_POST['name'])) {
    print_r($_POST);
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = md5($_POST['pass']);
    $contact = $_POST['contact'];
    $sql = "Insert into student (name, email, password, contact) values ('" . $name . "', '" . $email . "', '".$password."',".$contact.");";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have been registered. Please be patient till admin activates your account
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
}
?>
<div class="modal fade" id="RegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form method="post">
                    <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="name" name="name" class="form-control validate" required>
                        <label for="name">Your name</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" name="email" class="form-control validate mb-0" required
                               onBlur="checkAvailability()">
                        <span id="userAvailabilityStatus" style="font-size:12px; padding-left: 100px;"></span>
                        <label for="email">Your email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="pass" name="pass" class="form-control validate" required>
                        <label for="pass">Your password</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="cfrmpass" name="cfrmpass" class="form-control validate" required>
                        <label for="cfrmpass">Confirm password</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-mobile prefix grey-text"></i>
                        <input type="number" id="contact" name="contact" class="form-control validate" required>
                        <label for="contact">Your Contact</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-default" id="submit" type="submit">Sign Up</button>
                    </div>
                </form>
                <div class="options">
                    <p>Already a member? <a href="" data-dismiss="modal" data-toggle="modal"
                                            data-target="#LoginForm"
                        >Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function checkAvailability() {
        jQuery.ajax({
            url: "check_availability.php",
            data: 'emailid=' + $("#email").val(),
            type: "POST",
            success: function (data) {
                if (data === "True"){
                    $("#userAvailabilityStatus").text("Email available for Registration").css("color", "green");
                    $("#email").get(0).setCustomValidity('');
                    $("#submit").get(0).disable = false;
                }
                else if (data === "Error"){
                    $("#userAvailabilityStatus").text("Please check your email").css("color", "red");
                    $("#email").get(0).setCustomValidity("Please check your email");
                    $("#submit").get(0).disable = true;
                }
                else{
                    $("#userAvailabilityStatus").text("Email already exists").css("color", "red");
                    $("#email").get(0).setCustomValidity("Email already exists");
                    $("#submit").get(0).disable = true;
                }
            },
            error: function () {
            }
        });
    }

</script>
<script>
    const passwd = document.getElementById("pass")
        , cfrm_passwd = document.getElementById("cfrmpass")
        , submitbtn = document.getElementById("submit");

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