
<?php
	session_start();
?>    

             <!DOCTYPE html>
					
		     <head>
	          <title>Login</title>
	         </head>
			 
			 <body>
			 <form action="LOGCHECK.php" method="post">
			 
			 <center>
			
		
			 <fieldset>
			 <legend><b> Login</b></legend>
			 
			 
			 <table border="0">
			 <tr>
			      <td>
				  User id <br/>
				  <input type="number" name="id" value="">
				 </td>
			 
			 
			 </tr>
			 <tr>
			 <td>
			    Password <br/>
				<input type="password" name="pwd" value="">
				
			 
			 </td>
			 </tr>
			 
			 </tr>
			 
			 <td>
			    
				<input type="submit" name="submit" value="Login">
				<a href='Registration.php'>Register</a>
				
				 
			 
			 </td>
			 </tr>
			 
		</html>
	  
	  
	  
	 