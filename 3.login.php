<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";#帳號john 密碼 john1234 是這樣則顯示登入成功
    else
        echo "登入失敗";#帳號密碼不是則顯示登入失敗
?>
