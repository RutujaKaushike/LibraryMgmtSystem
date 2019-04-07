<?php
?>
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
                    <input type="email" id="fgtemail" class="form-control validate">
                    <label  for="fgtemail">Your email</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-mobile prefix grey-text"></i>
                    <input type="password" id="fgtcontact" class="form-control validate">
                    <label  for="fgtcontact">Your Contact</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="fgtpass" class="form-control validate">
                    <label  for="fgtpass">New password</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="fgtcfrmpass" class="form-control validate">
                    <label  for="fgtcfrmpass">Confirm password</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-default">Reset Password</button>
                </div>
            </div>
        </div>
    </div>
</div>
