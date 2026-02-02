<?php
    include_once "pdo.php";
    $sql="SELECT count(*) FROM `users` WHERE `username`='{$_POST['username']}' AND `password`='{$_POST['password']}'";
    $result=$pdo->query($sql)->fetchColumn();
    if($result>0){
        session_start();
        unset($_SESSION['user']);
        $_SESSION['user']=$_POST['username'];
        echo "<script>";
        echo "alert('登入成功');";
        echo "location.href='member.php'";
        echo "</script>";
        
    }  else{
        echo "<script>";
        echo "alert('帳號或密碼錯誤，請重新登入');";
        echo "location.href='login.php'";
        echo "</script>";
    }
    
    // if($username == $_POST["username"] AND $password == $_POST["password"]){
    //     echo "Yes,login";
    // }else{
    //     echo "NO,login";
    // }