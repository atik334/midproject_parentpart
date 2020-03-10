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
	   	<h1 align="center">Introduction to the cell!</h1><br>

	
         The purpose of this guide is to provide an overview of the basic structural components of living cells. In reviewing these structures, we will also discuss their functions.

         All living organisms are composed of cells. A cell is a small, membrane-bound compartment that contains all the chemicals and molecules that help support an organism's life. An understanding of the structure of cells is one of the first steps in comprehending the complex cellular interactions that direct and produce life.
        <br>
		<a href="notes.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>