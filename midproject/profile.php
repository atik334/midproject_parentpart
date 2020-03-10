<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body> 
<center>
 <table border="1" width="40%" >
		 <tr>
	    <th colspan="1" align="center"> <h1>KHALILUR RAHMAN</h2></th>
	    <td rowspan="1" align="center"><img src="ash.jpg" height="180px" width="140px"/> </td>
	    </tr>
		<tr>
		<td><b>Id</b></td>
		<td>789</td>
		</tr>
		<tr>
		<td><b>Gender</b></td>
		<td>Male</td>
		</tr>
		<tr>
		<td><b>DOB</b></td>
		<td>19.12.1972</td>
		</tr>
		<tr>
		<td><b>Address</b></td>
		<td>Khulna</td>
		</tr>
		<tr>
		<td><b>Phone</b></td>
		<td>01789456789</td>
		</tr>
		<tr>
		<td><b>Email</b></td>
		<td>khalilur009@gmail.com</td>
		</tr>
		<tr>
		<td><b>Occupation</b></td>
		<td>Businessman</td>
		</tr>
		<tr>
		<td><b>Yearly_Income</b></td>
		<td>700000</td>
		</tr>
		<tr>
		<td colspan="2" align="center"><a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>

		</tr>
		</table>
	</center>
</body>
</html>