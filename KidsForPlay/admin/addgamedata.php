<?php
require_once("connect.php");

session_start();
if(isset($_SESSION['admin_login']))
{	


 if($_SERVER['REQUEST_METHOD'] == "POST") 
 {
 	if(isset($_POST['submit']))
 	{
         
         $f1=$_FILES['img']['name'];
         $que=$_POST['que'];
         $ans=$_POST['ans'];
         $o2=$_POST['o2'];
         $o3=$_POST['o3'];
         $o4=$_POST['o4'];

         $a="uploads/";
$a=$a . basename( $_FILES['img']['name']);

if(move_uploaded_file($_FILES['img']['tmp_name'],$a))
{
 echo "File uploaded";

 $sq = "INSERT INTO `game`(`picture`,`question`, `ans`, `o1`, `o2`, `o3`) VALUES ('$a','$que','$ans','$o2','$o3','$o4')";
 				
 if(mysqli_query($db,$sq))
       {
           echo '<script language="javascript">';
           echo 'alert("Record Saved");';
            echo '</script>';
           
           //header('Location: view3.php');
       }
   else
   {
       echo "error in inserting";
   }

}
else
{
 echo "Error";
}
	     
 	 

	}
    

}

?>
    

<!DOCTYPE html>
<html>
<head>
	
</head>
<body><center>
    <form  method="POST"  enctype="multipart/form-data">
    <b>Add Records</b>
		<hr width=100% >
		<hr width=100% >
		<br>
<table>
<tr>
    
    <tr><td>picture :</td><td> <input type="file" name="img" required><br><br></td></tr>
    <tr><td> Quetion :</td><td><input type="text" name="que" required><br><br></td></tr>
    <tr><td> answer :</td><td><input type="text" name="ans" required><br><br></td></tr>
    <tr><td> option 2 :</td><td><input type="text" name="o2" required><br><br></td></tr>
    <tr><td> option 3 :</td><td><input type="text" name="o3" required><br><br></td></tr>
    <tr><td> option 4 :</td><td><input type="text" name="o4" required><br><br></td></tr>
    <tr><td><button name="submit">Add</td></tr>
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









		