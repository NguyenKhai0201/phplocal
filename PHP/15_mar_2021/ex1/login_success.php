<?php
session_start();
if(isset($_POST['login'])){
    $name=$_POST['username'];
    $pass=$_POST['pass'];
    if($name=="camnh"&&$pass=="123456"){
        echo "Đăng nhập thành công!";
        echo "<br>";
        echo "Chào mừng bạn, ".$name;
        echo "<br>";
        $_SESSION['us']=$name;
        echo "<br>";
        ?>
        <a href="index.php">Logout</a>
        <?php
    }
    else{
        echo "Đăng nhập thất bại!";
    }
}
?>
