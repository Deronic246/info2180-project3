<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="general.js"></script>
	</head>
	<body>
		<div class="page">
			<div class="menubar">
				<h3>HireMe</h3>
			</div>
			<div class="overall">
				<div class="sidebar">
					<ul id="options">
					    <li><img src="images/home.png" alt="home icon"><a href="dashboard.php"><h3>Home</h3></a></li>
						<li><img src="images/new-user.png" alt="add user icon"><a href="nu.php"><h3>Add User</h3></a></li>
						<li><img src="images/resume.png" alt="new job icon"><a href="newjob.php"><h3>New Job</h3></a></li>
						<li><img src="images/logout.png" alt="logout icon"><a href="logout.php"><h3>Logout</h3></a></li>
					</ul>
				</div>

				<div class="body">
				</div>
					
			</div>
		</div>

		

	</body>
</html>