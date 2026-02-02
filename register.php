<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者管理系統 | 註冊會員</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <form action="add_users.php" method="post">
        <h1>註冊會員</h1>
        <div>
            <label for="username">帳號：</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">密碼：</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm_password">確認密碼：</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <div>
            <label for="name">姓名：</label>
            <input type="text" id="name" name="name">
        <div>
            <label for="email">電子郵件：</label>
            <input type="email" id="email" name="email">
        </div>
        <button type="submit">註冊會員</button>
    </form>
</body>
</html>
