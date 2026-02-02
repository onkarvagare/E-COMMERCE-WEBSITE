
<?php
  if(isset($_POST['update']))
  {
    include 'config.php';

    $IDD=$_POST['id'];
     $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage'];
    
   $image_loc=$_FILES['pimage']['tmp_name'];
   $image_name=$_FILES['pimage']['name'];
    $img_des="uploadimage/".$image_name;

   move_uploaded_file($image_loc,"uploadimage/".$image_name);

   $product_category = $_POST['pages'];

   
    mysqli_query($con,"UPDATE `tb1product` SET `pname`=' $product_name',`pprice`='$product_price',
    `pimage`='$img_des',`pcategory`='$product_category' WHERE id = $IDD ");

        header("location:index.php");
  }
    
    ?>