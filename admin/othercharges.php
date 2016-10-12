<?php
include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-money fa-1x"></i> Other Charges
						<div class="pull-right">
								<button id="adduserbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addUser">
									<i class="fa fa-plus-circle"></i> Add Charge
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
								<h4 class="modal-title" id="myModalLabel">Add Charge</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								<input type="hidden" id="chargeid" value="">
								<label>Charge Title</label>
								<input id="charge_title" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
								<label>Description</label>
								<textarea id="description" class="form-control" rows="3" style="margin-bottom: 10px;"></textarea>
								<label>Amount</label>
								<input id="amount" type="number" class="form-control" value="" tabindex="1" style="margin-bottom: 10px;">
  
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="savecharge" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updatecharge" type="button" class="btn btn-primary" disabled>Update</button>
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
																<th>Charge Title</th>
																<!-- <th>Description</th> -->
																<th>Amount</th>
																<th>Action</th>
															</tr>
														</thead>
					<?php
						include_once("include/functions.php");			
						$userlist = selectListSQL("SELECT * FROM other_charges");
						foreach ($userlist as $rows => $link) {
							$chargeID = $link['chargeID'];
							$charge_title = $link['particular'];
							$description = $link['description'];
							$amount = $link['amount'];
							
							
							echo "<tr class='odd gradeX'>";
							echo "<td>$charge_title</td>";
							//echo "<td>$description</td>";
							echo "<td>$amount</td>";

							//hidden edit button class
							echo "<td class='center'> 
								
								<button class='btn btn-success' onClick='editcharge($chargeID)'  data-toggle='modal' data-target='#editUser'><i class='fa fa-edit'></i></button>
								<button class='btn btn-danger notification' id='notification' onClick='deletecharge($chargeID)'><i class='fa fa-times'></i></button>
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