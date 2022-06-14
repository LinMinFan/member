    <!-- 功能頁固定置頂 -->
    <div class="nav">
        <div class="home">
            <a href="#">會員登入系統</a>
        </div>
        <div class="wellcome">
            <!-- 會員中心登入，顯示暱稱在nav欄位若無登入導回登入頁 -->
            <span><?= $_SESSION['user']; ?>歡迎回來</span>"
        </div>
        <div class="navTxt">
            <a href="./member_center.php">會員中心</a>
        </div>
        <div class="navBum">
            <a href="./logout.php"><input type="button" value="登出"></a>
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