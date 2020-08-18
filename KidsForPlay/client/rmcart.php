<?php
 session_start();
 if(!isset($_SESSION['U_id']))
 {
   echo 0;
 }
 else
 {
  $uid=$_SESSION['U_id'];
  include("connect.php");
 $id= $_GET['Productmaster_id'];
 $sql="select Quantity_cart from cart where U_id=$uid and Productmaster_id=$id";
 $result=mysqli_query($db,$sql);
 $row = mysqli_fetch_assoc($result);
 if($row['Quantity_cart']>1)
   $sql="update cart set Quantity_cart=Quantity_cart-1  where U_id=$uid and Productmaster_id=$id";
else
   $sql="delete from cart where U_id=$uid and Productmaster_id=$id";
 if(mysqli_query($db,$sql))
  echo "Item Removed";
 else
  echo "Something Went Wrong";
}
?>