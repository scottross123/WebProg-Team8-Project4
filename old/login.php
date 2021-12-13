<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
<form action="" method="post" class="login">
    <p>Login</p>
    <p><input type="text" name="username" value="" placeholder="username"></p>
    <p><input type="text" name="password" value="" placeholder="password"></p>
    <p style="font-size: medium;">No account?<a href="register.php">Create one!</a></p>
    <input type="submit" class="btn" value="login">
</form>


<?php
session_start();
require("lineMysql.php");

if(!empty($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = $db->selectbyUser("user", $username);     # $db-> 调用实例化对象db中的方法
    $rows=$db->rows($select);       #返回的结果集记录总数 
    $assoc = $db->assoc($select);   #从结果集中取得一行作为关联数组

    if(empty($rows)){
        echo "<script>alert('Invalid user！')</script>";
    }else{
        if($password==$assoc['password']){
            $_SESSION['username']=$username;
            header('Location:loginSuccess.php');
        }else{
            echo "<script>alert('wrong password！')</script>";
        }
    }
}
?>

</body>
</html>

