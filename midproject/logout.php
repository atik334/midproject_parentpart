<?php
	session_start();
	unset($_SESSION['id']);
	session_destroy();
	
	//setcookie('username', '', time()-10, '/');
	header("location: login.php");

?>