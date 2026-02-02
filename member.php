<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者管理系統 | 會員中心</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <h1>會員中心</h1>
    <p>歡迎，<?php echo $_SESSION['user']; ?> 會員</p>
</body>
</html>
