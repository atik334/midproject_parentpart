<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result Sheet</title>
</head>
<body>
<center>
  <table border="1" width="40%">
		<tr>
		<td colspan="2" align="center"><b>Result Sheet<b> </center></td>

		</tr>
		<tr>
		<td align="center"><b>Course</b></td>
		<td align="center"><b>Grade</b></td>
		</tr>
		<tr>
		<td align="center">Physics</td>
		<td align="center">5.00</td>
		</tr>
		<tr>
		<td align="center">Chemistry</td>
		<td align="center">4.50</td>
		</tr>
		<tr>
		<td align="center">Biology</td>
		<td align="center">4.50</td>
		</tr>
		<tr>
		<td align="center">Higher Math</td>
		<td align="center">4.00</td>
		</tr>
		<tr>
		<td align="center">General Math</td>
		<td align="center">4.00</td>
		</tr>
		<tr>
		<td align="center"><b>Total Grade</b></td>
		<td align="center"><b>4.25</b></td>
		</tr>
	
	
      <tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>

		</tr>
	
		</table>
	</center>
</body>
</html>