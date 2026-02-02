<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者管理系統 | 登入會員</title>
</head>
<body>
    <!-- fskjdghs -->
    <?php
    // if(isset($_SESSION['user'])){
    //     header("Location: index.php");
    //     exit();
    // }
    include_once "header.php";
    ?>
    <form action="check_acc.php" method="post">
        <h1>登入會員</h1>
        <div>
            <label for="username">帳號：</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">密碼：</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">登入會員</button>
    </form>
</body>
</html>
