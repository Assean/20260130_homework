<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者管理系統 | 修改個人資料</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <div>
        <?php
            include_once "pdo.php";
            $sql="SELECT * FROM `users` WHERE `username`='{$_SESSION['user']}'";
            $result = $pdo->query($sql)->fetchAll();
            ?>
            <form action="useredit.php" method="post">
                <h1>修改個人資料</h1>
                <div>
                    <label for="name">姓名：</label>
                    <input type="text" id="name" name="name" value="<?php echo $result[0]['name']; ?>">
                </div>
                <div>
                    <label for="email">電子郵件：</label>
                    <input type="email" id="email" name="email" value="<?php echo $result[0]['email']; ?>">
                </div>
                <div>
                    <label for="password">密碼：</label>
                    <input type="password" id="password" name="password" value="<?php echo $result[0]['password']; ?>">
                </div>
                <button class="btn btn-info" type="submit">儲存更新資料</button>
    </div>
</body>
</html>