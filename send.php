<!DOCTYPE html>
<html lang="ru">
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NN2V52X');</script>
<!-- End Google Tag Manager -->
<meta>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/media.css"/>
  <?php
    $fio = $_POST['name'];
    $numtel = $_POST['numtel'];

    //decoding_1

    $fio = htmlspecialchars($fio);
    $numtel = htmlspecialchars($numtel);

    //decoding_2

    $fio = urldecode($fio);
    $numtel = urldecode($numtel);

    //decoding_3

    $fio = trim($fio);
    $numtel = trim($numtel); 
  ?>
<title>Утепление домов</title>
</head>

<body id="top-site">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN2V52X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="main">
    <header>
      <img src="assets/images/logo.png" alt="logo">
      <h1>УТЕПЛЕНИЕ ДОМОВ И КВАРТИР</h1>
      <h3 style="color: #0BFF00;">
        <?php

          //go

          if (mail("teplovdomkr@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$numtel ,"From: Teplo \r\n"))
          { 
              echo "Cообщение успешно отправлено, мы с вами свяжемся в течении дня"; 
          } else { 
              echo "При отправке сообщения возникли ошибки"; 
          }
        ?>
      </h3>
      <h2>097-631-2333</h2>
      <a href="https://teplovdomekr.com.ua/" class="call">Вернуться назад к сайту</a>

    </header>
  </div>
</body>
</html>
