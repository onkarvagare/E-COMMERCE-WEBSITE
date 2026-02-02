<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include'header.php';
    ?>
</head>
<body>
    
   <h1 class="text-warning font-monospace my-3 text-center">TSHIRTS</h1> 
    <div class="container-fluid">
        <div class="col-md-12">
        <div class="row">

    

<?php

    include 'config.php';
    $Record=mysqli_query($con,"SELECT * FROM `tb1product` ");

   while( $row=mysqli_fetch_array($Record)){

    $check_page=  $row['pcategory'];
    if( $check_page==='Tshirt')
    {

   



    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3'>
    <div class='card m-auto' style='width:18rem;'>
    <form action='insert.php' method='POST'>
        <img src='../admin/product/$row[pimage]' class='card-img-top'>
        <div class='card-body text-center '>
            <h5 class='card-title text-danger fs-4 fw-bold'>$row[pname]</h5>
            <p class='card-text text-danger fs-4 fw-bold'>RS: $row[pprice]</p>
         <input type='hidden' name='PName' value='$row[pname]'>
              <input type='hidden' name='PPrice' value='$row[pprice]'>
        <input type='number'name='PQuantity' value='min='1' max='20' placeholder='Quantity''><br><br>
        <input type='submit'name='addCart' class='btn btn-danger text-white w-100' value='Add To Cart'>


        </div>
    </div>
    </form>
    </div>";
    
}
   }
?>

</div>
        </div>
    </div>
    
    <?php
    include 'footer.php';
    ?>
</body>
</html>