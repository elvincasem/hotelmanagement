<?php
include('header.php');
?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:#000;"><i class="fa fa-gear fa-1x"></i>Settings
						</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
								<div class="col-lg-12">
								<div class="panel panel-default">
											<div class="panel-heading">
											   <i class="fa fa-barcode fa-fw"></i>Settings
											</div>
								<div class="panel-body">
		
									<div class="list-group">
									<!--
										<span class="list-group-item">
										<label>Beginning</label>
										<input class="form-control">
										</span>
										
										<span class="list-group-item">
										<label>Ending</label>
										<input class="form-control">
										</span>
										
										-->
										<span class="list-group-item">
										<label>Current Season</label>
										<select class="form-control">
										<?php
										include_once("include/functions.php");			
										$current_season = singleSQL("SELECT settingsvalue FROM settings where settingsname='SEASON'");
										echo "<option selected='selected' value='$current_season'>$current_season</option>";
										?>
										
											
											<option value="SUPER PEAK">SUPER PEAK</option>
											<option VALUE="PEAK">PEAK</option>
											<option VALUE="LOW">LOW</option>
										</select>
										</span>
									</div>

									<button  type="button" id="updatesettings" onclick="updatesettings()" class="btn btn-primary">Update</button>
									
									
								</div>
								
									</div><!-- table end -->
								</div><!-- panel default end-->
									
						</div> <!-- row end-->
        </div>
        <!-- /#page-wrapper -->

    

<?php
include('footer.php');
?>