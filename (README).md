# projem

## Projenin yapısı ve görünümü

porojem bir ana tablo olmak üzere toplam üç tablo içermektedir. Ana tablomuz 'bilim insanı' adıyla kurulmuş olup bilim insanı hakkında bilgiler tutmaktadır.
diğer iki tablomuz dan biri 'bilim dalı' adında olup bilgi kayıt ettmiğimiz birinci tablodaki bir bilim adamına karşılık gelecek şekilde, bu bilim insanın hangi bilim dalında çalışma yaptığıyla ilgili bilgiler tutulmaktadır.
Aynı şekilde diğer tablomuz 'eserler' adında olup bu tablomuz da ilgili bilim adamının araştırması soucunda ortaya koyduğu bilim dalındaki eserlerin bilgisini tutmaktadır. 

Bununla birlikte projemiz çalıştırıldığında bahsettiğimiz üç tablo ve bir kayıt alanı karşımıza çıkmaktadır.
Kayıt alanıyla üç tabloya aynı anda bilgiler eklenip kaydedilebilmektedir.
Bunlarla birlikte bu tabloların tüm kayıt alanlarının yanında 'güncelle' ve 'sil' butonları bulunmaktadır.
Sil butonuyla mevcut bilgilerden herhangi biri silinebilmekte ve güncelle butonuyla mevcut bilgilerden herhangi biri güncellenebilmektedir.

Mevcut tablolardan bilim isanı tablosunun görünümünde ip bilgileri ve bilim adamı hakkında kaydedlmiş bilgiler gözükmektedir. 
Bilim dalı tablosunda ise, kendi ip bilgisi ve ilişik olduğu bilim adamı ip si ve bilim dalı hakkında bilgiler bulunmakta ve tutulmaktadır.
Aynı şekilde eserler tablosun da da kendi ip'si ile ilişik olduğu bilim adamı ip'si ve eserler hakkındaki bilgiler tutulmaktadır. 


# kurulum  
öncelikle projemi xammp ile yaptım. 
-projem_php adlı içinde .php uzantılı php kodları içeren dosyalar bulunan klasörümüzü tümüyle alıp xammp klasörü içindeki htdocs klaörünün içine yapıştırılması gerekir.
-bunun devamında xammp [control panel'inden] Apache ve MySql çalıştırıldıktan sonra 
-control panel'indeki MySql in karşısında bulunan [admin] butnonu basılarak localhost/phpmyadmin sayfası açılmalıdır.
-ve 'bilim' adında bir 'veri tabanı' oluşturulduktan sonra 'bilim.sql' dosyamız kopyalanı yapıştıralarak tabloların otomatik oluşumaları sağlanmalıdır. 
-artık projemiz çalışır durumdadır. ve kontrol etmek için http://localhost/projem_php 'den erişip projeyi çalıştırabilirsiniz.


