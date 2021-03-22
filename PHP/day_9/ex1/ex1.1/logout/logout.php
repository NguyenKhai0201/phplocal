<?php
session_start();
if(isset($_SESSION['us'])&&$_SESSION['us']!=null){
    unset($_SESSION['us']);
    echo "Bạn đã đăng xuất thành công.";
}
?>
