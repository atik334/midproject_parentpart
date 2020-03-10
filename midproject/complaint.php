<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Complint Page</title>
</head>
<body>
<center>
<table  border="1" >

       <tr align="center">

	   <td>
		<h1 align="center"> Welcome! </h1>

		<b>From:</b> GOVT. SCIENCE COLLEGE Disciplinary Committe
		<br>
		<b>Subject:</b> Decision by the Disciplinary Committe
		<br>
		Caught writting from paper
		<br>
		<b>panishment:</b>The Term Exmination Grade 'F' of the course only.<br>
		<a href="home.php">Go home</a><br>
	
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>