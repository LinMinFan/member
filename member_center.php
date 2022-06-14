<?php
//判斷session避免直接由網址進入會員中心
session_start();
if (!isset($_SESSION['user'])) {
    header('location:./login.php');
}
$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
//抓取會員資料並顯示於會員中心首頁
$sql = "select * from `users` where account = '{$_SESSION['user']}'";
$user = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$id = $user['id'];
$account = $user['account'];
$pw = $user['password'];
$nick = $user['nick'];
$name = $user['name'];
$phone = $user['phone'];
$email = $user['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/edit.css">
    <link rel="stylesheet" href="./css/delete.css">
    <link rel="stylesheet" href="./css/member_center.css">

</head>

<body>
    <?php
    include "./layout/back_header.php";
    ?>
    <!-- 首頁標語 / 可單獨加入特效-->
    <div class="top">
        <span>會</span>
        <span>員</span>
        <span>中</span>
        <span>心</span>
    </div>
    <!-- 主內容 -->
    <div class="main">
        <!-- 選單 -->
        <div class="menu">
            <ul>
                <li><a href="./member_center.php?edit=activ">編輯會員資料</a></li>
                <li><a href="./member_center.php?delete=activ">刪除帳號</a></li>
                <!-- 有需要可增加選項 -->
                <!-- <li><a href="#">Team</a></li>
                <li><a href="#">Content</a></li> -->
            </ul>
        </div>
        <!-- 頁面內容 -->
        <div class="content">
            <div class="regform">
                <h3>會員資料</h3>
            </div>

            <?php
            if (isset($_GET['edit'])) {
                include './edit.php';
            } else if (isset($_GET['delete'])) {
                include './delete.php';
            } else {
                include './default.php';
            }
            ?>
        </div>
    </div>
    <!-- <script src="./js/main.js"></script> -->
</body>

</html>