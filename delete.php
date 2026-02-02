<?php
include 'config.php';

$ID = $_GET['id'];

mysqli_query($con,"DELETE FROM `tb1product` WHERE id= $ID");
header("location:index.php");

?>