<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-user fa-1x"></i> Users
						<div class="pull-right">
								<button id="adduserbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addUser">
									<i class="fa fa-plus-circle"></i> Add User
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
								<h4 class="modal-title" id="myModalLabel">Add User</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="eid" value="">
								<input type="hidden" id="unamevalidity" value="invalid">
								<label>Name</label>
								<input id="user_name" class="form-control" value="" tabindex="1">
								<label>Username</label>
								<input id="userusername"  onKeyup="verifyusername();" class="form-control" value="" tabindex="2">
								<label>Password</label>
								<input type="password" id="userpassword" class="form-control" value="" tabindex="3">
								<label>User Type</label>
								<select name="user_type" id="user_type" class="form-control" style="margin-bottom: 10px;">
									<option value="staff">Staff</option>
									<option value="admin">Admin</option>
									
								</select>
								
								                                            
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
																<th>Username</th>
																<th>Name</th>
																<th>User Type</th>
																<th>Action</th>
															</tr>
														</thead>
					<?php
						include_once("include/functions.php");			
						$userlist = selectListSQL("SELECT * FROM users ORDER BY userid DESC");
						foreach ($userlist as $rows => $link) {
							$uid = $link['userID'];
							$username = $link['userName'];
							$name = $link['name'];
							//$password = $link['password'];
							$usertype = $link['userType'];
							
							
							echo "<tr class='odd gradeX'>";
							echo "<td>$username</td>";
							echo "<td>$name</td>";
							echo "<td>$usertype</td>";
							//hidden edit button class
							echo "<td class='center'> 
								
								<button class='btn btn-success' onClick='editemployee($uid)'  data-toggle='modal' data-target='#addUser'><i class='fa fa-edit'></i></button>
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

<?php
include('footer.php');
?>