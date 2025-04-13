<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {# mysqli_fetch_array() 每次提取一行資料，儲存為陣列 $row
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {#比對$_POST["id"] 和 $_POST["pwd"]和$row["id"] 和 $row["pwd"]使用者輸入的帳號密碼
       $login=TRUE;#帳號和密碼匹配
     }
   } 
   if ($login==TRUE)#$login為TRUE顯示登入成功
     echo "登入成功";
  else#$login為FALSE顯示錯誤
     echo "帳號/密碼 錯誤";
?>
