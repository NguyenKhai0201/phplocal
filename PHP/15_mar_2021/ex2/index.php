<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
       .bgcl{
           background-image: url("img/bgcolor.jpg");
       }
   </style>
</head>
<body>
<div class="w-50 text-white mt-5 bgcl ml-5">
    <div class="container">
        <form action="login_success.php" method="post">
            <label for="username" class="mt-2">Username</label><br/>
            <input type="text" name="name" class="form-control"><br><br/>
            <label for="password">Password</label><br/>
            <input type="password" name="pass" class="form-control"><br><br/>
            <label>
                <input type="checkbox" name="remember">&nbsp;Remember me
            </label>
            <br/>
            <input type="submit" class="bg-success mb-3 p-1" name="login" value="Login">
        </form>
    </div>
</div>
</body>
</html>
