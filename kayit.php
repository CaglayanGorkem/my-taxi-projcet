<?php 

require 'baglan.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>giriş yap</title>
</head>
<body>

<div class="login">
    <div class="login-screen">
        <div class="app-title">
            <h1>Kayıt ol</h1>
        </div>
        <form action="islem.php" method="post">
        <div class="login-form">
            <div class="control-group">
                <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="control-group">
                <input type="email" name="email" class="login-field" id="login-email" placeholder="Email">
                <label class="login-field-icon fui-user" for="login-email"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password" id="login-pass" class="login-field" placeholder="Şifre">
                <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password_again" id="login-pass" class="login-field" placeholder="Tekrar Şifre">
                <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            
            <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt ol</button>
        </div>
        </form>
        <a href="index.php"><button href="index.php" class="btn btn-primary btn-large btn-block">Giriş yap</button></a>
    </div>
</div>

</body>
</html>