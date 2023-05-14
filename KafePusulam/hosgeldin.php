<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aramıza Hoşgeldin</title>
    <link rel="stylesheet" href="hosgeldin.css">
</head>
<body>
    <Div class="wrapper">
        <div class="container">
            <div class="left">
                <h4>Aramıza Hoş Geldin</h4>
                <h1>Ailemiz Seninle Büyüdü</h1>
                <p> <?php echo $_SESSION["kullanici_adi"] ?> </p>

                <div class="btn-field">
                    <button class="btn" name="devam-et-buton" type="button">Devam Et</button>
                </div>
            </div>
            <div class="right">
                <img src="images/oneriadam.svg" alt="garson">
            </div>
        </div>
    </Div>
    
</body>
</html>