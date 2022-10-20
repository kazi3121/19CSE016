<?php
include 'connect.php';
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expiry_Date=$_POST['expiry_date'];

    $sql="insert into crud (Name,Description,Quantity,Price,Expiry_Date)
    values('$name','$description','$quantity','$price','$expiry_Date')";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo"successfully inserted";
      header('location:display.php');
    
    }else{
      die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <title>crud operation</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}




.container {
  padding: 10px;
  background-color:#c0c0c0 ;
}

input[type=text] {
  width: 100%;
  padding: 5px;
  margin: 1px 0 1px 0;
  display: inline-block;
  border: none;
  background: #f2ff2;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 100px solid #f1f1f1;
  margin-bottom: 100px;
}




</style>
  </head>
  <body style= "background-color:#008080;"><br><br>
  <h1 style="color:#800000; text-align:center";>Products Information</h1>

 
 <div class="container mt-5 justify-content-center">
  <h3>Put the Information Here ⬇</h3>
 <form method="POST">
    <div class="form-group">
        <label>Name</label><br>
        <input type="text" name="name"class="form-control" >
      </div>
      
    <div class="form-group">
        <label>Description</label><br>
        <input type="text" name="description" class="form-control" >
      </div>
    <div class="form-group">
        <label>Quantity</label><br>
        <input type="text" name ="quantity" class="form-control" >
    </div>
    <div class="form-group">
        <label>Price</label><br>
        <input type="text" name="price" class="form-control" >
    </div>
    <div class="form-group">
       <label>Expire Date</label><br>
       <input type="date" name="expiry_date"class="form-control" >
    </div>
  <button type="submit" name="save" class="btn btn-secondary">SAVE</button>
  </form>

  </div>
  </body>

</html>