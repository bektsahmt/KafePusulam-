<?php
include("baglanti.php"); //baglanti sayfası kayıt-ol sayfasına bağlandı
 if(isset($_POST["kayıtbuton"]))
 {
    $name = $_POST["ad-soyad"];
    $email = $_POST["mail"];
    $password = $_POST["password"];

    $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$name','$email','$password')";
    $calistirekle = mysqli_query($baglanti, $ekle);
    if($calistirekle)
    {
        echo'<div class="alert alert-success" role="alert">
        Kayıt başarılı şekilde eklendi
      </div>';
    }
    else{
        echo'<div class="alert alert-danger" role="alert">
        Kayıt eklenirken bir problem oluştu
      </div>';
    }

    mysqli_close($baglanti);

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol!</title>
    <link rel="stylesheet" href="style-kayit-ol.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="forum-box">
                <h1>Kayıt Ol</h1> 
                <form action = "kayit-ol.php" method="POST">
                    <div class="kayıt-grup">
                         <div class="kayıt-kısmı">
                            <label for="ad-soyad">Ad, Soyad</label>
                            <br>
                            <input type="text" name="ad-soyad" placeholder="A*** B***">
                         </div>

                         <div class="kayıt-kısmı">
                            <label for="mail">Email*</label>
                            <br>
                            <input type="email" name="mail" placeholder="kafepusulam@gmail.com">
                         </div>

                         <div class="kayıt-kısmı">
                            <label for="password">Şifre Oluştur*</label>
                            <br>
                            <input type="password" name="password" placeholder="Şifre Belirleyin">
                            <p>Şifre en az 8 karakterden oluşmalıdır.</p>
                         </div>
                         
                    </div>
                    <div class="btn-field">
                        <button type ="submit" name= "kayıtbuton" class="btn" type="button">Kaydet</button>
                    </div>
                    <p class="already">Zaten üye misin? <a href="giris-yap.php">Giriş Yap</a></p>

                </form>
            </div>
        </div>
        <div class="right">
            <img src="images/kitap.svg" alt="Kafe">
        </div>
    </div>
</form>
</body>
</html>

