<?php
include("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{

if(isset($_POST["submit"])) 
{
	if($_FILES['fileToUpload1']["name"]!="" )
	{
		$a = "../images/display/";
		$a1 = $a . basename($_FILES["fileToUpload1"]["name"]);
		 if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $a1)) 
		 {
			echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
		}
		
		
	}
	else {
	$a1=$_POST['file'];
	}
	
	
	if($_FILES['fileToUpload2']["name"]!=""  )
	{
		$b ="../audios/";
		$b1 = $b . basename($_FILES["fileToUpload2"]["name"]);
		 if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $b1)) 
		 {
			echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
		}
		
		
	}
	else {
	$b1=$_POST['file2'];
	}
	
	
	$pid=$_POST['pid'];
	$id=$_POST['id'];
	$name=$_POST['name'];
	
	require_once("connect.php");
	$sql = "UPDATE display_master SET Display_id=$pid, Image='$a1', File='$b1', Name='$name' WHERE Displaymaster_id=$id";
		
		if(mysqli_query($db,$sql)) {
			echo "record update";
			header("location: view2.php");
		}	
		else
		{
			echo $sql."record not update";
		}
	
}
		
	require_once("connect.php");
	$Displaymaster_id =$_GET['Displaymaster_id'];
	$sql= "select * from display_master where Displaymaster_id=$Displaymaster_id "; //"call sp('$pnm',$price,$qty,'$target_file')";
	$result=mysqli_query($db,$sql);
	
?>
<!DOCTYPE html>
<html>
<body>
<pre><center><a href="add.php">Add</a>
<?php 
$row = mysqli_fetch_assoc($result);

	?>
	<form  method="post" enctype="multipart/form-data">
	
	Display Id <input type="number" name="pid" value=<?php echo $row['Display_id']; ?> ><br>
	Image <img width="100px" src= "<?php echo $row['Image']; ?>" />
	File <input type="text" value=<?php echo $row['File']; ?>  readonly><br>
	<input type="hidden" name="file" value="<?php echo $row['Image']; ?>" >
	Add new Image<input type="file" name="fileToUpload1" id="fileToUpload1"><br>
	<input type="hidden" name="file2" value="<?php echo $row['File']; ?>" >
	Add new File<input type="file" name="fileToUpload2" id="fileToUpload2"><br>
	Name <input type="text"name="name" value=<?php echo $row['Name']; ?>  ><br>
	<input type="hidden" name="id" value="<?php echo $Displaymaster_id; ?>">
	<input type="submit" value="Update" name="submit">
</form>
  
	  <?php

	
?>

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
