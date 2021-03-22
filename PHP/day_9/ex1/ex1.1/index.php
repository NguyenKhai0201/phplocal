<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex2</title>
    <meta charset="utf-8">
    <link rel="index" href="ex1/index.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container text-center p-5">
    <?php
        session_start();
        if(isset($_POST['login'])){
            $name=$_POST['username'];
            $pass=$_POST['pass'];
            if($name==""&&$pass==""){
                echo "Vui lòng nhập username và password";
            }
            else{
                echo "Bạn đăng nhập thành công";
                echo "<br>";
                echo "Wellcome, ".$name;
                $_SESSION['us']=$name;
                echo "<br>";
                ?>
    <a href="logout/logout.php">Logout</a>
    <?php
            }
        }
    ?>
</div>

</body>
</html>

