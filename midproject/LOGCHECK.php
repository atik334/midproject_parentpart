<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$pwd =  $_REQUEST['pwd'];
		
		if(empty(trim($id)) || empty(trim($pwd))){
			echo "Null submission found!";
		}else{

			$file = fopen('atik.txt', 'r');
			while(!feof($file)){
			$line= fgets($file);
			$data = explode('|', $line);

			if( trim($data[0]) == $id && trim($data[1]) == $pwd){
				$_SESSION['id'] = $id;
				$_SESSION['pwd'] = $pwd;
				

				header("location: home.php");
				break;
			}else{
				echo "invalid uname/password";
				
			}
			
		}
		fclose($file);
		
		}
	}else{
		
		header("location: login.php");
	}
?>