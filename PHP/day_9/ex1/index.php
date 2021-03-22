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
    <div class="container w-25">
        <h3 class="text-center">Login</h3>
        <form action="./ex1.1/index.php" method="POST">
            <label for="Username" >Username:&nbsp<input type="text" name="username" id="uname"></label><br/>
            <label for="Password">Password:&nbsp<input type="password" name="pass" id="passwd"></label><br/>
            <input type="submit" name="login" value="Login">
            <input type="reset" name="reset" value="Reset">
        </form>
    </div>
</body>
</html>
