<?php
include('header.php');
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><i class="fa fa-calendar fa-1x"></i> Dashboard
					<div class="btn-group">
									<a href="addreservation.php" class="btn btn-primary btn-md"> 
                                        New Reservation
									</a>
					</div>
					<div class="btn-group">
									<a href="reservationlist.php" class="btn btn-primary btn-md"> 
                                        Reservation List
									</a>
					</div>
					<div class="pull-right">
                                
                            </div>
					</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<div class="panel-heading">
                            <i class="fa fa-calendar fa-fw"></i> July 27, 2016
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
								<div class="col-lg-12">
									<div class="col-xs-6 col-sm-3">
										<select class="form-control">
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
									</div>
									<div class="col-xs-6 col-sm-3">
										<select class="form-control">
											
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
											<option>2019</option>
											<option>2020</option>
											<option>2021</option>
											<option>2022</option>
										</select>
									</div>
									
									<div class="col-xs-6 col-sm-3">
									<a href="index.php"><span class='btn btn-primary'>View </span></a>
									</div>
								</div>
						<br>
						<br>
						<br>
						<div class="panel panel-primary">
                        <div class="panel-heading">
							<center>
								<a href="#" class="btn btn-default btn-circle"><i class="fa fa-chevron-left"></i></a>
								<label> <?php echo date('F Y'); ?></label>
								<a href="#" class="btn btn-default btn-circle"><i class="fa fa-chevron-right"></i></a>
								
								<?php 
								if($_GET['page']==2){
									echo "<span class='pull-right text-muted small'><a href='?page=1' class='btn btn-default'><i class='fa fa-chevron-left'></i> 1-16</a></span>";
								}else{
									echo "<span class='pull-right text-muted small'><a href='?page=2' class='btn btn-default'>17-31 <i class='fa fa-chevron-right'></i></a></span>";
								}
								
								
								?>
							</center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rooms</th>
											<?php 
											if($_GET['page']=='2'){
												$from = 17;
												$to = 31;
												
											}else{
												$from = 1;
												$to = 16;
											}
											
											for($ctr=$from;$ctr<=$to;$ctr++){
												echo "<th>$ctr</th>";
												
											}
											
											?>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									
		<?php
			include_once("include/functions.php");			
			$roomlist = selectListSQL("SELECT * FROM room ORDER BY roomID ASC");
			foreach ($roomlist as $rows => $link) {
				$rid = $link['roomID'];
				$roomname = $link['roomName'];
							
				echo "<tr>";
				echo "<td><center><h5>$roomname</h5></center></td>";
				for($ctr=$from;$ctr<=$to;$ctr++){
					echo "<td id='marker'>";
					echo "<img src='images/none.jpg' style='width:100%;'>";
					echo "</td>";
				}

				echo "</tr>";
			}
		?>
									
									
									<!--
									
									
									
									
                                        <tr>
                                            <td><center><h4>Room 1</h4></center></td>
                                            <td id="marker">
												<div style="background-image:url(images/none.jpg);height:64px;background-repeat:no-repeat;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/pm.jpg);height:64px;background-repeat:no-repeat;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/am.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/pm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/am.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/pm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/am.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
											
										
                                        </tr>
										<tr>
                                            <td><center><h4>Room 2</h4></center></td>
                                            <td id="marker">
												<div style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<img src="images/pm.jpg">
												
											</td>
											<td id="marker">
												<img src="images/ampm.jpg">
											</td>
											<td id="marker">
												<div  style="background-image:url(images/am.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/pm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/am.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/pm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/am.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/ampm.jpg);height:64px;">&nbsp;</div>
											</td>
											<td id="marker">
												<div  style="background-image:url(images/none.jpg);height:64px;">&nbsp;</div>
											</td>
                                        </tr>
										<tr>
                                            <td><center><h4>#3</h4></center></td>
                                            <td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>
											<td>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">AM
                                                </label>
												</div>
												<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">PM
                                                </label>
												</div>
											</td>  
                                        </tr> -->
										
									</tbody>
                                </table>
                            </div>
                        </div>
						</div>								
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>
            <!-- /.row -->
            <!--<div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <!--<div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Admin logged in
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 Items Checked out
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> John Doe Requested an Item
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Lenovo Laptop has Added
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>

                            </div>
                            <!-- /.list-group -->
                            <!--<a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    <!--</div>
                    
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
<style>
#marker{
	padding:0px !important;
}
</style>
<?php
include('footer.php');
?>