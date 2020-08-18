<?php
 include("connect.php");

 session_start();
if(isset($_SESSION['admin_login']))
{	

$id=$_GET['id'];
    $sql= "delete from display_master where Displaymaster_id = $id  "; 
    $result=mysqli_query($db,$sql);
    header("location: view2.php");

}
else
{
	 header("location: adminlogin.php");
}
   
    ?>
