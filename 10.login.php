<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }#檢查資料庫的帳號密碼與交出的資料是否一樣
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];# 儲存使用者帳號到會話變數 $_SESSION["id"] 將帳號儲存，以便後續網頁使用
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }# 使用meta http-equiv=REFRESH ，3 秒後跳轉到 11.bulletin.php

  else{
    echo "帳號/密碼 錯誤";#顯示錯誤
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }#使用 meta http-equiv=REFRESH，3 秒後跳轉到 2.login.html
?>
