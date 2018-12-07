<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["submit"])){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$tel=$_POST["tel"];
			$email=	$_POST["email"];
			$pwd=$_POST["pwd"];
			$ptest="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";
			$ttest="/^\d{3}-\d{3}-\d{4}$/";
          
			$count=0;
			
			if($email==""){
				echo "<script>alert('Email Field is Empty');</script>";
				
			}
			else{
				$count++;
			}
			
			if($pwd==""){
				echo "<script>alert('Password Field is Empty');</script>";
				
			}
			else{
				if (preg_match($ptest, $pwd)==1){
					$count++;
				}
				else{
					echo "<script>alert('Password in incorrect format');</script>";
					echo "<script>alert('Password needs at least one number and one letter');</script>";
					echo "<script>alert(', and one capital letter and should be at least 8 characters long');</script>";
				}
			}
			
			if($tel==""){
				echo "<script>alert('Telephone number Field is Empty');</script>";				
			}
			else{
				if (preg_match($ttest, $tel)==1){
					$count++;
				}
				else{
					echo "<script>alert('Telephone number is incorrect format');</script>";
				}
			}
			
			if($fname==""){
				echo "<script>alert('First Name Field is Empty');</script>";
				
			}
			else{
				$count++;
			}
			
			if($lname==""){
				echo "<script>alert('Last Name Field is Empty');</script>";
				
			}
			else{
				$count++;
			}
			
			if($count==5){
				
				require "conn.php";
				
			
				$sql="SELECT * FROM users WHERE email='".$email."'";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result)>=1){		
					echo "<script>alert('Email address already exists');</script>";
				}
					
				else{
					$pwd=password_hash($pwd, PASSWORD_DEFAULT);
					$sql="INSERT INTO users (firstname, lastname, password, telephone, email) values('".$fname."', '".$lname."', '".$pwd."', '".$tel."', '".$email."')";
					
					if (mysqli_query($conn, $sql)) {
						echo "<script>alert('New user added!');</script>";
					}else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					
				}
				
				
				mysqli_close($conn);
			}
		}
	}
	
	function protect($string)
    {
        $n= filter_var($string, FILTER_SANITIZE_STRING); 
        $n1=strip_tags($n);
        return $n1;
    }
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create New User</title>
		<link rel="stylesheet" type="text/css" href="newuser.css">
		  
	</head>
	<body>
		<div class="body">
			<h1>New User</h1>
			<form method="post" action="nu.php" id="form1">
				<h4>Firstname</h4>
				
				<input type="text" id="fname" name="fname">
				
				
				<br>
				<h4>Lastname</h4>
				
				<input type="text" id="lname" name="lname">
				
				<br>
				<h4>Password</h4>
				
				<input type="password" id="pwd" name="pwd">
				
				<br>
				<h4>Email</h4>
				
				<input type="email" id="email" name="email" placeholder="mary.jane@example.com">
				
				<br>
				<h4>Telephone</h4>
				
				<input type="telephone" id="tel" name="tel" placeholder="876-999-8989">
				
				<br>
				<br>
				<button id="submit" name="submit">Submit</button>

			</form>
		</div>
	</body>
</html>