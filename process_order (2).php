<?php

$con=mysqli_connect('localhost','root','','ecommerce_table');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $total_price = $_POST['total_price'];

    $sql = "INSERT INTO orders (customer_name, email, phone, address, total_price) 
            VALUES ('$customer_name', '$email', '$phone', '$address', '$total_price')";

    if (mysqli_query($con, $sql))
     {
        echo "<script>alert('Order Placed Successfully!'); window.location.href='index.php';</script>";
        
    } 
    else
     {
        echo "<script>alert('Error: Could not place order'); window.location.href='order_form.php';</script>";
        header("location:order_form.php");
    }
}
?>
