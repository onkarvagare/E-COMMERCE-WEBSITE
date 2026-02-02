<?php
include 'mystore.php';
$con = mysqli_connect('localhost', 'root', '', 'ecommerce_table');
$Record = mysqli_query($con, "SELECT * FROM `orders` ");

$row_count =mysqli_num_rows($Record);
?>
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
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
    
    <table class="table table-secondary table-bordered bg-dark text-white">
        <thead class="text-center">
            
            <th>NAME</th>
            <th>EMAIL</th>
            <th>NUMBER</th>
            <th>Address</th>
            <th>Total_price</th>
            <th>Order_date</th>
            
        </thead>
        <tbody class="text-center text-white">
        <?php
            $i=0;

        while ($row = mysqli_fetch_array($Record)) {
            echo "
            <tr>
                
                <td>{$row['customer_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>{$row['total_price']}</td>
                <td>{$row['order_date']}</td>
                
                



            </tr>
            ";
        }
        ?>
        </tbody>
    </table>
    </div>
    <div class="col-md-2 pr-5 text-center">
<h3 class="text-danger">Total</h3>
<h1 class="bg-danger text-white"><?php echo $row_count; ?></h1>

    </div>
    </div>
    </div>
</body>
</html>
