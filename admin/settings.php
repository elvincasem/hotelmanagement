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
											   <i class="fa fa-barcode fa-fw"></i>OR Number Series
											</div>
								<div class="panel-body">
		
									<div class="list-group">
										<span class="list-group-item">
										<label>Beginning</label>
										<input class="form-control">
										</span>
										
										<span class="list-group-item">
										<label>Ending</label>
										<input class="form-control">
										</span>
										
										
										<span class="list-group-item">
										<label>Input Season</label>
										<select class="form-control">
											<option>SUPER PEAK</option>
											<option>PEAK</option>
											<option>LOW</option>
										</select>
										</span>
									</div>

									<a href="#" class="btn btn-primary btn-block">Update</a>
									
								</div>
								
									</div><!-- table end -->
								</div><!-- panel default end-->
									
						</div> <!-- row end-->
        </div>
        <!-- /#page-wrapper -->

    

<?php
include('footer.php');
?>