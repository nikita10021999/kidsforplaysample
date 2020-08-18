<?php
  
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	  include("connect.php");
	
      $name =mysqli_real_escape_string($db,$_POST['nm']);
      $password =mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT * FROM  admin WHERE name = '$name' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
           
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
          $_SESSION['admin_login']=$name;
          header("location: view1.php");
      }else {
		 echo '<script language="javascript">';
         echo 'alert("Your Login Name or Password is invalid")';
		 echo '</script>';
      }
   }

?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style>

input[type=submit] {
  background-color: #ADD8E6;
  
} 


input[type=text], [type=password]  {
  background-color: #F0F8FF;
  
}  
  
}
</style>
</head>

     
   <body bgcolor = "#FFFFFF">
    
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#000080; color:#FFFFFF; padding:3px;"><b>Admin Login<br></b></div>
                
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><br><input type = "text" name = "nm" /><br><br>
                  <label>Password  :</label><br><input type = "password" name = "psw" /><br><br>
                  <input type = "submit" value = " Submit "/><br />
               </form>
                           
                    
            </div>
                
         </div>
            
      </div>

   </body>
</html>
