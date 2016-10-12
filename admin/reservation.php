<?php
include('header.php');
include_once("include/functions.php");	
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-book fa-1x"></i>Reservation Details: <?php echo $_GET['r'];?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                
				<div class="col-lg-2  form-group center">
				<label>Reservation Source:</label>
                    <select class="form-control" id="reservation_source" disabled>
						<option value="CALL">CALL</option>
						<option value="WALK-IN">WALK-IN</option>
						<option value="INTERNET">INTERNET</option>
						<option value="REFERRAL">REFERRAL</option>
						<option value="TRAVEL AGENCY">TRAVEL AGENCY</option>
						<option value="OTHERS">OTHERS</option>
					</select>
				</div>
				
				<div class="col-lg-3  form-group center">
				<label>Receptionist</label>
                    <select class="form-control" id="receptionist" disabled>
					
					<?php echo "<option value='".$_SESSION['userID']."'>".$_SESSION['name']."</option>";?>
						<?php
							$userlist = selectListSQL("SELECT * FROM users");
							
							foreach ($userlist as $rows => $link) {
									$userid = $link['userID'];
									$name = $link['name'];
									echo "<option value='$userid'>$name</option>";
							}
						?>
					</select>
				</div>
				<div class="col-lg-3  form-group center">
				
										<label>Season</label>
										<select class="form-control" id="current_season" onchange="nextsummary();" disabled>
										<?php
										include_once("include/functions.php");			
										$current_season = singleSQL("SELECT settingsvalue FROM settings where settingsname='SEASON'");
										echo "<option selected='selected' value='$current_season'>$current_season</option>";
										?>
										
											
											<option value="SUPER PEAK">SUPER PEAK</option>
											<option VALUE="PEAK">PEAK</option>
											<option VALUE="LOW">LOW</option>
										</select>
								
				</div>
								
			</div>
			<div class="row"><input type="hidden" id="reservation">
                <div class="col-lg-2">
				
				</div>
			</div>
			
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Date</a>
                                </li>
                                <li id="detailtab" class=""><a href="#detail" data-toggle="tab">Detail</a>
                                </li>
                                <li id="summarytab" class=""><a href="#summary" data-toggle="tab">Summary</a>
                                </li>
                                <li id="paymenttab" class=""><a href="#payment" data-toggle="tab">Payment</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
							<!-- Date tab-->
                                <div class="tab-pane fade in active" id="home">
                                    <br>
									
								 <div class="col-lg-12">
										
									<input type="hidden" id="number_of_rooms" value="1">
									<div class="panel-body">
										<div class="col-lg-12">
											<table id="reservation_date" class="table table-responsive table-hover">
												<thead>
													<tr>
														<th>Check In</th>
														<th>Check Out</th>
														<th>Good For</th>
														<th>Room</th>
													</tr>
												</thead>
												<tr>
												<td><input id="ci1" type="date" class="form-control"></td>
												<td><input id="co1" type="date" class="form-control"></td>
												<td>
												<select id="goodfor1" class="form-control" onchange="onchange_goodfor(this.value,1);">
									<option value=""></option>
						<?php
							$userlist = selectListSQL("SELECT DISTINCT(goodFor) as goodfor FROM room_rates ORDER BY goodFor asc");
							
							foreach ($userlist as $rows => $link) {
									$goodfor = $link['goodfor'];
									
									echo "<option value='$goodfor'>$goodfor</option>";
							}
						?>
													</select></td>
												<td>
													<select class="form-control" id="room_selected1">
														
													</select>
												
												</td>
												
												</tr>
											</table>
											
											
											
										</div>
									</div>
											
								</div>
									

									<div class="col-lg-12 hidden">
										<center>
										<button type="button" class="btn btn-success btn-lg" onclick="addroom()"><i class="fa fa-plus fa-fw"></i>Add</button>
										<button type="button" class="btn btn-primary btn-lg" onclick="nextdetail()"><i class="fa fa-arrow-right fa-fw"></i>Next</button>
										
										</center>
									</div>
                                </div>
								<!-- Details tab-->
                                <div class="tab-pane fade" id="detail">
                                    <br>
									<div class="col-md-12">
									
                                        <select id="guest-list" name="character" onChange="chooseguest()" style="height:34px;padding: 6px 12px;">
											<option value="0"> </option> 
											<?php
											$guestlist = selectListSQL("SELECT * FROM guest where status='ACTIVE'");
											
											foreach ($guestlist as $rows => $link) {
													$guestid = $link['guestID'];
													$guestname = $link['guestName'];
													echo "<option value='$guestid'>$guestname</option>";
											}
											?>
										</select>
                                    
									</div>
									<div class="col-lg-12">
										<div class="list-group">
										<input type="hidden" id="guestid">
										<label class="list-group-item">Guest Type: <span class="guest_values" id="guest_type"></span></label>
										<label class="list-group-item">Guest Name: <span class="guest_values" id="guest_name"></span></label>
										<label class="list-group-item">Address: <span class="guest_values" id="guest_address"></span></label>
										<label class="list-group-item">Contact No.: <span class="guest_values" id="guest_contactno"></span></label>
										<label class="list-group-item">Email: <span class="guest_values" id="guest_email"></span></label>
										<label class="list-group-item">Nationality: <span class="guest_values" id="guest_nationality"></span></label>
										</div>
									</div>
									
									<div class="col-lg-12">
										<center>
										<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#addguest"><i class="fa fa-plus fa-fw"></i>Update</button>
										<!--
										<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#addguest"><i class="fa fa-plus fa-fw"></i>Add Guest</button>
										<button type="button" class="btn btn-primary btn-lg" onclick="nextsummary()"><i class="fa fa-arrow-right fa-fw"></i>Next</button> -->
										</center>
									</div>
                                </div>
								<input type="hidden" id="number_of_rooms">
								<!-- Details tab-->
                                <div class="tab-pane fade" id="summary">
								<br>
								
									<br>
                                    <div class="col-lg-12">
										<div class="panel panel-primary">
											<div class="panel-heading">Guest Name: <span id="guest_name_summary" style="font-weight:bold;font-size:16px;"></span></div>
											<div class="panel-body">
												<div class="table-responsive">
													<table id="summary_details" class="table table-hover">
														<thead>
															<tr>
																<th>Check In</th>
																<th>Check Out</th>
																<th>Room-Good for</th>
																<th>No. Days/Nights</th>
																<th>Rate</th>
																<th>Amount</th>
															</tr>
														</thead>
														<!-- display summary computation -->
														<tbody id="summary_details_content"></tbody>
															
													</table>
												</div>
											</div>
											<div class="panel-footer" style="text-align:right;">Subtotal: <span id="room_subtotal" style="margin-right:105px;"></span></div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="panel panel-primary">
											<div class="panel-heading">Other Charges <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#chargemodal"><i class="fa fa-money fa-fw"></i>Other Charges</button>
											<button type="button" class="btn btn-danger btn-sm" onclick="removecharges();";><i class="fa fa-times fa-fw" ></i>Remove Charges</button>
											</div>
											<input type="hidden" id="other_charges_list">
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-hover" id="other_charges_table">
														<thead>
															<tr>
																<th>Description</th>
																<th>QTY</th>
																<th>Rate</th>
																<th>Amount</th>
															</tr>
														</thead>
														
													</table>
												</div>
											</div>
											<div class="panel-footer" style="text-align: right;">Subtotal: <span id="charges_subtotal" style="margin-right:105px;"></span></div>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="col-md-8" style="text-align: right;">
										<label >VAT (12%): </label>
										</div>
										<div class="col-md-4">
										<label><span id="vat"></span></label>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="col-md-8" style="text-align: right;">
										<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#discountmodal"><i class="fa fa-credit-card fa-fw">
											<label></i>Discount</button>
										</div>
										<div class="col-md-4"><span id="discount">0.00</span></label> 
										
										</div>
										
											
										
									</div>
										
									<div class="col-lg-12">
										<div class="col-md-8" style="text-align: right;">
										<label >Total Amount:</label>
										</div>
										<div class="col-md-4">
										<label>PHP <span id="total_amount"></span></label>
										</div>
									</div>
									
									<div class="col-lg-12">
										<center>
										
										
										<button type="button" class="btn btn-success btn-lg" onclick="savereservation()"><i class="fa fa-arrow-right fa-fw"></i>Save Reservation</button>
										<button type="button" class="btn btn-primary btn-lg" onclick="nextpayment()"><i class="fa fa-arrow-right fa-fw"></i>Save and Accept Payment</button>
										</center>
									</div>
									
                                </div>
                                <div class="tab-pane fade" id="payment">
                                    <br>
                                    <br>
									<div class="col-md-8">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Guest Name: </h4></div>
											<div class="panel-body">
												<br>
												<table class="table table-hover">
														<tbody>
															<tr>
																<td><label>Total Amount: Php 1000.00</label></td>
															</tr>
															<tr>
																<td><label>Payment: Php 1000.00</label></td>
															</tr>
															<tr>
																<td><label>Balance: Php 0.00</label></td>
															</tr>
														</tbody>
												</table>
											</div>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Payment Type</h4></div>
											<div class="panel-body">
												<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#cashmodal"><i class="fa fa-money fa-fw"></i> Cash</button>
												<br>
												<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#creditcardmodal"><i class="fa fa-credit-card fa-fw"></i> Credit Card</button>
												<br>
												<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#bankdepositmodal"><i class="fa fa-bank fa-fw"></i> Bank Deposit</button></center></td>
												<br>
											</div>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>Payment Date</th>
														<th>Payment Type</th>
														<th>Bank Name</th>										
														<th>Reference Number</th>									
														<th>Amount</th>								
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>12/12/12</td>
														<td>Cash</td>
														<td>BDO</td>
														<td>32496487649</td>
														<td>Php 1000.00</td>
													</tr>
													<tr>
														<td>12/12/12</td>
														<td>Cash</td>
														<td>BDO</td>
														<td>32496487649</td>
														<td>Php 1000.00</td>
													</tr>
													<tr>
														<td>12/12/12</td>
														<td>Cash</td>
														<td>BDO</td>
														<td>32496487649</td>
														<td>Php 1000.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        <!-- /#page-wrapper -->
			
			
			
			<!-- Discount Modal -->
				<div class="modal fade" id="discountmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Discount</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Discount:</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>10%</option>
									<option>15%</option>
									<option>25%</option>
									<option>50%</option>
								</select>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
							</div>
						</form>
						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Apply Discount</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="chargemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Other Charges</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<label>Charge:</label>
								<select placeholder="Select Charge" class="form-control" style="margin-bottom: 10px;" onchange="selectothercharges(this.value);" id="charge_select">
								<option value=""></option>
									<?php
									$charge_list = selectListSQL("SELECT * FROM other_charges");
											
									foreach ($charge_list as $rows => $link) {
											$chargeid = $link['chargeID'];
											$particular = $link['particular'];
											$amount = $link['amount'];
											echo "<option value='$chargeid'>$particular - $amount</option>";
									}
									?>
									<!-- <option value="others">Other</option> -->
								</select>
								
								<label>Other Charge</label>
								<input type="hidden" id="other_charge" class="form-control"  value="" disabled>
								<label>Amount:</label>
								<input id="charge_amount" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Quantity of Charge:</label>
								<input id="charge_quantity" type="number" class="form-control" value="1" tabindex="1" style="margin-bottom: 10px;">
							</div>
						</form>
						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button onclick="addcharge();" id="addcharge" type="button" class="btn btn-primary">Add Charge</button>
								
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="cashmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Cash</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Amount:</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
							</div>
						</form>
						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Save Payment</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="creditcardmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Credit Card</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Name:</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Card Type:</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>Trap Card</option>
									<option>Credit Card</option>
									<option>Magic Card</option>
								</select>
								<label>Reference Number:</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Amount:</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
							</div>
						</form>
						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Save Payment</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="bankdepositmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Credit Card</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Name:</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Card Type:</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>Trap Card</option>
									<option>Credit Card</option>
									<option>Magic Card</option>
								</select>
								<label>Reference Number:</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Amount:</label>
								<input id="" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
							</div>
						</form>
						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Save Payment</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
			
			<!-- Modal -->
				<div class="modal fade" id="addguest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Add Guest</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Guest Type</label>
								<select class="form-control" style="margin-bottom: 10px;">
									<option>Type A</option>
									<option>Type O</option>
									<option>Type AB</option>
								</select>
								<label>Guest Name</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Address</label>
								<textarea class="form-control" rows="3" style="margin-bottom: 10px;"></textarea>
								<label>Contact No.</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Email</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Nationality</label>
								<input id="" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
  
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveuser" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updateuser" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<!-- end modal-->
    </div>

<?php
include('footer.php');
?>