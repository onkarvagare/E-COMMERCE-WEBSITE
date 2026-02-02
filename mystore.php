<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
<style>
    
</style>
</head>

<?php
session_start();

if(!$_SESSION['admin'])
{
    header("location:form/login.php");
}
?>
<body>
    <nav class="navbar navbar-ligt bg-dark">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white"><h1>MYSTORE</h1></a>
        <span>

        <i class="fa-solid fa-user-tie"></i>
        Hello <?php   echo $_SESSION['admin']; ?> &nbsp;
        <i class="fa-solid fa-right-from-bracket"></i><a href="form/logout.php" class="text-decoration-none text-white">Logout</a>&nbsp;
        <a href="../user/index.php" class="text-decoration-none text-white">UserPanel</a>
        </span>
    </div>
</nav>
<br>
<div>
    <h2 class="text-center">Dashboard</h2>
    <br>
    </div>

    <div class="col-md-6 bg-dark text-center m-auto" >
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">AddPost</a>
    <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5" id="c">Users</a>
    <a href="order.php" class="text-white text-decoration-none fs-4 fw-bold px-5" id="c">Orders</a>

    </div>
</body>
</html>