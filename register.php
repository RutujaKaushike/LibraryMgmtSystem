<?php
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
                <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="name" class="form-control validate">
                    <label  for="name">Your name</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="email" class="form-control validate">
                    <label  for="email">Your email</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="pass" class="form-control validate">
                    <label  for="pass">Your password</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="cfrmpass" class="form-control validate">
                    <label  for="cfrmpass">Confirm password</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-mobile prefix grey-text"></i>
                    <input type="password" id="contact" class="form-control validate">
                    <label  for="contact">Your Contact</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-deep-orange">Sign Up</button>
                </div>
                <div class="options">
                    <p>Already a member? <a href="" data-dismiss="modal" data-toggle="modal"
                                            data-target="#LoginForm"
                        >Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
