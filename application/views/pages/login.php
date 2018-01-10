<div class="container top-buffer-50">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                         <?php echo validation_errors(); ?>
                <?php echo form_open('login/submit'); ?>
       
                    <h3 class="text-center" style="color:#317eac;"><strong>Please Login</strong></h3>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                            
                            <div class="form-group form-group-sm">
                                <label for="username" class="control-label">Email address</label>
                                <input class="form-control" placeholder="Enter Email Address" id="Emailtxt" name="email" type="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                            <div class="form-group form-group-sm">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" placeholder="Enter Password" type="Password" id="Passwordtxt" name="password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <div class="col-md-6 col-xs-6" style="text-align: right">
                                        <a href="#">Reset Password?</a>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_GET['captcha'])){ ?>
                           <!--  <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Oh snap!</strong>The reCaptcha is not checked
                            </div> -->
                            <?php }?>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-12" style="text-align:center;">
                            
                            <div style="display: inline-block;" name="g-recaptcha-response" class="g-recaptcha" data-sitekey="6LckeSoUAAAAAPw1vf74evYYXumJTYdBLFCORqUu"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 top-buffer-10">
                            <button type="submit" value="login" name="submit" class="btn btn-success btn-block">Login</button>
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="top-buffer-20">
                            <div class="panel-body">
                                <div class="col-xs-10 col-xs-offset-1 top-buffer-10">
                                    <p class="text-justify"><strong>UNAUTHORIZED ACCESS TO ANY STATE OR FEDERAL COMPUTING SYSTEM CONTAINING US GOVERNMENT OR STATE INFORMATION IS A CRIMINAL VIOLATION OF THE PENAL CODE SECTION 502 AND/OR APPLICABLE LAWS AND IS SUBJECT TO CIVIL AND CRIMINAL SANCTIONS.</strong></p>
                                    <p class="text-justify text-muted">Whoever knowingly or intentionally accesses a computing system without authorization or exceeding authorized access, and by means of such conduct, obtains, alters, damages, destroys, or discloses on, or prevents authorize users of any data or computing resource owned by or operated for State of California shall be subject to disciplinary action, prosecution or both. Use in a manner other than as intended by the State of California may result in the forfeiture of access privileges.All computing system activities may be recorded and monitored. Individuals using these systems expressly consent to such monitoring and shall have no expectation of privacy in their use. Evidence of possible misconduct or abuse may be provided to appropriate officials and/or law enforcement. No warranty is made for the computing resources that are subject to this policy. Additionally, the State of California takes no responsibility of damages for the intentional misuse of these resources by any party.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<footer class="top-buffer-50"><div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
        <p class="navbar-text pull-left">© 2017 - PRECISION TECHNOLOGY PARTNERS CORP. </p>
    </div>
</div>
</footer>