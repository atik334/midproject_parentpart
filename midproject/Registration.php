<?php
      $eid="";
	  $ename="";
	  $epwd="";
	  $ecpwd="";
	  $egender="";
	  $id="";
	  $name="";
      $pwd="";
	  $cpwd="";
	  $gender="";
	  
	  
		  if($_SERVER["REQUEST_METHOD"] == "POST"){
			  
			  
			  
			 
				if (empty($_POST['name'])){
					 $ename = "Name cannot be empty";
				}
				else{
					 $name=$_POST['name'];
				 }
				 
				 	if (empty($_POST['pwd'])){
					 $epwd = "Password cannot be empty";
				}
				else{
					 $pwd=$_POST['pwd'];
				 }
				 
				 if (empty($_POST['id'])){
					 $eid= "Fill the id field";
				}
				else{
					 $id=$_POST['id'];
				 }
				 
				  if (empty($_POST['cpwd'])){
					 $ecpwd= "Confirm your password";
				}
				else{
					if($_POST['pwd']==$_POST['cpwd']){
						
					 $cpwd=$_POST['cpwd'];
					}
					else{
						$ecpwd="Password doesn't match";
					}
				 }
				 if(empty($_POST['gender'])){
                 $egender = "Please select gender";
               }
                   else{
                 $gender = $_POST['gender'];
               }
			    if($eid==null && $ename==null && $epwd==null)
           {
           
            $data =  $id."|".$pwd."\n";

            $file=fopen('atik.txt', 'a');
            fwrite($file, $data);
            fclose($file);
          }
	  
		 }

?>  
	 <!DOCTYPE html>
	 
	      <center>
	  
	  <?php
	         
        
	  
	  ?>
	  </center>
	  
	  
	  </html>

      <!DOCTYPE html>
	  
	  <head>
	           <title> Registration </title>
	         </head>
			 
			 <body>
			 <form action="Registration.php" method="post">
			 
			 <center>
			
		
			 <fieldset>
			 <legend> Registration</legend>
			 
			 
			 <table border="0">

			 	 <tr>
			 <td>
			    Name <br/>
				
				<input type="text" name="name" value="">
				<span style="color:red;"><?php echo $ename ?> </span>
			 
			 </td>
			 </tr>

			 <tr>
			      <td>
				  Id <br/>
				  <input type="number" name="id" value="">
				  <span style="color:red;"><?php echo $eid ?> </span>
                  
	            
				  
				  
				  </td>
			 
			 
			 </tr>
			 <tr>
			 <td>
			    Password <br/>
				<input type="password" name="pwd" value="">
				<span style="color:red;"><?php echo $epwd ?> </span>
			 
			 </td>
			 </tr>
			 
			 <tr>
			 <td>
			    Confirm Password <br/>
				<input type="password" name="cpwd" value="">
				<span style="color:red;"><?php echo $ecpwd ?> </span>
				
			 
			 </td>
			 </tr>
			 
			
			 
			  <tr>
			 <td>
			    
				<input type="radio" name="gender" value="">Male
				<input type="radio" name="gender" value="">Female
				 
			 
			 </td>
			 </tr>
			 
			 <td>
			    
				<input type="submit" name="submit" value="Sign Up">
				<a href='Login.php'>Sign in</a>
				
				 
			 
			 </td>
			 </tr>
			 
			 </table>
			 
			 </center>
			 </fieldset>
			 </form>
			 
			 </body>
	   </html>
	  
