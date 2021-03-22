<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex2</title>
    <meta charset="utf-8">
    <link rel="index" href="ex2/index.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        div{
            background-image: url("img/bg.jpg");
        }
    </style>
</head>
<body>
<div class="text-center mt-5 bg-dark text-white w-25 container p-5">
    <?php
    $name=$pass=$err="";
        if($_POST['username']=="admin"&&$_POST['pass']=="Iamnotarobot@Mis2022"){
            $name=$_POST["username"];
            $pass=$_POST["pass"];
            echo "Hello"." ".$name;
        }
        else{
            if($_POST['pass']!="Iamnotarobot@Mis2022"){
                $err="Nhập đúng password";
            }
        }
    ?>
</div>
</body>
<body>

