<?php include "./chk_session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <?php
    include "./layout/header.php"
    ?>
    <!-- 標題         -->
    <div class="regform">
        <h1>註冊會員資料</h1>
    </div>
    <!-- 會員資料內容 -->
    <div class="main">
        <form action="./store_member.php" method="post">
            <div id="account">
                <h2 class="h2Tl">帳號</h2>
                <input class="account" type="text" name="account"><br>
                <input class="nick" type="text" name="nick">
                <label class="nickLb" for="">暱稱</label>
            </div>
            <h2 class="h2Tl">姓名</h2>
            <input class="name" type="text" name="name">
            <h2 class="h2Tl">密碼</h2>
            <input class="password" type="password" name="password">
            <h2 class="h2Tl">確認密碼</h2>
            <input class="chk_password" type="password" name="chk_password">
            <h2 class="h2Tl">電話</h2>
            <input class="phone" type="text" name="phone">
            <h2 class="h2Tl">Email</h2>
            <input class="email" type="email" name="email">
            <input type="submit" value="確定">
            <input type="reset" value="清除">
        </form>
    </div>
    <div class="footer">
    <?php
    include "./layout/footer.php";
    ?>
    </div>

</body>

</html>