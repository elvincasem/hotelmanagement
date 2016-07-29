<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-book fa-1x"></i> New Reservation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Date</a>
                                </li>
                                <li><a href="#detail" data-toggle="tab">Detail</a>
                                </li>
                                <li><a href="#summary" data-toggle="tab">Summary</a>
                                </li>
                                <li><a href="#payment" data-toggle="tab">Payment</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <br>
									
									 <div class="col-lg-12">
										<div class="panel panel-primary">
											<div class="panel-heading">
											<label><h4>Reservation ID </h4></label>
											<label><input type="number" class="form-control" style="margin-left: 15px;"></label>
											</div>
											<div class="panel-body">
												<div class="col-lg-12">
													<div class="col-xs-6 col-sm-3">
														<label>Check In</label>
														<input type="date" class="form-control">
													</div>
												
													<div class="col-xs-6 col-sm-3">
														<label>Check Out</label>
														<input type="date" class="form-control">
													</div>
													
													<div class="col-xs-6 col-sm-3">
														<label>Room</label>
															<select class="form-control">
																<option>AVA</option>
																<option>RAIZA</option>
																<option>SEBAY</option>
															</select>
													</div>
													
													<div class="col-xs-6 col-sm-3">
														<label>Good for</label>
															<select class="form-control">
																<option>1</option>
																<option>2</option>
																<option>3</option>
															</select>
													</div>
												</div>
											</div>
											<div class="panel-footer">
											<h4 style="text-align: right;">Total Amount: Php 1000.00</h4>
											</div>
										</div>
									</div>

									<div class="col-lg-12">
										<center>
										<button type="button" class="btn btn-success btn-lg"><i class="fa fa-plus fa-fw"></i>Add</button>
										<button type="button" id="datenext" onclick="datenext()" class="btn btn-success btn-lg"><i class="fa fa-arrow-right fa-fw" ></i>Next
										</button>
										</center>
									</div>
                                </div>
                                <div class="tab-pane fade" id="detail">
                                    <br>
									<div class="col-md-12">
									<div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
									</div>
									<div class="col-lg-12">
										<div class="list-group">
										<label class="list-group-item">Guest Type: </label>
										<label class="list-group-item">Guest Name:</label>
										<label class="list-group-item">Address:</label>
										<label class="list-group-item">Contact No.:</label>
										<label class="list-group-item">Email:</label>
										<label class="list-group-item">Nationality:</label>
										</div>
									</div>
									
									<div class="col-lg-12">
										<center>
										<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#addguest"><i class="fa fa-plus fa-fw"></i>Add Guest</button>
										<a href="#summary" class="btn btn-primary btn-lg" data-toggle="tab"><i class="fa fa-arrow-right fa-fw"></i>Next</a>
										</center>
									</div>
                                </div>
                                <div class="tab-pane fade" id="summary">
									<br>
                                    <div class="col-lg-12">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Guest Name: Mr. Yabes</h4></div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-hover">
														<thead>
															<tr>
																<th>Room</th>
																<th>Good for</th>
																<th>Amount</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Ava</td>
																<td>2</td>
																<td>Php 1000.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="panel-footer"><h4 style="text-align: right;">Subtotal: Php 1000.00</h4></div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Other Charges</h4></div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-hover">
														<thead>
															<tr>
																<th>Description</th>
																<th>Amount</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Extra</td>
																<td>Php 100.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="panel-footer"><h4 style="text-align: right;">Subtotal: Php 1000.00</h4></div>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="col-md-10" style="text-align: right;">
										<label >VAT (12%): </label>
										</div>
										<div class="col-md-2">
										<label>Php 50.00</label>
										</div>
									</div>
									
									<div class="col-lg-12">
										<div class="col-md-10" style="text-align: right;">
										<label >Discount: </label>
										</div>
										<div class="col-md-2">
										<label>Php 10.00</label>
										</div>
									</div>
										
									<div class="col-lg-12">
										<div class="col-md-10" style="text-align: right;">
										<label ><h4>Total Amount:</h4></label>
										</div>
										<div class="col-md-2">
										<label><h4>Php 1000.00</h4></label>
										</div>
									</div>
									
									<div class="col-lg-12">
										<center>
										<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#discountmodal"><i class="fa fa-credit-card fa-fw"></i>Discount</button>
										<a href="#payment" class="btn btn-primary btn-lg" data-toggle="tab"><i class="fa fa-arrow-right fa-fw"></i>Next</a>
										</center>
									</div>
									
                                </div>
                                <div class="tab-pane fade" id="payment">
                                    <br>
                                    <br>
									<div class="col-md-8">
										<div class="panel panel-primary">
											<div class="panel-heading"><h4>Guest Name: Mr. Yabes</h4></div>
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
								<label>Amount:</label>
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