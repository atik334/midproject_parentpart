<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendence Sheet</title>
</head>
<body>  
	<center>
	<table border="1" width="40%">
		<tr>
		<td colspan="2" align="center"><b>Attendence Sheet </b></center></td>

		</tr>
		<tr>
		<td align="center"><b>Date</b></td>
		<td align="center"><b>Present</b></td>
		</tr>
		<tr>
		<td align="center">1.03.20</td>
		<td align="center">√</td>
		</tr>
		<tr>
		<td align="center">2.03.20</td>
		<td align="center">√</td>
		</tr>
		<tr>
		<td align="center">3.03.20</td>
		<td align="center">√</td>
		</tr>
		<tr>
		<td align="center">4.03.20</td>
		<td align="center">x</td>
		</tr>
		<tr>
		<td align="center">5.03.20</td>
		<td align="center">√</td>
		</tr>
		<tr>
		<td align="center">6.03.20</td>
		<td align="center">x</td>
		</tr>
		<tr>
		<td align="center">7.03.20</td>
		<td align="center">x</td>
		</tr>
		<tr>
		<td align="center">8.03.20</td>
		<td align="center">√</td>
		</tr>
		<tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>

		</tr>
	
		</table>
	</center>
</body>
</html>