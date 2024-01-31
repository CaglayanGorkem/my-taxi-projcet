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
            <h1>giriş yap</h1>
        </div>
        <form action="islem.php" method="post">
        <div class="login-form">
            <div class="control-group">
                <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password" id="login-pass" class="login-field" placeholder="Şifre">
                <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            <button href="index.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş yap</button>

        </div>
        </form>
        <a href="kayit.php"><button href="kayit.php" class="btn btn-primary btn-large btn-block">Kayıt ol</button></a>
    </div>
</div>

</body>
</html>