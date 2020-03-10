<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notice1</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">

	   <td>
		

		<b>From:</b>GOVT. SCIENCE COLLEGE
		<br>
		<b>Subject:</b>Make-up Class
		<br>
		<b>Details:</b><br>
	    Dear Students, You have a make-up class on 27/2/2020 (Thursday) at 11 am.
        <br>
		<a href="notice.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>