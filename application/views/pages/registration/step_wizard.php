<div class="stepwizard">
	<div class="stepwizard-row setup-panel">
		<div class="stepwizard-step col-xs-4">
			<a href="<?php echo site_url('registration/step/1'); ?>"  type="button" class="btn btn-circle <?php if($step == 'step1') echo 'btn-primary'; else echo 'btn-default'; ?>">1</a>
			<p class="<?php if($step == 'step1') echo 'font-bold'; else echo 'text-muted' ?>">Personal Information</p>
		</div>
		<div class="stepwizard-step col-xs-4">
			<a href="<?php echo site_url('registration/step/2'); ?>" type="button" class="btn btn-circle <?php if($step == 'step2') echo 'btn-primary'; else echo 'btn-default'; ?>  <?php if($step == 'step2') echo 'btn-primary'; else echo 'btn-default'; ?> <?php if(!$this->session->has_userdata('personal_info')) echo 'disabled' ?>">2</a>
			<p class="<?php if($step == 'step2') echo 'font-bold'; else echo 'text-muted' ?>">Account Information</small></p>
		</div>
		<div class="stepwizard-step col-xs-4">
			<a href="<?php echo site_url('registration/step/3'); ?>" type="button" class="btn btn-circle <?php if($step == 'step3') echo 'btn-primary'; else echo 'btn-default'; ?>  <?php if(!$this->session->has_userdata('account_info')) echo 'disabled' ?>">3</a>
			<p class="<?php if($step == 'step3') echo 'font-bold'; else echo 'text-muted' ?>">Security Questions</p>
		</div>
	</div>
</div>