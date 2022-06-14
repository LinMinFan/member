    <!-- 功能頁固定置頂 -->
    <div class="nav">
        <div class="home">
            <a href="#">會員登入系統</a>
        </div>
        <div class="wellcome">
            <?php
            //若有收到錯誤訊息，顯示在nav欄位若無則顯示歡迎來訪
            if (isset($_GET['error'])) {
                echo "<span style='color:red;font-size: 20px;'>{$_GET['error']}</span>";
            } else if (isset($_GET['update'])) {
                echo "<span style='color:red;font-size: 20px;'>密碼已變更為1234，請以此密碼登入後進行變更密碼</span>";
            } else {
                echo "<span>歡迎來訪</span>";
            }
            ?>
        </div>
        <div class="navTxt">
            <a href="./login.php?error=請先登入">會員中心</a>
        </div>
        <div class="navBum">
            <a href="./login.php"><input type="button" value="登入"></a>
        </div>

    </div>
    <!-- 背景顏色區塊 -->
    <div class="box">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    </div>
    <!-- 動畫方塊 -->
    <div class="card">
        <div class="square" style="--i:0"></div>
        <div class="square" style="--i:1"></div>
        <div class="square" style="--i:2"></div>
        <div class="square" style="--i:3"></div>
        <div class="square" style="--i:4"></div>
    </div>