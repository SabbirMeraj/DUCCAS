<?php include 'session.php'; ?>
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
								<label class="col-md-4 control-label">Membership ID:</label>
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group"> 
										<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<input name="membershipId" placeholder="Membership ID" class="form-control"  type="text" pattern="^[0-9]{3,5}$">
									</div>
								</div>
							</div>
      
      
							<div class="col-sm-12"><b>From </b><br/> <br/></div>
      
							<div class="form-group">
								<label class="col-md-4 control-label">Date</label>
								
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group">  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="date" name="Date" class="form-control">
									</div>
								</div>
							</div>
								
		
							<div class="col-sm-12"><b>To</b><br/> <br/></div>
      
							<div class="form-group">
								<label class="col-md-4 control-label">Date</label>
								
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group">  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="date" name="Date" class="form-control">
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

