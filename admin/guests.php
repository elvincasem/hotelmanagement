<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-user fa-1x"></i> Guests
						<div class="pull-right">
								<button id="addguestbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addGuest">
									<i class="fa fa-plus-circle"></i> Add Guest
								</button>
                            </div></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
			
			<!-- Modal -->
				<div class="modal fade" id="addGuest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Add Guest</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="guestid" value="">
								<label>Guest Type</label>
								<select name="guest_type" id="guest_type" class="form-control" style="margin-bottom: 10px;">
									<option value="INDIVIDUAL">INDIVIDUAL</option>
									<option value="COMPANY">COMPANY</option>
									
								</select>
								<label>Guest Name</label>
								<input id="guest_name" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Address</label>
								<textarea id="address" class="form-control" rows="3" style="margin-bottom: 10px;" tabindex="2"></textarea>
								<label>Contact No.</label>
								<input id="contact_no" class="form-control" value="" tabindex="3" style="margin-bottom: 10px;">
								<label>Email</label>
								<input id="email" class="form-control" value="" tabindex="4" style="margin-bottom: 10px;">
								<label>Nationality</label>
								<input id="nationality" class="form-control" value="" tabindex="5" style="margin-bottom: 10px;">
  
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="saveguest" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updateguest" type="button" class="btn btn-primary" disabled>Update</button>
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
													<table class="table table-striped table-bordered table-hover" id="dataTables-guest">
														<thead>
															<tr>
																<th>Guest Type</th>
																<th>Guest Name</th>
																<th>Address</th>
																<th>Contact No.</th>
																<th>Email</th>
																<th>Nationality</th>
																<th style="width:60px;">Action</th>
															</tr>
														</thead>
					<?php
						include_once("include/functions.php");			
						$userlist = selectListSQL("SELECT * FROM guest where status='ACTIVE'");
						foreach ($userlist as $rows => $link) {
							$uid = $link['guestID'];
							//$username = $link['userName'];
							$guesttype = $link['guestType'];
							$guestname = $link['guestName'];
							$address = $link['address'];
							$contactNo = $link['contactNo'];
							$email = $link['eMail'];
							$nationality = $link['nationality'];
							//$username = $link['fb'];
							//$password = $link['password'];
							$usertype = $link['userType'];
							
							
							echo "<tr class='odd gradeX'>";
							echo "<td>$guesttype</td>";
							echo "<td>$guestname</td>";
							echo "<td>$address</td>";
							echo "<td>$contactNo</td>";
							echo "<td>$email</td>";
							echo "<td>$nationality</td>";

							//hidden edit button class
							echo "<td class='center'> 
								<button class='btn btn-success' onClick='editguest($uid)'  data-toggle='modal' data-target='#addGuest'><i class='fa fa-edit'></i></button><button class='btn btn-danger notification' id='notification' onClick='deleteguest($uid)'><i class='fa fa-times'></i></button>
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

<?php
include('footer.php');
?>