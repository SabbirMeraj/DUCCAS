<?php
	include('session.php');
	
	
	
    
    if(!empty($_POST['foodName']) && !empty($_POST['price']) && !empty($_POST['day'])){
    	$sql = "INSERT INTO Consumer_Item (Item_name, Price)
			VALUES ('$_POST[foodName]','$_POST[price]')";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
   			 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	
	
	
	$sql = "SELECT * FROM Consumer_Item where Item_name='$_POST[foodName]'" ;
	$result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    echo  $row['Item_ID'];
    foreach($_POST['day'] as $day){
    
    
    
  
    	$sql = "INSERT INTO Available_Item (Item_ID, Day)
			VALUES ('$row[Item_ID]','$day')";


		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
   			 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
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
				<form class="form-horizontal" action="addFoodItem.php" method="post"  id="mem_form">
    <fieldset>
      
    
      
      
        <div class="form-group">
        <label class="col-md-4 control-label">Food Name:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="foodName" placeholder="Food Name" class="form-control"  type="text" pattern="[A-Za-z]{2,15}">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">Price:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="price" placeholder="Price" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{0,3}">
          </div>
        </div>
      </div>
	  
	  <div class="form-group">
	  	<label class="col-md-4 control-label">Available Day:</label> 
	  	
	  	<div class="col-md-6  inputGroupContainer">
          <div class="input-group">
            	<input type="checkbox" name="day[]" value="Saturday">Saturday<br/>
	 			<input type="checkbox" name="day[]" value="Sunday">Sunday<br/>
	 			<input type="checkbox" name="day[]" value="Monday">Monday<br/>
	 			<input type="checkbox" name="day[]"value="Tuesday">Tuesday<br/>
	 			<input type="checkbox" name="day[]"value="Wednesday">Wednesday<br/>
	 			<input type="checkbox" name="day[]"value="Thursday">Thursday<br/>
	 			<input type="checkbox" name="day[]"value="Friday">Friday<br/>
          </div>
        </div>
	  
	 </div>
	  
	  
	  
    
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
          <button type="submit" class="btn btn-warning btn-block">Submit <span class="glyphicon glyphicon-send"></span></button>
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
            
            price: {
                validators: {
                    
                    notEmpty: {
                        message: 'Please supply price'
                    }
                }
            },
			foodName: {
                validators: {
                    
                    notEmpty: {
                        message: 'Please supply food name'
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

