<?php

$host="localhost";
$user="root";
$pass="";
$database="kidsforplay";
$db=mysqli_connect($host,$user,$pass,$database);
session_start();
	
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }
  else
  {
  	$page=1;
  }
  $num_per_page=01;
  $start_from=($page-1)*01;

  $sql= "select * from puzzle limit $start_from,$num_per_page"; //"call sp()";
  $result=mysqli_query($db,$sql);
	
while($row = mysqli_fetch_assoc($result)){

    $per_sql= "select * from puzzle";
    $per_result=mysqli_query($db,$sql);
    $total_record=mysqli_num_rows($per_result);
    $total_page=ceil($total_record/$num_per_page);
    
   
    for($i=1;$i<$total_page;$i++)
    {
    	echo "<a href='Puzzle1.php?page=".$i."' >".$i."</a>";
    }
   
    	
?>
	
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="Puzzle1.css">

</head>
<body>

</body>
</html>

<div id="gallerywrapper">
      <div id="gallery">
        <div id="pic1">
          <img src="<?php echo $row['images']; ?>" height="350" width="500" alt="Image 1">
          <a class="previous" href="#pic5"> <?php echo "<a href='Puzzle1.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";?></a>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a class="next" href="#pic2"><?php echo "<a href='Puzzle1.php?page=".($page+1)."' class='btn btn-danger'>Next</a>"; ?></a>
          <h3>Image </h3>
          <p>Text of image</p>
        </div>
       
      </div>
</div>
      <?php
}
   
?>