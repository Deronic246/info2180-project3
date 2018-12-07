<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["login"])){
			$email=	$_POST["email"];
			$pwd=$_POST["pwd"];
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
				$count++;
			}
			
			if($count==2){
				
				require "conn.php";
				
			
				$sql="SELECT * FROM users WHERE email='".$email."'";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result)==1){		
					echo "<script>alert('Found');</script>";
					$row = mysqli_fetch_assoc($result);
					$fname=$row['firstname'];
					$pd=$row['password'];
					$id=$row['id'];
					
					if(password_verify($pwd, $pd)==true){
						
						session_start();
						$_SESSION["fname"]=$fname;
						$_SESSION["userid"]=$id;
						$_SESSION["email"]=$email;
						$_SESSION["jid"]="";
						header("Location:index.php");
						
					}
					else{
						echo "<script>alert('Password does not match login');</script>";
					}
					
				}
				
				else{
					echo "<script>alert('User not found');</script>";
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
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<div class="page">
			<div class="menubar">
				<h3>HireMe</h3>
			</div>


			<div class="body">
				<form action="login.php" method="post">
					<img src="images/close-envelope.png" alt="home icon"><h4>Email:</h4>					
					<input type="email" id="email" name="email" placeholder="e.g.mary.jane@example.com">
					<br>
					<br>
					
					<img src="images/lock.png" alt="home icon"><h4>Password:</h4>
					
					<input type="password" id="pwd" name="pwd">
					<br>
					
					<br>				
					<button type="submit" id="login" name="login">Login</button>

				</form>
			</div>
		</div>

		

	</body>
</html>