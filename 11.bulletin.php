<?php
    error_reporting(0);# 關閉錯誤報告
    session_start();#用於開始或恢復現有的會話，檢查使用者的登入狀態
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";#3秒後跳轉到2.login.html
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";#使用者登入會顯示歡迎並提供登出，管理使用者和新增布告等連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");# 使用 mysqli_connect() 連接到 db4free.net 的 immust 資料庫
        $result=mysqli_query($conn, "select * from bulletin");# 從 bulletin 資料表獲取所有資料
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){#逐行取出查詢結果到 $row陣列
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";# 每行資料開始，包含修改和刪除連結
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
