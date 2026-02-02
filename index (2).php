<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php
session_start();

if(!$_SESSION['admin'])
{
    header("location:form/login.php");
}
?>

    <nav class="navbar navbar-ligt bg-dark">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white"><h1>MYSTORE</h1></a>
        <span>

        <i class="fa-solid fa-user-tie"></i>
        Hello <?php   echo $_SESSION['admin']; ?> &nbsp;
        <i class="fa-solid fa-right-from-bracket"></i><a href="../form/logout.php" class="text-decoration-none text-white">Logout</a>&nbsp;
        <a href="../../user/index.php" class="text-decoration-none text-white">UserPanel</a>
        </span>
    </div>
</nav>

    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary">
                
    <form action="insert.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <h1 class="text-center fw-bold fs-3 text-warning">Product Details</h1>
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Product Name</label>
        <input type="text" class="form-control" name="pname" placeholder="Enter product Name">
    </div>



    <div class="mb-3">
        <label  class="form-label">Product Price</label>
        <input type="text" class="form-control" name="pprice" placeholder="Enter product price">
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Product Image</label>
        <input type="file" name="pimage" class="form-control">
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Select Page Catagory</label><br>
        <select class="form-select" name="pages">
            <option value="Home">Home</option>
            <option value="Tshirt">Tshirt</option>
            <option value="Shirt">Shirt</option>
            <option value="Pant">Pant</option>
        </select>
    </div>
    <input type="submit" name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white" value="Upload">

    </form>
    </div>
    </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
<table class="table table-hover border border-warning my-5">

<thead class="bg-dark text-white fs-5 font-monospace text-center">
   
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>UPDATE</th>
</thead>
<tbody class="text-center">
<?php
include 'config.php';
$record=mysqli_query($con,"SELECT * FROM `tb1product`");


while($row=mysqli_fetch_array($record))
echo"
    <tr>
    
    <td>$row[pname]</td>
    <td>$row[pprice]</td>
    <td><img src='$row[pimage]' height='90px' width='200px'></td>
    <td>$row[pcategory]</td>
    <td><a href='delete.php ? id= $row[id]' class='btn btn-danger'>Delete</a></td>
     <td><a href='update.php? id=$row[id]' class='btn btn-warning'>UPDATE</a></td>
</tr>
";


?>
</tbody>
</table>
</div>
    </div>
</div>
    
</body>
</html>