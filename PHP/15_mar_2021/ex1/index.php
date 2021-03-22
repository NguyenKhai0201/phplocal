<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container w-25 mt-5">
    <h2 class="text-center"> Login</h2>
    <form action="login_success.php" method="post">
        <label for="username">User Name</label><br>
        <input type="text" name="username" class="form-control">
        <label for="passsword">Password</label><br>
        <input type="password" name="pass" class="form-control">
        <input class="bg-info py-2 mt-3 text-center" type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>
