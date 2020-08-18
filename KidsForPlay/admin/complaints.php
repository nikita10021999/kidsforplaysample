<?php
include("connect.php");
session_start();
if(isset($_SESSION['admin_login']))
{ 
 
  
  $sql1= "select * from contact_us "; 
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

<br><br><br><br> 

<table id="example" border="1%" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr>
<th><strong>Name</strong></th>
<th><strong>Email-Id</strong></th>
<th><strong>Phone No.</strong></th>
<th><strong>Message</strong></th>

</tr>
</thead>
<tbody>

<?php 
while($row = mysqli_fetch_assoc($result1)){

    ?>
  <tr><td align="center"><?php echo $row['name']; ?> </td>
<td align="center"> <?php echo $row['email']; ?></td>
<td align="center"> <?php echo $row['phone']; ?></td>
<td align="center"> <?php echo $row['message']; ?></td>

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

