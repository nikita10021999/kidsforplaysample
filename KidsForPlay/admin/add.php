<?php
require_once("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{	

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

 	$a="../images/display/";
	$a=$a . basename( $_FILES['file1']['name']);

	$b="../audios/";
	$b=$b . basename( $_FILES['file2']['name']);



 $tmp = explode('.',$_FILES['file1']['name']);
$extension = end($tmp);
$array = array("jpg","png","jpeg");

$t1=explode('.', $_FILES['file2']['name']);
$ex=end($t1);
$arr = array("wav");

if(!in_array($extension, $array))
{
    echo "Cannot upload the $extension file in images please try again...";
}
else if(!in_array($ex, $arr)){
	echo "Cannot upload the $extension file in files please try again...";
}
else if(move_uploaded_file($_FILES['file1']['tmp_name'],$a) && move_uploaded_file($_FILES['file2']['tmp_name'],$b))
{
	echo "file uploaded";
	$did=$_POST['d_id'];
	$name=$_POST['name'];
 
      
	  $sq = "INSERT INTO display_master(Display_id,Image,File,Name) VALUES ('$did','$a','$b','$name')";
			
	  if(mysqli_query($db,$sq))
			{
				echo '<script language="javascript">';
				echo 'alert ("Record Saved")';
         		echo '</script>';
				
				header("location: view2.php");
			}	
	
}	
      

// if(move_uploaded_file($_FILES['file1']['tmp_name'],$a))
// {
//  echo "File uploaded";
// }
// else
// {
//  echo "Error";
// }	


// $b="../audios/";
// $b=$b . basename( $_FILES['file2']['name']);
// if(move_uploaded_file($_FILES['file2']['tmp_name'],$b))
// {
//  echo "File2 uploaded";
// }
// else
// {
//  echo "Error2";
// }	

	// $did=$_POST['d_id'];
	// $name=$_POST['name'];
 
      
	//   $sq = "INSERT INTO display_master(Display_id,Image,File,Name) VALUES ('$did','$a','$b','$name')";
			
	//   if(mysqli_query($db,$sq))
	// 		{
	// 			echo '<script language="javascript">';
	// 			echo 'alert ("Record Saved")';
 //         		echo '</script>';
				
	// 			header("location: view2.php");
	// 		}	
}
?>
    

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vl {
  border-left: 6px solid black;
  height: 100%;
  position: absolute;
  left: 30%;
  margin-left: -3px;
  top: 0;
}
.jl {
  border-left: 6px solid black;
  height: 100%;
  position: absolute;
  left: 70%;
  margin-left: -3px;
  top: 0;
}
</style>
</head>
<body>
	<div class="vl"></div>
<pre><center>
    <form  method="post" enctype="multipart/form-data">
    
    <b>Add Records</b>
		<hr width=100% >
		<hr width=100% >
		<br>
<table>
<tr>
	<tr><td>Display Id :</td><td><input type="text" name="d_id" ><br><br></td></tr>
    <tr><td>Image :</td><td> <input type="file" name="file1" id="fileToUpload"><br><br></td></tr>
	<tr><td>File :</td><td> <input type="file" name="file2" id="fileToUpload2"><br><br></td></tr>
	<tr><td>Name :</td><td> <input type="text" name="name" ><br><br></td></tr>
    <tr><td><input type="submit" value="Add" name="submit"><br><br></td></tr>
    <td><hr width=300% >
		<hr width=300% >
		<br></td>
</tr>    
</form>
    </pre></center>

<div class="jl"></div>
</body>
</html>
<?php
}
else
{
	 header("location: adminlogin.php");
}
   
?>