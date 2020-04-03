## 2019-2020 Eğitim Yılı
## Web Teknolojileri Proje Ödevi
## Kişisel Web Sitesi
##### Ahmet Yasin Kalkanlı
##### G191210031
##### 2B grubu

### Özet
Bu proje 2019-2020 eğitim yılı Web Teknolojileri dersi ödevi olarak geliştirilecektir. Proje sürekli olarak https://github.com/aykalkan/WebTeknolojileri_Proje adresinde güncellenecektir.
Proje şu konuları içermelidir.

1. Kişisel bilgilerin yer aldığı hakkımda sayfası (Bu sayfa aynı zamanda giriş sayfası olacaktır)
1. CV benzeri özgeçmiş sayfası
1. Memleketim veya sevdiğim bir şehir hakkında bilgilerin listelendiği bir sayfa
	1. Bu sayfa içerisinde şehirle ilgili resimlerin yer aldığı bir silder
	1. Resimler tıkladığında o resimdeki yer hakkında bilgilerin listelendiği bir sayfa
1. Şehre ait önemli bir eser veya spor takımının anlatıldığı mirasımız başlıklı sayfa
1. Kullanıcı girişinin yapılacağı bir login sayfası
	1. Bu sayfada e-posta adresi lie giriş yapılacaktır.
	1. Sitede loginle ilgili kontrollerin yopılması gerekmektedir
1. İletişim formlarının yer aldığı iletişim sayfası

### Hakkımda Sayfası

Bu sayfa kendim hakkında genel bilgi vereceğim bir sayfa olacaktır. Sitenin giriş sayfası olacağı için yönlendirmeler de burada yer alacaktır. Bu sayfanın içeriğinde şunlar olacaktır:

- [ ] Kendim hakkında özet bilgi
- [ ] Fotoğraf
- [ ] Hobiler
- [ ] Faaliyetler
- [ ] Resimler
- [ ] Kendimden haberler
- [ ] Özgeçmişe link

### Özgeçmiş Sayfası

Özgeçmiş sayfasında kariyer hayatımı etkileyecek, işverenlerin ilgileneceği cinsten bilgiler yer alacaktır. Sayfa içeriğinde aşağıdaki bilgiler liste şeklinde bulunabilir:

- [ ] Fotoğraf
- [ ] Kişisel bilgiler (Yaş, uyruk, ehliyet vb.)
- [ ] İletişim bilgileri
- [ ] Eğitim bilgileri
- [ ] İş tecrübeleri
- [ ] Yetenekler
- [ ] Projeler
- [ ] Sertifikalar
- [ ] Referanslar

### Memleketim Sayfası

Memleketim sayfasında, yaşadığım şehir yani Balıkesir'in Gönen ilçesi hakkında bilgiler ve fotoğraflar yer alacaktır. Bunlar şöyle listelenebilir:

- [ ] Şehrin tanıtımında kullanılan geniş bir fotoğraf
- [ ] Şehir hakkında özet bilgi
- [ ] Şehir hakkında istatistiki bilgi (Nüfus, yüzölçümü vb.)
- [ ] Şehrin kültürel, ekonomik, coğrafi vb. özellikleri hakkında başlıklar ve özet bilgiler
- [ ] Resimlerden oluşan slider
	- [ ] Ömer seyfettin heykeli
	- [ ] Kaplıcalar
	- [ ] Oya yapan kadınlar heykeli
	- [ ] Gönen kapalı pazar yeri
	- [ ] Organize sanayi sitesi
- [ ] Resimler tıklandığında resim hakkında bilginin yer aldığı sayfalar
- [ ] Mirasımız sayfası linki


### Mirasımız Sayfası

Gönende mirasımız olarak belirtilebilecek pek çok yer vardır. Tarihi zengin bir bölgedir. Bunlardan en dikkat çekicilerinden biri Alacaoluk kalesidir. Kale Roma döneminde yapılmış ve yaklaşık 2000 yıllıktır. Kalenin tanıtımında aşağıdaki öğeler kullanılacaktır.

- [ ] Pek çok fotoğraf
- [ ] Kalenin tarihi
- [ ] Ulaşım
- [ ] Geleneksel kale yürüyüşü
- [ ] Teknik bilgiler

### Mirasımız Sayfası

Gönende mirasımız olarak belirtilebilecek pek çok yer vardır. Tarihi zengin bir bölgedir. Bunlardan en dikkat çekicilerinden biri Alacaoluk kalesidir. Kale Roma döneminde yapılmış ve yaklaşık 2000 yıllıktır. Kalenin tanıtımında aşağıdaki öğeler kullanılacaktır.

- [ ] Pek çok fotoğraf
- [ ] Kalenin tarihi
- [ ] Ulaşım
- [ ] Geleneksel kale yürüyüşü
- [ ] Teknik bilgiler

### İletişim Sayfası

Site yönetimi ile iletişime geçmek için bu sayfa kullanılacaktır. Çeşitli form elemanları ile mesaj hazırlanacak ve gönderildiğinde ilgili mesaj site yönetimine mail olarak gönderilecektir. Sayfada yer alacak form elemanları şunlardır. Form elemanlarının hepsinin doldurulması zorunludur.

- [ ] Gönderen e-posta adresi (input type="email")
- [ ] Gönderen ismi (input type="text")
- [ ] Cinsiyet (input type="radio")
- [ ] Konu (input type="text")
- [ ] İlgili birim (select)
- [ ] Mesaj (textarea)
- [ ] Sitenin hangi alanlarığı gezdiniz (input type="checkbox")
- [ ] Anket alanı (fieldset)
	- [ ] Tuttuğunuz takım (input type="radio")
	- [ ] Hobileriniz (input type="checkbox")
- [ ] reCAPTCHA
- [ ] Temizle butonu(button)
- [ ] Gönder butonu (button)

Gönder butonuna basıldığında eğer form elemanları doğru şekilde doldurulduysa başka bir sayfada girilenler listelenecek ve mesajın başarıyla gönderildiği yazacaktır. Mesaj gönderme başarısız olursa iletişim sayfasında kalacak ve eksik veya yanlış doldurulan alanları belirten bir mesaj yayınlanacaktır.

### Login Sayfası

Kullanıcı girişi yapmak için bu sayfa kullanılacaktır. Aşağıdaki elemanlar olacaktır:

- [ ] E-posta adresi (input type="email")
- [ ] Şifre (input type="password")
- [ ] reCAPTCHA

Kullanıcının e-posta alanına girdiği bilgi kontrol edilecek, e-posta adresi değilse hata verecektir. E-posta ve şifrenin uyuşup uyuşmadığı bir veritabanından veya siteye gömülmüş kullanıcılardan kontrol edilebilir. Kullanıcı başarılı giriş yaparsa "Hoşgeldiniz <e-posta adresi başı>" şeklinde mesaj yayınlanacaktır.

### Navigasyon Menüsü

Sitenin üstünde yer alacak ve her sayfada görünür olacaktır. Sayfalara ulaşmayı sağlayacaktır. Menü yapısı şu şekildedir:

* Hakkımda
	* Özgeçmiş
* Memleketim
 * Mirasımız
* İletişim
* Üye girişi

### Site Stili

Sitenin stil altyapısını içeren CSS kodları ayrı bir dosyada tutulacaktır. Site bootstrap ile responsive tasarım tarzında yapılacaktır. Responsive tasarım site elemanlarının çözünürlüğe göre yerleşmesini, statik olmamasını sağlar. Projede hazır tema kullanımına izin verilmemiştir.
