
	<?php include 'header.php' ?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4> </h4>
      
    <?php include 'menu.php' ?>
    </div>

    <div class="col-sm-9">
      <div class="row right">
			<div class="col-sm-2">&nbsp;</div>
			<div class="col-sm-8">
				<div id="inputForm">
				<h3>Fill up the form </h3>
				<form class="form-horizontal" action=" " method="post"  id="mem_form">
						<fieldset>
      
    
      
      
							
      
							<div class="form-group">
								
								<label class="col-md-4 control-label">Month</label>
									<div class="col-md-6 selectContainer">
										<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
											<select name="month" class="form-control selectpicker" required >
												<option value="">Choose a month</option>
												
												<option value="January">January</option>
												<option value="Febuary">Febuary</option>
												<option value="March">March</option>
												<option value="April">April</option>
												<option value="May">May</option>
												<option value="June">June</option>
												<option value="July">July</option>
												<option value="August">August</option>
												<option value="September">September</option>
												
												<option value="October">October</option>
												<option value="November">November</option>
												<option value="December">December</option>
											</select>
										</div>
									</div>

								

							</div>
        
    
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-6">
									<button type="submit" class="btn btn-warning btn-block" name="send">Update <span class="glyphicon glyphicon-send"></span></button>
								</div>
							</div>
	  
	  
	  
						</fieldset>
					</form>
			
				</div>
				</div>
				<div class="col-sm-2">&nbsp;</div>
				</div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>

