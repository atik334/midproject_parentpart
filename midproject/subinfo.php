
<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subject Information</title>
</head>
<body>  
	<center>
	<table border="1" width="40%">
		<tr>
		<td colspan="6" align="center"><b>Subject Information</b></center></td>

		</tr>
		<tr>
		<td align="center"><b>Science</b></td>
		<td align="center"><b>Subject Code</b></td>
		<td align="center"><b>Arts</b></td>
		<td align="center"><b>Subject Code</b></td>
		<td align="center"><b>Commerce</b></td>
		<td align="center"><b>Subject Code</b></td>
		
		</tr>
		<tr>
		<td align="center">Physics</td>
		<td align="center">111</td>
		<td align="center">Economics </td>
		<td align="center">109</td>
		<td align="center">Accounting</td>
		<td align="center">253</td>
	
		</tr>
		<tr>
		<td align="center">Chemistry</td>
		<td align="center">112</td>
		<td align="center">Sociology</td>
		<td align="center">117</td>
		<td align="center">Business Organization and Management</td>
		<td align="center">277</td>
		
		</tr>

		<tr>
		<td align="center">Biology</td>
		<td align="center">113</td>
		<td align="center">Social Work</td>
		<td align="center">271</td>
		<td align="center">Economics</td>
		<td align="center">109</td>
		
		</tr>
		<tr>
		<td align="center">Higher Math</td>
		<td align="center">117</td>
	    <td align="center">Geography</td>
	    <td align="center">125</td>
		<td align="center">Finance & Banking</td>
		<td align="center">106</td>
	
		</tr>
		<tr>
		<td align="center">General Math</td>
		<td align="center">118</td>
	    <td align="center">Psychology</td>
	    <td align="center">108</td>
		<td align="center">Information and Communication Technology</td>
		<td align="center">275</td>
	    </tr>
	    <tr>
		<td colspan="6" align="center"><a href="home.php">Go home</a><br>
		<a href="logout.php"><b>Logout</b></a>

		</tr>
	
		</table>
	</center>
</body>
</html>