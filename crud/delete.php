<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){

    $Id=$_GET['deleteid'];

    $sql="delete from crud where id=$Id";
    $result=mysqli_query($con,$sql);
    if($result){
      
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

 }


 ?>