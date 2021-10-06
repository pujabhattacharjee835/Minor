<?php 

if(isset($_POST['submit'])){
	$Registration_No = $_POST['reg_id'];
	$Password = $_POST['password'];
	$Name = $_POST['name'];
	$Phone_No = $_POST['phone'];
	
	$conn=mysqli_connect('localhost','root','','MINOR');

	$query = "INSERT INTO UserData(Registration_No,Password,Name,Phone_No)VALUES('$Registration_No','$Password','$Name','Phone_No')";

	$result = mysqli_query($conn,$query);

	if($result){
		echo "<center><h3>You have Registered Successfully</h3></center>";
	}

	if(!$result){
		echo "Not connected";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css?v=<?php echo time(); ?>"> 
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body style="background:linear-gradient(90deg, #000046 0%, #1cb5e0 100%)">

<div class="reg-form">

	<form action="Registration.php" method="POST">
		<h1 class="heading1">Fill In The Form To Register</h1>
		
		<input type="text" name="reg_id" placeholder="Registration No." id="reg_no"><br><br>
		
		<input type="password" name="password" placeholder="Password" id="pass"><br><br>
		
		<input type="text" name="name" placeholder="Name" id="name"><br><br>
		
		<input type="text" name="phone" placeholder="Phone No." id="phone"><br><br>

		<input type="submit" name="submit" value="SUBMIT" id="submit1">
	</form>	
</div>

</body>
</html>
