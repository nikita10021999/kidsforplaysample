<?php
include("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{	
 
  		
    $sql= "select * from product_master "; 
    $result=mysqli_query($db,$sql);
	
	$sql1= "select * from display_master "; 
    $result1=mysqli_query($db,$sql1);
     
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>DataTables example - Bootstrap 3</title>
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=19472395a2969da78c8a4c707e72123a">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <style type="text/css" class="init">
   
    </style>
    <script type="text/javascript" src="/media/js/site.js?_=5e8f232afab336abc1a1b65046a73460"></script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap.html" async></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
    <script type="text/javascript" class="init">
   
$(document).ready(function() {
    $('#example').DataTable();
} );

    </script>
</head>


<body>
<br>
<b><a href="logout.php">Logout</a> </b> <br> <br>
<a href="addpro.php">Add Product</a>
<table id="example" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr>
<th><strong>Product Id</strong></th>
<th><strong>Product Name</strong></th>
<th><strong>Age</strong></th>
<th><strong>Price</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Image</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>

<?php 
while($row = mysqli_fetch_assoc($result)){

    ?>
  <tr><td align="center"><?php echo $row['Product_id']; ?> </td>
<td align="center"> <?php echo $row['Productmaster_name']; ?></td>
<td align="center"> <?php echo $row['Age']; ?></td>
<td align="center"> <?php echo $row['Price']; ?></td>
<td align="center"> <?php echo $row['Quantity']; ?></td>
<td align="center"><img width=50px src= <?php echo $row['Image']; ?> /></td>
<td align="center"><a href="editpro.php?Productmaster_id=<?php echo $row["Productmaster_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deletepro.php?id=<?php echo $row["Productmaster_id"]; ?>">Delete</a>
</td>
</tr>   
      <?php
}
   
?>

</table>

<br>
<br>
<br>
<br>


<a href="add.php">Add</a>
<table id="example" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr>
<th><strong>Display Id</strong></th>
<th><strong>Image</strong></th>
<th><strong>File</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>

<?php 
while($row = mysqli_fetch_assoc($result1)){

    ?>
  <tr><td align="center"><?php echo $row['Display_id']; ?> </td>
<td align="center"><img width=50px src= <?php echo $row['Image']; ?> /></td>
<td align="center"> <?php echo $row['File']; ?></td>
<td align="center"><a href="edit.php?Displaymaster_id=<?php echo $row["Displaymaster_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["Displaymaster_id"]; ?>">Delete</a>
</td>
</tr>   
      <?php
}
   
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

