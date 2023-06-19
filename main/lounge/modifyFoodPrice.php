<?php
	include 'session.php';
	
	
	if(!empty($_POST['foodName']) && !empty($_POST['price']) && isset($_POST['send'])){
	
   
   		 $sql = "Update consumer_item SET Price='$_POST[price]' where Item_Name='$_POST[foodName]'" ;
    		 
			 
		
    		 if (mysqli_query($conn, $sql)) {
				 
				 $message = "New record updated successfully";
					echo "<script type='text/javascript'>alert('$message');</script>";
   				
			} else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
        <label class="col-md-4 control-label">Food Name:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="foodName" placeholder="Food Name" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label">Price:</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="price" placeholder="Price" class="form-control"  type="number">
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
                     stringLength: {
                        min: 3,
                    },
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

