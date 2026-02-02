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
include 'config.php';
$id = $_GET['id'];

$Record= mysqli_query($con,"SELECT * FROM `tb1product` WHERE id = $id ");
$data = mysqli_fetch_array($Record);
?>

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
                
    <form action="update1.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <h1 class="text-center fw-bold fs-3 text-warning">Product UPDATE</h1>
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Product Name</label>
        <input type="text" class="form-control" value="<?php echo $data['pname']?>" name="pname" placeholder="Enter product Name">
    </div>



    <div class="mb-3">
        <label  class="form-label">Product Price</label>
        <input type="text" class="form-control" value="<?php echo $data['pprice']?>" name="pprice" placeholder="Enter product price">
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Product Image</label>
        <input type="file" name="pimage" class="form-control"><br>
        <img src="<?php echo $data['pimage']?>" alt="" style="height:100px">
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
    <input type="hidden" name="id" id="" value="<?php echo $data['id']?>">
    <input type="submit" name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white" value="UPDATE">

    </form>
    </div>
    </div>
    </div>


</body>
</html>



