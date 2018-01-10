<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'statedraw') echo 'active'; ?>"><a href="<?php echo site_url('draws/statedraw');?>">State Draw</a></li>
				<li class="<?php if($tab_b == 'federaldraw') echo 'active'; ?>"><a href="<?php echo site_url('draws/federaldraw');?>">Federal Draw</a></li>
				<li class="<?php if($tab_b == 'grants') echo 'active'; ?>"><a href="<?php echo site_url('draws/grants');?>">Grants</a></li>
				<li class="<?php if($tab_b == 'appropriations') echo 'active'; ?>"><a href="<?php echo site_url('draws/appropriations');?>">Appropriations</a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">