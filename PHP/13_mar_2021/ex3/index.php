<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex3</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("img/bg.jpg");
            color:#F6F3E5;
        }
    </style>
</head>
<body>
<?php
    $name=$pass=$email=$confirm_pass="";
    $error_confirm_pass=$error_email=$error_name=$error_pass=$error_fileupload="";
    $target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES['fileupload']['name']);
    $file_type=pathinfo($_FILES['fileupload']['name'],PATHINFO_EXTENSION);
    $file_type_allow=array('jpg','png','jpeg','gif');
    if(!in_array(strtolower($file_type),$file_type_allow)){
        $error_fileupload="File is not an image";
    }
    else{
        $flag=true;
    }
    if(empty($error['fileupload'])){
        if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$target_file)){
            echo "You have successfully uploaded";
            $flag=true;
        }
        else{
            echo "Your upload failed";
        }
    }
    if($_SERVER["PHP_SELF"]=="POST") {
        if (trim($_POST["username"]) == "" && trim($_POST["email"]) == "" && trim($_POST["confirm_pass"]) == "") {
            $error_name = "Username không được để trống";
            $error_email = "Email không được để trống";
            $error_pass = "Password không được để trống";
            $error_confirm_pass = "Confirm password không được để trống";
        } else {
            $name = $_POST["username"];
            $email = $_POST["email"];
        }
        if ($_POST["pass"] != $_POST["confirm_pass"]) {
            $error_confirm_pass = "Trường confirm password phải giống trường Password";
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email không đúng định dạng";
        }
        else{
            $email=$_POST["email"];
        }
    }
?>
    <div class="container-fluid">
        <div class="container mt-5 text-white w-50">
            <h2>Create an account</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <input class="form-control bg-dark text-white" type="text" name="username" placeholder="User Name">
                <span class="text-danger"><?php echo $error_name; ?></span><br/><br>
                <input class="form-control bg-dark text-white" type="email" name="email" placeholder="Email">
                <span class="text-danger"><?php echo $error_email; ?></span><br/><br>
                <input class="form-control bg-dark text-white" type="password" name="pass" placeholder="Password">
                <span class="text-danger"><?php echo $error_pass; ?></span><br/><br>
                <input class="form-control bg-dark text-white" type="password" name="confirm_pass" placeholder="Confirm Password">
                <span class="text-danger"><?php echo $error_confirm_pass; ?></span><br/><br>
                <p>Select your vavatar:<span><input type="file" name="fileupload" id="fileupload" value="Choose File"></span></p>
                <input class="bg-info" type="submit" name="submit" value="Register">
            </form>
            <div class="text-white">
                <?php
                if($_SERVER["PHP_SELF"]=="POST"){
                    echo $name;
                    echo "<br/>";
                    echo $email;
                    echo "<br/>";
                }
                ?>
            </div>

            <?php
            if(isset($error['fileupload'])){
                ?>
                <p class="text-danger text-center"><?php echo $error_fileupload; ?></p>
                <?php
            }
            ?>
            <?php
            if(isset($flag)){
                echo "<br/>"
                ?>
                <img class="w-25" src="<?php echo $target_file;?>">
                <?php
            }
            ?>
            <?php
            if (isset($flag)) {
                echo "<br/>"?>
                <p class="text-center text-white"><?php echo "Img_Name: " . $_FILES["fileupload"]["name"] . "<br/>";
                echo "Img File Type: " . $file_type; ?></p><?php
            }
            ?>
        </div>
    </div>
</body>
</html>
