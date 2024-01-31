<?php 
ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_again = trim($_POST['password_again']);

    if(!$username)
    {
        echo "Lütfen kullanıcı adınızı giriniz";
    } 
    elseif(!$email)
    {
        echo "Lütfen email giriniz";
    }
    elseif(!$password || !$password_again)
    {
        echo "Lütfen şifrenizi giriniz";
    }
    elseif($password!=$password_again)
    {
        echo "Girdiğiniz şifreler aynı değil"
    }

    else
    {
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, email = ?, user_password = ?');
        $ekle = $sorgu->execute([
            $username, $email,$password
        ]);
        if($ekle)
        {
            echo "kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
            header('Refresh:2 index.php');
        }
        else{
            echo "bir hata oluştu, tekrar kontrol ediniz";
        }
    }
}

if(isset($_POST['giris'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!$username){
        echo "kullanıcı adınızı giriniz"
    }
    elseif(!$password){
        echo "şifrenizi girin"
    }
    else{
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? && user_password = ?');
        $kullanici_sor->execute([
            $username, $password
        ]);

        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz";
            header('Refresh:2; index.html');
        }
        else{
            echo "Bir hata oluştu tekrar kontrol edin";
        }
    }
}

?>