<?php
include("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{ 
 
  
  $sql1= "select * from display_master "; 
    $result1=mysqli_query($db,$sql1);
     
    require_once('adminheader.php');  
?>
<!DOCTYPE html>
<html>
<head>
  
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #90EE90;
  color: black;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.button1 {
  background-color: #ADD8E6;
  border: none;
  color: black;
  padding: 15px 52px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 93%;
</style>
   

</head>


<body>

<a href="add.php" class="button1">Add</a>

<br><br>
Display Id : 1-Alphabets, 2-Numbers, 3-Fruits, 4-Vegetables, 5-Animals
<br><br>

<table id="example" border="1%" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr>
<th><strong>Display Id</strong></th>
<th><strong>Image</strong></th>
<th><strong>File</strong></th>
<th><strong>Name</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>

<?php 
while($row = mysqli_fetch_assoc($result1)){

    ?>
  <tr><td align="center"><?php echo $row['Display_id']; ?> </td>
<td align="center"><img width=50px src= "<?php echo $row['Image']; ?>" /></td>
<td align="center"> <?php echo $row['File']; ?></td>
<td align="center"> <?php echo $row['Name']; ?></td>

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

