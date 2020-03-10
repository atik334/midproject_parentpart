<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
    <body>
    	<center>
	<!--<form action="registration.php" method="post">-->
	<fieldset>
		<legend><h4>Home Page</h4></legend>
	<table border="1" width="30%">
		<tr>
			<td align="center"><a href="profile.php">My Profile</a> </td>
			
		</tr>

		<tr>
			<td align="center"><a href="sinformation.php">Student Information</a> </td>
			
		</tr>
		<tr>
			<td align="center"><a href="result.php">Result</a></td>
			
		</tr>


		<tr>
			<td align="center"><a href="classroutine.php">Class Routine</td>
		</tr>

		<tr>
			<td align="center"><a href="attendence.php">Attendence</a></td>
			
		</tr>
		<tr>
			<td align="center"><a href="schedule.php">Exam Schedule</td>
		</tr>
		<tr>
			<td align="center"><a href="payfees.php">Payment</td>
			
		</tr>
		<tr>
			<td align="center"><a href="financial.php">Financial Info</td>
			
		</tr>
		
		<tr>
			<td align="center"><a href="complaint.php">Complaint</td>
		</tr>

		<tr>
			<td align="center"><a href="notice.php">Notices</td>
		</tr>

		<tr>
			<td align="center"><a href="notes.php">Notes</td>
		</tr>
		<tr>
			<td align="center"><a href="request.php">Update/Delete</td>
		</tr>
		<tr>
		<tr>
			<td align="center"><a href="createcomplaint.php">Create Complaint</td>
		</tr>

		<tr>
			<td align="center"><a href="subinfo.php">subject Information</td>
		</tr>
	
		<tr>
			<td align="center"><a href="poll.php">Poll</td>
		</tr>
		<tr>
			<td align="right">
			    <a href="logout.php"><b>Logout</b></a>
			</td>
		</tr>
	</table>
	</fieldset>
</center>
	</form>
