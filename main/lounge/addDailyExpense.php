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
								<label class="col-md-4 control-label">Expense:</label>
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<input name="expense" placeholder="Expense" class="form-control"  type="text" pattern="[0-9][^a-zA-Z]{1,5}">
									</div>
								</div>
							</div>
      
							<div class="form-group">
								<label class="col-md-4 control-label">Date</label>
								
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group">  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<input type="date" name="Date" class="form-control" required>
									</div>
								</div>
							</div>
        
    
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-6">
									<button type="submit" class="btn btn-warning btn-block" >Submit <span class="glyphicon glyphicon-send"></span></button>
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
            
            expense: {
                validators: {
                   
                    notEmpty: {
                        message: 'Please supply expense'
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
 
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
			</div>
		</div>		
				<div class="col-sm-2">&nbsp;</div>
				
			
		
	</div></div>
	</div></div>

<?php include 'footer.php' ?>

