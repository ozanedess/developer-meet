<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <!-- sign up html -->
        <form action="" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Giriş Yap">
        </form>




</body>
</html>
<?php
include "mysql/MysqlConnector.php";

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];


  // create and save user
    $connector = connector();
    //select all users
    $query = $connector->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'")->fetch_assoc();
    echo $query;
    $query = $connector->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo $query;
    if ($query) {
        echo "Kullanıcı başarıyla oluşturuldu";
    } else {
        echo "Kullanıcı oluşturulamadı";
    }

}



