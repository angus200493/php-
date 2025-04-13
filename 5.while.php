<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {#mysqli_fetch_array() 每次提取一行資料，儲存為陣列 $row
     echo $row["id"]." ".$row["pwd"]."<br>";#顯示$row["id"] 和 $row["pwd"]分別是資料庫中的id 和 pwd 欄位值
   } 
?>
