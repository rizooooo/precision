<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'hcfa') echo 'active'; ?>"><a href="<?php echo site_url('adjustments/hcfa');?>">HCFA</a></li>
				<li class="<?php if($tab_b == 'nonhcfa') echo 'active'; ?>"><a href="<?php echo site_url('adjustments/nonhcfa');?>">NON-HCFA</a></li>
				<li class="<?php if($tab_b == 'dsh834cwa') echo 'active'; ?>"><a href="<?php echo site_url('adjustments/dsh834cwa');?>">DSH 834 Checkwrite Adjustment</a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">