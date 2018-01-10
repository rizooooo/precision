 <div class="col-xs-2" style="min-height:400px;">
                        <div class="well">
                            <button type="button" class="btn btn-primary btn-block btn-sm" ng-click="showGrantadd('create')">Create Grant</button>
                            <button class="btn btn-primary btn-block btn-sm" id="editG" ng-click="showGrantdrawedit('edit')">Edit</button>
                            <button class="btn btn-primary btn-block btn-sm" id="deleteG" ng-click="showGrantdelete('delete')">Delete</button>
                            <button class="btn btn-primary btn-block btn-sm" id="printG" ng-click="showGrantPrint('print')">Print</button>
                            <button class="btn btn-primary btn-block btn-sm" id="pringAGG" ng-click="showGrantAllPrint('printAllgrants')">Print All Grants</button>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="well">
                            <div class="row">
                                <div class="col-xs-2">
                                    
                                </div>
                                <div class="col-xs-2">
                                    <span class="text-center font-blue">Grant:&nbsp</span>
                                    <input type="text" id="selectedGrants" ng-model="selectedGrants" ng-model-options="modelOptionsGrants" uib-typeahead="grants as grants.Grant for grants in Grants | filter:{Grant:$viewValue}" class="form-control input-sm width-auto" typeahead-show-hint="true" typeahead-min-length="0" style="width: 100%;" placeholder="Select Grant" typeahead-on-select="selectedGrantTable()">
                                </div>
                                <div class="col-xs-2">
                                    
                                </div>
                                <div class="col-xs-5">
                                    <span class="text-center font-blue">Federal Grant Award Reconciliation for the Quarter of:</span>
                                    <input type="text" value=" " id="FgAwfttQ" ng-model="selectedGrantsQuarter" ng-model-options="modelOptionsGrantsQuarter" uib-typeahead="grantsquarter as grantsquarter.Quarter for grantsquarter in GrantsQuarter | filter:{Quarter:$viewValue}" class="form-control input-sm width-auto" typeahead-show-hint="true" typeahead-min-length="0" style="width: 75%;" placeholder="Select Grant Quarter" typeahead-on-select="showDataofGrantshistory()">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">&nbsp</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-3">
                                    <span class="font-blue">Balance Forward:&nbsp</span><span>{{ BalanaceForward | currency: '$ '}}</span>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-3">
                                    <span class="font-blue">Grant Balance:&nbsp</span><span>{{ Grantbalance }}</span>
                                </div>
                            </div>
                            <br><br>
                            <table id="grant_history_table" class="table table-striped table-bordered highlight-row" cellspacing="0" width="100%" border="4">
                                <thead>
                                    <tr>
                                        <th id="ghtId">ID</th>
                                        <th>Transaction Number</th>
                                        <th>Date</th>
                                        <th>Debit Amount</th>
                                        <th>Credit Amount</th>
                                        <th>Grant Balance</th>
                                    </tr>
                                </thead>
                                <tr><td style="height: 50px;"></td><td></td><td></td><td></td><td></td><td></td></tr>
                                <tr><td style="height: 50px;"></td><td></td><td></td><td></td><td></td><td></td></tr>
                                <tr><td style="height: 50px;"></td><td></td><td></td><td></td><td></td><td></td></tr>
                                <tr><td style="height: 50px;"></td><td></td><td></td><td></td><td></td><td></td></tr>
                                <tr><td style="height: 50px;"></td><td></td><td></td><td></td><td></td><td></td></tr>
                            </table>
                        </div>
                    </div>