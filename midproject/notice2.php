<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notice2</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">

	   <td>
		

		<b>From:</b>GOVT. SCIENCE COLLEGE
		<br>
		<b>Subject:</b>Lab Exam 
		<br>
		<b>Details:</b><br>
	    Dear Students, Your lab exam will be taken on 25/2/2020 (Tuesday). The topics for the exam have been discussed in the class.
        <br>
		<a href="notice.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>