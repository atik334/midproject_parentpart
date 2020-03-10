<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
<center>
<table  border="1" width="60%">

       <tr align="center">

	   <td>
		<h1 align="center">Receipt of Fees Payment</h1>

		<br>
		Student Reference ID     :609087
		<br>
		Student ID               :17-34675-2
		<br>
		Student Name             :MD. ATIK FOYSAL
		<br>
		Application Summary      :2018-2020,Spring
		<br>
		Payment Amount           :5000.00 BDT
		<br>
		Trns. Reference ID       :DB7639075432
		<br>
		Transation Date          :12.02.2020
        <br>
		<a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>
		</td>
		</tr>
	   </table>
	</center>
</body>
</html>