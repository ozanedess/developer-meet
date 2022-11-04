<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGİN PAGE</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Giriş Yap">
</form>
</body>
</html>

<?php


session_start();




if ($_POST) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
        header("Location:admin.php");
    } else {
        $connector = new mysqli("localhost", "root", "", "lib");
        
        $query = $connector->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'")->fetch_assoc();
        if ($query) {
            $_SESSION["Oturum"] = "6789";
            header("Location:admin.php");
        } else {
            echo "Kullanıcı adı veya şifre hatalı";
        }
    }
}
