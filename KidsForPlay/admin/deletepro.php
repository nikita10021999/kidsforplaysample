<?php
 include("connect.php");
 session_start();
 if(isset($_SESSION['admin_login']))
 {

$id=$_GET['id'];
    $sql= "delete from product_master where Productmaster_id = $id  "; 
    //"call dp($id)";
    $result=mysqli_query($db,$sql);
    header("location: view1.php");

}
else
{
	 header("location: adminlogin.php");
}
   
    ?>
