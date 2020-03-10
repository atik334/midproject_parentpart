<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Routine</title>
</head>
<body>  
	<center>
	<table border="1" width="40%">
		<tr>
		<td colspan="5" align="center"><b>Class Routine</b></center></td>

		</tr>
		<tr>
		<td align="center"><b>Course</b></td>
		<td align="center"><b>Day</b></td>
		<td align="center"><b>Time</b></td>
		<td align="center"><b>Room No.</b></td>
		</tr>

		

		<tr>
		<td align="center">Physics</td>
		<td align="center">sunday</td>
		<td align="center">9:30-11:30</td>
		<td align="center">119</td>
		</tr>

		<tr>
		<td align="center">Chamistry</td>
		<td align="center">sunday</td>
	    <td align="center">2:00-4:00</td>
		<td align="center">110</td>
		</tr>

		<tr>
		<td align="center">Biology</td>
		<td align="center">Monday</td>
		<td align="center">9:30-11:30</td>
		<td align="center">119</td>
		</tr>

		<tr>
		<td align="center">Higher Math</td>
		<td align="center">Monday</td>
		<td align="center">2:00-5:00</td>
		<td align="center">115</td>
		</tr>

		<tr>
		<td align="center">Physics</td>
		<td align="center">Twesday</td>
		<td align="center">9:30-11:30</td>
		<td align="center">119</td>
		</tr>

		<tr>
		<td align="center">Chemistry</td>
		<td align="center">Twesday</td>
	    <td align="center">2:00-5:00</td>
		<td align="center">207</td>
		</tr>


		<tr>
		<td align="center">Biology</td>
		<td align="center">wednesday</td>
		<td align="center">9:30-11:30</td>
		<td align="center">111</td>
		</tr>

		<tr>
		<td align="center">Higher Math</td>
		<td align="center">wednesday</td>
		<td align="center">2:00-5:00</td>
		<td align="center">205</td>
		</tr>
		<tr>
		<td colspan="5" align="center"><a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>

		</tr>
	
		</table>
	</center>
</body>
</html>