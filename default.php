<div class="container">
    <div class="edit">
        <form action="./save_member.php" method="post">
            <!-- 不得修改 -->
            <h3 class="h3Tl">帳號:</h3>
            <input class="account" type="text" placeholder="<?= $account; ?>" disabled>
            <!-- 可修改 -->
            <h3 class="h3Tl">暱稱:</h3>
            <input class="nick" type="text" placeholder="<?= $nick; ?>" disabled>
            <!-- 不得修改 -->
            <h3 class="h3Tl">姓名:</h3>
            <input class="name" type="text" placeholder="<?= $name; ?>" disabled>
            <!-- 可修改 -->
            <h3 class="h3Tl">電話:</h3>
            <input class="phone" type="text" placeholder="<?= $phone; ?>" disabled>
            <!-- 不得修改 -->
            <h3 class="h3Tl">Email:</h3>
            <input class="email" type="text" placeholder="<?= $email; ?>" disabled>
        </form>
    </div>
</div>