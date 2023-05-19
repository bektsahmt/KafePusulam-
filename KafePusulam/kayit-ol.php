<?php
include("baglanti.php"); //baglanti sayfası kayıt-ol sayfasına bağlandı
$ussername_err="";
$email_err="";
$parola_err="";
$kayit_eklendi="";

 if(isset($_POST["kayıtbuton"])) //kayıt butonuna basıldığında çalışır
 {
    //kullanıcı adı doğrulama
    if(empty($_POST["ad-soyad"]))
    {
        $ussername_err="Kullanıcı adı alanı boş bırakılamaz!";
    }
    else if(strlen(($_POST["ad-soyad"])<6))
    {
        $ussername_err="Kullanıcı adı 6 karakterden az olamaz!";
    }
    else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["ad-soyad"])) 
    {
        $ussername_err="Kullanıcı adı özel karakter içeremez!";
    }
    else
    {
        $username = $_POST["ad-soyad"];
    }


    //email doğrulama
    if(empty($_POST["mail"]))
    {
        $email_err="Email alanı boş bırakılamaz!";
    }
    else if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) //bu sorgulamayı önce html5 yapıyor
    {
        $email_err = "Geçersiz email formatı!";
    }
    else
    {
        $email=$_POST["mail"];
    }   


    //parola doğrulama
    if(empty($_POST["password"]))
    {
        $parola_err="Şifre alanı boş geçilemez!";
    }
    else if(strlen($_POST["password"]) < 8)
    {
    $parola_err = "Parola 8 karakterden az olamaz!";
    }
    else
    {
        $parola=$_POST["password"];
    }

    //tüm bilgiler uygunsa..
    if(isset($username) && isset($email) && isset($parola))
    {
    $ekle="INSERT INTO seriescrud (kullanici_adi, email, parola) VALUES ('$username','$email','$parola')";

    $calistirekle = mysqli_query($baglanti, $ekle);

    if($calistirekle)
    {
        echo'<div class="alert alert-success" style="color:green" role="alert">
        Kayıt başarılı şekilde eklendi
      </div>';
      $kayit_eklendi=1;
      
    }
    else{
        echo'<div class="alert alert-danger" style="color:red" role="alert">
        Kayıt eklenirken bir problem oluştu
      </div>';
    }

    mysqli_close($baglanti);
 }

}

if($kayit_eklendi==1)
{
    header("Location: hosgeldin.php"); // Yönlendirme

            exit(); // İşlemi sonlandırın
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
                            
                            <label for="ad-soyad">Kullanıcı Adı</label>
                            <br>
                            <input type="text" name="ad-soyad" placeholder="kullaniciadi">
                            <div id="validationServer03Feedback" style="color:red" class="invalid-feedback">
      <?php echo $ussername_err; ?>
    </div>
                         </div>
                         <br>

                         <div class="kayıt-kısmı">
                            <label for="mail">Email</label>
                            <br>
                            <input type="email" name="mail" placeholder="kafepusulam@gmail.com">
                            <div id="validationServer03Feedback" style="color:red" class="invalid-feedback">
       <?php echo $email_err; ?>
    </div>
                         </div>
                         <br>

                         <div class="kayıt-kısmı">
                            <label for="password">Şifre Oluştur</label>
                            <br>
                            <input type="password" name="password" placeholder="Şifre Belirleyin">
                            <div id="validationServer03Feedback" style="color:red" class="invalid-feedback">
        <?php echo $parola_err; ?>
    </div>
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

