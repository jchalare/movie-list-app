<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container" >
    <h1>Create Account</h1>
    <form method="post" action="../controllers/UserViewController.php">
    <div class="mb-3">
        <label for="user_name" class="form-label">User name</label>
        <input type="text" class="form-control" id="user_name" name="user_name" >
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number">
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../index.js"></script>

</body>
</html>