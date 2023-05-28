<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer();  //nesne oluşturuldu ve nesneye atandı
$mail-> IsSMTP();  //SMTP protokolü kullanılacağı söyleniyor
$mail-> SMTPAuth = true;   //Kimlik doğrulama bilgileri gönderildi
$mail-> SMTPSecure = "tls";  //Güvenlik protokolü belirlendi
$mail-> Port = 587;   //Port Seçimi
$mail-> Host = "smtp.gmail.com";   //Gmailin sağladığı host
$mail-> Username = "kafepusulamiletisim@gmail.com";  //kendi kullanıcı adın "kafepusulamiletisim@gmail.com"
$mail-> Password = "wdawxtanksidamwg";
$mail->setFrom($_POST["mail"], $_POST["ad"]); 
$mail-> addAddress("kafepusulamiletisim@gmail.com");  //mail kimden gönderilecek
$mail-> Subject = "Kafe Pusulam Destek";  //konu metni
$mail-> Body = $_POST["mesaj"];   //mesaj içeriği metni


 if($mail->Send())
 {
    echo "E-posta başarıyla gönderildi.";
 } 
 else 
 {
   echo "E-posta gönderilirken bir hata oluştu.";
 }



?>