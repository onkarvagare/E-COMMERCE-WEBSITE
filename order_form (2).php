<?php
include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Order Form</h2>
        <form action="process_order.php" method="POST">
            <input type="hidden" name="total_price" value="<?php echo $_POST['total_price']; ?>">

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="customer_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>

            <h4>Total Price: <?php echo number_format($_POST['total_price'], 2); ?></h4>

            <button type="submit" class="btn btn-primary mt-3">Place Order</button>
        </form>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
