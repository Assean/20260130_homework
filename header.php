<link rel="stylesheet" href="by/css/bootstrap.css">
<script src="by/js/bootstrap.js"></script>
<script src="by/js/jquery-3.7.1.min.js"></script>
<header>
        <?php session_start();?> 
        <h1>使用者管理系統</h1>
        <?php
        if(isset($_SESSION['user'])): ?>
            <!-- <p>歡迎，<?php// echo $_SESSION['user']; ?> 會員 | </p> -->
            <a href="member.php">會員中心</a>
            <a href="logout.php">登出</a>
            <a href="edit_profile.php">修改個人資料</a>
            <a href="users.php">使用者管理列表</a>
            
        <?php else:
                echo "<a href='login.php'>會員登入</a>";
                echo "<a href='register.php'>會員註冊</a>";
                // header("Location: login.php");  
                // exit();
        endif; ?>
    </header>