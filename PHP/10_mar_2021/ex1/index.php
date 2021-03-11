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

        </style>
    </head>
    <body>
    <form action="#" method="POST">
        <div class="container borderBody">
            <h3 class="text-center container-fluid bgcolor p-3">Sign in</h3>
            <label>
                <input class="w-70 mt-3"  type="text" name="username" placeholder="Username" required />
            </label><br>
            <label>
                <input class="w-70 mt-3" type="password" name="password" placeholder="Password" required />
            </label><br>
            <label><input class="w-70 m-3 bgcolor" type="submit" value="login"></label>
        </div>
    </form>
    <?php
        if($_POST('username')==admin&&$_POST('password')==admin){
            $name=$_POST('username');
            $pass=$_POST('password');
        }
        else{
            $notice="Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại!!!";
        }
        echo $name."<br>";
        echo $pass."<br>";
        echo $notice;
    ?>
    </body>
</html>
