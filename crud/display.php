<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body  style= "background-color:#264348;" ><br><br>

<h1 style="text-align:center";>CRUD PROJECT</h1>


    <div class="container">
     <button class="btn btn-secondary my-5"><a href="product.php" 
     class="text-light">New Product</a>

    </button >
         <table style="background-color:#c0c0c0;" border="1" class ="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Expire Date</th>
                <th scope="col">Operations </th>
                   
    
                </tr>
            </thead>
            <tbody>
<?php
 
$sql="Select * from crud";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $Id=$row['Id'];
        $Name=$row['Name'];
        $Description=$row['Description'];
        $Quantity=$row['Quantity'];
        $Price=$row['Price'];
        $Expiry_Date=$row['Expiry_Date'];
        echo'<tr>
        <th scope="row">'.$Id.'</th>
        <td>'.$Name.'</td>
        <td>'.$Description.'</td>
        <td>'.$Quantity.'</td>
        <td>'.$Price.'</td>
        <td>'.$Expiry_Date.'</td>
        <td>
        <button class="btn btn-dark"><a href="update.php?updateid='.$Id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$Id.'" class="text-light">Delete</a></button>
        </td>
        </tr>';
    }
}    
?>


           

</tbody>
</table>

                
    </div>
</body>
</html>