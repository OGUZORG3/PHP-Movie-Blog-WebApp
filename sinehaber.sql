-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2023, 23:41:22
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sinehaber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int NOT NULL,
  `abone_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `abone`
--

INSERT INTO `abone` (`abone_id`, `abone_email`) VALUES
(1, 'ahmetozer43tr77@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int NOT NULL,
  `ayar_baslik` varchar(250) NOT NULL,
  `ayar_anahtar` varchar(400) NOT NULL,
  `ayar_logo` varchar(120) NOT NULL,
  `ayar_adres` varchar(160) NOT NULL,
  `ayar_telefon` varchar(25) NOT NULL,
  `ayar_email` varchar(80) NOT NULL,
  `ayar_facebook` varchar(120) NOT NULL,
  `ayar_instangram` varchar(50) NOT NULL,
  `ayar_youtube` varchar(200) NOT NULL,
  `ayar_twiter` varchar(120) NOT NULL,
  `ayar_aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_anahtar`, `ayar_logo`, `ayar_adres`, `ayar_telefon`, `ayar_email`, `ayar_facebook`, `ayar_instangram`, `ayar_youtube`, `ayar_twiter`, `ayar_aciklama`) VALUES
(1, 'Sinehaber', 'Sinema,Film,Dizi,Anime', '[value-4]', 'ww.sinehaber.com', '5555555555555', 'ornek@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.youtube.com/', 'https://twitter.com', 'gunun filmi...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int NOT NULL,
  `blog_baslik` varchar(250) NOT NULL,
  `blog_aciklama` text NOT NULL,
  `blog_resim` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `blog_sira` int NOT NULL,
  `kullanici_id` int DEFAULT NULL,
  `blog_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_anahtarkelime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`, `kullanici_id`, `blog_zaman`, `blog_anahtarkelime`) VALUES
(2, 'Ata Demirer’in “Bursa Bülbülü” Filminden İlk Resmi Afiş!', '<p><strong><a href=\"https://www.sinemalar.com/sanatci/25861/ata-demirer\">Ata Demirer</a>&rsquo;in Disney+&#39;ta yayınlanacak&nbsp;olan &ldquo;<a href=\"https://www.sinemalar.com/film/273257/bursa-bulbulu\">Bursa B&uuml;lb&uuml;l&uuml;</a>&rdquo; filminden ilk resmi afiş geldi!</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ata Demirer&rsquo;in snaryosunu yazıp başrol&uuml;n&uuml; &uuml;stlendiği&nbsp;&ldquo;<strong>Bursa B&uuml;lb&uuml;l&uuml;</strong>&rdquo; filminden ilk resmi afiş paylaşıldı (Aşağıda inceleyebilirsiniz). &ldquo;<strong>Bursa B&uuml;lb&uuml;l&uuml;</strong>&rdquo; 13 Ocak 2023&rsquo;te Disney+ k&uuml;t&uuml;phanesine eklenecek. &Ccedil;ekimleri ge&ccedil;tiğimiz yaz aylarında Erdek ve Bursa&#39;da yapılan filmin y&ouml;netmen koltuğunda&nbsp;<a href=\"https://www.sinemalar.com/sanatci/36210/hakan-algul\">Hakan Alg&uuml;l</a>&nbsp;oturuyor. &ldquo;<strong>Bursa B&uuml;lb&uuml;l&uuml;</strong>&rdquo; filminde&nbsp;Demirer&rsquo;e&nbsp;<a href=\"https://www.sinemalar.com/sanatci/658023/cem-gelinoglu\">Cem Gelinoğlu</a>,&nbsp;<a href=\"https://www.sinemalar.com/sanatci/667718/ozge-ozacar\">&Ouml;zge &Ouml;zacar</a>,&nbsp;<a href=\"https://www.sinemalar.com/sanatci/42924/melek-baykal\">Melek Baykal</a>,&nbsp;<a href=\"https://www.sinemalar.com/sanatci/26264/tarik-papuccuoglu\">Tarık Papu&ccedil;&ccedil;uoğlu</a>,&nbsp;<a href=\"https://www.sinemalar.com/sanatci/77670/celil-nalcakan\">Celil Nal&ccedil;akan</a>&nbsp;ve&nbsp;<a href=\"https://www.sinemalar.com/sanatci/602131/toygan-avanoglu\">Toygan Avanoğlu</a>&nbsp;gibi isimler eşlik ediyor.&nbsp;</p>\r\n', '806426081136508226934ata-demirerin-bursa-bulbulu-filminden-ilk-resmi-afis-1672317012.jpg', 2, NULL, '2022-12-31 16:34:51', 'sadasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int NOT NULL,
  `galeri_isim` varchar(240) NOT NULL,
  `galeri_aciklama` text NOT NULL,
  `galeri_resim` varchar(250) NOT NULL,
  `galeri_meslek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_isim`, `galeri_aciklama`, `galeri_resim`, `galeri_meslek`) VALUES
(10, 'ata demirer', '<p>&nbsp;</p>\r\n\r\n<h2>Yaşam &ouml;yk&uuml;s&uuml;[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=1\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=1\">kaynağı değiştir</a>]</h2>\r\n\r\n<p><a href=\"https://tr.wikipedia.org/wiki/Arnavut\">Arnavut</a>&nbsp;k&ouml;kenli bir baba ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Ah%C4%B1ska_T%C3%BCrkleri\">Ahıska T&uuml;rk&uuml;</a>&nbsp;bir annenin ilk &ccedil;ocuğu olarak doğdu<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-h%C3%BCrriyet.com.tr-1\">[1]</a>, Cenk adında bir kardeşi vardır. Daha k&uuml;&ccedil;&uuml;k yaşlarda m&uuml;ziğe olan yeteneğini keşfetti. Ortaokul ve liseyi&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Bursa_Erkek_Lisesi\">Bursa Erkek Lisesinde</a><a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-H%C3%BCrriyet-2\">[2]</a>&nbsp;okuduktan sonra son sınıfta &Ccedil;elebi Mehmet Lisesine ge&ccedil;ti ve buradan mezun oldu. Demirer ağabeyinin yardımıyla gece kul&uuml;plerinde piyanist-şant&ouml;r olarak &ccedil;alışmaya başladı. 1991 yılında İstanbul Teknik &Uuml;niversitesi Devlet Konservatuvarı T&uuml;rk M&uuml;ziği B&ouml;l&uuml;m&uuml;n&uuml; kazanmasıyla İstanbul&#39;a taşındı.<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-H%C3%BCrriyet-2\">[2]</a></p>\r\n\r\n<h3>M&uuml;zikal kariyeri[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=2\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=2\">kaynağı değiştir</a>]</h3>\r\n\r\n<p>Konservatuvar yılları boyunca&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C4%B0stanbul\">İstanbul</a>&#39;da m&uuml;zisyenlik yapmaya devam etti. Yine o yıllarda arkadaşlarının desteği ile bar komedyenliği denemelerine başladı.&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Grup_Vitamin\">Grup Vitamin</a>&nbsp;&uuml;yesi G&ouml;khan Semiz ile olan yakın arkadaşlığı sayesinde stand up g&ouml;sterilerine başladı.<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-H%C3%BCrriyet-2\">[2]</a>&nbsp;1992 yılında Grup Vitamin&#39;in İsmail adlı şarkısının klibinde oynadı. 1994 yılında ise aynı grubun Turkish Kovboylar şarkısındaki uzun hava b&ouml;l&uuml;m&uuml;n&uuml; seslendirdi.</p>\r\n\r\n<h3>Tiyatro[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=3\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=3\">kaynağı değiştir</a>]</h3>\r\n\r\n<p><em>E.Ş.E.K Tiyatro Grubu</em>nun kurucusu Uğur Uludağ&#39;ın aracılığı ile ilk profesyonel stand up g&ouml;sterisini ger&ccedil;ekleştirdi. 1995 yılında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Assos\">Assos</a>&#39;ta verdiği m&uuml;zikli şov sırasında keşfedilerek[<em><a href=\"https://tr.wikipedia.org/wiki/Vikipedi:Kaynak_g%C3%B6sterme\">kaynak belirtilmeli</a></em>]&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Dormen_Tiyatrosu\">Dormen Tiyatrosu</a>&#39;nda &quot;Komik Para&quot; adlı oyunda rol aldı.<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-H%C3%BCrriyet-2\">[2]</a>&nbsp;Aynı yıl kendi kurduğu &quot;Ege Kumpanya&quot; adlı g&ouml;steri orkestrası ile bir&ccedil;ok yerde sahneye &ccedil;ıktı.</p>\r\n\r\n<p><a href=\"https://tr.wikipedia.org/wiki/U%C4%9Fur_Y%C3%BCcel\">Uğur Y&uuml;cel</a>&nbsp;ile tanışması hayatının d&ouml;n&uuml;m noktalarından biri oldu.<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-H%C3%BCrriyet-2\">[2]</a>&nbsp;Komediye olan tutkusunu keşfetti ve konservatuvarı yarıda bırakarak stand up g&ouml;sterilerine ağırlık verdi. 1996 ile 1998 yılları arasında bir&ccedil;ok yerde g&ouml;steri yaptı. Leman K&uuml;lt&uuml;r&#39;e oyununun kaydını g&ouml;t&uuml;rd&uuml; ve &ccedil;ok beğenilmesi &uuml;zerine 1998 yılının Şubat ayında &quot;Tek Kişilik Dev Kadro&quot; adlı oyunu ile Leman K&uuml;lt&uuml;r&#39;de sahne aldı.</p>\r\n\r\n<p>Bu oyunu 1000&#39;in &uuml;zerinde sahnede &quot;KAPALI GİŞE&quot; oynayan sanat&ccedil;ı, oyunda ge&ccedil;en karakterlerin benzerleri ile bir televizyon şovu hazırladı. &quot;<a href=\"https://tr.wikipedia.org/wiki/Korsan_TV\">Korsan TV</a>&quot; adlı program, ekranda 42 b&ouml;l&uuml;m g&ouml;sterildi. Televizyonda g&ouml;r&uuml;lmesi ile ş&ouml;hreti artan[<em><a href=\"https://tr.wikipedia.org/wiki/Vikipedi:Kaynak_g%C3%B6sterme\">kaynak belirtilmeli</a></em>]&nbsp;Ata Demirer, daha sonra&nbsp;<em><a href=\"https://tr.wikipedia.org/wiki/Vizontele_Tuuba\">Vizontele Tuuba</a></em>,&nbsp;<em><a href=\"https://tr.wikipedia.org/wiki/Neredesin_Firuze\">Neredesin Firuze</a></em>&nbsp;gibi filmlerde yer aldı. &quot;<a href=\"https://tr.wikipedia.org/wiki/K%C4%B1s%C4%B1k_Ate%C5%9Fte_15_Dakika\">Kısık Ateşte 15 Dakika</a>&quot; filmi ile ilk başrol&uuml;n&uuml; aldı. Bir&ccedil;ok televizyon dizisinde yer aldı ancak onun yurt &ccedil;apında tanınması ve sevilmesi &quot;<a href=\"https://tr.wikipedia.org/wiki/Avrupa_Yakas%C4%B1_(dizi)\">Avrupa Yakası</a>&quot; adlı dizide 3 sezon boyunca canlandırdığı &quot;Volkan&quot; karakteri ile oldu.</p>\r\n\r\n<h3>Sinemaya adım[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=4\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=4\">kaynağı değiştir</a>]</h3>\r\n\r\n<p>Bir m&uuml;zik alb&uuml;m&uuml; ve bir de teklisi olan Ata Demirer, daha sonra televizyonda &quot;Hacıyatmaz&quot; adlı g&ouml;steri programını yaptı.&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Gani_M%C3%BCjde\">Gani M&uuml;jde</a>&nbsp;tarafından yazılan ve y&ouml;netilen&nbsp;<em><a href=\"https://tr.wikipedia.org/wiki/Osmanl%C4%B1_Cumhuriyeti_(film)\">Osmanlı Cumhuriyeti</a></em>&nbsp;adlı filmde başrol olarak hayal&icirc; Osmanlı padişahı&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=VII._Osman&amp;action=edit&amp;redlink=1\">VII. Osman</a>&nbsp;karakterini canlandırdı.</p>\r\n\r\n<p>Eyvah Eyvah serisi[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=5\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=5\">kaynağı değiştir</a>]</p>\r\n\r\n<p>2010 yılında g&ouml;sterime giren,&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Hakan_Alg%C3%BCl&amp;action=edit&amp;redlink=1\">Hakan Alg&uuml;l</a>&nbsp;tarafından y&ouml;netilen&nbsp;<em><a href=\"https://tr.wikipedia.org/wiki/Eyyvah_Eyvah\">Eyyvah Eyvah</a></em>&nbsp;adlı&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Sinema_filmi\">sinema filminde</a>&nbsp;senarist ve başrol oyuncusu olarak yer aldı. Devam filmi&nbsp;<em><a href=\"https://tr.wikipedia.org/wiki/Eyyvah_Eyvah_2\">Eyyvah Eyvah 2</a></em>, 7 Ocak tarihinde 355 kopya ile 700&rsquo;den fazla salonda vizyona girmiş, 10 g&uuml;n i&ccedil;inde 1 milyon 842 bin 450 kişi tarafından izlenmiştir. B&ouml;ylelikle, &lsquo;Eyvah Eyvah 2&prime; bug&uuml;ne kadar 4 milyon 300 bin 641&prime;lik izleyici sayısıyla 2011 yılının en &ccedil;ok izlenen yerli yapımı olma &ouml;zelliğini eline almıştır. Hik&acirc;yesiyle olduğu kadar m&uuml;zikleri ve replikleriyle de ilgi &ccedil;eken film, esprileriyle halkın g&uuml;nl&uuml;k konuşma diline karışmıştır. &Ouml;rneğin, &lsquo;H&uuml;seyin&rsquo; karakterinin &ldquo;Nabıyon be ya?&rdquo; s&ouml;z&uuml; sokakta insanlar tarafından sık sık kullanılmaktadır.</p>\r\n\r\n<p><em>Eyyvah Eyvah</em>&nbsp;serisinde &quot;M&uuml;jgan&quot; karakterini oynayan&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%96zge_Borak\">&Ouml;zge Borak</a>&nbsp;ile Ata Demirer 11 Kasım 2011 tarihinde nişanlanıp 22 Nisan 2012 tarihinde evlenmişlerdir.<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-3\">[3]</a>&nbsp;&Ccedil;ift evliliklerini 14 Kasım 2014 tarihinde sonlandırmıştır.<a href=\"https://tr.wikipedia.org/wiki/Ata_Demirer#cite_note-4\">[4]</a></p>\r\n\r\n<p>Berlin Kaplanı[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=6\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=6\">kaynağı değiştir</a>]</p>\r\n\r\n<p>Ana madde:&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Berlin_Kaplan%C4%B1\">Berlin Kaplanı</a></p>\r\n\r\n<p>2012 yılında g&ouml;sterime giren, senaryosu kendisine ait olan, y&ouml;netmenliğini ise&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Hakan_Alg%C3%BCl&amp;action=edit&amp;redlink=1\">Hakan Alg&uuml;l</a>&#39;&uuml;n yaptığı&nbsp;<em><a href=\"https://tr.wikipedia.org/wiki/Berlin_Kaplan%C4%B1\">Berlin Kaplanı</a></em>&nbsp;filminde de başrol oyuncusu olarak yer almış, s&ouml;z konusu filmde &quot;Ayhan Kaplan&quot; adlı, yaşamını&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Berlin\">Berlin</a>&#39;de boks&ouml;rl&uuml;k ve bodyguard&#39;lık yaparak s&uuml;rd&uuml;ren bir T&uuml;rk&#39;&uuml; canlandırmıştır.</p>\r\n\r\n<p>Eyyvah Eyvah 3[<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;veaction=edit&amp;section=7\">değiştir</a>&nbsp;|&nbsp;<a href=\"https://tr.wikipedia.org/w/index.php?title=Ata_Demirer&amp;action=edit&amp;section=7\">kaynağı değiştir</a>]</p>\r\n\r\n<p>31 Ocak 2014&#39;te g&ouml;sterime giren&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Eyyvah_Eyvah_3\">Eyyvah Eyvah 3</a>&nbsp;filmi,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Eyyvah_Eyvah\">Eyyvah Eyvah</a>&nbsp;ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Eyyvah_Eyvah_2\">Eyyvah Eyvah 2</a>&nbsp;filmlerinin devam filmidir. Film, gişede 3.414.212 kişi tarafından izlenmiştir.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '300291369872235479667778ata-demirerin-bursa-bulbulu-filminden-ilk-resmi-afis-1672317012.jpg', 'actör');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gunicerik`
--

CREATE TABLE `gunicerik` (
  `gunicerik_id` int NOT NULL,
  `gunicerik_baslik` varchar(250) NOT NULL,
  `gunicerik_aciklama` text NOT NULL,
  `gunicerik_resim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `gunicerik`
--

INSERT INTO `gunicerik` (`gunicerik_id`, `gunicerik_baslik`, `gunicerik_aciklama`, `gunicerik_resim`) VALUES
(1, 'Avenger End_Game', 'Avengers Infinity War\"un ardından pek çok süper kahraman küle dönüşmüştür. Doktor Strange, Gamora, Drax, Mantis, genç Örümcek Adam, Black Panther, Bucky Barnes, Groot, Scarlet Witch, Vision, Star Lord, Maria Hill, The Wasp ve Nick Fury gibi pek çok kahraman, Thanos\'un Sonsuzluk Eldiveni\'ni ele geçirmesi ve kendi dengesini kurması yüzünden yok olmuştur ve dünya umutsuz haldedir. Dünya üzerinde kalan Black Widow, Kaptan Amerika, Thor ve Hulk kendi yaslarını tutmaktayken, Iron ve Nebula ise kontrol edemedikleri bir uzay gemisinin içinde, uzay boşluğunda sürüklenmektedirler.', '45357589984051046356632wp3891762-avengers-endgame-wallpapers.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE `icerikler` (
  `icerik_id` int NOT NULL,
  `icerik_isim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_turu` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_cinsi` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_aciklama` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_puan` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_resim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`icerik_id`, `icerik_isim`, `icerik_turu`, `icerik_cinsi`, `icerik_aciklama`, `icerik_puan`, `icerik_resim`, `icerik_url`) VALUES
(12, 'Kapı', 'dram', 'film', '<p>Kapı, Midyatlı S&uuml;ryani bir ailenin dramını konu ediyor. Ahşap ustası olan Yakup ile eşi Şemsa, yıllar &ouml;nce Mardin&rsquo;den Berlin&rsquo;e g&ouml;&ccedil; eder. &Uuml;&ccedil; &ccedil;ocukları ve torunları ile birlikte Berlin&rsquo;de yaşayan S&uuml;ryani aile, burada d&uuml;zenlerini kurup mutlu bir yaşam s&uuml;rer. Ancak bir g&uuml;n Mardin&rsquo;den gelen beklenmedik haber ailenin hayatını değiştirir.</p>\r\n', '5.7', '477207448410216680687563film1.jpg', 'https://www.youtube.com/embed/P8_qxept2VE'),
(14, 'ayla', 'dram', 'film', '<p>Ayla, y&ouml;netmenliğini Can Ulkay&#39;ın, senaristliğini ise Yiğit G&uuml;ralp&#39;in ger&ccedil;ekleştirdiği, 2017 yılı &ccedil;ıkışlı T&uuml;rkiye ve G&uuml;ney Kore ortak yapımı dram ve savaş t&uuml;r&uuml;ndeki bir sinema filmidir. 1950 yılında başlayan Kore Savaşı sırasında yaşanan ger&ccedil;ek bir hik&acirc;yeden uyarlanan filmin &ccedil;ekimlerine 2016 yılında başlandı.&nbsp;</p>\r\n', '8.5', '19080761403768651165337320171102154103!Ayla_Film_Afişi.jpg', 'https://www.youtube.com/embed/8PELOIYaEiw'),
(15, 'öteki dünya', 'aksiyon bilim kurgu', 'film', '<p>&Ouml;l&uuml;mden benzer bi&ccedil;imde etkilenen &uuml;&ccedil; kisi; biri insaat is&ccedil;isi, biri Fransiz bir gazeteci, &ouml;b&uuml;r&uuml; Londrali bir gen&ccedil;, ger&ccedil;egin pesinde ruhsal bir yolculuga &ccedil;ikarlar.</p>\r\n', '9.9', '99669657562234942499676300df939a056fe31eeaaa0ff7c6f23547.jpg', 'https://www.youtube.com/embed/4k3-jyP58Sg'),
(16, 'Anadolu Kartalları', 'Dram; Macera; Romantik; Gençlik', 'Film', '<p>Pilot olmayi hayal eden bes gencin Anadolu Kartali Tatbikati deneyimleri ve hikayeleri anlatiliyor.</p>\r\n', '6.2', '74744073029721768348108Efemera_2021022215120578725110.jpg', 'https://www.youtube.com/embed/bbSWkXffcDY');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int NOT NULL,
  `kullanici_adsoyad` varchar(250) NOT NULL,
  `kullanici_sifre` varchar(250) NOT NULL,
  `kullanici_email` varchar(250) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_sifre`, `kullanici_email`, `kullanici_zaman`) VALUES
(1, 'Oğuzhan Orge', '81dc9bdb52d04dc20036dbd8313ed055', 'Oguzhan.orge@ogr.dpu.edu.tr', '2022-12-31 18:22:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaslar`
--

CREATE TABLE `mesaslar` (
  `mesas_id` int NOT NULL,
  `kullanici_isim` varchar(50) NOT NULL,
  `konu` varchar(50) NOT NULL,
  `kullanici_email` varchar(250) NOT NULL,
  `mesas_icerik` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `mesaslar`
--

INSERT INTO `mesaslar` (`mesas_id`, `kullanici_isim`, `konu`, `kullanici_email`, `mesas_icerik`) VALUES
(2, 'ahmet', 'web', 'ahmetozer43tr77@gmail.com', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int NOT NULL,
  `slider_baslik` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slider_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slider_buton` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slider_link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slider_resim` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_buton`, `slider_link`, `slider_resim`) VALUES
(1, 'Sinehaber', '<p>Sinema blog haber sitesi</p>\r\n', 'İletişim', 'http://sinehaber-finalproje/iletişim.php', '83869834674141395187326wp3891762-avengers-endgame-wallpapers.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `gunicerik`
--
ALTER TABLE `gunicerik`
  ADD PRIMARY KEY (`gunicerik_id`);

--
-- Tablo için indeksler `icerikler`
--
ALTER TABLE `icerikler`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `mesaslar`
--
ALTER TABLE `mesaslar`
  ADD PRIMARY KEY (`mesas_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `icerikler`
--
ALTER TABLE `icerikler`
  MODIFY `icerik_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mesaslar`
--
ALTER TABLE `mesaslar`
  MODIFY `mesas_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
