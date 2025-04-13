<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);# mysqli_fetch_array() 從查詢結果中提取一行資料，儲存 $row變數中
    echo $row["id"] . " " . $row["pwd"]."<br>"; #顯示第一筆資料 ["id"] 和 ["pwd"] 分別是資料庫中該行的 id 和 pwd 欄位值
    $row=mysqli_fetch_array($result);#調用 mysqli_fetch_array()，提取下一行資料
    echo $row["id"] . " " . $row["pwd"];#顯示第二筆資料
?>
