<?php
include ("passwordReset.php")
?>
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
                    <input type="email" id="loginemail" class="form-control validate">
                    <label  for="loginemail">Your email</label>
                </div>
                <div class="md-form mb-1">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="loginpass" class="form-control validate">
                    <label  for="loginpass">Your password</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-default">Login</button>
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

