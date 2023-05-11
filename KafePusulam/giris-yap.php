<?php
include("baglanti.php"); //baglanti sayfası giriş-yap sayfasına bağlandı
$email_err="";
$parola_err="";

 if(isset($_POST["giris"])) //giriş butonuna basıldığında çalışır
 {
    //kullanıcı adı doğrulama
    if(empty($_POST["mail"]))
    {
        $email_err="Email alanı boş bırakılamaz!";
    }
    else
    {
        $email = $_POST["mail"];
    }
   
    //parola doğrulama
    if(empty($_POST["password"]))
    {
        $parola_err="Şifre alanı boş geçilemez!";
    }
    else
    {
        $parola=$_POST["password"];
    }

    //tüm bilgiler uygunsa..
    if(isset($email) && isset($parola))
    {
        $secim=" SELECT * FROM seriescrud WHERE email='$email' ";
        $calistir=mysqli_query($baglanti,$secim);
        $kayitsayisi=mysqli_num_rows($calistir); //ya sıfır ya bir değeri verecek
        if($kayitsayisi>0)
        {
            $ilgilikayit=mysqli_fetch_assoc($calistir); //mevcut elemanın tüm bağlı verilerini dizi şeklinde getirir
            $hashlisifre=$ilgilikayit["parola"];

            if(password_verify($parola,$hashlisifre)) //uyuşma durumu kontrol edilir
            {
                session_start(); //oturumu başlat
                $_SESSION["username"]=$ilgilikayit["kullanici_adi"];
                $_SESSION["email"]=$ilgilikayit["email"]; //kullanıcı adı ve email bilgileri alınır
                echo "giriş yapıldı";
                //header("location:filtreleme.html"); //filtreleme sayfasına yönlendirildi


            }
            else{
                echo'<div class="alert alert-danger" style="color:red" role="alert">
             Parola hatalı!
          </div>';
            }

        }
        else
        {
            echo'<div class="alert alert-danger" style="color:red" role="alert">
             adı hatalı!
          </div>';
        }
    
    mysqli_close($baglanti);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style-giris-yap.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="forum-box">
                <h1>Giriş Yap</h1>
                <form>
                    <div class="giris-grup">
                         <div class="giris-kısmı">
                            <label for="mail">E-mail*</label>
                            <br>
                            <input type="email" name="mail" placeholder="kafepusulam@gmail.com">
                         </div>

                         <div class="giris-kısmı">
                            <label for="password">Şifre*</label>
                            <br>
                            <input type="password" name="password" placeholder="Şifreniz">
                         </div>
                         
                    </div>
                    <div class="btn-field">
                        <button class="btn" name="giris" type="button">Giriş Yap</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right">
            <img src="images/kitap.svg" alt="Kafe">
        </div>
    </div>
    
</body>
</html>