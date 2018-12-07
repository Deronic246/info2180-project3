<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="dashboard.css">
		<style>
			.label{
				display:inline;
				padding:.2em .6em .3em;
				font-size:75%;
				font-weight:bold;
				line-height:1;
				color:black;
				text-align:center;
				white-space:nowrap;
				vertical-align:baseline;
				border-radius:.25em;
				
			}
			.label-info{
				background-color:yellow;
			}
			tr{
				border-bottom:1px solid #C0D6E4;
			}
			td{
				height:50px;
			}
			a {
				text-decoration: none;
			}
		</style>
		
		<script>
		
			$(document).ready(function(){
			    $('tr td a').click(function(){
			        var page=$(this).attr('href');
			        $('.p1').load(page);
			        return false;
			    });
			     $('#pj').click(function(){
			        $('.p1').load("newjob.php");
			        return false;
			    });
			});
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="p1">
			<div id="top">
				<h1>Dashboard</h1>
				<div id="b1">
					<form>
						<button type="submit" id="pj" name="pj">Post a Job</button>
					</form>
				</div>
			</div>
			<br>
			<h3>Available Jobs</h3>
			<table id="t1">
				<tr>
					<th>Company</th>
					<th>Job Title</th>
					<th>Category</th>
					<th>Date</th>
					<th name = "status"></th>
				</tr>
				<?php
					require "conn.php";
					
					$sql="SELECT * FROM jobs";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							
							//Determines if a job is new by checking if the user has applied for the job as well as comparing the current date to the date posted
							$query = "SELECT * FROM jobs_applied_for WHERE user_id=".$_SESSION["userid"];
							$isnew = mysqli_query($conn, $query);
							$check = 0;
							
							$today_date = new DateTime("now");
							$date_post = new DateTime($row["date_posted"]);
							$interval = date_diff($date_post, $today_date);
							$interval->format('%a');
							
							$date_posted = date("M d, Y", strtotime($row["date_posted"]));
						
							while ($val = mysqli_fetch_assoc($isnew)){
								if ($val['job_id'] == $row["id"]){
									$check++;
								}
							}
							
							if (($check == 0) OR ($interval < 1)){
								echo "<tr><td>".$row["company_name"]."</td><td><a href='jobpost.php?id=".$row["id"]."'>".$row["job_title"]."</a></td><td>".$row["category"]."</td><td>".$date_posted."</td><td>"."<span class='label label-info'>"."New"."</span></td></tr>";
							}else{
								echo "<tr><td>".$row["company_name"]."</td><td><a href='jobpost.php?id=".$row["id"]."'>".$row["job_title"]."</a></td><td>".$row["category"]."</td><td>".$date_posted."</td><td></td></tr>";
							}
						}
						
					}
	
					mysqli_close($conn);
				
				?>	
				
	
			</table>
	
			<br>
			<br>
			<br>
	
	
			<h3>Jobs Applied For</h3>
			<table>
				<tr>
					<th>Company</th>
					<th>Job Title</th>
					<th>Category</th>
					<th>Date Applied</th>
				</tr>	
				<?php
					require "conn.php";
					
					$sql="SELECT * FROM jobs_applied_for WHERE user_id=".$_SESSION["userid"];
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							$sql1="SELECT * FROM jobs WHERE id=".$row["job_id"]."";
							$result1 = mysqli_query($conn, $sql1);
							if (mysqli_num_rows($result1) > 0) {
								$row1=mysqli_fetch_assoc($result1);
								$date_applied = date("M d, Y", strtotime($row["date_applied"]));
								echo "<tr><td>".$row1["company_name"]."</td><td><a href='jobpost.php?id=".$row1["id"]."'>".$row1["job_title"]."</td><td>".$row1["category"]."</td><td>".$date_applied."</td></tr>";
							}
							else{
								echo "<script>alert('There are no jobs');</script>";
							}
						}
						
					}
	
					mysqli_close($conn);
					
					
				
				?>
	
			</table>
			
		</div>
		

		

	</body>
</html>