<div> <!-- step2 -->
<h3>Account Information</h3>
<?php if (isset($_GET['step2'])) {?>
<div class="alert alert-dismissible alert-warning">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Oh snap!</strong> Please fill up this step first!
</div>
<?php } ?>
<div class="well">
	<?php echo form_open('registration/submit/2'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group <?php  echo form_error('dhcs') ? 'has-error' : ''; ?>">
				<label for="username" class="control-label">DHCS User ID</label>
				<input type="text" class="inputs form-control" id="dhcs" name="dhcs" placeholder="DHCS User ID" maxlength="8" value="<?php echo set_value('dhcs'); ?>">
				<span class="control-label">  <?php echo form_error('dhcs'); ?></span>
			</div>
			<div class="form-group <?php  echo form_error('managerName') ? 'has-error' : ''; ?>">
				<label for="username" class="control-label">Manager name</label>
				<input type="text" class="inputs form-control text-capitalize" id="managerName" name="managerName" placeholder="Your Manager Name"  maxlength="60"  value="<?php echo set_value('managerName'); ?>">
				<span class="control-label">  <?php echo form_error('managerName'); ?></span>
			</div>
			<div class="form-group <?php  echo form_error('managerEmail') ? 'has-error' : ''; ?>">
				<label for="username" class="control-label">Manager email address</label>
				<input type="text" class="inputs form-control" id="managerEmail" name="managerEmail" placeholder="Your Manager Email Address" value="<?php echo set_value('managerEmail'); ?>" >
				<span class="control-label">  <?php echo form_error('managerEmail'); ?></span>
			</div>
			<div class="form-group <?php  echo form_error('password') ? 'has-error' : ''; ?>">
				<label for="username" class="control-label">Enter Password:</label>
				<input type="password" class="inputs form-control password" id="password" name="password" placeholder="Enter Password">
				<span class="control-label">  <?php echo form_error('password'); ?></span>
				<div class="col-sm-6" id="reqone" style="display:none">
					<span style="color:#337ab7;">Password Requirements:</span> <br>
					<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Minimum of 8 Characters<br>
					<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Should have Uppercase Letter
				</div>
				<div class="col-sm-6" id="reqtwo" style="display:none">
					<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Should have Lowercase Letter<br>
					<span id="special" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Should have Special Character<br>
					<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Should have Numerical Character
				</div>
			</div>
			<div class="form-group <?php  echo form_error('confirmPass') ? 'has-error' : ''; ?>">
				<label for="username" class="control-label">Re-enter Password:</label>
				<input type="password" class="inputs form-control password" id="confirmPass" name="confirmPass" placeholder="Re-enter Password">
				<span class="control-label">  <?php echo form_error('confirmPass'); ?></span>
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