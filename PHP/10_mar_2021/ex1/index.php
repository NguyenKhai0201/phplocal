<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ex1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style type="text/css">
            .borderBody{
                margin:0 auto;
                width:650px;
                border:2px solid black;
                border-radius:12px;
            }
            .bgcolor{
                background-color:lightgreen;
            }
            h3{
                font-weight:bold;
            }
        </style>
    </head>
    <body>
    <?php
    $name=$notice=$pass="";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
            $name = $_POST['username'];
            $pass = $_POST['password'];
        } else {
            $notice = "Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại!!!";
        }
    }
    ?>
    <div class="container borderBody">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <h3 class="text-center bgcolor p-3">Sign in</h3>
            <input class="form-control mt-3"  type="text" name="username" placeholder="Username" required />
            <input class="form-control mt-3" type="password" name="password" placeholder="Password" required />
            <input class="form-control mt-3 bgcolor mb-3" type="submit" value="login">
        </form>
    <div class="text-center bg-secondary">
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            echo $name . "<br>";
            echo $pass . "<br>";
            echo $notice;
        }

    ?>
    </div>
    </div>
    </body>
</html>
