<?php
    include("connection.php");
    $query="INSERT INTO `product`(`price`,`name`,`pdec`) VALUES(1000,'vivo','10 Gb')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "Insert succes";
    }
    else
    {
        echo "Falied";
    }
?>