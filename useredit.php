<?php
    include_once "pdo.php";
    session_start();
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user = $_SESSION["user"];
    $sql = "update users set name='$name',email='$email',password='$password'
    where username = '$user'
    ";
    $pdo->exec($sql);
    echo $sql;
    header("location:edit_profile.php");
    ?>