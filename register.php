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
        <div class="col-md-6 mt-5 m-auto  bg-white shadow-sm font-monospace border border-dark">
            <p class="text-warning fs-3 fw-bold my-3 text-center " style="font-size: 1.5rem;">USER REGISTER</p>
            <form action="insert.php" method="POST">

            <div class="mb-3">
                <label for="">USER NAME</label>
                <input type="text" name="name" placeholder="enter user name" class="form-control" required>
            </div>

            
            <div class="mb-3">
                <label for="">USER Email</label>
                <input type="text" name="email" placeholder="enter user email" class="form-control" required>
            </div>

            
            <div class="mb-3">
                <label for="">USER PHONE NO</label>
                <input type="number" name="number" placeholder="enter user phone no" class="form-control" required>
            </div>

            
            <div class="mb-3">
                <label for="">PASSWORD</label>
                <input type="password" name="password" placeholder="enter password" class="form-control" required>
            </div>

                <div class="mb-3">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
         <button name="submit" class="w-50 fs-4 bg-warning text-white">REGISTER</button>
                </div>
                
                <div class="mb-3">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
         <button class="w-50 fs-4 bg-danger text-white "><a href="login.php" class="text-decoration-none text-white">ALEREDY ACCOUNT</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>