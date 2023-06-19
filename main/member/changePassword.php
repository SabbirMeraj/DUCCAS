<?php
	include 'session.php';
	
	
	if(!empty($_POST['oldPassword']) && !empty($_POST['newPassword']) && isset($_POST['send'])){
	$sql = "SELECT * FROM employee where Employee_ID='$_SESSION[login_user]' and Password='$_POST[oldPassword]'" ;
	$result = mysqli_query($conn, $sql);
	
	
	echo mysqli_num_rows($result);
	if (mysqli_num_rows($result)==1) {
   
   		 $sql = "Update employee SET Password='$_POST[newPassword]' where Employee_ID='$_SESSION[login_user]' and
    		 Password='$_POST[oldPassword]'" ;
    		 
    		 if (mysqli_query($conn, $sql)) {
   				 echo "New record created successfully";
			} else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	} 
	else {
  		echo "WRONG";
	}
}
?>
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
        <label class="col-md-4 control-label">Old Password:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="oldPassword" placeholder="Old Password" class="form-control"  type="password">
          </div>
        </div>
      </div>
	  
	  
	  <div class="form-group">
        <label class="col-md-4 control-label">New Password:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="newPassword" placeholder="New Password" class="form-control"  type="password">
          </div>
        </div>
      </div>
	  
	  
    
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
          <button type="submit" class="btn btn-warning btn-block" name="send">Submit <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>
    </fieldset>
  </form>
	<script type="text/javascript">
 
   $(document).ready(function() {
    $('#mem_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
            oldPassword: {
                validators: {
                     
                    notEmpty: {
                        message: 'Please supply lounge ID'
                    }
                }
            },
			 newPassword: {
                validators: {
                     
                    notEmpty: {
                        message: 'Please supply lounge ID'
                    }
                }
            }
			
		}
        })
			
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#mem_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


 
 </script>		
			
				</div>
				</div>
				<div class="col-sm-2">&nbsp;</div>
				</div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>

