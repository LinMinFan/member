<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員資料</title>
    <link rel="stylesheet" href="./css/edit.css">
</head>

<body>
    <div class="regform">
        <h1>會員資料</h1>
    </div>
    <div class="container">
        <div class="main">
            <form action="./store_member.php">
                <div id="account">
                    <!-- 不得修改 -->
                    <h2 class="h2Tl">帳號</h2>
                    <input class="account" type="text" name="account"><br>
                    <!-- 可修改 -->
                    <input class="nick" type="text" name="nick">
                    <label class="nickLb" for="">暱稱</label>
                </div>
                <!-- 不得修改 -->
                <h2 class="h2Tl">姓名</h2>
                <input class="name" type="text" name="neme">
                <!-- 可修改 -->
                <h2 class="h2Tl">密碼</h2>
                <input class="password" type="password" name="password">
                <h2 class="h2Tl">確認密碼</h2>
                <input class="chk_password" type="password" name="chk_password">
                <!-- 可修改 -->
                <h2 class="h2Tl">電話</h2>
                <input class="phone" type="text" name="phone">
                <!-- 不得修改 -->
                <h2 class="h2Tl">Email</h2>
                <input class="email" type="email" name="email">
                <input type="submit" value="編輯">
                <input type="reset" value="清除">
            </form>
        </div>
    </div>
</body>

</html>