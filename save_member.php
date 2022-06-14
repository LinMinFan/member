<?php
include_once "connect.php";
//會變更的數值只有暱稱、密碼、電話
$acc = $_POST['account'];
$nick = $_POST['nick'];
//要比對的資料只有密碼與確認密碼，確認密碼一致就送出資料
$pw = $_POST['password'];
$chk_pw = $_POST['chk_password'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if($pw == $chk_pw){
    $sql="UPDATE `users` SET `nick`='$nick',`password`='$pw',`phone`='$phone' WHERE `account`='$acc';";
    $pdo->exec($sql);
    header("location:member_center.php");
}else{
    header("location:member_center.php?edit=activ&error=確認密碼錯誤");
}

?>