<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/member_center.css">

</head>

<body>
<?php
    include "./layout/back_header.php";
    ?>
    <!-- 首頁標語 / 可單獨加入特效-->
    <div class="top">
        <span >會</span>
        <span >員</span>
        <span >中</span>
        <span >心</span>
    </div>
    <!-- 主內容 -->
    <div class="main">
        <div class="menu">
            <ul>
                <li><a href="./edit.html" target="my">編輯會員資料</a></li>
                <li><a href="#" target="my">刪除帳號</a></li>
                <!-- 有需要可增加選項 -->
                <!-- <li><a href="#">Team</a></li>
                <li><a href="#">Content</a></li> -->
            </ul>
        </div>
        <div class="content">

        </div>
    </div>
</body>

</html>