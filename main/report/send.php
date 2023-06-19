<?php
	include 'session.php';
	
	
	if(!empty($_POST['loungeName']) && !empty($_POST['item'])){
	

    	 $sql="select Lounge_ID from lounge where Lounge_name='$_POST[loungeName]'";
		$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result) > 0) {
    				
					while($row = mysqli_fetch_assoc($result)) {
    						$loungeid=$row['Lounge_ID'];;
													
						
													
					}
				}
				
				
				
   	$item=$_POST['food'];
	$amnt=$_POST['item'];
 
	$j=1;
	$index=0;

	
   	for($i=0;$i<count($item);$i++){
   
   echo $item[$i];
   		if(($item[$i])){
			$index=$i-$j;
			
			$sql="select Item_ID from consumer_item where Item_name='$item[$i]'";
		
   		
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	
		$itemid=$row['Item_ID'];
		
   		$amount= $amnt[$index];
		$j=$j+1;
   		
   		}	
   	
   	}
   	
   	$sql = "INSERT INTO send_food( Item_ID,Lounge_ID,Date,Amount)
VALUES ($itemid,$loungeid,'$_POST[Date]',$amount)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   		 
		
	}
	
	elseif(isset($_POST['send'])){
		
		if(empty($_POST['item']))
		echo "Not";
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
				
					<form class="form-horizontal" action=" " method="post"  id="mem_form" name="forms">
						<fieldset>
						 
    
						
						
							<div class="form-group">
								
								<label class="col-md-4 control-label">Lounge Name</label>
								<div class="col-md-6 selectContainer">
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<select name="loungeName" class="form-control selectpicker" required>
											<option value=''>Choose a lounge</option>
										<?php 
						
						
											include('config.php');
							
											$sql = "SELECT Lounge_Name FROM lounge where Status='Enable'" ;
											$result = mysqli_query($conn, $sql);
				
											if (mysqli_num_rows($result) > 0) {
    				
												while($row = mysqli_fetch_assoc($result)) {
    							
													echo 
													
													
													"<option value='{$row['Lounge_Name']}'>{$row['Lounge_Name']}</option>";
												}
											}

										?>
						
						
										</select>
									</div>
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="col-md-4 control-label">Date</label>
								
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group">  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="date" name="Date" class="form-control">
									</div>
								</div>
							</div>
							
							
							<h3> Item </h3>
							
							<?php
								
								$currentdate=getdate(date("U"));
								$currentday=$currentdate['weekday'];
								
								
								$sql = "SELECT Item_Name FROM consumer_item,available_item where Day='$currentday' and
										available_item.Item_ID=consumer_item.Item_ID" ;
								$result = mysqli_query($conn, $sql);
				
								if (mysqli_num_rows($result) > 0) {
    				
    								while($row = mysqli_fetch_assoc($result)) {
    							
								
										echo "
										<div class='form-group'>
											<label class='col-md-4 control-label'>{$row['Item_Name']}</label>
												<div class='col-md-6'>
													<div class='input-group'>
														<span class='input-group-addon'>  
															<input type='hidden' name='food[]' value='0'> 
															<input type='checkbox' name='food[]' value='{$row['Item_Name']}' onclick='myFunction()'>     
														</span>
														<input name='item[]'  class='form-control' type='number' placeholder='Amount' disabled>
													</div>
  
												</div>
										</div>";
								
     
       								 }
								}
						
						
						
							?>	
				
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-6">
									<button type="submit" class="btn btn-warning btn-block" name="send" onsubmit="return validation()" >Submit<span class="glyphicon glyphicon-send"></span></button>
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
            
            membershipId: {
                validators: {
                    
                    notEmpty: {
                        message: 'Please supply Membership ID'
                    }
                }
            }
			
			
			 'item[]': {
                    validators: {
                        callback: {
                            message: 'A record with this EPRID already exists!',
                            callback: function (value, validator, $field) {
                                var x=documents.forms['forms']['item[]'];
								if(x=="") return false;
                                return true;
                            }
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
	

<script>

function myFunction(){
	
var checkboxes = document.getElementsByName('food[]');
	var inputboxes=document.getElementsByName('item[]');
	
	
	alert(checkboxes.length);
	alert(inputboxes.length);
	for (var i=1; i<checkboxes.length; i=i+2) {
		
		alert(checkboxes[i].checked);
		if (checkboxes[i].checked) {
			
		inputboxes[(i-1)/2].required=true;
			inputboxes[(i-1)/2].disabled=false;
			
    }
	
	else{
		
		inputboxes[(i-1)/2].required=false;
		inputboxes[(i-1)/2].disabled=true;
	}
}
}
</script>	
<?php include 'footer.php' ?>


