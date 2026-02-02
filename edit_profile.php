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
            <div>
                <div>
                    <?php echo "姓名:" . $result[0]['name']; ?>
                </div>
                <div>
                    <?php echo "信箱:" . $result[0]['email']; ?>
                </div>
                <div>
                    <?php echo "密碼:" . $result[0]['password']; ?>
                </div>
                <div>
                    <a href="profile_edit.php">
                        <button class="btn btn-primary">編輯個人資料</button>
                    </a>
                </div>
            </div>
    </div>
</body>
</html>