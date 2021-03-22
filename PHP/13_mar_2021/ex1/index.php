<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$error=array();
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileupload"]["name"]);

//kiểm tra điều kiện upload
/*
 * 1.kiểm tra kích thước
 */
$maxfilesize=2100000;
if($_FILES["fileupload"]["size"]>2100000){
    $error['fileupload']="File upload không được > 1Mb";
}

/*
 * 2.kiểm tra loại file
 */
$file_type=pathinfo($_FILES['fileupload']['name'],PATHINFO_EXTENSION);
$file_type_allow=array('jpg','png','jpeg','gif');
if(!in_array(strtolower($file_type),$file_type_allow)){
    $error['fileupload']="File is not an image";
}
else{
    $flag=true;
}
/*
 * kiểm tra file đã tồn tại trên hệ thống
 */
if(file_exists($target_file)){
    $error['fileupload']="error";
}
/*
 * kiểm tra và chuyển file từ uploads lên sever
 */
if(empty($error['fileupload'])){
    if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$target_file)){
        echo "You have successfully uploaded";
        $flag=true;
    }
    else{
        echo "Your upload failed";
    }
}
?>
<div class="container-fluid bg-dark text-white">
    <div class="container">
        <h5>Select a file to upload</h5>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <label><input type="file" name="fileupload" value="Choose File"></label>
            <p class="text-muted">Only ipg,jpeg,png and gif file with maximum size of 1MB is allowed.</p>
            <input type="submit" name="submit" class="bg-success" value="Upload"><br/>
        </form>
        <?php
        if(isset($error['fileupload'])){
            ?>
            <p class="text-danger text-center"><?php echo $error['fileupload']; ?></p>
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
