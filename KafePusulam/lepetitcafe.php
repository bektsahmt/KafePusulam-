<?php
// Bağlantı dosyasını dahil edin
include('baglanti.php');  

// Kullanıcı adını 'crudseries' tablosundan çekin
$sql = "SELECT kullanici_adi FROM seriescrud ORDER BY id DESC LIMIT 1";
$result = $baglanti->query($sql);

// Kullanıcı adını kontrol edin
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $kullanici = $row['kullanici_adi'];

// Siparişi veritabanına kaydet
if (isset($_POST['mesaj2'])) {
    $siparis = $_POST['mesaj2'];
    $insertSql = "INSERT INTO siparis_lepetit (kullanici, siparis) VALUES ('$kullanici', '$siparis')";
    if ($baglanti->query($insertSql) === TRUE) {
        echo "Sipariş başarıyla kaydedildi.";
    } else {
        echo "Sipariş kaydedilirken hata oluştu: " . $baglanti->error;
    }
}

// Yorumu veritabanına kaydet
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['yildiz'][0]) && isset($_POST['yorum'])) {
    // Formdan gelen verileri alın
    $yildiz = $_POST['yildiz'][0]; // İlk seçilen yıldız değerini alın
    $yorum = $_POST['yorum'];

    

        // Yorumu veritabanına kaydedin
        $tarih = date("Y-m-d H:i:s");
        $insertSql = "INSERT INTO yorumlepetitcafe(kullanici, yorum, yildiz, tarih) VALUES ('$kullanici', '$yorum', '$yildiz', '$tarih')";
        if ($baglanti->query($insertSql) === TRUE) {
            echo "Yorum başarıyla kaydedildi.";
        } else {
            echo "Yorum kaydedilirken hata oluştu: " . $baglanti->error;
        }
    } 
}

// Yorumları veritabanından çekin
$selectSql = "SELECT * FROM yorumlepetitcafe";
$result = $baglanti->query($selectSql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Petit Café</title>
    <link rel="stylesheet" href="styles/kafe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="left">
                <img src="images/tan-kafe2.svg" alt="Le Petit Café">
            </div>
            <div class="right">
                <h1>Le Petit Café</h1>
                <p class="tanitim">Le Petit Café, alkollü içeceklerin keyfini çıkarmak isteyenler, canlı müzikle ruhunu şenlendirmek isteyenler ve yeni nesil kahveci deneyimi arayanlar için ideal bir mekan. Bu eşsiz kafe, zengin içecek seçenekleriyle ve ferah atmosferiyle misafirlerini karşılıyor. Lezzetli kokteyller, seçkin bira ve şaraplarla içkinizi yudumlarken, canlı müzik performansları size unutulmaz anlar yaşatacak. Le Petit Café, modern bir kahveci konseptiyle birleşen eğlenceli ve samimi bir ortam sunarak sizi sıradışı bir deneyime davet ediyor.</p>

                <div class="bottom">
                    <div class="bottom-left">
                        <p class="konum"><img src="images/konum_ikon.svg" alt="konumikonu"> Bakırköy/İstanbul</p>
                        
                        <p class="telefon"><img src="images/telefon.svg" alt="konumikonu"> 444 44 44</p>

                        <div class="btn-field">
                        <button class="menüyügör" id="myBtn">Menüyü Gör</button>
                     </div>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                        
                          <!-- Modal content -->
                          <div class="modal-content1">
                            <span class="close">&times;</span>
                            <img src="images/menü.svg" alt="Menü">
                          </div>
                        
                        </div>
                        
                    </div>

                    <div class="bottom-right">
                        <p class="mail"><img src="images/mail_icon.svg" alt="mailikonu"> kafepusulam@gmail.com</p>

                        <p class="website"><img src="images/website.svg" alt="bilgisayarikonu"> www.lorem.com</p>

                       <div class="btn-field2">
                        <button class="degerlendir" id="myBtn2">Değerlendir</button>
                    </div>
                    
                        <div id="myModal2" class="modal2">
                          <div class="modal-content2">
                            <span class="close2">&times;</span>
                            <h2>Le Petit Café</h2>

                            <div class="container d-flex justify-content-center mt-200">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="stars">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                
                                <input class="star star-5" id="star-5" type="radio" name="yildiz[]" value="5"/>
                                <label class="star star-5" for="star-5"></label>
                            

                                <input class="star star-4" id="star-4" type="radio" name="yildiz[]" value="4"/>
                                <label class="star star-4" for="star-4"></label>
                            

                                <input class="star star-3" id="star-3" type="radio" name="yildiz[]" value="3"/>
                                <label class="star star-3" for="star-3"></label>
                            

                                <input class="star star-2" id="star-2" type="radio" name="yildiz[]" value="2"/>
                                <label class="star star-2" for="star-2"></label>
                            

                                <input class="star star-1" id="star-1" type="radio" name="yildiz[]" value="1"/>
                                <label class="star star-1" for="star-1"></label>
                            
                              
                            
                            </div>
                            
                            
                                    
                                </div>
                                
                            
                            </div>
                            
                            </div>

                        
                            <div class="mesaj">
                                    <label for="mesaj"></label>
                                    <input type="text" name="yorum" placeholder="Düşüncelerinizi İletin.">
                                </div>
            
                                <div class="btn-field3">
                                    <button class="btn" type="submit">Değerlendir</button>
                                </div>
                        </form>
                            
                            
                          </div>
                        
                        </div>
                    </div>

                   
                </div>

                <div class="btn-field4">
                  <button class="sipver" id="myBtn3">Sipariş Ver</button>
               </div>

               <div id="myModal3" class="modal3">
                <div class="modal-content2">
                  <span class="close3">&times;</span>
                  <h2>Le Petit Café</h2>

                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mesaj2">
                        <label for="mesaj2"></label>
                        <input type="text" name="mesaj2" placeholder="Siparişinizi Veriniz">
                    </div>
    
                    <div class="btn-field5">
                        <button class="btn2" type="submit">Siparişi Ver</button>
                    </div>
                </form>



 
                </div>
              </div>

                <div class="yorumlar">
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="yorum">
            <div class="left">
                <img src="images/kullanici.svg" alt="Kullanıcı">
                <br>
                <p class="kullanici">@<?= $row["kullanici"]; ?></p>
            </div>
            <div class="right">
                <div class="star-loop">
                    <?php
                    $yildiz = $row["yildiz"];
                    for ($i = 1; $i <= $yildiz; $i++) {
                        echo '<img src="images/filled-star.svg" alt="Dolu Yıldız">';
                    }
                    for ($i = $yildiz + 1; $i <= 5; $i++) {
                        echo '<img src="images/emptystar.svg" alt="Boş Yıldız">';
                    }
                    ?>
                </div>
                <br>
                <p class="tarih"><?= date_format(date_create($row["tarih"]), "d.m.Y");
                 ?></p>
                <br>
                <p class="yorumm"><?= $row["yorum"]; ?></p>
            </div>
        </div>
    <?php } ?>
</div>
                </div>
  


                </div>

                

            </div>

        </div>
    </div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }




         var modal2 = document.getElementById("myModal2");
         var btn2 = document.getElementById("myBtn2");
         var span2 = document.getElementsByClassName("close2")[0]; 
        btn2.onclick = function() {
          modal2.style.display = "block";
        }
        span2.onclick = function() {
          modal2.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
          }
        }


        var modal3= document.getElementById("myModal3");
         var btn3 = document.getElementById("myBtn3");
         var span3 = document.getElementsByClassName("close3")[0]; 
        btn3.onclick = function() {
          modal3.style.display = "block";
        }
        span3.onclick = function() {
          modal3.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modal2) {
            modal3.style.display = "none";
          }
        }
        </script>
        
</body>
</html>