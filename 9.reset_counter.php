<?php
    session_start();#用於開始或恢復現有會話
    unset($_SESSION["counter"]);#清除計數器刪除會話中的counter變數
    echo "counter重置成功....";#顯示counter重製成功
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";#兩秒後跳轉到8.counter.php

?>
