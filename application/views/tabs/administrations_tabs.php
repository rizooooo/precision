<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'security') echo 'active'; ?>"><a href="<?php echo site_url('administrations/security');?>">Security</a></li>
				<li class="<?php if($tab_b == 'businessrules') echo 'active'; ?>"><a href="<?php echo site_url('administrations/businessrules');?>">Business Rules</a></li>
				<li class="<?php if($tab_b == 'maintaincontracts') echo 'active'; ?>"><a href="<?php echo site_url('administrations/maintaincontracts');?>">Maintain Contracts</a></li>
				<li class="<?php if($tab_b == 'maintenance') echo 'active'; ?>"><a href="<?php echo site_url('administrations/maintenance');?>">Maintenance</a></li>
				
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">