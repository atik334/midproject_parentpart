
<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam Schedule</title>
</head>
<body>  
	<center>
	<table border="1" width="40%">
		<tr>
		<td colspan="5" align="center"><b>Exam Schedule</b></center></td>

		</tr>
		<tr>
		<td align="center"><b>Course</b></td>
		<td align="center"><b>Date</b></td>
		<td align="center"><b>Time</b></td>
		<td align="center"><b>Slot</b></td>
		<td align="center"><b>Room No.</b></td>
		</tr>
		<tr>
		<td align="center">Physics</td>
		<td align="center">2.03.2020</td>
		<td align="center">9:30-11:30</td>
		<td align="center">slot 2</td>
		<td align="center">203</td>
		</tr>
		<tr>
		<td align="center">Chemistry</td>
		<td align="center">3.03.2020</td>
		<td align="center">9:30-11:30</td>
		<td align="center">slot 2</td>
		<td align="center">119</td>
		</tr>

		<tr>
		<td align="center">Biology</td>
		<td align="center">5.03.2020</td>
		<td align="center">3:00-5:00</td>
		<td align="center">slot 3</td>
		<td align="center">115</td>
		</tr>
		<tr>
		<td align="center">Higher Math</td>
		<td align="center">6.03.2020</td>
	    <td align="center">3:00-5:00</td>
		<td align="center">slot 3</td>
		<td align="center">204</td>
		</tr>
		<tr>
		<td align="center">General Math</td>
		<td align="center">7.03.2020</td>
	    <td align="center">3:00-5:00</td>
		<td align="center">slot 3</td>
		<td align="center">204</td>
		</tr>
	
		<tr>
		<td colspan="5" align="center"><a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>

		</tr>
	
		</table>
	</center>
</body>
</html>