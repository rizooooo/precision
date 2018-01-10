<div class="col-xs-2">
	<div class="well" style="min-height:450px;">
		<button type="button" class="btn btn-primary btn-block btn-sm btn-export-user">Export to CSV</button>
		<button class="btn btn-primary btn-block btn-sm" id="btnApprove" name="btnApprove">Approve request</button>
		<button class="btn btn-primary btn-block btn-sm" id="btnDecline" name="btnDecline">Decline request</button>
		<hr>
		<button class="btn btn-primary btn-block btn-sm" id="btnViewDetails" name="btnViewDetails">View all details</button>
		<button class="btn btn-primary btn-block btn-sm" id="btnEdit" name="btnEdit">Edit information</button>
		<button class="btn btn-primary btn-block btn-sm" id="btnChangeAccess" name="btnChangeAccess">Change access level</button>
		<hr>
		<button class="btn btn-primary btn-block btn-sm" id="btnLock" name="bntLock">Lock account </button>
		<button class="btn btn-primary btn-block btn-sm" id="btnUnlock" name="btnUnlock">Unlock account</button>
		<button class="btn btn-primary btn-block btn-sm" id="btnActive" name="btnActive">Set as active</button>
		<button class="btn btn-primary btn-block btn-sm" id="btnInactive" name="btnInactive">Set as inactive</button>
	</div>
</div>
<div class="col-xs-10">
	<div class="well">
		<table id="security_table" class="table table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>User ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Created ON</th>
					<th>Access Level</th>
					<th>Last Modified</th>
					<th>Status</th>
				</tr>
			</thead>
			<tfoot style="display: table-header-group">
			<tr>
				<th>User ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Created ON</th>
				<th>Access Level</th>
				<th>Last Modified</th>
				<th>Status</th>
			</tr>
			</tfoot>
			
		</table>
	</div>
</div>