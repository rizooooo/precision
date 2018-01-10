<div class="container-fluid">
	<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs main-tabs">
				<li class="<?php if($tab == 'administrations') echo 'active'; ?>"><a href="<?php echo site_url('administration');?>"><strong>Administration</strong></a></li>
				<li class="<?php if($tab == 'reports') echo 'active'; ?>"><a href="<?php echo site_url('report');?>"><strong>Reports</strong></a></li>
				<li class="<?php if($tab == 'calstars') echo 'active'; ?>"><a href="<?php echo site_url('calstar');?>"><strong>CALSTARS</strong></a></li>
				<li class="<?php if($tab == 'receipts') echo 'active'; ?>"><a href="<?php echo site_url('receipt');?>"><strong>Receipts</strong></a></li>
				<li class="<?php if($tab == 'draw') echo 'active'; ?>"><a href="<?php echo site_url('draw');?>"><strong>Draw</strong></a></li>
				<li class="<?php if($tab == 'adjustments') echo 'active'; ?>"><a href="<?php echo site_url('adjustment');?>"><strong>Adjustments</strong></a></li>
				<li class="<?php if($tab == 'mtransaction') echo 'active'; ?>"><a href="<?php echo site_url('mtransaction');?>"><strong>M-Transactions</strong></a></li>
				<li class="<?php if($tab == 'etransactions') echo 'active'; ?>"><a href="<?php echo site_url('etransaction');?>"><strong>E-Transactions</strong></a></li>
				<li class="<?php if($tab == 'home') echo 'active'; ?>"><a href="<?php echo site_url('home');?>"><strong>Home</strong></a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">