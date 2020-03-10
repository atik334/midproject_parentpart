<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pnotes</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">
       	

	   <td>
	   	<h1 align="center">Chemical Properties!</h1><br>

	
         Chemical properties are characteristics of matter that describe how matter changes form in the presence of other matter. Does a sample of matter burn? Burning is a chemical property. Does it behave violently when put in water? This reaction is a chemical property as well (Figure 1.2 “Chemical Properties”). In the following chapters, we will see how descriptions of physical and chemical properties are important aspects of chemistry.
        <br>
		<a href="notes.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>