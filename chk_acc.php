<?php
//檢查帳號信箱是否正確
include "connect.php";
$acc = $_POST['account'];
$email = $_POST['email'];
//驗證帳號沒有存在1存在0不存在
$chk_acc = "SELECT count(*) FROM `users` WHERE `account`='$acc';";
$chk_a = $pdo->query($chk_acc)->fetchColumn();
//驗證信箱沒有存在1存在0不存在
$chk_email = "SELECT count(*) FROM `users` WHERE `account`='$acc' && `email`='$email';";
$chk_e = $pdo->query($chk_email)->fetchColumn();

if (empty($chk_a)) {
    header('location:forgot.php?error=帳號不存在');
} else if (empty($chk_e)) {
    header('location:forgot.php?error=信箱錯誤');
} else {
    $sql="UPDATE `users` SET `password`='1234' WHERE `account`= '$acc';";
    $pdo->exec($sql);
    header('location:login.php?update=ok');
}

?>