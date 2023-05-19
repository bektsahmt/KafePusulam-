<?php

include 'baglanti.php';
$checkboxDataQuery = "SELECT checkboxData FROM multipledata1 ORDER BY id DESC LIMIT 1";
$checkboxDataResult = $baglanti->query($checkboxDataQuery);
// Sütundaki sayıları tutacak dizi
$sayiDizisi = array();

// Verileri işleme
if ($checkboxDataResult->num_rows > 0) {
    $row = $checkboxDataResult->fetch_assoc();
    $sutunVeri = $row["checkboxData"];
    // Virgülle ayrılmış verileri diziye ayırma
    $veriDizisi = explode(",", $sutunVeri);
    // Sayıları diziye ekleme
    foreach ($veriDizisi as $veri) {
        // Sayısal değeri kontrol etme ve diziye ekleme
        if (is_numeric($veri)) {
            $sayiDizisi[] = intval($veri);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senin İçin Seçtiklerimiz</title>
    <link rel="stylesheet" href="oneriler.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Senin İçin Seçtiklerimiz.</h1>
            
            <?php

// Kafelerin çıkarılmasını kontrol etmek için flag (bayrak)
$secilenKafeVar = false;
$secilenKafeVar1= false;
$secilenKafeVar2= false;
$secilenKafeVar3= false;
$secilenKafeVar4= false;
$secilenKafeVar5= false;



// 1'den 12'ye kadar döngüyle sayıları kontrol etme
for ($i = 0; $i <= 12; $i++) {
    if (in_array($i, $sayiDizisi) && ($i == 0 || $i == 4 || $i == 5 )) {
        if (!$secilenKafeVar) {
        echo '
        <div class="oneri1">
        <div class="left">
            <img src="images/kafe1.jpg" alt="RadioCafe">
        </div>
        <div class="right">
            <div class="up">

            <div class="up-left">
               <h2>The Roasted Palette</h2>
            </div>
                           
            <div class="up-right">
                <li> • LGBT+</li>
                <li> • Hayvan Dostu</li>
                <li> • Alkolsüz</li>
                
            </div>

        </div>

            <p class="Tanitimyazisi">"The Roasted Palette" kafe, kahve severler için bir cennet niteliğinde. Uzman baristaların özenle hazırladığı kahveler, eşsiz aromalarıyla birlikte sunulur. Kafenin modern dekorasyonu ve sanatsal atmosferi, ziyaretçilere sıcak bir ortam sunar. Burada, kahve keyfini tatmakla birlikte lezzetli atıştırmalıklar da bulabilirsiniz. The Roasted Palette, kahve tutkunlarını memnuniyetle ağırlayarak unutulmaz bir deneyim sunar.</p>

            <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Taksim/İstanbul</p>

            <a href="#" class="btn btn-kafeyegit">Kafeye Git</a>

        </div>
    </div>';
    $secilenKafeVar = true;
        }
    }elseif(in_array($i, $sayiDizisi) && ($i == 1 || $i == 2 || $i == 9 )){
        if (!$secilenKafeVar1) {
        echo '
        <div class="oneri2">
        <div class="left">
            <img src="images/kafe1.jpg" alt="RadioCafe">
        </div>
        <div class="right">
            <div class="up">

            <div class="up-left">
               <h2>Le Petit Café</h2>
            </div>

            <div class="up-right">
                <li> • Akol Sever</li>
                <li> • Canlı Müzik</li>
                <li> • Yeni Nesil Kahveciler</li>
                
            </div>

        </div>

            <p class="Tanitimyazisi">Le Petit Café, alkollü içeceklerin keyfini çıkarmak isteyenler, canlı müzikle ruhunu şenlendirmek isteyenler ve yeni nesil kahveci deneyimi arayanlar için ideal bir mekan. Bu eşsiz kafe, zengin içecek seçenekleriyle ve ferah atmosferiyle misafirlerini karşılıyor. Lezzetli kokteyller, seçkin bira ve şaraplarla içkinizi yudumlarken, canlı müzik performansları size unutulmaz anlar yaşatacak. Le Petit Café, modern bir kahveci konseptiyle birleşen eğlenceli ve samimi bir ortam sunarak sizi sıradışı bir deneyime davet ediyor.</p>

            <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Taksim/İstanbul</p>

            <a href="#" class="btn btn-kafeyegit">Kafeye Git</a>

        </div>
    </div>';
    $secilenKafeVar1 = true;
        }

    }elseif(in_array($i, $sayiDizisi) && ($i == 3 || $i == 6 || $i == 7 )){
        if (!$secilenKafeVar2) {
        echo '
        <div class="oneri3">
        <div class="left">
            <img src="images/kafefoto.svg" alt="RadioCafe">
        </div>
        <div class="right">
            <div class="up">

            <div class="up-left">
               <h2>Gaia Bistro</h2>
            </div>

            <div class="up-right">
                <li> • Vejetaryen</li>
                <li> • Vegan</li>
                <li> • Yöresel zevkler</li>
            </div>

        </div>

            <p class="Tanitimyazisi">Gaia Bistro, vejetaryen ve vegan damak zevklerine hitap eden bir kafe olmanın yanı sıra, yöresel lezzetlerin izini süren bir mekan olarak öne çıkıyor. Bu benzersiz bistro, sağlıklı ve lezzetli seçenekleriyle herkesi cezbediyor. Gaia Bistroda, taze ve organik malzemelerle hazırlanan yaratıcı ve besleyici yemekler bulunurken, yöresel tatlar da özenle sunuluyor. Doğal ve sürdürülebilir bir anlayışla hizmet veren Gaia Bistro, hem bedeninize hem de doğaya saygı duyan bir kafe deneyimi sunuyor.</p>

            <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Taksim/İstanbul</p>

            <a href="#" class="btn btn-kafeyegit">Kafeye Git</a>

        </div>
    </div>';
    $secilenKafeVar2 = true;
        }

    }elseif(in_array($i, $sayiDizisi) && ($i == 4 || $i == 9 || $i == 10 )){
        if (!$secilenKafeVar3) {
        echo '
        <div class="oneri4">
        <div class="left">
            <img src="images/kafefoto.svg" alt="RadioCafe">
        </div>
        <div class="right">
            <div class="up">

            <div class="up-left">
               <h2>Royal Brew</h2>
            </div>

            <div class="up-right">
                <li> • Hayvan Dostu</li>
                <li> • Yeni Nesil Kafeler</li>
                <li> • Yeşilay</li>
            </div>

        </div>

            <p class="Tanitimyazisi">Royal Brew, hayvan dostu bir atmosferde, yeni nesil kahve deneyimi sunan ve Yeşilay ilkelerine sadık kalan bir kafe olarak öne çıkıyor. Bu özel mekan, lezzetli kahveleri ve samimi ortamıyla hem kahve tutkunlarını hem de hayvan severleri cezbediyor. Royal Brewda, özenle seçilen kahve çekirdekleriyle hazırlanan yenilikçi kahve çeşitleri sizi beklerken, aynı zamanda hayvan haklarına duyarlılığı teşvik eden etkinlikler de düzenleniyor. Burada, sıcak bir atmosferde keyifli vakit geçirirken, sevdiğiniz kahvelerin tadını çıkarabilir ve Yeşilay değerlerine destek verme fırsatı bulabilirsiniz.</p>

            <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Taksim/İstanbul</p>

            <a href="#" class="btn btn-kafeyegit">Kafeye Git</a>

        </div>
    </div>';
    $secilenKafeVar3 = true;
        }

    }elseif(in_array($i, $sayiDizisi) && ($i == 0 || $i == 1 || $i == 2 )){
        if (!$secilenKafeVar4) {
        echo '
        <div class="oneri5">
        <div class="left">
            <img src="images/kafefoto.svg" alt="RadioCafe">
        </div>
        <div class="right">
            <div class="up">

            <div class="up-left">
               <h2>Harmonious Java</h2>
            </div>

            <div class="up-right">
                <li> • LGBT+</li>
                <li> • Alkol Sever</li>
                <li> • Canlı Müzik</li>
            </div>

        </div>

            <p class="Tanitimyazisi">Harmonious Java, LGBT+ topluluğuna destek veren, alkollü içeceklerin keyfini çıkarmak isteyenlere hitap eden ve canlı müzikle atmosferini canlandıran bir kafe olarak öne çıkıyor. Bu özel mekan, renkli ve kapsayıcı bir ortamda herkesi ağırlıyor. Harmonious Javada, enfes kahve çeşitleriyle birlikte çeşitli alkollü içecek seçenekleri sunulurken, canlı müzik performansları sizi büyüleyecek. Burada, kendinizi özgürce ifade edebileceğiniz bir atmosferde, keyifli anlar yaşayabilir ve müziğin ritmiyle ruhunuzu şenlendirebilirsiniz.</p>

            <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Taksim/İstanbul</p>

            <a href="#" class="btn btn-kafeyegit">Kafeye Git</a>

        </div>
    </div>';
    $secilenKafeVar4 = true;
        }

    }elseif(in_array($i, $sayiDizisi) && ($i == 5 || $i == 8 || $i==11)){
        if (!$secilenKafeVar5) {
        echo '
        <div class="oneri6">
        <div class="left">
            <img src="images/kafefoto.svg" alt="RadioCafe">
        </div>
        <div class="right">
            <div class="up">

            <div class="up-left">
               <h2>Aurora Delights</h2>
            </div>

            <div class="up-right">
                <li> • Alkolsüz</li>
                <li> • Dünya Mutfağı</li>
                <li> • Bütçe Dostu</li>
            </div>

        </div>

            <p class="Tanitimyazisi">Aurora Delights, alkolsüz bir ortamda Dünya Mutfağının lezzetlerini sunan ve bütçe dostu bir kafe olarak karşımıza çıkıyor. Bu benzersiz mekan, farklı kültürlerin enfes tatlarını bir araya getirirken, sağlıklı ve besleyici seçenekleriyle de dikkat çekiyor. Aurora Delightsta, çeşitli lezzetler arasından seçim yaparken cüzdanınızı da düşünebilirsiniz. Sıcak ve davetkar atmosferiyle Aurora Delights, uygun fiyatlarla keyifli bir yemek deneyimi sunuyor.</p>

            <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Taksim/İstanbul</p>

            <a href="#" class="btn btn-kafeyegit">Kafeye Git</a>

        </div>
    </div>';
    $secilenKafeVar5 = true;
        }

    }
  
}

    ?>


    </div>
    </div>

    
</body>
</html>

       

