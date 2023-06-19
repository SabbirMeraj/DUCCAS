

<?php
echo '
	<h3 class="heading"> Dashboard </h3><ul class="nav nav-pills nav-stacked">
       
	   <li><a class="sideLink" href="inputFoodForm.php">
      Input form </a></li>
     
    
	
	
    
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Member Management</a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li><a href="addMember.php">Add new member</a></li>
        <li><a href="deleteMember.php">Delete member</a></li>
        <li><a href="updateMember.php">Modify information</a> </li>                      
      </ul>
    </li>
	
	
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Lounge Management</a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li><a href="addLounge.php">Add new lounge</a></li>
        <li><a href="deleteLounge.php">Delete lounge</a></li>
        <li><a href="updateLounge.php">Modify information</a> </li>   
        <li><a href="sendFood.php">Add send food amount</a> </li>                   
      </ul>
    </li>
	
	
	
	
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Stock Management</a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li><a href="addFoodItem.php">Add new food item</a>
									</li>
        <li><a href="modifyFoodPrice.php">Modify food price</a>
									</li>
        <li><a href="addDailyExpense.php">Add daily expense</a></li>
		<li><a href="modifySubscriptionFee.php">Modify subscription fee</a> </li>                      
      </ul>
    </li>
	
	
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      View Bill</a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li><a href="dailyBill.php">Daily Bill</a>
									</li>
        <li><a href="monthlyBill.php">Monthly Bill</a>
									</li>
        <li><a href="partialBill.php">Partial Bill</a></li>
		<li><a href="revenueReport.php">Revenue Report</a> </li>
		<li><a href="expenseReport.php">Expense Report</a> </li>
		<li><a href="foodReport.php">Food Report</a> </li>		
      </ul>
    </li>
	
	<li><a href="changePassword.php" class="sideLink" >Change Password</a></li>
	
	<li><a href="logout.php" class="sideLink">Log Out</a></li>
      </ul>'
?>

