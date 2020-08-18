<?php
require_once("connect.php");

session_start();
if(isset($_SESSION['admin_login']))
{	


 if($_SERVER['REQUEST_METHOD'] == "POST") 
 {
 	if(isset($_POST['submit']))
 	{
 		
	     $pnm=$_POST['p_nm'];
	     $pln=$_POST['p_ln'];
 	 
  $sq = "INSERT INTO videodata(v_name,v_link) VALUES ('$pnm','$pln')";
				
		  if(mysqli_query($db,$sq))
				{
					echo '<script language="javascript">';
					echo 'alert("Record Saved");';
	         		echo '</script>';
					
					header('Location: view3.php');
				}
			else
			{
				echo "error in inserting";
			}	
	}
    

}

?>
    

<!DOCTYPE html>
<html>
<head>
	
</head>
<body><center>
    <form  method="POST" action="addvd.php" enctype="multipart/form-data">
    <b>Add Records</b>
		<hr width=100% >
		<hr width=100% >
		<br>
<table>
<tr>
	<!-- <tr><td>Product Id : </td><td><input type="text" name="p_id" required><br><br></td><tr> -->
    <tr><td> Name :</td><td><input type="text" name="p_nm" required><br><br></td></tr>
    <tr><td> linkdata :</td><td><input type="text" name="p_ln" required><br><br></td></tr>
	<!-- <tr><td>Image :</td><td> <input type="file" name="file1" required><br><br></td></tr>
    <tr><td>File :</td><td><input type="file" name="file2" required> <br><br></td></tr> -->
    <tr><td><button name="submit">Add video</td></tr>
</tr>
</table>
</form>
  

    </pre></center>
</form>
</body>
</html>

<?php
}
else
{
	 header("location: adminlogin.php");
}
   
?>









		