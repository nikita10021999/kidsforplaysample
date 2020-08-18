<?php

include("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{


if(isset($_POST["submit"])) 
{
    if($_FILES['fileToUpload']["name"]!="")
    {
        $target_dir = "../images/products/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
         {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        }
    }
    else
        $target_file=$_POST['file'];
	$pid=$_POST['pid'];
    $pnm=$_POST['pnm'];
	$age=$_POST['age'];
    $price=$_POST["price"];
    $qty=$_POST["qty"];
    $id=$_POST['id'];
    require_once("connect.php");
    $sql = "UPDATE product_master SET Product_id=$pid, Productmaster_name='$pnm', Age=$age, Price=$price, Quantity=$qty, image='$target_file' WHERE Productmaster_id=$id";
        
        if(mysqli_query($db,$sql)) {
            echo "record update";
			header("location: view1.php");
		}	
        else
		{
            echo $sql."record not update";
		}
}
    
  /* $target_file = "images/" . basename($_FILES["fileToUpload"]["name"]);
 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
     $pnm=$_POST['pnm'];
    $price=$_POST['price'];
    $qty=$_POST['qty']; */
	
	
    require_once("connect.php");
    $Productmaster_id =$_GET['Productmaster_id'];
    $sql= "select * from Product_master where Productmaster_id=$Productmaster_id "; //"call sp('$pnm',$price,$qty,'$target_file')";
    $result=mysqli_query($db,$sql);
    
?>
<!DOCTYPE html>
<html>
<body>
<pre><center><a href="addpro.php">Add Product</a>
<?php 
$row = mysqli_fetch_assoc($result);

    ?>
    <form  method="post" enctype="multipart/form-data">
	
	Id <input type="number" name="pid" value=<?php echo $row['Product_id']; ?> ><br>
    Name <input type="text" name="pnm" value=<?php echo $row['Productmaster_name']; ?> ><br>
    Age <input type="number" name="age" value=<?php echo $row['Age']; ?> ><br>
	Price <input type="number" name="price" value=<?php echo $row['Price']; ?> ><br>
    Quantity <input type="text" name="qty" value=<?php echo $row['Quantity']; ?> ><br>
    Image <img width="100px" src= "<?php echo $row['Image']; ?>" />
    <input type="hidden" name="file" value="<?php echo $row['Image']; ?>">
    <input type="hidden" name="id" value="<?php echo $Productmaster_id; ?>">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Update product" name="submit">
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
