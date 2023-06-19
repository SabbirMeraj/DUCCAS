<?php
	include 'session.php';


	if(isset($_POST['send'])){

		$pwd=12345;
		
		$sql = "SELECT Designation_ID FROM Subscription where Designation='$_POST[designation]'" ;
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		
			while($row = mysqli_fetch_assoc($result)) {
				$desid = $row["Designation_ID"];
			}
		}
		else {
			$desid=5;
		}


		$sql = "INSERT INTO member (Membership_ID, Designation_ID,Name,Contact_Number,Present_Address,Permanent_Address,Email_Address,Password)
		VALUES ('$_POST[membershipId]', $desid ,'$_POST[name]','$_POST[contactNumber]','$_POST[presentAddress]','$_POST[permanentAddress]','$_POST[email]',$pwd)";

		if (mysqli_query($conn, $sql)) {
			 $message = "Successfully Inserted";
		echo "<script type='text/javascript'>alert('$message');</script>";
		}

		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}


		$type=$_POST['type'];


		if(strcmp($type,"gm")==0){
			$sql = "INSERT INTO general_member (Membership_ID, Department)
			VALUES ('$_POST[membershipId]', '$_POST[department]')";

			if (mysqli_query($conn, $sql)) {
    			
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

		}

		else{
			$sql = "INSERT INTO associate_member (Membership_ID,Occupation,Bank_AC_No,Recommender_Membereship_ID)
				VALUES ('$_POST[membershipId]', '$_POST[occupation]','$_POST[bankAccountNo]','$_POST[recommenderMembershipId]')";

			if (mysqli_query($conn, $sql)) {
    			
			}
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

		}

		mysqli_close($conn);

	}
?> 



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
				<form class="form-horizontal" action="addMember.php" method="post"  id="mem_form">
					<fieldset>
      
						<div class="form-group">
							<label class="col-xs-3 control-label">&nbsp;</label>
							<div class="col-xs-5">
								<div class="radio">
									<label>
										<input type="radio" name="type" value="gm" onclick="myFunction()"> General Member
									</label>
								</div>
								
								<div class="radio">
									<label>
										<input type="radio"  name="type" value="am" onclick="myFunction()"/> Associate Member
									</label>
								</div>
            
							</div>
						</div>



    
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group"> 
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input  id="name" name="name" placeholder="Name" class="form-control"  type="text" pattern="[A-Za-z]{5,15}">
								</div>
							</div>
						</div>
      
     
      
						<div class="form-group">
							<label class="col-md-4 control-label" >Department</label>
							<div class="col-md-6  inputGroupContainer">
								<div class="input-group"> 
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
									<input id="department" name="department" placeholder="Department" class="form-control"  type="text" pattern="[A-Za-z]{3,15}">
								</div>
							</div>
						</div>
      
    
     
      
						<div class="form-group">
							<label class="col-md-4 control-label">Designation</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<input id="designation" name="designation" placeholder="Designation" class="form-control" type="text" pattern="[A-Za-z]{5,15}" >
							</div>
							</div>
						</div>
						
							<div class="form-group">
							<label class="col-md-4 control-label">Contact Number</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								<input id="contactNumber" name="contactNumber" placeholder="Contact Number" class="form-control" type="text" pattern="01[5-9][0-9]{8}">
							</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Present Address</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
								<input id="presentAddress" name="presentAddress" placeholder="Present Address" class="form-control" type="text" pattern="[A-Za-z]{5,15}">
							</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Permanent Address</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
								<input id="permanentAddress" name="permanentAddress" placeholder="Permanent Address" class="form-control" type="text"  pattern="[A-Za-z]{5,15}">
							</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Occupation</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<input  id="occupation" name="occupation" placeholder="Occupation" class="form-control"  type="text"  pattern="[A-Za-z]{5,15}">
							</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Membership ID:</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<input id="membershipId" name="membershipId" placeholder="Membership ID" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{3,5}">
							</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Bank Account No:</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<input id="bankAccountNo" name="bankAccountNo" placeholder="Bank Account No" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{5,8}">
							</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-4 control-label">Recommender's Membership ID:</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<input id="recommenderMembershipId" name="recommenderMembershipId" placeholder="Membership ID" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{3,5}">
							</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6  inputGroupContainer">
							<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input id="email" name="email" placeholder="E-Mail Address" class="form-control"  type="email">
							</div>
							</div>
						</div>
						
						
						
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-6">
							<button type="submit" class="btn btn-warning btn-block" name="send" >Submit <span class="glyphicon glyphicon-send"></span></button>
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
            name: {
                validators: {
                       
                        notEmpty: {
                        message: 'Please supply your name'
                    }
                }
            },
             department: {
                validators: {
                    
                    notEmpty: {
                        message: 'Please supply your department'
                    }
                }
            },
           designation: {
                validators: {
                   
                    notEmpty: {
                        message: 'Please supply your designation'
                    }
                }
            },
            contactNumber: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    }
                   
                }
            },
			
            presentAddress: {
                validators: {
                    
                    notEmpty: {
                        message: 'Please supply your present address'
                    }
                }
            },
            permanentAddress: {
                validators: {
                     
                    notEmpty: {
                        message: 'Please supply your permanent address'
                    }
                }
            },
            membershipId: {
                validators: {
                  
                    notEmpty: {
                        message: 'Please supply your membership ID'
                    }
                }
            },
            occupation: {
                validators: {
                     
                    notEmpty: {
                        message: 'Please supply your occupation'
                    }
                }
            },
		bankAccountNo: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your bank account no.'
                    }
                   
                }
            },
			recommenderMembershipId: {
                validators: {
                    
                    notEmpty: {
                        message: 'Please supply recommender membership ID'
                    }
                }
            },
	 email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
					
	
			
            
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
 
 <script>
 
function myFunction() {
	
	var radios = document.getElementsByName('type');

for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
		
		if(radios[i].value=="gm"){
			
		document.getElementById("department").disabled = false;
		 document.getElementById("occupation").disabled = true;
		 document.getElementById("recommenderMembershipId").disabled = true;
		 document.getElementById("bankAccountNo").disabled = true;
      
      
	
		}
		
		else{
			document.getElementById("department").disabled = true;
		 document.getElementById("occupation").disabled = false;
		 document.getElementById("recommenderMembershipId").disabled = false;
		 document.getElementById("bankAccountNo").disabled = false;
			
		}
    }
}


    
}
 
 </script>
 
			
				</div>
				</div>
				<div class="col-sm-3">&nbsp;</div>
				</div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>


 
