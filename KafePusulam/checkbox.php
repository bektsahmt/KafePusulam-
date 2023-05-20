<?php
include 'baglanti.php';
if(isset($_POST["submit"])){
    $datas=$_POST['data'];
    $allData=implode(",",$datas);
    //echo $allData;

    $sql="insert into multipledata1(checkboxData) values('$allData')";
    $result =mysqli_query($baglanti,$sql);
    /*if($result){
      
            echo "Kaydedildi.";
       
    }
    else{
        die(mysqli_error($baglanti)); // Hata mesajını ekrana yazdırır
    }*/

    mysqli_close($baglanti);
}

if(isset($_POST["submit"]))
{
    header("Location: oneriler.php");
            exit();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seni Daha İyi Tanımak İstiyoruz</title>
    <link rel="stylesheet" href="styles/style-filtreleme.css">
</head>
<body>
    <div class="container">
        <div class="yazilar">
            <h1>Seni tanımak isteriz</h1>
            <p>Aşağıda bir kaç etikete yer verdik, aralarından senin için en uygun olanları seçerek üyeliğini tamamlayabilirsin.</p>
        </div>
        <form method="POST" >
            <div class="filtreler-container">

            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="0" id="filtre">
                    <span> • LGBT+</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="1"  id="filtre">
                    <span> • Alkollü</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="2" id="filtre">
                    <span> • Canlı Müzik</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]"value="3"  id="filtre">
                    <span> • Vejetaryen</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]"value="4"  id="filtre">
                    <span> • Hayvan Dostu</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="5"  id="filtre">
                    <span> • Alkolsüz</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="6" id="filtre">
                    <span> • Vegan</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]"value="7"  id="filtre">
                    <span> • Yöresel Zevkler</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="8" id="filtre">
                    <span> • Dünya Mutfağı</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]"value="9"  id="filtre">
                    <span> • Yeni Nesil Kahveciler</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="10" id="filtre">
                    <span> • Yeşilay</span>
                </label>
            </div>
            <div class="filtreler">
                <label for="filtre"><input type="checkbox" name="data[]" value="11"  id="filtre">
                    <span> • Bütçe Dostu</span>
                </label>
            </div>
        </div>

        <div class="btn-field">
            <button class="btn" name="submit" value="Devam Et" type="submit">Devam Et</button>
        </div>
        </form>
    </div>

    <script> const filtreler = document.querySelectorAll(".filtreler label");

        filtreler.forEach((label) => {
          label.addEventListener("click", (event) => {
            const checkbox = label.querySelector("input[type='checkbox']");
            const span = label.querySelector("span");
        
            checkbox.checked = !checkbox.checked;
        
            if (checkbox.checked) {
              span.classList.add("selected");
            } else {
              span.classList.remove("selected");
            }
          });
        });
        </script>
</body>
</html>