<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex4</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("img/3d.jpg");
        }
    </style>
</head>
<body>
<?php
$error=array();
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
$file_type=pathinfo($_FILES['fileupload']['name'],PATHINFO_EXTENSION);
$file_type_allow=array('jpg','png','jpeg','gif');
if(!in_array(strtolower($file_type),$file_type_allow)){
    $error['fileupload']="File is not an image";
}
else{
    $flag=true;
}
if(file_exists($target_file)){
    $error['fileupload']="error";
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
?>
<?php
$err_text=$err_checkbox=$err_textarea=$err_radio=$err_file="";
$radio=$checkbox=$text=$textarea=$select="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(trim($_POST['text'])==""){
        $err_text="Trường text không được để trống ";
    }
    else{
        $text=$_POST["text"];
    }
    if(empty($_POST["checkbox"])){
        $err_checkbox="Cần check ít nhất 1 trường checkbox";
    }
    else{
        $checkbox=$_POST["checkbox"];
    }
    if(trim($_POST["textarea"])==""){
        $err_textarea="Trường textarea không được để trống";
    }


    else{
        $textarea=$_POST["textarea"];
    }
    if(empty($_POST["radioButton"])){
        $err_radio="Cần check ít nhất 1 trường radio";
    }
    else{
        $radio=$_POST["radioButton"];
    }
    $select=$_POST["option"];
}
?>
    <div class="container w-50 mt-3 mb-3 bg-light">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <label for="text">Text<br><input class="form-control" size="100" type="text" name="text" placeholder="placeholder"><span class="text-danger"><?php echo $err_text; ?></span></label><br/>
                <label for="checkbox" class="mt-3">Checkbox &nbsp;<span class="text-danger"><?php echo $err_checkbox; ?></span></label><br>
                <label><input type="checkbox" name="checkbox">&nbsp; checkbox 1</label><br/>
                <label><input type="checkbox" name="checkbox">&nbsp; checkbox 2</label><br/>
                <label><input type="checkbox" name="checkbox">&nbsp; checkbox 3</label><br/>
                <div class="mt-3">
                    Textarea <br/><span class="text-danger"><?php echo $err_textarea;?></span>
                    <textarea class="form-control" rows="5" name="textarea"></textarea>
                </div>
                <label for="radio" class="mt-4">Radio button</label>&nbsp; <span class="text-danger"><?php echo $err_radio; ?></span><br/>
                <label><input type="radio" name="radioButton">&nbsp; yep</label>
                <label><input type="radio" name="radioButton">&nbsp; nope</label>
                <label><input type="radio" name="radioButton">&nbsp; none</label>
                <div class="mt-3">
                    Select<br/>
                    <select name="option" class="form-control">
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 30">Option 3</option>
                    </select>
                </div>
                <div class="mt-3">
                    Upload files<br/>
                    <input type="file" name="fileupload" value="Choose File">
                </div>
                <input class="mt-3 form-control" type="submit" name="submit" value="Submit">
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
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                echo "Text: ".$text."<br>";
                echo "Checkbox: ".$checkbox."<br>";
                echo "Textarea: ".$textarea."<br>";
                echo "Radio: ".$radio."<br>";
                echo "Select: ".$select;
            }
        ?>
    </div>
</body>
</html>
