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
            <label>
                <input type="text" name="username" placeholder="username">
            </label>
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Giriş Yap">
        </form>




</body>
</html>
<?php


if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];


  // create and save user
    $connector = new mysqli("localhost", "root", "", "lib");

   
    $query = $connector->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    
    if ($query) {
        echo "Kullanıcı başarıyla oluşturuldu";
    } else {
        echo "Kullanıcı oluşturulamadı";
    }

}



