<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者管理系統 | 使用者管理列表</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <h2>使用者管理列表</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>使用者名稱</th>
            <!-- <th>信箱</th> -->
            <th>操作區</th>
            <th>操作區</th>
        </tr>
        <?php
            include_once "pdo.php";
            $sql="SELECT * FROM `users`";
            $result=$pdo->query($sql)->fetchAll();
            for($i=0;$i<count($result);$i++){
            ?>
        <tr>
            <td><?= $result[$i]['id']; ?></td>
            <td><?= $result[$i]['username']; ?></td>
            <td><a href="profile_edit.php">編輯</a></td>
            <td><a href="del.php?id=<?= $result[$i]['id']; ?>">刪除</a></td>
            <?php } ?>
            <?php   // print_r($result); ?>
        </tr>
    </table>
</body>
</html>