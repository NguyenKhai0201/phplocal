<?php
session_start();
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    if($name=="admin"&&$pass=="123456"){
        echo "Đăng nhập thành công!";
        echo "<br>";
        echo "Chào mừng bạn, ".$name;
        echo "<br>";
        echo "Thời gian hiện tại đang login: ".date("Y/m/d").date("H:i:s");
        $_SESSION['us']=$name;
        echo "<br>";
        ?>
    <a href="index.php" name="login">Logout</a>
<?php
    }
    else{
        echo "Đăng nhập thất bại!";
    }
}
?>
