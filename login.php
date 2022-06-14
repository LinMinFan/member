<?php include "./chk_session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <?php
    include "./layout/header.php";
    ?>
    <!-- 會員登入區 -->
    <div class="cantainer">
        <div class="form">
            <h2>會員登入</h2>
            <form action="./chk_login.php" method="post">
                <div class="inputbox">
                    <input type="text" name="account" id="" placeholder="帳號">
                </div>
                <div class="inputbox">
                    <input type="password" name="password" id="" placeholder="密碼">
                </div>
                <div class="inputbox">
                    <input type="submit" name="" id="" value="登入">
                </div>
                <span class="forget left"><a href="./forgot.php">忘記密碼</a></span>
                <span class="forget right"><a href="./register.php">註冊帳號</a></span>
            </form>
        </div>
    </div>

    <div class="footer">
    <?php
    include "./layout/footer.php";
    ?>
    </div>
</body>

</html>