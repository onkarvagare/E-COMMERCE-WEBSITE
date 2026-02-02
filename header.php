  
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
     $count=0;
        
    if(isset($_SESSION['cart']))
    {
        $count= count($_SESSION['cart']);
    }
    
    ?>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand text-white"><h1>MYSTORE</h1></a>
            <div class="d-flex">
     <a href="index.php" class="text-white text-decoration-none pe-2"><i class="fas fa-home"></i>HOME</a>&nbsp;&nbsp;&nbsp;
    <a href="viewcart.php" class="text-white text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>CART<?php echo $count ?></a>&nbsp;&nbsp;
    
    <span class="text-white pe-2">&nbsp;&nbsp;
   
            <i class="fa-solid fa-user-shield"></i>Hello,
            <?php
            if(isset($_SESSION['user']))
            {
                echo $_SESSION['user'];
                echo " &nbsp;
          <a href='form/logout.php' class='text-white text-decoration-none' style='font-size: 1rem;'><i class='fa-solid fa-right-to-bracket'></i>Log Out</a>";
            }
            else{
                echo " &nbsp;
          <a href='form/login.php' class='text-white text-decoration-none' style='font-size: 1rem;'><i class='fa-solid fa-right-to-bracket'></i>LOGIN</a>";

            }
            ?>
            
          |  &nbsp;
            
            
        <a href="../admin/form/login1.php" class="text-white text-decoration-none pe-2">User Admin</a>
</span>

</nav>
</div>




<div class="bg-danger sticky-top font-monospace">
<ul class="list-unstyled d-flex justify-content-center ">
    <li><a href="tshirt.php" class="text-decoration-none text-white fs-4 fw-bold px-5">TSHIRT</a></li>
    <li><a href="shirt.php" class="text-decoration-none text-white fs-4 fw-bold px-5">SHIRT</a></li>
    <li><a href="pant.php" class="text-decoration-none text-white fs-4 fw-bold px-5">TROWSERS</a></li>
</ul>
</div>



</body>
</html>