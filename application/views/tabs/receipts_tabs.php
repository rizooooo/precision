<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'cash') echo 'active'; ?>"><a href="<?php echo site_url('receipts/cash');?>">Cash</a></li>
				<li class="<?php if($tab_b == 'wiretranseft') echo 'active'; ?>"><a href="<?php echo site_url('receipts/wiretranseft');?>">Wire Trans/EFT</a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">