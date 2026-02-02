<?php
// echo $_POST["password"];
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
//     include_once("pdo.php");
//     $sql="INSERT INTO `users` (`username`,`password`,`confirm_password`,`name`,`email`) 
//      VALUES ('{$_POST['username']}', 
//              '{$_POST['password']}',
//               '{$_POST['confirm_password']}',
//                '{$_POST['name']}',
//                 '{$_POST['email']}')";
                //      $pdo->exec($sql);
                //      header("location:login.php");

        //        if($_POST["password"] == $_POST["confirm_password"]){
        //         $pdo->exec($sql); 
        //         echo "<script>";
        //         echo "location.href='index.php'";
        //         echo "</script>";
        //     exit();
        //        }else{
        //         echo "<script>";
        //         echo "alert('密碼不一致')";
        //         echo "location.href='register.php'";
        //         echo "</script>";
        //        }
include_once("pdo.php");

// 1. 接收資料 (建議先存入變數，程式碼比較乾淨)
$username = $_POST['username'];
$password = $_POST['password'];
$confirm  = $_POST['confirm_password'];
$name     = $_POST['name'];
$email    = $_POST['email'];

// 2. 進入 if 判斷邏輯
if ($password !== $confirm) {
    // 狀況 A：兩次密碼輸入不一致
    echo "<script>";
    echo "alert('密碼與確認密碼不符，請重新輸入！');";
    echo "location.href='register.php';";
    echo "</script>";
    exit(); // 務必記得 exit，否則程式會繼續往下執行寫入資料庫
} else {
    // 狀況 B：驗證通過，準備執行資料庫寫入
    // 將變數放入 SQL，注意單引號的使用，避免直接寫 $_POST['...'] 導致解析錯誤
    $sql = "INSERT INTO `users` (`username`, `password`, `confirm_password`, `name`, `email`) 
            VALUES ('$username', '$password', '$confirm', '$name', '$email')";

    // 執行 SQL
    $result = $pdo->exec($sql);

    if ($result) {
        // 寫入成功
        echo "<script>";
        echo "alert('註冊成功！歡迎加入');";
        echo "location.href='index.php';";
        echo "</script>";
    } else {
        // 寫入失敗 (例如帳號重複或欄位錯誤)
        echo "註冊失敗，請聯絡管理員或檢查資料格式。";
    }
}
?>