<?php include "./chk_session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重設密碼</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <?php
    include "./layout/header.php";
    ?>

    <!-- 重設資料內容 -->
    <div class="regform">
        <h1>重設密碼</h1>
    </div>
    <div class="main">
        <form action="./chk_acc.php" method="post">
            <div id="account">
                <h2 class="h2Tl">帳號</h2>
                <input class="account" type="text" name="account"><br>
            </div>
            <h2 class="h2Tl">Email</h2>
            <input class="email" type="email" name="email">
            <input type="submit" value="送出">
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