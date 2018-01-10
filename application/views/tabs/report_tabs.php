<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="<?php if($tab_b == 'standardreports') echo 'active'; ?>"><a href="<?php echo site_url('reports/standardreports');?>">Standard Reports</a></li>
				<li class="<?php if($tab_b == 'adhoc') echo 'active'; ?>"><a href="<?php echo site_url('reports/adhoc');?>">Ad Hoc</a></li>
				<li class="<?php if($tab_b == 'fiscalforecasting') echo 'active'; ?>"><a href="<?php echo site_url('reports/fiscalforecasting');?>">Fiscal Forecasting</a></li>
				<li class="<?php if($tab_b == 'federalreportingcms64') echo 'active'; ?>"><a href="<?php echo site_url('reports/FederalReportingCms64');?>">Federal Reporting (CMS 64)</a></li>
				<li class="<?php if($tab_b == 'federalreportingcms37') echo 'active'; ?>"><a href="<?php echo site_url('reports/FederalReportingCms37');?>">Federal Reporting (CMS 37)</a></li>
				<li class="<?php if($tab_b == 'federalreportingcms21') echo 'active'; ?>"><a href="<?php echo site_url('reports/FederalReportingCms21');?>">Federal Reporting (CMS 21)</a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">