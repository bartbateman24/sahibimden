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
      <div class="set-payment-container set-payment-active-step-2">
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
            <div class="set-payment-step-2-detail">
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
               <div class="sub-left-box address-box">
                    <div class="closed-address-form hidden">
                      <div class="address-header">
                        <h3>TESLİMAT ADRESİ</h3>
                      </div>
                      <div class="sub-address-box left">
                        <p class="address-box-header">
                          <span class="name">Teslimat Adresi</span>
                          <a id="newShippingAddressBtn" data-type="delivery" class="btn-link new-address trackClick trackId_teslimatAdresi delivery" data-click-category="adresSecimi">Yeni Adres Ekle</a>
                        </p>
                        <div class="edit-mode">
                          <div class="address-list"></div>
                        </div>
                      </div>
                    </div>
                    <div class="open-address-form ">
                      <h3 id="addressPopupTitle">YENİ TESLİMAT ADRESİ</h3>
                        <div class="address-container clearfix">
                          <div class="address-part left">
                            <div class="name-column first-last-name">
                              <label for="firstName-1">Ad</label>
                              <input type="text" id="firstName" name="firstName" maxlength="50" class="firstName">
                              <span class="errorLabel">Lütfen adınızı girin</span>
                            </div>
                            <div class="name-column first-last-name">
                              <label for="lastName-1">Soyad</label>
                              <input type="text" id="lastName" name="lastName" maxlength="50" class="lastName">
                              <span class="errorLabel">Lütfen soyadınızı girin</span>
                            </div>
                            <label for="homePhone-1">Telefon</label>
                            <input type="tel" id="homePhone" name="homePhone" class="homePhone" placeholder="Örn: 532 123 4567" title="Örn: 532 123 4567" maxlength="17" autocomplete="off">
                            <span class="errorLabel">Lütfen telefon numarası girin</span>
                            <div class="address-name-action-container  ">
                              <label for="addressName-1">Adres Adı</label>
                              <input type="text" id="addressName" name="addressName" class="addressName" placeholder="Örn: Ev Adresi, İş Adresi">
                              <span class="errorLabel">Lütfen adres tanımı girin</span>
                              <div class="address-action-area  hidden">
                                <div class="kvkk-info"> Kişisel verilerin işlenmesine dair <a href="#" class="kvkkInformationLink">aydınlatma</a>
                                </div>
                                <a href="javascript:;" class="btn btn-new btn-new-alternative popup-cancel-edit-save-address">Vazgeç</a>
                                <a id="newAddressSaveUpdateBtn" href="javascript:;" class="btn btn-new new-address-save trackClick trackId_yeniAdres" data-click-category="adresSecimi">Ekle</a>
                                <a id="editAddressSaveUpdateBtn" href="javascript:;" class="btn btn-new edit-address-save trackClick trackId_guncelleAdres" data-click-category="adresSecimi">Kaydet</a>
                              </div>
                            </div>
                          </div>
                          <div class="address-part right">
                            <label for="city-1">İl</label>
                            <label for="city" class="hybrid-select">
                              <select name="il" id="il" class="city selectedOption">
                                <option value="" disabled="" selected="">Seçim Yapınız</option>
                              <option value="ADANA">ADANA</option><option value="ADIYAMAN">ADIYAMAN</option><option value="AFYONKARAHİSAR">AFYONKARAHİSAR</option><option value="AĞRI">AĞRI</option><option value="AKSARAY">AKSARAY</option><option value="AMASYA">AMASYA</option><option value="ANKARA">ANKARA</option><option value="ANTALYA">ANTALYA</option><option value="ARDAHAN">ARDAHAN</option><option value="ARTVİN">ARTVİN</option><option value="AYDIN">AYDIN</option><option value="BALIKESİR">BALIKESİR</option><option value="BARTIN">BARTIN</option><option value="BATMAN">BATMAN</option><option value="BAYBURT">BAYBURT</option><option value="BİLECİK">BİLECİK</option><option value="BİNGÖL">BİNGÖL</option><option value="BİTLİS">BİTLİS</option><option value="BOLU">BOLU</option><option value="BURDUR">BURDUR</option><option value="BURSA">BURSA</option><option value="ÇANAKKALE">ÇANAKKALE</option><option value="ÇANKIRI">ÇANKIRI</option><option value="ÇORUM">ÇORUM</option><option value="DENİZLİ">DENİZLİ</option><option value="DİYARBAKIR">DİYARBAKIR</option><option value="DÜZCE">DÜZCE</option><option value="EDİRNE">EDİRNE</option><option value="ELAZIĞ">ELAZIĞ</option><option value="ERZİNCAN">ERZİNCAN</option><option value="ERZURUM">ERZURUM</option><option value="ESKİŞEHİR">ESKİŞEHİR</option><option value="GAZİANTEP">GAZİANTEP</option><option value="GİRESUN">GİRESUN</option><option value="GÜMÜŞHANE">GÜMÜŞHANE</option><option value="HAKKARİ">HAKKARİ</option><option value="HATAY">HATAY</option><option value="IĞDIR">IĞDIR</option><option value="ISPARTA">ISPARTA</option><option value="İSTANBUL">İSTANBUL</option><option value="İZMİR">İZMİR</option><option value="KAHRAMANMARAŞ">KAHRAMANMARAŞ</option><option value="KARABÜK">KARABÜK</option><option value="KARAMAN">KARAMAN</option><option value="KARS">KARS</option><option value="KASTAMONU">KASTAMONU</option><option value="KAYSERİ">KAYSERİ</option><option value="KIRIKKALE">KIRIKKALE</option><option value="KIRKLARELİ">KIRKLARELİ</option><option value="KIRŞEHİR">KIRŞEHİR</option><option value="KİLİS">KİLİS</option><option value="KOCAELİ">KOCAELİ</option><option value="KONYA">KONYA</option><option value="KÜTAHYA">KÜTAHYA</option><option value="MALATYA">MALATYA</option><option value="MANİSA">MANİSA</option><option value="MARDİN">MARDİN</option><option value="MERSİN">MERSİN</option><option value="MUĞLA">MUĞLA</option><option value="MUŞ">MUŞ</option><option value="NEVŞEHİR">NEVŞEHİR</option><option value="NİĞDE">NİĞDE</option><option value="ORDU">ORDU</option><option value="OSMANİYE">OSMANİYE</option><option value="RİZE">RİZE</option><option value="SAKARYA">SAKARYA</option><option value="SAMSUN">SAMSUN</option><option value="SİİRT">SİİRT</option><option value="SİNOP">SİNOP</option><option value="SİVAS">SİVAS</option><option value="ŞANLIURFA">ŞANLIURFA</option><option value="ŞANLURFA">ŞANLURFA</option><option value="ŞIRNAK">ŞIRNAK</option><option value="TEKİRDAĞ">TEKİRDAĞ</option><option value="TOKAT">TOKAT</option><option value="TRABZON">TRABZON</option><option value="TUNCELİ">TUNCELİ</option><option value="UŞAK">UŞAK</option><option value="VAN">VAN</option><option value="YALOVA">YALOVA</option><option value="YOZGAT">YOZGAT</option><option value="ZONGULDAK">ZONGULDAK</option></select>
                            </label>
                            <label for="addressDetail-1">Açık Adres</label>
                            <textarea name="addressDetail" id="addressDetail" class="addressDetail" placeholder="Semt, cadde vb. bilgiler"></textarea>
                            <span class="errorLabel">Lütfen adres girin</span>
                          </div>
                        </div>
                    </div>
                    <div class="kvkk-wrapper"> Kişisel verilerin işlenmesine dair <a href="#" class="kvkkInformationLink">aydınlatma</a>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>
                <div class="right-box">
                  <div class="sub-right-box item">
                    <img class="big-image" src="yonetim/dosyalar/<?php echo $ayarcek['site_logo'] ?>" height="174" width="232" alt="">
                    <span><?php echo $ayarcek['site_baslik'] ?></span>
                  </div>
                  <div class="sub-right-box prices">
                    <div class="row">
                      <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"><?php echo $ayarcek['site_aciklama'] ?></span>
                        <span class="sum-label"></span>
                      </span>
                      <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
                    </div>
                    <div class="seperator"></div>
                    <div class="row">
					                      <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"><?php echo $ayarcek['twitter'] ?></span>

                        <span class="sum-label"></span>
                      </span>
                      <p class="left">S - Param Güvende Hizmet Bedeli</p>
                    </div>
                    <div class="seperator"></div>
                    <div class="total-cost-container row">
                      <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew"><?php echo $ayarcek['site_anasayfa_aciklama'] ?></span>
                        <span class="sum-label"></span>
                      </span>
                      <p class="left total">Toplam</p>
                    </div>
                  </div>
                  <div class="sub-right-box cargo-info">
                    <p> Satıcı&nbsp;3&nbsp;iş günü içinde kargolar.</p>
                  </div>
                  <a href="odeme.php" class="btn btn-new go-to-address-btn responsiveBtn">Ödeme Adımına Seç</a>
                </div>
                <div class="responsive-part go-to-address-btn-wrapper">
                  <a href="odeme.php" class="btn btn-new go-to-address-btn responsiveBtn">Ödeme Adımına Seç</a>
                          
    <script>
    </script>
  </body>
</html>