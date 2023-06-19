
	<?php include 'header.php' ?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      
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
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="name" placeholder="Name" class="form-control"  type="text" pattern="[A-Za-z]{5,15}">
          </div>
        </div>
      </div>
      
     
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Department</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="department" placeholder="Department" class="form-control"  type="text" pattern="[A-Za-z]{3,15}">
          </div>
        </div>
      </div>
      
    
     
      
      <div class="form-group">
        <label class="col-md-4 control-label">Designation</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="designation" placeholder="Designation" class="form-control" type="text" pattern="[A-Za-z]{5,15}" >
          </div>
        </div>
      </div>
      
         <div class="form-group">
        <label class="col-md-4 control-label">Contact Number</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="contactNumber" placeholder="Contact Number" class="form-control" type="text" pattern="01[5-9][0-9]{8}">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">Present Address</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="presentAddress" placeholder="Present Address" class="form-control" type="text" pattern="[A-Za-z]{5,15}">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">Permanent Address</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="permanentAddress" placeholder="Permanent Address" class="form-control" type="text"  pattern="[A-Za-z]{5,15}">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">Occupation</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="occupation" placeholder="Occupation" class="form-control"  type="text"  pattern="[A-Za-z]{5,15}">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">Membership ID:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="membershipId" placeholder="Membership ID" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{3,5}">
          </div>
        </div>
      </div>
	  
	   <div class="form-group">
        <label class="col-md-4 control-label">Bank Account No:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="bankAccountNo" placeholder="Bank Account No" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{5,8}">
          </div>
        </div>
      </div>
      
	  
	  <div class="form-group">
        <label class="col-md-4 control-label">Recommender's Membership ID:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="recommenderMembershipId" placeholder="Membership ID" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{3,5}">
          </div>
        </div>
      </div>
	  
	   <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" placeholder="E-Mail Address" class="form-control"  type="email">
          </div>
        </div>
      </div>
	  
	  
    
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning btn-block" >Update <span class="glyphicon glyphicon-send"></span></button>
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


