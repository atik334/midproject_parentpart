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
		<b>Subject:</b>Class Cancellation
		<br>
		<b>Details:</b><br>
	    Dear Students, Your lab class of 11/2/2020 has been cancelled. Make up date and time will be announced later.
        <br>
		<a href="notice.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>