<?php

	
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbname = "duccas";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	 session_start();
	

      	
	
	if(!empty($_POST['user']) && !empty($_POST['password'])){
	
		$sql = "SELECT * FROM employee where Employee_ID='$_POST[user]' and Password='$_POST[password]'" ;
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
    		$_SESSION['login_user']=$_POST['user'];
    		header("location:admin.php");
    	
    	
		}
	
		else{
			$sql = "SELECT * FROM member where Membership_ID='$_POST[user]' and Password='$_POST[password]'" ;
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 1) {
    			$_SESSION['login_user']=$_POST['user'];
    			header("location:member.php");
    	
    	
			}
		
			else{
	 	
				$_SESSION['err']=  'Login Failed';
				header("location:login.php");
			exit(0);
			}
		}
	}

?>

<?php include 'header.php' ?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h3> <font color="white"> Log In Here </font> </h3>
      <form action="login.php" method="post">
    <div class="form-group">
      <label for="usr"><font color="white">User ID:</font></label>
      <input type="text" class="form-control" name="user">
    </div>
    <div class="form-group">
      <label for="pwd" > <font color="white">Password:</font></label>
      <input type="password" class="form-control" name="password">
    </div>
    
    <div class="form-group">
      <div class="col-sm-10"><font color="white">
      		<?php if(isset($_SESSION['err'])) { 
      			 
      			 echo $_SESSION['err'];
      			
      			 unset($_SESSION['err']);
      			
      			
      		}?>
      		
      		
      	</font>
      
      </div>
    </div>
	
	<div class="form-group">
    
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>
    </div>

    <div class="col-sm-9">
      <img class="img-responsive" src="images/DSC_0011.jpg">
    </div>
  </div>
</div>
<?php include 'footer.php' ?>


</body>
</html>
