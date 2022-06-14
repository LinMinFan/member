    <div class="container">
        <div class="edit">
            <form action="./save_member.php" method="post">
                <!-- 不得修改 -->
                <h3 class="h3Tl">帳號:</h3>
                <input class="account" type="text" placeholder="<?= $account; ?>" value="<?= $account; ?>" disabled>
                <input class="account" type="text" name="account" value="<?= $account; ?>" hidden>
                <!-- 可修改 -->
                <h3 class="h3Tl">暱稱:</h3>
                <input class="nick" type="text" name="nick" placeholder="<?= $nick; ?>" value="<?= $nick; ?>">
                <!-- 不得修改 -->
                <h3 class="h3Tl">姓名:</h3>
                <input class="name" type="text" placeholder="<?= $name; ?>" value="<?= $name; ?>" disabled>
                <input class="name" type="text" name="name" value="<?= $name; ?>" hidden>
                <!-- 可修改 -->
                <h3 class="h3Tl">變更密碼:</h3>
                <input class="password" type="password" name="password">">
                <h3 class="h3Tl">確認密碼:</h3>
                <input class="chk_password" type="password" name="chk_password" placeholder="<?= (isset($_GET['error'])) ? $_GET['error'] : ''; ?>">
                <!-- 可修改 -->
                <h3 class="h3Tl">電話:</h3>
                <input class="phone" type="text" name="phone" placeholder="<?= $phone; ?>" value="<?= $phone; ?>">
                <!-- 不得修改 -->
                <h3 class="h3Tl">Email:</h3>
                <input class="email" type="text" placeholder="<?= $email; ?>" value="<?= $email; ?>" disabled>
                <input class="email" type="text" name="email" value="<?= $email; ?>" hidden>
                <div class="input">
                    <input type="submit" value="編輯">
                    <input type="reset" value="清除">
                </div>
            </form>
        </div>
    </div>