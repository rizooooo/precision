<div>
    <h3>Personal Information</h3>
    <?php if (isset($_GET['step1'])) {?>
    <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oh snap!</strong> Please fill up this step first!
    </div>
    <?php } ?>
    <div class="well">
       
<?php echo form_open('registration/submit/1'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group <?php  echo form_error('email') ? 'has-error' : ''; ?>">
                        <label for="email" class="control-label">Email address</label>
                        <input type="email" class="inputs form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $this->session->userdata('personal_info')['email']; ?> <?php echo set_value('email'); ?>" >
                         <span class="control-label">  <?php echo form_error('email'); ?></span>
                      
                    </div>
                   
                    <div class="form-group <?php  echo form_error('confirmEmail') ? 'has-error' : ''; ?>">
                        <label for="confirmEmail" class="control-label">Confirm email address</label>
                        <input type="email" class="inputs form-control border-primary" name="confirmEmail" id="confirmEmail" placeholder="Re-enter Email Address" value="<?php echo $this->session->userdata('personal_info')['email']; ?> <?php echo set_value('confirmEmail'); ?>">
                         <span class="control-label">  <?php echo form_error('confirmEmail'); ?></span>
                    </div>
                    <div class="form-group <?php  echo form_error('firstName') ? 'has-error' : ''; ?>">
                        <label for="firstName" class="control-label">First name</label>
                        <input type="text" class="inputs form-control text-capitalize" id="firstName" name="firstName" placeholder="First Name" maxlength="40" value="<?php echo $this->session->userdata('personal_info')['first_name']; ?><?php echo set_value('firstName'); ?>">
                          <span class="control-label">  <?php echo form_error('firstName'); ?></span>
                    </div>
                    <div class="form-group <?php  echo form_error('lastName') ? 'has-error' : ''; ?>">
                        <label for="lastName" class="control-label">Last name</label>
                        <input type="text" class="inputs form-control text-capitalize" id="lastName" name="lastName" placeholder="Last Name" maxlength="40" value="<?php echo $this->session->userdata('personal_info')['last_name']; ?><?php echo set_value('lastName'); ?>">
                       <span class="control-label">  <?php echo form_error('lastName'); ?></span>
                    </div>
                    <div class="form-group <?php  echo form_error('contact') ? 'has-error' : ''; ?>">
                        <label for="contact" class="control-label">Office phone number</label>
                        <input type="text" class="inputs form-control" id="contact" name="contact" placeholder="Office Phone Number" value="<?php echo $this->session->userdata('personal_info')['contact']; ?><?php echo set_value('contact'); ?>">
                        <span class="control-label">  <?php echo form_error('contact'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <button class="btn btn-primary pull-right" type="submit">Next</button>
            </div>
        </div>
    </form>
</div>