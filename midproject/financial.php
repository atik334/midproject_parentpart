<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Financial info</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">

	   <td>
		<h1 align="center">Notice! </h1>

		<b>From:</b>GOVT. SCIENCE COLLEGE
		<br>
		<b>Subject:</b>Financial Aid Notice for Existing Students
		<br>
		The students who are enjoying Financial Aid/Discount/Waiver but not maintaining College policy as Financial Aid Agreement (GRADE and SEMESTER DROP) etc. having any request regarding this issue, please contact to Registrar Office (Registrar Building) within 30/03/2020. After that no claim/application will be entertained.
        <br>
		<a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>