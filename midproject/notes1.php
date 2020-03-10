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
	   	<h1 align="center">Why physics is important!</h1><br>

		
        Physics is one of the oldest academic disciplines, perhaps the oldest through its inclusion of astronomy. Over the last two millennia, physics was a part of natural philosophy along with chemistry, certain branches of mathematics, and biology, but during the Scientific Revolution in the 17th century, the natural sciences emerged as unique research programs in their own right. Physics intersects with many interdisciplinary areas of research, such as biophysics and quantum chemistry, and the boundaries of physics are not rigidly defined. New ideas in physics often explain the fundamental mechanisms of other sciences, while opening new avenues of research in areas such as mathematics and philosophy.

        Physics also makes significant contributions through advances in new technologies that arise from theoretical breakthroughs. For example, advances in the understanding of electromagnetism or nuclear physics led directly to the development of new products which have dramatically transformed modern-day society, such as television, computers, domestic appliances, and nuclear weapons; advances in thermodynamics led to the development of industrialization and advances in mechanics inspired the development of calculus.
        <br>
		<a href="notes.php">Back</a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>