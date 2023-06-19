<?php
   include('session.php');
?>
	<?php include 'header.php' ?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4> </h4>
      
    <?php echo '
	<h3 class="heading"> Dashboard </h3><ul class="nav nav-pills nav-stacked">
       
	   
    
	
	
   

	
	
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      View Bill</a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li><a href="dailyBill.php">Daily Bill</a>
									</li>
        <li><a href="monthlyBill.php">Monthly Bill</a>
									</li>
        <li><a href="partialBill.php">Partial Bill</a></li>
			
      </ul>
    </li>
	
	<li><a href="changePassword.php" class="sideLink" >Change Password</a></li>
	
	<li><a href="logout.php" class="sideLink">Log Out</a></li>
      </ul>' ?>
    </div>

    <div class="col-sm-9">
      <img class="img-responsive" src="images/DSC_0011.jpg">
    </div>
  </div>
</div>
<?php include 'footer.php' ?>


