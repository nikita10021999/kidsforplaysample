<?php
require_once("connect.php");
$sq="SELECT id,ans FROM `game` ";
$result=mysqli_query($db,$sq);
//$arr=mysqli_fetch_row($result);
$id = $_POST['id'];
$ans = $_POST['answer'];



?>
