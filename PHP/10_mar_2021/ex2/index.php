<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?
    $f_name=$l_name=$email=$gender=$state=$hobbies="";
    $f_name_err=$l_name_err=$email_err=$gender_err="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST["name"])) {
        $f_name =$_POST["name"];
    } else {
        $f_name_err = "!First Name is required";
    }
    if (!empty($_POST["lastname"])) {
        $l_name =$_POST["lastname"];
    } else {
        $l_name_err = "!Last Name is required";
    }
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST["email"];
    } else {
        $email_err = "!Email is not valid";
    }
    if (!empty($_POST["gender"])) {
        $gender =$_POST["gender"];
    } else {
        $gender_err = "!Gender is required";
    }
    $state=$_POST["states"];
    if (empty($_POST["hobbies"])) {
        $hobbies = "";
    }
    else{
        $hobbies=$_POST["$hobbies"];
    }
}
?>
    <div class="container-fluid float-left border mt-3 w-75">
            <div class="form-group text-center bg-light">
                <h3 class="text-center p-2">Registration Form</h3>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                    <label for="Firstname">First name</label>
                    <input class="form-control" type="text" name="name"><span class="text-danger"><?php echo $f_name_err; ?></span>
                </div>
                <div class="form-group">
                    <label for="Lastname">Last name</label>
                    <input class="form-control" type="text" name="lastname"><span class="text-danger"><?php echo $l_name_err; ?></span>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input class="form-control" type="email" name="email"><span class="text-danger"><?php echo $email_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <label><input type="radio" name="gender" value="male">Male</label>
                    <label><input type="radio" name="gender" value="female">Female</label><br/><span class="text-danger"><?php echo $gender_err; ?></span>
                </div>
                <div class="form-group">
                    <label>State</label>
                    <select name="state" class="form-control">
                        <option value="1">Johor</option>
                        <option value="2">Massachusetts</option>
                        <option value="3">Washington</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hobbies</label><br>
                    <label><input type="checkbox" name="hobbies" value="badminton">Badminton</label>
                    <label><input type="checkbox" name="hobbies" value="football">Football</label>
                    <label><input type="checkbox" name="hobbies" value="bicycle">Bicycle</label>
                </div>
                <div class="form-group">
                    <input class="bg-info" type="submit" name="save" value="saveRecord">
                    <input type="reset" name="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
    <div class="border float-right mt-3 w-25">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group bg-light">
                <h3 class="p-2">Featured</h3>
            </div>
            <div class="form-group ml-2">
                <h4>Special title treatment</h4>
            </div>
            <p class="ml-2">With supporting text below as a natural lead-in to additional content.</p>
            <div class="form-group ml-2">
                <input class="bg-info" type="submit" name="goSomewhere" value="Go somewhere">
            </div>
        </form>
    </div>
<?php
    if (!empty(!empty($_POST["name"])&&!empty($_POST["lastname"])&&!empty($_POST["gender"])&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
        echo "Đăng kí thành công."."<br/>";
        echo "Thông tin: "."<br/>";
        echo "First Name: " .$f_name."<br/>";
        echo "Last Name: ".$l_name."<br/>";
        echo "Email: ".$email."<br/>";
        echo "Gender: ".$gender."<br/>";
        echo "State: ".$state."<br/>";
        echo "Hobbies: ".$hobbies;
    }
?>
</body>
</html>
