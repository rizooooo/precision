	 <div class="stepwizard top-buffer-30">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                             
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                <p>Select</p>
                                <p>Checkwrite Date</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle disabled">2</a>
                                <p>Initiate</p>
                                <p>Checkwrite Processing</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle disabled">3</a>
                                <p>Checkwrite Verification</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle disabled">4</a>
                                <p>Displaying Table</p>
                                <p>List</p>
                            </div>
                        </div>
                    </div>
                    <div class="well">
                   <div class="row setup-content" id="step-1" style="min-height: 250px;">
                            <div class="tab-content">
                                <form role="form" id="ckdate-form" method="post">
                                    <div class="col-xs-4 col-xs-offset-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label>Checkwrite date</label>
                                                    <select id="checkDateOption" name="ckDate" class="form-control">
                                                    </select>
                                                </div>

                                                <div class="row" id="step1-date" hidden>
                                                    <div class="col-xs-12">
                                                        <div class="well top-buffer-10">
                                                            <label>Draw Date:</label>
                                                            <h3 id="drawDate" style="margin-top: 0px;"></h3>
                                                            <label class="top-buffer-20">Pay Date:</label>
                                                            <h3 id="payDate" style="margin-top: 0px;"></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button id="ckdatenext" class="btn btn-primary pull-right" type="button">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <form id="scheduleinfo" name="scheduleinfo">
                        <div class="row setup-content" id="step-2" style="min-height: 250px;">
                            <div class="tab-content">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label>Schedule Date</label>
                                                         <div class="input-group">
                                                                <input type="text" id="scheduledate" name="scheduledate" class="form-control input-sm" placeholder="YYYY-MM-DD" disabled>
                                                                <span class="input-group-btn">
                                                                    <button id="btnScheduledate" class="btn btn-primary btn-sm showDate" type="button"><i class="glyphicon glyphicon-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table border-top-none middle-align">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Medi-Cal</th>
                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <th class="text-center">Schedule #</th>
                                                        <th class="text-center">Amount</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Warrants</td>
                                                      
                                                        <td><input type="text" ng-model="medWarrants" name="medWarrants" id="medWarrants" maxlength="8" class="inputs form-control input-sm text-right numberOnly" placeholder="" required></td>
                                                        <td><input type="text" ng-model="medWarrantAmount" name="medWarrantAmount" id="medWarrantAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">EFT</td>
                                                        <td><input type="text"  ng-model="medeftno"  name="medeftno" id="medeftno" maxlength="8" class="inputs form-control input-sm text-right numberOnly" placeholder="" required></td>
                                                        <td><input type="text" ng-model="medeftamount"  name="medeftamount" id="medeftamount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">Checkwrite Total</td>
                                                        <td><span type="text" name="medchkTotal" id="medchkTotal" class="input-sm text-right dell">{{medchkTotal= ((medWarrantAmount | removeComma) -- (medeftamount | removeComma)) | currency:""}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">Prior Year Amount</td>
                                                        <td><input type="text" ng-model="medpriorAmount" name="medpriorAmount" id="medpriorAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">Prior Prior Year Amount</td>
                                                        <td><input type="text" ng-model="medpriorPrioAmount"  name="medpriorPrioAmount" id="medpriorPrioAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">Current Year Amount</td>
                                                        <td><input type="text" ng-model="medcurYearAmount" name="medcurYearAmount" id="medcurYearAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">Negative Balance</td>
                                                        <td><input type="text" ng-model="mednegativeBal" name="mednegativeBal" id="mednegativeBal" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required  ></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">Adjustments</td>
                                                        <td><input type="text" ng-model="medAdjustment" name="medAdjustment" id="medAdjustment" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="tab-content">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table class="table border-top-none middle-align">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">ABORTION</th>
                                                
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <th class="text-center">Schedule #</th>
                                                            <th class="text-center">Amount</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Warrants</td>
                                                            <td><input type="text" ng-model="abortionWarrants" name="abortionWarrants"  maxlength="8" id="abortionWarrants" class="inputs form-control input-sm text-right numberOnly" placeholder=""  required></td>
                                                            <td><input type="text" ng-model="abortionAmount" name="abortionAmount" id="abortionAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">EFT</td>
                                                            <td><input type="text" ng-model="abortioneft" name="abortioneft" id="abortioneft"  maxlength="8" class="inputs form-control input-sm text-right numberOnly" placeholder="" required></td>
                                                            <td><input type="text" ng-model="abortioneftAmount" name="abortioneftAmount" id="abortioneftAmount"  class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required ></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">Checkwrite Total</td>
                                                   

                                                            <td><span type="text" name="abortionChkTotal" id="abortionChkTotal" class="input-sm text-right dell" style="background-color: #fff;border:none;">{{ abortionChkTotal = ((abortionAmount | removeComma) -- (abortioneftAmount | removeComma)) | currency:""}}</span></td>
                                                                                                                     
                                                        </tr>   
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">Prior Year Amount</td>
                                                            <td><input type="text" ng-model="abortionPriorYrAmount" name="abortionPriorYrAmount" id="abortionPriorYrAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">Prior Prior Year Amount</td>
                                                            <td><input type="text" ng-model="abortionPriorPrioAmount" name="abortionPriorPrioAmount" id="abortionPriorPrioAmount" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">Current Year Amount</td>
                                                            <td><input type="text" ng-model="abortionCurrYearAmt" name="abortionCurrYearAmt" id="abortionCurrYearAmt" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">Negative Balance</td>
                                                            <td><input type="text" ng-model="abortionNegBal" name="abortionNegBal" id="abortionNegBal" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">Adjustments</td>
                                                            <td><input type="text" ng-model="abortionAdjustment" name="abortionAdjustment" id="abortionAdjustment" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="tab-content">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table class="table border-top-none middle-align">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">CHDP</th>
                                                       
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Schedule #</td>
                                                            <td><input type="text" ng-model="chdpSchedno"  name="chdpSchedno" id="chdpSchedno" class="inputs form-control input-sm text-right numberOnly" placeholder="" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Current Year Amount</td>
                                                            <td><input type="text" ng-model="chdpCurrYear" name="chdpCurrYear" id="chdpCurrYear" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Prior Year Amount</td>
                                                            <td><input type="text" ng-model="chdpPriorYear" name="chdpPriorYear" id="chdpPriorYear" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Prior Prior Year Amount</td>
                                                            <td><input type="text" ng-model="chdpPPYear" name="chdpPPYear" id="chdpPPYear" class="inputs form-control input-sm text-right num-tayp" placeholder="0.00" required></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="col-xs-4">
                                                    <button class="inputs btn btn-default btn-block" type="button">Print</button>
                                                </div>
                                                <div class="col-xs-4">
                                                    
                                                </div>
                                                <div class="col-xs-4">
                                                    <button class="btn btn-primary btn-block nextBtn" type="button" name="btnSchedInfo" id="btnSchedInfo">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </form>
                        <div class="row setup-content" id="step-3" style="min-height: 250px;">
                            <div class="tab-content">
                                <div class="col-xs-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table border-top-none middle-align">
                                                <thead>
                                                    <tr>
                                                        <th colspan="4">Medi-Cal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <th class="text-center">Schedule Info</th>
                                                        <th class="text-center">Summary File</th>
                                                         <th class="text-center">Line Level</th> 
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Warrant Amount</td>
                                                        <td><input type="text" name="manualmedWarrantAmount" id="manualmedWarrantAmount" ng-model="manualmedWarrantAmount" class="inputs form-control input-sm text-right form-MscA num-tayp" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">EFT</td>
                                                        <td><input type="text" name="manualmedEFT" id="manualmedEFT" ng-model="manualmedEFT"  class="inputs form-control input-sm text-right form-MscB  num-tayp" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Checkwrite Total</td>
                                                        <td><span type="text" name="manualmedchkTotal" id="manualmedchkTotal" class=" form-control input-sm text-right form-MscC del" style="background-color: #fff;">{{manualmedchkTotal= ((manualmedWarrantAmount | removeComma) -- (manualmedEFT | removeComma)) | currency:""}}</span></td>
                                                        <td><span type="text" class="form-control input-sm text-right form-MsumC del num-tayp" placeholder="0.00" style="background-color: #fff;" >{{ MsumC = 123 }}</span></td>
                                                         <td><input type="text" class="form-control input-sm text-right form-MllC del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Prior Year Amount</td>
                                                        <td><input type="text" ng-model="manualmedPriorYrAmt" name="manualmedPriorYrAmt" id="manualmedPriorYrAmt" class="inputs form-control input-sm text-right form-MscD  num-tayp"  required></td>
                                                        <td><input type="text" class=" form-control input-sm text-right form-MsumD del num-tayp" placeholder="0.00" value="3098587.70" style="background-color: #fff;"></td>
                                                         <td><input type="text" class=" form-control input-sm text-right form-MllD del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Prior Prior Year Amount</td>
                                                        <td><input type="text" ng-model="manualmedPPYearAmt" name="manualmedPPYearAmt" id="manualmedPPYearAmt" class="inputs form-control input-sm text-right form-MscE  num-tayp"  required></td>
                                                        <td><input type="text" class=" form-control input-sm text-right form-MsumE del num-tayp" placeholder="0.00" value="514.18" style="background-color: #fff;"></td>
                                                         <td><input type="text" class=" form-control input-sm text-right form-MllE del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Current Year Amount</td>
                                                        <td><input type="text" ng-model="manualmedCurrYrAmt" name="manualmedCurrYrAmt" id="manualmedCurrYrAmt" class="inputs form-control input-sm text-right form-MscF  num-tayp"  required></td>
                                                        <td><input type="text" class=" form-control input-sm text-right form-MsumF del num-tayp" placeholder="0.00" value="70.34" style="background-color: #fff;"></td>
                                                         <td><input type="text" class=" form-control input-sm text-right form-MllF del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Negative Balance</td>
                                                        <td><input type="text" ng-model="manualmedNegaitveBal" name="manualmedNegaitveBal" id="manualmedNegaitveBal" class="inputs form-control input-sm text-right form-MscG  num-tayp"  required></td>
                                                        <td><input type="text" class=" form-control input-sm text-right form-MsumG del num-tayp" placeholder="0.00" value="70.34" style="background-color: #fff;"></td>
                                                         <td><input type="text" class=" form-control input-sm text-right form-MllG del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right">Adjustments</td>
                                                        <td><input type="text" ng-model="manualmedAdjusments" name="manualmedAdjusments" id="manualmedAdjusments" class="inputs form-control input-sm text-right form-MscH  num-tayp"  required></td>
                                                        <td><input type="text" class=" form-control input-sm text-right form-MsumH del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                         <td><input type="text" class=" form-control input-sm text-right form-MllH del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="tab-content">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table class="table border-top-none middle-align">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="4">ABORTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <th class="text-center">Schedule Info</th>
                                                            <th class="text-center">Summary File</th>
                                                             <th class="text-center">Line Level</th> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Warrant Amount</td>
                                                            <td><input type="text" ng-model="manualAbortWarrAmt" name="manualAbortWarrAmt" id="manualAbortWarrAmt" class="inputs form-control input-sm text-right form-AscA  num-tayp"  required></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">EFT</td>
                                                            <td><input type="text" ng-model="manualabortEFT" name="manualabortEFT" id="manualabortEFT" class="inputs form-control input-sm text-right form-AscB num-tayp" required ></td>
                                                        <tr>
                                                           <td class="text-right">Checkwrite Total</td>
                                                            <td><span type="text" name="manualabortCWTotal" id="manualabortCWTotal" class=" form-control input-sm text-right form-AscC del" style="background-color: #fff;" >{{manualabortCWTotal= ((manualAbortWarrAmt | removeComma) -- (manualabortEFT | removeComma)) | currency:""}}</span></td>
                                                            <td><span type="text" class=" form-control input-sm text-right form-AsumC del num-tayp" placeholder="0.00" style="background-color: #fff;">{{ AsumC = 209.42 }}</span></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-AllC del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Prior Year Amount</td>
                                                            <td><input type="text"  ng-model="manualabortPYrAmt"  name="manualabortPYrAmt" id="manualabortPYrAmt" class="inputs form-control input-sm text-right form-AscD  num-tayp" required ></td>
                                                           <td><input type="text" class=" form-control input-sm text-right form-AsumD del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-AllD del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Prior Prior Year Amount</td>
                                                            <td><input type="text" ng-model="manualabortPPYrAmt" name="manualabortPPYrAmt" id="manualabortPPYrAmt" class="inputs form-control input-sm text-right form-AscE  num-tayp" required ></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-AsumE del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-AllE del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Current Year Amount</td>
                                                            <td><input type="text" ng-model="manualabortCurrYrAmt"  name="manualabortCurrYrAmt" id="manualabortCurrYrAmt" class="inputs form-control input-sm text-right form-AscF  num-tayp" required ></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-AsumF del num-tayp" placeholder="0.00" value="209.52" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-AllF del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Negative Balance</td>
                                                            <td><input type="text" ng-model="manualabortNegativeBal"  name="manualabortNegativeBal" id="manualabortNegativeBal" class="inputs form-control input-sm text-right form-AscG  num-tayp"  required></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-AsumG del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-AllG del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Adjustments</td>
                                                            <td><input type="text" ng-model="manualabortAdjustments" name="manualabortAdjustments" id="manualabortAdjustments" class="inputs form-control input-sm text-right form-AscH  num-tayp" required></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-AsumH del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-AllH del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="tab-content">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table class="table border-top-none middle-align">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">CHDP</th>
                                                            <th ></th>
                                                            <th ></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <th class="text-center">Schedule Info</th>
                                                            <th class="text-center">Summary File</th>
                                                             <th class="text-center">Line Level</th> 

                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Current Year Amount</td>
                                                            <td><input type="text" ng-model="manualchdpCurrYear" name="manualchdpCurrYear" id="manualchdpCurrYear" class="inputs form-control input-sm text-right form-CHDPscA  num-tayp"  required></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-CHDPsumA del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-CHDPllA del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Prior Year Amount</td>
                                                            <td><input type="text" ng-model="manualchdpPYear"  name="manualchdpPYear" id="manualchdpPYear" class="inputs form-control input-sm text-right form-CHDPscB  num-tayp"  required></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-CHDPsumB del num-tayp" placeholder="0.00" value="0.00" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-CHDPllB del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right">Prior Prior Year Amount</td>
                                                            <td><input type="text" ng-model="manualchdpPPYear" name="manualchdpPPYear" id="manualchdpPPYear" class="inputs form-control input-sm text-right form-CHDPscC  num-tayp"  required></td>
                                                            <td><input type="text" class=" form-control input-sm text-right form-CHDPsumC del num-tayp" placeholder="0.00" value="226.87" style="background-color: #fff;"></td>
                                                             <td><input type="text" class=" form-control input-sm text-right form-CHDPllC del" placeholder="0.00" style="background-color: #fff;border:none;"></td> 
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="tab-content">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="col-xs-4">
                                                    <button class="inputs btn btn-default btn-block" type="button">Print</button>
                                                </div>
                                                <div class="col-xs-4">
                                                      <button class="inputs btn btn-default btn-block" type="button" onclick="window.location.reload();">Reject</button>
                                                </div>
                                                <div class="col-xs-4">
                                                    <button class="btn btn-primary btn-success nextBtn" id="ckstep3next" type="button" style="width: 100%;">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>