<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ex3</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
        // khai báo
        $name=$email=$phone=$web=$message=$err="";
    // dieu kien nhap
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST["name"])){
            $name=$_POST["name"];
        }
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email=$_POST["email"];
        }
        else{
            $err="Không để trống";
        }
        if(is_numeric($_POST["phone"])){
            $phone=$_POST["phone"];
        }
        else{
            $err="Phone phải nhập số";
        }
        if(filter_var($_POST["web"],FILTER_VALIDATE_URL)){
            $web=$_POST["web"];
        }
        else{
            $err="Trường website cần phải có định dạng URL";
        }
        $message=$_POST["message"];
    }
    ?>
        <div class="container-fluid">
            <div class="container mt-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <span class="text-danger"><?php echo $err;?></span>
                    <input class="mt-3 form-control" type="text" name="name" placeholder="Your Name" required/>
                    <input class="mt-3 form-control" type="email" name="email" placeholder="Your Email Address" />
                    <input class="mt-3 form-control" type="number" name="phone" placeholder="Your Phone Number" />
                    <input class="mt-3 form-control" type="text" name="web" placeholder="Your Website starts with https://" />
                    <textarea class="mt-3 form-control" row="5" type="text" name="message" placeholder="Type Your Message Here..."/></textarea>
                    <input class="mt-3 bg-danger text-white form-control" type="submit" name="submit" value="SUBMIT">
                </form>
            </div>
        </div>
    <div class="w-70 mt-3">
    <?php
        // xuat
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(filter_var($_POST["web"],FILTER_VALIDATE_URL)&& is_numeric($_POST["phone"])&&filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)&&!empty($_POST["name"])){
                echo "Your Name: ".$name."<br>";
                echo "Your Email: ".$email."<br>";
                echo "Your Website: ".$web."<br>";
                echo "Your Phone Number: ".$phone."<br>";
                echo  "Your Message: ".$message;
            }
        }
    ?>
    </div>
    </body>
</html>
