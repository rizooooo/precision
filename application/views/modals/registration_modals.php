<?php if (isset($_GET['registered']) == 'true'){ ?>
    <div class="modal fade in" id="requestAccess" role="dialog" style="display: inline;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="section">Submit Request</h3>
                    <div class="well" style="background-color:#f5f5f5 !important;">
                        <p class="text-muted">Your request for access to SHRPE has been submitted for processing. You will receive an email when your request has been approved.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success pull-right" type="button" onclick="window.location='<?php echo base_url();?>'">Exit</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>