<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-secondary ">
    
<br><br>
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary">
                
    <form action="login1.php" method="POST">

    <div class="mb-3">
        <h1 class="text-center fw-bold fs-3 text-warning">LOGIN PAGE</h1>
    </div>

    
    <div class="mb-3">
        <label  class="form-label">Name:</label>
        <input type="text" class="form-control" name="uname" placeholder="Enter User Name">
    </div>



    <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="upass" placeholder="Enter your password">
    </div>
    
    
    <input type="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white" value="Login">

    </form>
    </div>
    </div>
    </div>

</body>
</html>