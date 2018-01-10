          <div class="col-xs-2" style="min-height:1200px;">
                        <div class="well" style="min-height:450px;">
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Select Fund Ratios</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Select Service Categories</button>
                            <hr>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Next Invoice</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Previous Invoice</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Delete Invoice</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Insert Invoice</button>
                            <hr>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Batch Complete</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Transfer Letter</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Hold Batch</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Cancel Batch</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Print</button>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Exit</button>
                            <hr>
                            <button type="button" class="btn btn-primary btn-block btn-sm" style="white-space:normal;">Batch Detail</button>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="well">
                            <table class="table border-top-none pad-top-1 pad-bot-1">
                                <tbody>
                                    <tr>
                                        <td class="text-right font-blue" style="width: 130px;">Agency Code:</td>
                                        <td class="text-left">
                                            <select class="form-control input-sm width-auto">
                                                <option>4260</option>
                                            </select>
                                        </td>
                                        <td class="text-right font-blue" style="width: 180px;">Batch Date:</td>
                                        <td class="text-left">
                                            <div class="input-group">
                                                <input id="batchDate" type="text" class="form-control input-sm" value="{{ myDate | date: 'MM/dd/yyyy' }}" disabled>
                                                <span class="input-group-btn">
                                                    <button id="btnBatchDate" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-right font-blue" style="width: 140px;">Batch Type:</td>
                                        <td class="text-left">
                                            <select class="form-control input-sm width-auto">
                                                <option>05</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right font-blue" style="width: 130px;">Batch Number:</td>
                                        <td class="text-left">
                                            <select class="form-control input-sm width-auto">
                                                <option>000</option>
                                                <option>111</option>
                                                <option>222</option>
                                                <option>333</option>
                                                <option>444</option>
                                                <option>555</option>
                                                <option>666</option>
                                                <option>777</option>
                                                <option>888</option>
                                                <option>999</option>
                                            </select>
                                        </td>
                                        <td class="text-right font-blue">State Fiscal Month:</td>
                                        <td class="text-left">
                                            <select class="form-control input-sm width-auto">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </td>
                                        <td class="text-right font-blue">Funding Fiscal Year:</td>
                                        <td class="text-left"><input class="form-control input-sm" maxlength="4" style="width: 60px;"></td>
                                    </tr>
                                    <tr>

                                        <td class="text-right font-blue" colspan="1">Type of Service:</td>
                                        <td class="text-left">
                                            <select class="form-control input-sm width-auto" ng-model="selectedService" ng-options="service as service.ProgramTypeCode for service in serviceType"> 
                                            </select>
                                        </td>

                                        <td class="text-right font-blue">Schedule:</td>
                                        <td class="text-left font-orange">xxxxxxx</td>
                                        <td class="text-right font-blue">Sequence Number:</td>
                                        <td class="text-left font-orange">1254</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right font-blue">Batch Count:</td>
                                        <td class="text-left" colspan="1"><input class="form-control input-sm numberOnly" maxlength="3" style="width: 50px;"></td>
                                        <td class="text-right font-blue" colspan="1">Absolute Batch Amount:</td>
                                        <td class="text-left" colspan="1"><input class="form-control input-sm" id="absBatchAmount"></td>
                                        <td class="text-right font-blue">Draw Date:</td>
                                        <td class="text-left">
                                            <div class="input-group">
                                                <input id="drawDate2" type="text" class="form-control input-sm" placeholder="mm/dd/yyyy" disabled>
                                                <span class="input-group-btn">
                                                    <button id="btnDrawDate2" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right font-blue">Transaction Sequence Number:</td>
                                        <td class="text-left"><input class="form-control input-sm numberOnly" maxlength="3" style="width: 50px;"></td>
                                        <td class="text-right font-blue">Absolute Running Balance:</td>
                                        <td class="text-right font-orange">0.00</td>
                                        <td class="text-right font-blue">Requested Pay Date:</td>
                                        <td class="text-left">
                                            <div class="input-group">
                                                <input id="payDate2" type="text" class="form-control input-sm" placeholder="mm/dd/yyyy" disabled>
                                                <span class="input-group-btn">
                                                    <button id="btnPayDate2" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-right font-blue">Net Batch Amount:</td>
                                        <td class="text-right font-orange">0.00</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-xs-10">
                        <div class="well">
                            <table class="table border-top-none pad-top-1 pad-bot-1">
                                <tr>
                                    <td class="text-right font-blue">Transaction Code:</td>
                                    <td class="text-left">
                                        <select class="form-control input-sm width-auto">
                                            <option>231</option>
                                        </select>
                                    </td>
                                    <td class="text-right font-blue" style="width: 160px;">Remittance Advice Msg:</td>
                                    <td class="text-left"><input type="text" class="form-control input-sm text-uppercase" maxlength="4" style="width: 70px;"></td>
                                    <td class="text-right font-blue" style="width: 120px;">State Quarter:</td>
                                    <td class="text-left">
                                        <select class="form-control input-sm width-auto">
                                            <option>CURRENT</option>
                                            <option>PRIOR</option>
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="text-right font-blue">Contract Number:</td>
                                    <td class="text-left"><input type="text" class="form-control input-sm numberOnly"></td>
                                    <td class="text-right font-blue">Invoice Number:</td>
                                    <td class="text-left"><input type="text" class="form-control input-sm" maxlength="14" style="width: 120px;"></td>
                                    <td class="text-right font-blue">Invoice Date:</td>
                                    <td class="text-left font-orange">06/01/2011</td>
                                </tr>
                                <tr>
                                    <td class="text-right font-blue">Current Document:</td>
                                    <td class="text-left"><input type="text" class="form-control input-sm"></td>
                                    <td class="text-right font-blue">Organization Index:</td>
                                    <td class="text-left"><input type="text" class="form-control input-sm" maxlength="4" style="width: 60px;"></td>
                                </tr>
                                <tr>

                                    <td class="text-right font-blue">Cover Pay Date From:</td>
                                    <td class="text-left">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" placeholder="mm/dd/yyyy" disabled>
                                            <span class="input-group-btn">
                                                <button id="btnCkDate" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-right font-blue">Cover Pay Date To:</td>
                                    <td class="text-left">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" placeholder="mm/dd/yyyy" disabled>
                                            <span class="input-group-btn">
                                                <button id="btnCkDate" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right font-blue">Program Cost Account:</td>
                                    <td class="text-left">
                                        <input type="text" value=" " ng-model="selectedPCA" ng-model-options="modelOptionsPCA" uib-typeahead="cs_pca as cs_pca.PCA for cs_pca in PCA | filter:{PCA:$viewValue}" class="form-control input-sm width-auto" typeahead-show-hint="true" typeahead-min-length="0" typeahead-on-select="queryPCA()" maxlength="5" style="width: 60px;">
                                    </td>
                                    <td class="text-right font-blue">Object Code:</td>
                                    <td class="text-left">
                                        <select class="form-control input-sm width-auto">
                                            <option ng-selected="selected">{{ CSOBJ }}</option>
                                        </select>
                                    </td>
                                    <td class="text-right font-blue">Payment Amount:</td>
                                    <td class="text-left font-orange">0.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                               <!--mywork-->
                     <div class="col-xs-10">
                        <div class="well" style="padding-top: 9px;padding-left: 13px;">
                            <table class="pad-top-1 pad-bot-1 vendortbl" style="">
                               <col width="80"><col width="180"><col width="80"><col width="381"><col width="50"><col width="50"><col width="50"><col width="100">
                            <tr>
                              <td class="" style="font-weight: normal; font-size: 20px;">Vendor:</td>
                              <td> <input type="text" ng-model="VendorSelected" ng-model-options="modelOptions" placeholder="Select Vendor" uib-typeahead="vendor as vendor.vendor_no for vendor in vendorNumber | filter:{vendor_no:$viewValue}" 
                                        class="" 
                                        typeahead-show-hint="true " 
                                        typeahead-min-length="0 "
                                        typeahead-on-select="selectedVendorTable() "
                                        style="width: 100%; "
                                        >
                              </td>
                              <td>
                                <div data-balloon="Select Suffix" data-balloon-pos="up">
                                    <select class="" ng-options="suffix as suffix.vendor_suffix for suffix in vendorSuffix " ng-model="selectedSuffix " ng-change="suffixChanged() " style="margin-left: 20px;">
                                         <option value="Suffix">Suffix</option>
                                    </select>
                                </div> 
                              </td>
                              <td ng-model="dataone " class="vendorinfo vendorinfohead" id="vendorname">{{dataone}}</td>  
                              <td class="input-sm Vcat font-blue vendorinfohead" align="right">Type:</td>
                              <td ng-model="datatype" class="vendorinfohead">{{datatype}}</td>
                              <td class="input-sm Vcat font-blue vendorinfohead" align="right">FEIN:</td>
                              <td ng-model="datafive" class="vendorinfohead">{{datasix}}</td>
                              <td></td>
                            </tr>
                            </table>
                           <hr align="left" width="100%" class="vendorhr">
                            <table class="pad-top-1 pad-bot-1 vendortbl" style="">
                               <col width="50"><col width="50"><col width="90"><col width="250"><col width="100">
                               <col width="110"><col width="60"><col width="80"><col width="80">
                            <tr>
                              <td></td>
                              <td></td>
                              <td class="input-sm Vcat font-blue" align="right"></td>
                              <td></td>
                              <td class="input-sm Vcat font-blue" align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td> 
                            </tr>
                             <tr>
                              <td></td>
                              <td></td>
                              <td class="input-sm Vcat font-blue" align="right">Address 1:</td>
                              <td><span type="text " ng-model="dataone " class="vendorinfo ">{{dataadd1}}</span></td>
                              <td class="input-sm Vcat font-blue" align="right">City:</td>
                              <td><span type="text " ng-model="datafive " class="vendorinfo ">{{datatwo}}</span></td>
                              <td></td>
                              <td></td> 
                            </tr>
                             <tr>
                              <td></td>
                              <td></td>
                              <td class="input-sm Vcat font-blue" align="right">Address 2:</td>
                              <td><span type="text " ng-model="dataone " class="vendorinfo ">{{dataadd2}}</span></td>
                              <td class="input-sm Vcat font-blue" align="right">State:</td>
                              <td><span type="text " ng-model="datatwo " class="vendorinfo ">{{datathree}}</span></td>
                              <td></td>
                              <td></td> 
                              
                            </tr>
                             <tr>
                              <td></td>
                              <td></td>
                              <td class="input-sm Vcat font-blue" align="right">Address 3:</td>
                              <td><span type="text " ng-model="dataone " class="vendorinfo ">{{dataadd3}}</span></td>
                              <td class="input-sm Vcat font-blue" align="right">Zip:</td>
                              <td><span type="text " ng-model="datathree " class="vendorinfo ">{{datafive}}</span></td>
                              <td class="input-sm Vcat font-blue" align="right">Country:</td>
                              <td><span type="text " ng-model="datafive " class="vendorinfo ">{{datafour}}</span></td>
                            </tr>
                            </table>
                        </div>
                    </div>
                    <!--mywork-->
                 <div class="col-xs-10">
                        <div class="well">
                            <table class="table border-top-none pad-top-1 pad-bot-1">
                                <tr>
                                    <td class="text-right font-blue">Federal Fiscal Year:</td>
                                    <td class="text-left">
                                        <select class="form-control input-sm width-auto" ng-model="selectedFederalFY" ng-options="fiscalyear as fiscalyear.FedFiscalYear for fiscalyear in fedfiscalYear"> 
                                         </select>
                                    </td>
                                    <td class="text-right font-blue">Service Categories:</td>
                                    <td class="text-left">
                                        <select class="form-control input-sm width-auto">
                                            <option>LOCAL EDUCATION AGENCY</option>
                                        </select>
                                    </td>
                                    <td class="text-right font-blue">Prior Year Reconciliation Account</td>
                                    <td class="text-left">
                                        <select class="form-control input-sm width-auto">
                                            <option></option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-10">
                        <div class="well" style="min-height:450px; ">
                            <table id="handfiled-table" style="background: #fff;" class="table table-border table-striped">
                                <thead style="display:table; width:100%; table-layout:fixed ">
                                    <tr>
                                        <th></th>
                                        <th>Fund Ratio</th>
                                        <th>HCDF Amount</th>
                                        <th>FF SHARE</th>
                                        <th>GF SHARE</th>
                                        <th>Other Share</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody style=" display:block; height: 400px; overflow-x: scroll; overflow-y: scroll;
                                            width: 100%; ">
                                    <tr>
                                        <td>1</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                    <option value="empty ">Option #1</option>
                                                    <option value="empty ">Option #2</option>
                                                    <option value="empty ">Option #3</option>
                                                    <option value="empty ">Option #4</option>
                                                </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                    <option value="empty ">Option #1</option>
                                                    <option value="empty ">Option #2</option>
                                                    <option value="empty ">Option #3</option>
                                                    <option value="empty ">Option #4</option>
                                                </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty ">Option #1</option>
                                                <option value="empty ">Option #2</option>
                                                <option value="empty ">Option #3</option>
                                                <option value="empty ">Option #4</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                    <option value="empty ">Option #1</option>
                                                    <option value="empty ">Option #2</option>
                                                    <option value="empty ">Option #3</option>
                                                    <option value="empty ">Option #4</option>
                                                </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td class="text-center ">
                                            <select class="form-control input-sm ">
                                                <option value="empty "></option>
                                                <option value="empty "></option>
                                                <option value="empty "></option>
                                                <option value="empty "></option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <input type="text " class="form-control input-sm ">
                                        </td>
                                        <td>
                                            <button type="button " class="btn btn-default disabled ">
                                                Reclass</button>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <div class="table-container-footer ">
                                <table class="table table-striped table-hover table-condensed table-bordered ">
                                    <tfoot>
                                        <tr>

                                            <td class="text-center ">
                                                <label>TOTAL-BATCH</label>
                                            </td>
                                            <td>
                                                <input type="text " value="0.00 " class="form-control input-sm ">
                                            </td>
                                            <td>
                                                <input type="text " value="0.00 " class="form-control input-sm ">
                                            </td>
                                            <td>
                                                <input type="text " value="0.00 " class="form-control input-sm ">
                                            </td>
                                            <td>
                                                <input type="text " value="0.00 " class="form-control input-sm ">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>