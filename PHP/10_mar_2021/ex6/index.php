<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex6</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        $check=$i=0;
        $string="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $tring=strtolower($_POST["Search"]);
            for($i=0;$i<strlen($string);$i++){
                if(in_array($string[$i])){
                    $check++;
                }
            }
        }
    ?>
    <div class="container mt-3 w-75">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="bg-success p-3">
                Search String:
                <input class="float-right mr-5 w-50" type="text" name="Search" placeholder="Nhập chuỗi để tìm nguyên tâm" required/>
            </div>
            <div class="text-center mt-2"><input class="text-center bg-primary" type="submit" name="submit" value="Submit"></div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Ta có". $check."nguyên âm trong". $string;
    }
    ?>
</body>
