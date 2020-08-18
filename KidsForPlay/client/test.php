<?php

    include("connect.php");
    session_start();
 
    $uid=$_SESSION['U_id'];
    $total =  $_SESSION["total"];
    $a=$_SESSION["address"];
     $d=date("d-m-Y");

    $sql= "select * from cart c ,product_master p where p.Productmaster_id=c.Productmaster_id and U_Id=$uid";

    $results=mysqli_query($db,$sql);

    while($row = mysqli_fetch_assoc($results))
    {

        $qty=$row['Quantity_cart'];
        $pid=$row['Productmaster_id'];
        
         $sq = "INSERT INTO orders (U_id, Productmaster_id, Quantity, Address, Total_amount, Order_date, Status) VALUES ($uid, $pid, $qty, '$a', $total, '$d', '0')";
            
        if(mysqli_query($db,$sq)) {

          
        }
        else {

            echo $sq;
        }


    }  


    $s= "delete from cart where U_id = $uid";

    $results=mysqli_query($db,$s);



?>