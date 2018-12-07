<!DOCTYPE html>
<html>
	<head>
		<title>Job Details</title>
		<link rel="stylesheet" type="text/css" href="jp.css">
		
	</head>
	<body>
		<div id="top">
			<?php 
				session_start();	
				require "conn.php";
				$_SESSION["jid"]=$_GET["id"];
				$sql="SELECT * FROM jobs WHERE id=".$_SESSION["jid"];
				$result = mysqli_query($conn, $sql);
				
		
				if (mysqli_num_rows($result)==1){		
					echo "<script>alert('Found');</script>";
					$row = mysqli_fetch_assoc($result);
					echo "<h1>" .$row["job_title"]."</h1>
						<form method='post' action='apply.php'><button type='submit' id='b1' name='apply'>Apply</button></form>
						<h6>Posted ".$row["date_posted"]."</h6><h6>".$row["category"]."</h6><br><h4>".$row["company_name"]."</h4><h4>".$row["company_location"]."</h4><hr><h3> 
						Job Description</h3><p>".$row["job_description"]."</p>";
				}
				else{
					echo "<script>alert('Job not Found');</script>";
				}
				mysqli_close($conn);
			?>
			
		</div>
		<br>
	</body>
</html>