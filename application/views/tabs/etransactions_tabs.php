<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'checkwrite') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/checkwrite');?>">Checkwrite</a></li>
				<li class="<?php if($tab_b == 'mmc') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/mmc');?>">MMC</a></li>
				<li class="<?php if($tab_b == 'dental_detail') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/dentaldetail');?>">DENTAL DETAIL</a></li>
				<li class="<?php if($tab_b == 'mmis') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/mmisadmin');?>">MMIS ADMIN</a></li>
				<li class="<?php if($tab_b == 'usl') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/usl');?>">USL</a></li>
				<li class="<?php if($tab_b == 'smart') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/smart');?>">SMART</a></li>
				<li class="<?php if($tab_b == 'checkwrite_transfer_letter') echo 'active'; ?>"><a href="<?php echo site_url('etransactions/checkwritetransferletter');?>">Checkwrite Transfer Letter</a></li>
				
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">