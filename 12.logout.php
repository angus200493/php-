<?php
    session_start();
    unset($_SESSION["id"]);#刪除存在在會話中的的變數
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";#等待3秒後跳無轉到2.login.html

?>
