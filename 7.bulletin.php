<?php
    error_reporting(0);#關閉錯誤報告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#建立資料庫連線主機地址，使用者名稱，密碼，資料庫名稱
    $result=mysqli_query($conn, "select * from bulletin");#mysqli_query從bulletin資料表選取所有資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#建立HTML表格邊框為 2 ,標題欄：佈告編號、佈告類別、標題、佈告內容、發佈時間
    while ($row=mysqli_fetch_array($result)){#mysqli_fetch_array() 每次提取一行資料，儲存為陣列 $row
        echo "<tr><td>";
        echo $row["bid"];#顯示bid
        echo "</td><td>";
        echo $row["type"];#顯示type
        echo "</td><td>"; 
        echo $row["title"];#顯示title
        echo "</td><td>";
        echo $row["content"];#顯示content
        echo "</td><td>";
        echo $row["time"];#顯示time
        echo "</td></tr>";
    }
    echo "</table>"#關閉HTML表格標籤
?>
