<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		require "conn.php";
		$sql = "SELECT job_id FROM jobs_applied_for WHERE job_id=".$_SESSION["jid"]." and user_id=".$_SESSION["userid"]."";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<script>alert('Already applied for Job');</script>";
			
		}
		else{			
			$sql = "INSERT INTO jobs_applied_for(job_id, user_id) VALUES (".$_SESSION["jid"].",".$_SESSION["userid"].")";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Successfully applied for a job');</script>";
				header("location: index.php");
				
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		mysqli_close($conn);

		
		
	}
	
?>