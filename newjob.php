<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["submit"]) && isset($_POST["cat"])){
			$cat="";
			$title=protect($_POST["title"]);
			$desc=protect($_POST["desc"]);
			$cat=$_POST["cat"];
			$comp=protect($_POST["comp"]);
			$loc=protect($_POST["loc"]);
			
          
			$count=0;
			
			if($title==""){
				echo "<script>alert('Job Title Field is Empty');</script>";
				
			}
			else{
				$count++;
			}
			
			if($desc==""){
				echo "<script>alert('Job Description Field is Empty');</script>";
				
			}
			else{
				
				$count++;			
				
			}
			
			if($cat==""){
				echo "<script>alert('Job category was not selected');</script>";				
			}
			else{
				$count++;
			}
			
			if($comp==""){
				echo "<script>alert('Company Field is Empty');</script>";
				
			}
			else{
				$count++;
			}
			
			if($loc==""){
				echo "<script>alert('Job Location Field is Empty');</script>";
				
			}
			else{
				$count++;
			}
			
			if($count==5){
				
				require "conn.php";			
			
				
				
				$sql="INSERT INTO jobs (job_title, job_description, category, company_name, company_location) values('".$title."', '".$desc."', '".$cat."', '".$comp."', '".$loc."')";
				
				if (mysqli_query($conn, $sql)) {
					echo "<script>alert('New job was added!');</script>";
				}
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
		<title>Create New Job</title>
		<link rel="stylesheet" type="text/css" href="newjob.css">
	</head>
	<body>
		<div class="body">
			<h1>New Job</h1>
			<form method="post" action="newjob.php">
				<h4>Job Title</h4>
				
				<input type="text" id="title" name="title" placeholder="e.g. Senior Designer or Product Manager">
				<br>
				<h4>Job Description</h4>
				
				<input type="text" id="desc" name="desc">
				<br>
				<h4>Category</h4>
				
				<select id="cat" name="cat">
					<option value=""></option>
					<option value="Design">Design</option>
					<option value="Programming">Programming</option>
					<option value="DevOps & Sysadmin">DevOps & Sysadmin</option>
					<option value="Customer Support">Customer Support</option>
					<option value="Sales & Marketing">Sales & Marketing</option>
				</select>
				<br>
				<h4>Company</h4>
				
				<input type="text" id="comp" name="comp">
				<br>
				<h4>Job Location</h4>
				
				<input type="text" id="loc" name="loc" placeholder="e.g.Kingston, Jamaica">
				<br>
				<br>
				<input type="submit" id="submit" name="submit">

			</form>
		</div>

	</body>
</html>