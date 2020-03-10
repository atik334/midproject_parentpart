<?php	
	
	if(isset($_POST['upload'])){  
		$file_name=$_FILES['file']['name'];
		$file_type=$_FILES['file']['type'];
		$file_size=$_FILES['file']['size'];
		$file_tem_loc=$_FILES['file']['tmp_name'];
		$file_store="upload/".$file_name;
		moved_uploaded_file($file_tem_loc,$file_store);
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
       	<form action="?" method="post" enctype="multipart/form-data">

	   <td>
	   	<p><input type="file"></p>
	   	<p><input type="submit" name="upload" value="upload"</p>
	   	<br>
		<a href="home.php">Go home</a><br>
	
		<a href="logout.php"><b>Logout</b></a>
	   </td>
		
		</tr>
	   </table>
	</center>
</body>
</html>