<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Create Complint Page</title>
</head>
<body>
<center>
<table  border="1" >

       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>From:</b> parent
		<br>
		<b>Subject:</b> complaint for my child
		<br>
		He recently addicted to watching movie rather than his study.
		<br>
		<a href="upload.php">or</a><br>
		<a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>