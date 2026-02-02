<?php
include_once "pdo.php";

// 1. 改用 $_GET 接收 URL 傳過來的 id
$id = $_GET["id"]; 

// 2. 執行刪除 (注意：實務上建議使用預處理語句防止 SQL Injection)
$sql = "DELETE FROM `users` WHERE `id` = '$id'";
$pdo->exec($sql);

// 3. 刪除完後導回列表頁面
header("Location: users.php"); 
exit(); // 加上 exit 確保後續程式碼不被執行
?>