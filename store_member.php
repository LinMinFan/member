<?php
include_once "connect.php";
//先比對確認密碼正確再檢查欄位是否都有填寫
$acc = $_POST['account'];
$nick = $_POST['nick'];
$name = $_POST['name'];
//密碼使用MD5轉碼
//$pw=md5($_POST['pw']);
$pw = md5($_POST['password']);
$chk_pw = md5($_POST['chk_password']);
$phone = $_POST['phone'];
$email = $_POST['email'];
//驗證帳號沒有重複1重複0不重複
//$chk_acc = "SELECT count(*) FROM `member_users` WHERE `account`='$acc';";
$chk_acc = "SELECT count(*) FROM `users` WHERE `account`='$acc';";
$chk_a = $pdo->query($chk_acc)->fetchColumn();
//驗證信箱沒有重複1重複0不重複
//$chk_email = "SELECT count(*) FROM `member_users` WHERE `email`='$email';";
$chk_email = "SELECT count(*) FROM `users` WHERE `email`='$email';";
$chk_e = $pdo->query($chk_email)->fetchColumn();
if ($pw != $chk_pw) {
    header('location:register.php?error=確認密碼錯誤');
}else if(empty($acc) || empty($nick) || empty($name) || empty($phone) || empty($email)){
    header('location:register.php?error=資料不可空白');
}else if (!empty($chk_a)) {
    header('location:register.php?error=帳號已是會員');
}else if (!empty($chk_e)) {
    header('location:register.php?error=信箱已註冊會員');
}else{
    //$sql = "INSERT INTO `member_users` (`account`,`nick`,`name`,`password`,`phone`,`email`) 
    $sql = "INSERT INTO `users` (`account`,`nick`,`name`,`password`,`phone`,`email`) 
        values('$acc','$nick','$name','$pw','$phone','$email');";
    
    $pdo->exec($sql);
    
    header('location:login.php');
}
?>