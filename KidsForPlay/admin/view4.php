<?php
include("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{	
 
  		
    $sql= "select * from game "; 
    $result=mysqli_query($db,$sql);
	
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



<br>

<a href="addvd.php" class="button1">Add Videos</a>

<br><br>


<table id="example" border="1%" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Link data</strong></th>
<!-- <th><strong>Edit</strong></th>
<th><strong>Delete</strong></th> -->
</tr>
</thead>
<tbody>

<?php 
while($row = mysqli_fetch_assoc($result)){

    ?>

  <tr><td align="center"><?php echo $row['v_id']; ?> </td>
<td align="center"> <?php echo $row['v_name']; ?></td>
<td align="center"><?php echo $row['v_link'] ?></td>
<!-- <td align="center"><a href="editpro.php?Productmaster_id=<?php //echo $row["Productmaster_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="deletepro.php?id=<?php //echo $row["Productmaster_id"]; ?>">Delete</a>
</td> -->
</tr>   
      <?php
}
   
?>

</table>







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

