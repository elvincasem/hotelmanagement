<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:#000;"><i class="fa fa-book fa-1x"></i>Reservations
					<div class="pull-right">
                                <div class="btn-group">
									<a href="addreservation.php" class="btn btn-primary btn-lg"> 
                                        Add Reservation
									</a>
                                </div>
                            </div>
					</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
				<span class="pull-left text-muted small" style="margin-left: 20px; margin-right: 10px; margin-top: 10px; margin-bottom: 10px;">
				Sort by
				</span>
				<span class="pull-left text-muted small"  style="margin-bottom: 15px;">
					<select class="form-control">
						<option>Check In</option>
						<option>Check Out</option>
					</select>
				</span>
				
				<span class="pull-left text-muted small" style="margin: 10px;">
				Show
				</span>
				<span class="pull-left text-muted small">
					<select class="form-control" >
						<option>All</option>
						<option>All</option>
						<option>All</option>
					</select>
				</span>
								<div class="col-lg-12">
								<div class="panel panel-default">
											<div class="panel-heading">
											   View Reservation
											</div>
											
								<div class="panel-body">
												<div class="dataTable_wrapper">
													<table class="table table-striped table-bordered table-hover" id="dataTables-example">
														<thead>
															<tr>
																<th>Booking ID</th>
																<th>Booking Date</th>
																<th>Status</th>
																<th>Room</th>
																<th>Check In</th>
																<th>Check Out</th>
																<th>Guest</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr class="odd gradeX">
																<td>2016-0101</td>
																<td>02/10/2016</td>
																<td>Ready</td>
																<td>Room 143</td>
																<td>No</td>
																<td>Yes</td>
																<td>Mr. Yabes</td>
																
																<td class="center">
																<button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="top" title="Down Payment"><i class="fa fa-eye"></i></button>
																
																<button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="top" title="Down Payment"><i class="fa fa-toggle-down"></i></button>
																
																<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Payment"><i class="fa fa-money"></i></button>
																
																<button type="button" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Check In"><i class="fa fa-level-down"></i></button>
																
																<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Check Out"><i class="fa fa-level-up"></i></button>
																
																<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil"></i></button>
																
																<button type="button" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></button>
																<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Cancel"><i class="fa fa-times"></i></button></td>
															</tr>
														</tbody>
													</table>
											
												</div>
									
									<!--<div class="col-lg-12">
										<div class="list-group">
										<label class="list-group-item">Total Bill: </label>
										<label class="list-group-item">Deposit Amount:</label>
										<label class="list-group-item">Total Payment:</label>
										<label class="list-group-item">Balance:</label>
										</div>
									</div>-->
									
								
								
								</div>
											
								</div><!-- table end -->
											</div><!-- panel default end-->
											
											</div> <!-- row end-->
        </div>
        <!-- /#page-wrapper -->

    </div>
	
	

<?php
include('footer.php');
?>