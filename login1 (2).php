<?php

$con=mysqli_connect('localhost','root','','ecommerce_table');

$A_name=$_POST['uname'];
$A_pass=$_POST['upass'];

$result=mysqli_query($con,"SELECT * FROM `admin` WHERE username='$A_name' AND password ='$A_pass' ");
session_start();

if(mysqli_num_rows($result))
{
        $_SESSION['admin']= $A_name;
    echo"
    <script>
    alert('Login Sucessfully.....');
    window.location.href='../user.php';
    </script>";
}
else
{
    
    echo"
    <script>
    
     window.location.href='login.php';
    </script>";
}

?>