<?php
//檢查帳密是否正確
//echo "開始確認帳號密碼";
//連線資料庫
include "./connect.php";
//接收帳號密碼傳值
$acc = $_POST['account'];
$pw = $_POST['password'];
//$pw = md5($_POST['password']);

/* if($acc==資料表中的account && $pw==資料表中的password){
    //登入成功->會員中心
}else if{
    //帳號錯誤->回到登入頁->顯示帳號錯誤
}else if{
    //密碼錯誤->回到登入頁->顯示密碼錯誤
}
 */

$chk_acc = "SELECT count(*) FROM `users` WHERE `account`='$acc'";
$chk_pw = "SELECT count(*) FROM `users` WHERE`password`='$pw'";

$useracc = $pdo->query($chk_acc)->fetchColumn();
$userpw = $pdo->query($chk_pw)->fetchColumn();
//測試回傳值 1 正確 / 0 錯誤或不存在
//print_r($useracc);

if (empty($useracc)) {
    //核對帳號
    header('location:login.php?error=帳號錯誤');
} else if (empty($userpw)) {
    //核對密碼
    header('location:login.php?error=密碼錯誤');
} else {
    //登入成功並使用帳號設定session
    $sql = "SELECT `nick` FROM `users` WHERE `account`='$acc'";
    $_SESSION['user'] = $acc;
    header('location:member_center.php');
}
?>