<?php
include("baglanti.php"); //baglanti sayfası giriş-yap sayfasına bağlandı
$email_err="";
$parola_err="";

 if(isset($_POST["giris"])) //giriş butonuna basıldığında çalışır
 {
    //email adı doğrulama
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
        $parola_err="Şifre alanı boş bırakılamaz!";
    }

    else
    {
        $parola=$_POST["password"];
    }

    //tüm bilgiler uygunsa..
    if(isset($email) && isset($parola))
    {
        $secim = "SELECT * FROM seriescrud WHERE email ='$email'"; // kullanıcının girdiği değer eşit mi?
        $calistir = mysqli_query($baglanti,$secim);
        $kayitsayisi = mysqli_num_rows($calistir); //elimizde kaç tane veri olduğunu döndürür (unique olduğundan her mail için 0 ya da 1)

        if($kayitsayisi>0) //eğer kayıt varsa
        {
            $ilgilikayit = mysqli_fetch_assoc($calistir); //girilen maildeki tüm verileri getirir ve ilgilikayıt a dizi şeklinde atar
            $hashlisifre = $ilgilikayit["parola"]; //ilgili kaydın hashli parolasına erişildi
            //echo $ilgilikayit["parola"];

            if($parola==$ilgilikayit["parola"]) //girilen parola ve veri tabanındaki parola uyuşuyorsa
            {
                session_start(); //oturum başlatıldı
                $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                $_SESSION["email"] = $ilgilikayit["email"];
                header("Location: hosgeldin.php");
            exit();
                
            }
            else //girilen parola ve veri tabanındaki parola uyuşmuyorsa
            {
                echo'<div class="alert alert-danger" style="color:red" role="alert">
                Email ya da şifre hatalı!
              </div>';

            }
        }

        else //eğer kayıt yoksa
        {
            echo'<div class="alert alert-danger" style="color:red" role="alert">
        Email bulunamadı!
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
    <link rel="stylesheet" href="styles/style-giris-yap.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <form action="giris-yap.php" method="POST">
                <div class="forum-box">
                    <h1>Giriş Yap</h1>
                    <div class="giris-grup">
                        <div class="giris-kısmı">
                            <label for="mail">E-mail*</label>
                            <br>
                            <input type="email" name="mail" placeholder="kafepusulam@gmail.com">
                            <div id="validationServer03Feedback" style="color:red" class="invalid-feedback">
       <?php echo $email_err; ?>
    </div>
                        </div>

                        <div class="giris-kısmı">
                            <label for="password">Şifre*</label>
                            <br>
                            <input type="password" name="password" placeholder="Şifreniz">
                            <div id="validationServer03Feedback" style="color:red" class="invalid-feedback">
        <?php echo $parola_err; ?>
    </div>
                        </div>
                    </div>
                    <div class="btn-field">
                        <button class="btn" name="giris" type="submit">Giriş Yap</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="right">
            <img src="images/kitap.svg" alt="Kafe">
        </div>
    </div>
</body>
</html>