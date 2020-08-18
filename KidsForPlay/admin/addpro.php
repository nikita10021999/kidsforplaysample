<?php
require_once("connect.php");

session_start();
if(isset($_SESSION['admin_login']))
{	

 if($_SERVER['REQUEST_METHOD'] == "POST") 
 {
 	if(isset($_POST['submit']))
 	{
 		$pid=$_POST['p_id'];
	     $pnm=$_POST['p_nm'];
 	// echo "<pre>";
 	// print_r($_FILES);
 	// echo "</pre>";
  //    
      // username and password sent from form 
 
	 $a="../images/products/";
	 $a=$a . basename($_FILES['file1']['name']);

	$b="../images/allpdfs/";
	$b=$b . basename($_FILES['file2']['name']);


$tmp = explode('.',$_FILES['file1']['name']);
$extension = end($tmp);
$array = array("jpg","png","jpeg");

$t1=explode('.', $_FILES['file2']['name']);
$ex=end($t1);
$arr = array("pdf");

if(!in_array($extension, $array))
{
    echo "Cannot upload the $extension file in images please try again...";
}
else if(!in_array($ex, $arr)){
	echo "Cannot upload the $extension file in files please try again...";
}
else if( move_uploaded_file($_FILES['file1']['tmp_name'],$a) &&  move_uploaded_file($_FILES['file2']['tmp_name'],$b))
	
		{
	     echo "File Uploaded Successfully!!!<br/>";     

	     
		  
		  $sq = "INSERT INTO product_master(Product_id,Productmaster_name,Image,files) VALUES ($pid,'$pnm','$a','$b')";
				
		  if(mysqli_query($db,$sq))
				{
					echo '<script language="javascript">';
					echo 'alert("Record Saved");';
	         		echo '</script>';
					
					header('Location: view1.php');
				}
			else
			{
				echo "error in inserting";
			}	
	    }
    else
    {
    	echo "Could not upload";
    }

// $a="../images/products/";
// $a=$a . basename( $_FILES['file1']['name']);
// if(move_uploaded_file($_FILES['file1']['tmp_name'],$a))
// {
//  echo "File uploaded";
// }
// else
// {
//  echo "Error";
// }
		}
}
?>
    

<!DOCTYPE html>
<html>
<head>
	
</head>
<body><center>
    <form  method="POST" action="addpro.php" enctype="multipart/form-data">
    <b>Add Records</b>
		<hr width=100% >
		<hr width=100% >
		<br>
<table>
<tr>
	<tr><td>Product Id : </td><td><input type="text" name="p_id" required><br><br></td><tr>
    <tr><td>Product name :</td><td><input type="text" name="p_nm" required><br><br></td></tr>
	<tr><td>Image :</td><td> <input type="file" name="file1" required><br><br></td></tr>
    <tr><td>File :</td><td><input type="file" name="file2" required> <br><br></td></tr>
    <tr><td><button name="submit">Add Product</td></tr>
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








		