<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'handfiled') echo 'active'; ?>"><a href="<?php echo site_url('mtransactions/handfiled');?>">Handfiled</a></li>
				<li class="<?php if($tab_b == 'handfiledconlan') echo 'active'; ?>"><a href="<?php echo site_url('mtransactions/handfiledconlan');?>">Handfiled Conlan</a></li>
				<li class="<?php if($tab_b == 'viewopencs') echo 'active'; ?>"><a href="<?php echo site_url('mtransactions/viewopencs');?>">View Open CS</a></li>
				<li class="<?php if($tab_b == 'cscorrections') echo 'active'; ?>"><a href="<?php echo site_url('mtransactions/cscorrections');?>">CS Corrections</a></li>
				<li class="<?php if($tab_b == 'placeholder') echo 'active'; ?>"><a href="<?php echo site_url('mtransactions/placeholder');?>">Place Holder</a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">