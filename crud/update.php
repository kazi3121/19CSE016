<?php
include 'connect.php';
$Id=$_GET['updateid'];

$sql="Select * from crud where id=$Id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['Name'];
$Description=$row['Description'];
$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Expiry_Date=$row['Expiry_Date'];

if(isset($_POST['save'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expiry_Date=$_POST['expiry_date'];

    $sql="update crud set id=$Id, name='$name', description='$description', quantity='$quantity',
    price='$price', expiry_date='$expiry_Date'  where id=$Id"; 
    $result=mysqli_query($con,$sql);
    if($result){
     
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
  background-color:gray;
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
  <body style="background-color:#c2c2a3;"><br><br>
  <h1 style="color:#273746; text-align:center";>DATA UPDATION</h1>
 <div class="container mt-5 justify-content-center">
 
 <h3>Rewrite Here for Data to be Updated ⬇</h3>

 <form method="POST">

  <fieldset>
    <div class="form-group">
        <label>Name</label><br>
        <input type="text" name="name"class="form-control" value=<?php echo $Name;?>>
      </div>
    <div class="form-group">
        <label>Description</label><br>
        <input type="text" name="description" class="form-control" value=<?php echo $Description;?>>
      </div>
    <div class="form-group">
        <label>Quantity</label><br>
        <input type="text" name ="quantity" class="form-control"value=<?php echo $Quantity;?> >
    </div>
  <div class="form-group">
    <label>Price</label><br>
    <input type="text" name="price" class="form-control" value=<?php echo $Price;?>>
  </div>
  <div class="form-group">
    <label>Expiry Date</label><br>
    <input type="date" name="expiry_date"class="form-control" value=<?php echo $Expiry_Date;?>>
  </div>
  <button type="submit" name="save" class="btn btn-dark">Update</button>
</fieldset>
</form>
</div>
</body>

</html>