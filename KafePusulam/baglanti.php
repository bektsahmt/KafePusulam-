<?php
$host="localhost"; // host ismi tutulur
$kullanici="root"; //hostu kullanan kullanıcı ismi
$parola=""; //veri tabanına erişmek için gerekli
$vt="uyelik"; //veri tabanı ismi

//degisken sıralaması önemli
$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti, "UTF8"); //türkçe karakterleri engellemek adına UTF8

if($baglanti){
    echo "Bağlantı başarılı";
}
?>