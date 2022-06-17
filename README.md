# Perpetual-member
## 會員登入系統

### 會員登入頁
* <font color=#FF0000>已註冊會員</font>可直接登入，登入後會到<u>會員中心</u>
* <font color=#FF0000>已註冊會員</font>忘記密碼可前往<u>忘記密碼頁</u>申請變更密碼
* <font color=#FF0000>未註冊會員</font>可點選註冊帳號前往<u>會員註冊頁</u>
* <font color=#FF0000>未註冊會員</font>輸入帳號密碼會跳回<u>會員登入頁</u>並出現<font color=#FF0000>你還不是會員訊息</font>

### 會員帳號密碼確認頁
* 於<u>會員登入頁</u>輸入帳號密碼後先轉至確認頁進行確認
* 比對資料庫<font color=#FF0000>帳號</font>是否存在，<font color=#FF0000>密碼</font>是否正確
* 正確會到<u>會員中心</u><font color=#FF0000>登入紐</font>變為<font color=#FF0000>登出紐</font>並可以開始<font color=#FF0000>使用功能</font>
* <font color=#FF0000>帳號不正確</font>回到<u>會員登入頁</u>並顯示<font color=#FF0000>帳號不存在</font>訊息
* <font color=#FF0000>帳號正確</font>但<font color=#FF0000>密碼不正確</font>回到<u>會員登入頁</u>並顯示<font color=#FF0000>密碼錯誤訊息</font>

### 會員註冊頁
* 資料填寫完畢送往<u>資料確認頁</u>
* 若<font color=#FF0000>資料錯誤</font>重回此頁

### 資料確認頁
* 需比對資料(資料不得重複)包括<font color=#FF0000>帳號，密碼(可以重覆但須與確認密碼一致)，信箱</font>
* <font color=#FF0000>帳號重覆</font>回到<u>會員註冊頁</u>並顯示<font color=#FF0000>此帳號已有人使用請變更帳號</font>
* <font color=#FF0000>密碼與確認密碼不一致</font>回到<u>會員註冊頁</u>並顯示<font color=#FF0000>確認密碼錯誤</font>
* <font color=#FF0000>信箱重覆</font>回到<u>會員註冊頁</u>並顯示<font color=#FF0000>此信箱已有人使用請變更信箱</font>
* 輸入密碼以md5轉碼儲存於資料庫

### 忘記密碼頁
* <font color=#FF0000>已註冊帳號</font>但<font color=#FF0000>密碼忘記</font>則在此頁填寫<font color=#FF0000>帳號</font>與<font color=#FF0000>信箱</font>重新設定密碼
* 填寫送出前往<u>忘記密碼帳號信箱核對頁</u>

### 忘記密碼帳號信箱核對頁
* <font color=#FF0000>帳號</font>不正確回到<u>忘記密碼頁</u>並顯示<font color=#FF0000>帳號不存在訊息</font>
* <font color=#FF0000>信箱</font>不正確回到<u>忘記密碼頁</u>並顯示<font color=#FF0000>信箱錯誤訊息</font>
* <font color=#FF0000>帳號信箱</font>都正確時將密碼變更為<font color=#FF0000>1234儲存資料庫並回到</font><u>會員登入頁</u>顯示<font color=#FF0000>密碼已變更為1234，請以此密碼登入後進行變更密碼</font>(可以的話用email發回)

### 會員中心頁
* 提供功能包括
    * <font color=#FF0000>編輯會員資料</font>
        * 前往<u>編輯會員頁</u>
    * <font color=#FF0000>刪除帳號功能</font>
        * 前往<u>刪除帳號頁</u>
            * 點選確認視窗後才執行功能
* 其他可擴充功能

### 刪除帳號頁
* 僅處理<font color=#FF0000>刪除帳號</font>刪除帳號功能，刪除後回會員登入頁

### 編輯會員頁
* 提供修改會員資料包括
* 變更<font color=#FF0000>暱稱，密碼，電話</font>
* <font color=#FF0000>暱稱</font>及<font color=#FF0000>電話</font>不需核對可直接變更
* 點選編輯後前往編輯會員核對頁

### 編輯會員核對頁
* 僅核對<font color=#FF0000>密碼與確認密碼</font>
* <font color=#FF0000>密碼與確認密碼不一致</font>回到<u>編輯會員頁</u>並顯示<font color=#FF0000>確認密碼錯誤</font>

### 會員表單資料
* 密碼使用md5存入長度需32

|名稱|類型|屬性|預設值|額外資訊|備註|
|--|--|--|--|--|--|
|id|int(10)|UNSIGNED|無|AI|會員編號|
|account|varchar(12)|--|無|--|帳號|
|nick|varchar(12)|--|無|--|暱稱|
|name|varchar(30)|--|無|--|姓名|
|password|varchar(32)|--|無|--|密碼|
|phone|varchar(14)|--|無|--|電話|
|email|varchar(64)|--|無|--|電子信箱|

### 會員登出頁
* 會員登入後<font color=#FF0000>登入按鈕</font>都變成<font color=#FF0000>登出按鈕</font>
* 點選<font color=#FF0000>登出按鈕</font>回到<u>會員登入頁</u>按鈕恢復<font color=#FF0000>登入按鈕</font>狀態
