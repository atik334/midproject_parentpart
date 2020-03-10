<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>poll</title>
</head>
<body>
<center>
<table  border="1" width="40%">

       <tr align="center">

	    <td>
		<h1 align="center"> Welcome! </h1>

		<b>From:</b> COLLEGE
		<br>
		<b>Subject:</b>Participate in the poll
		<br>
		Teachers must needed M.S.C degree.
		<br>
		Do you recommanded it?<br>
		
		<input type="checkbox" name="">Yes<br>
		<input type="checkbox" name="">No<br>
		
		
		<a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>    
		<br>
	
	   </table>
	</center>
</body>
</html>