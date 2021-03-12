<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex5</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$a=$b=$result=$err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(is_numeric($_POST["numbera"])&& is_numeric($_POST["numberb"])){
        $a=$_POST["numbera"];
        $b=$_POST["numberb"];
        if(isset($_POST["plus"])){
            $result=$a+$b;
        }
        if(isset($_POST["minus"])){
            $result=$a-$b;
        }
        if(isset($_POST["multiply"])){
            $result=$a*$b;
        }
        if(isset($_POST["divide"])){
            $result=$a/$b;
        }
    }
    else{
        $err="Chi cho phép nhập số";
    }
}
?>
    <div class="container w-30 mt-4 border">
        <h3 class="text-center bg-secondary">Thực hành toán tử</h3>
        <span class="text-danger"><?php echo $err;?></span>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            Nhập số a: <br>
            <input class="form-control" type="text" name="numbera" required/>
            Nhập số b: <br>
            <input class="form-control" type="text" name="numberb" required/>
            <input class="btn btn-success mt-3" type="submit" name="plus" value="a+b">
            <input class="btn btn-primary mt-3" type="submit" name="minus" value="a-b">
            <input class="btn btn-danger mt-3" type="submit" name="multiply" value="a*b">
            <input class="btn btn-warning mt-3" type="submit" name="divide" value="a/b">
        </form>
        <span class="text-info">Result:<?php
            echo "<br>"."<br>";
            echo $result;?></span>
    </div>

</body>
</html>
