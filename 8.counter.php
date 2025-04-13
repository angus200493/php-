<?php
    session_start();#用於開始或恢復現有會話
    if (!isset($_SESSION["counter"]))#檢查$_SESSION["counter"]是否存在
        $_SESSION["counter"]=1;#初始化$_SESSION["counter"]為1
    else
        $_SESSION["counter"]++;#若$_SESSION["counter"]存在將其+1

    echo "counter=".$_SESSION["counter"];#顯示$_SESSION["counter"]當前數字
    echo "<br><a href=9.reset_counter.php>重置counter</a>";#連接到到 9.reset_counter.php ，這個會用來重置計數器
?>
