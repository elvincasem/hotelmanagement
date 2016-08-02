<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-key fa-1x"></i>Rooms
						<div class="pull-right">
								<button id="adduserbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addUser">
									<i class="fa fa-plus-circle"></i> Add Room
								</button>
                                
                            </div></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
			
			<!-- Modal -->
				<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Add Room</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<label>Room Name</label>
								<input id="userusername" class="form-control" value="" tabindex="1">
								<label>Building</label>
								<input id="userpassword" class="form-control" value="" tabindex="2"> 
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
			
			
			
			
            <div class="row">
								<div class="col-lg-12">
								<div class="panel panel-default">
											<div class="panel-heading">
											   Search Users
											</div>
								<div class="panel-body">
												<div class="dataTable_wrapper">
													<table class="table table-striped table-bordered table-hover" id="dataTables-example">
														<thead>
															<tr>
																<th>Room Name</th>
																<th>Building</th>
																<th>Action</th>
															</tr>
														</thead>
					<?php
						include_once("include/functions.php");			
						$userlist = selectListSQL("SELECT * FROM room");
						foreach ($userlist as $rows => $link) {
							$uid = $link['roomID'];
							$roomname = $link['roomName'];
							//$password = $link['password'];
							$building = $link['building'];
							
							
							echo "<tr class='odd gradeX'>";
							echo "<td>$roomname</td>";
							echo "<td>$building</td>";
							//hidden edit button class
							echo "<td class='center'> 
								
								<button class='btn btn-primary' onClick='editemployee($uid)'  data-toggle='modal' data-target='#addrate'><i class='fa fa-plus'></i></button>
								<button class='btn btn-success' onClick='editemployee($uid)'  data-toggle='modal' data-target='#editUser'><i class='fa fa-edit'></i></button>
								<button class='btn btn-danger notification' id='notification' onClick='deleteuser($uid)'><i class='fa fa-times'></i></button>
							</td>";
							echo "</tr>";
						}
						?>
															
															
															
															
															

														</tbody>
													</table>
												</div>
								
				
											</div>
											
											</div><!-- table end -->
											</div><!-- panel default end-->
											
											</div> <!-- row end-->
			

        </div>
        <!-- /#page-wrapper -->

    </div>

	
	<!-- Modal -->
				<div class="modal fade" id="addrate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Add Rate</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<center>
									<div class="col-lg-12">
									<label>Room Name</label>
									</div>
									<div class="col-lg-12">
									<label>Building</label>
									</div>
								</center>
								<div class="col-lg-12">
									<div class="col-xs-6 col-sm-3">
									<label>Good for</label>
									<input id="rategoodfor" class="form-control" value="" tabindex="1">
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<label>Peak Season</label>
									<input id="ratepeakseason" class="form-control" value="" tabindex="2">
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<label>Super Season</label>
									<input id="rateusperseason" class="form-control" value="" tabindex="3">
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<label>Low Season</label>
									<input id="ratelowseason" class="form-control" value="" tabindex="4">
									</div>
								</div>
								<br>
								<div class="col-lg-12">
									<br>
									<center>
										<button class="btn btn-primary">
										Add to Rates
										</button>
									</center>
									<br>
								</div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Good for</th>
                                            <th>Peak Season</th>
                                            <th>Super Season</th>
                                            <th>Low Season</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
												<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
											</td>
                                        </tr>
										<tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
												<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
											</td>
                                        </tr>
                                    </tbody>
                                </table>
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
	
<?php
include('footer.php');
?>