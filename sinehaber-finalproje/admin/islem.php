<?php
session_start();
require_once 'baglantı.php';
if (isset($_POST['ayarkaydet'])) {
    $baglanti=new PDO('mysql:host=localhost; dbname=sinehaber; charset=utf8',  'root' , '1234');
	$kaydet = $baglanti->prepare("UPDATE ayarlar SET 
ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email



	");
	$update = $kaydet->execute(
		array(
			'ayar_baslik' => htmlspecialchars($_POST['baslik']),
			'ayar_aciklama' => htmlspecialchars($_POST['aciklama']),
			'ayar_anahtar' => htmlspecialchars($_POST['anahtar']),
			'ayar_adres' => htmlspecialchars($_POST['adres']),
			'ayar_telefon' => htmlspecialchars($_POST['telefon']),
			'ayar_email' => htmlspecialchars($_POST['email'])

		)
	);
	if ($update) {
		Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");
	} else {
		Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");
	}
}
if (isset($_POST['sosyalmedyakaydet'])) {
	$kaydet = $baglanti->prepare("UPDATE ayarlar SET 


ayar_facebook=:ayar_facebook,
ayar_instangram=:ayar_instangram,
ayar_youtube=:ayar_youtube,
ayar_twiter=:ayar_twiter


		");
	$update = $kaydet->execute(
		array(
			'ayar_facebook' => htmlspecialchars($_POST['facebook']),
			'ayar_instangram' => htmlspecialchars($_POST['instagram']),
			'ayar_youtube' => htmlspecialchars($_POST['youtube']),
			'ayar_twiter' => htmlspecialchars($_POST['twitter'])
		)
	);

	if ($update) {
		Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=okey");
	} else {
		Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=no");
	}
}

if (isset($_POST['gunicerikkaydet'])) {
	if ($_FILES['resim']["size"] > 0) {
		$uploads_dir = 'resimler/gununicerigi';
		$tmp_name = $_FILES['resim']["tmp_name"];
		@$name = $_FILES['resim']["name"];
		@$name = $_FILES['resim']["name"];
		$sayi1 = rand(1, 100000000);
		$sayi2 = rand(1, 100000000);
		$sayi3 = rand(1, 100000000);
		$sayilar = $sayi1 . $sayi2 . $sayi3;
		$resimadi = $sayilar . $name;
		move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

		$kaydet = $baglanti->prepare("UPDATE gunicerik SET 
			gunicerik_baslik=:gunicerik_baslik,
			gunicerik_aciklama=:gunicerik_aciklama,
			gunicerik_resim=:gunicerik_resim
				");
		$update = $kaydet->execute(
			array(
				'gunicerik_baslik' => htmlspecialchars($_POST['baslik']),
				'gunicerik_aciklama' => htmlspecialchars($_POST['aciklama']),
				'gunicerik_resim' => $resimadi

			)
		);
		if ($update) {
			$eskiresim = $_POST['eskiresim'];
			unlink("resimler/gununicerigi/$eskiresim");
			Header("Location:gununfilmi.php?durum=okey");
		} else {
			Header("Location:gununfilmi.php?durum=no");
		}
	} else {
		$kaydet = $baglanti->prepare("UPDATE gunicerik SET 
			gunicerik_baslik=:gunicerik_baslik,
			gunicerik_aciklama=:gunicerik_aciklama

				");
		$update = $kaydet->execute(
			array(
				'gunicerik_baslik' => htmlspecialchars($_POST['baslik']),
				'gunicerik_aciklama' => htmlspecialchars($_POST['aciklama'])

			)
		);
		if ($update) {
			Header("Location:gununfilmi.php?durum=okey");
		} else {
			Header("Location:gununfilmi.php?durum=no");
		}
	}

}



if (isset($_POST['sliderkaydet'])) {
	if ($_FILES['resim']["size"] > 0) {
		$uploads_dir = 'resimler/slider';
		$tmp_name = $_FILES['resim']["tmp_name"];
		@$name = $_FILES['resim']["name"];
		$sayi1 = rand(1, 100000000);
		$sayi2 = rand(1, 100000000);
		$sayi3 = rand(1, 100000000);
		$sayilar = $sayi1 . $sayi2 . $sayi3;
		$resimadi = $sayilar . $name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

		$kaydet = $baglanti->prepare("UPDATE slider SET 
			slider_baslik=:slider_baslik,
			slider_aciklama=:slider_aciklama,
			slider_buton=:slider_buton,
			slider_link=:slider_link,
			slider_resim=:slider_resim
				");
		$update = $kaydet->execute(
			array(
				'slider_baslik' => ($_POST['baslik']),
				'slider_aciklama' => ($_POST['aciklama']),
				'slider_buton' => ($_POST['buton']),
				'slider_link' => ($_POST['link']),
				'slider_resim' => $resimadi

			)
		);
		if ($update) {
			$eskiresim = $_POST['eskiresim'];
			unlink("resimler/slider/$eskiresim");
			Header("Location:slider.php?durum=okey");
		} else {
			Header("Location:slider.php?durum=no");
		}
	} else {
		$kaydet = $baglanti->prepare("UPDATE slider SET 
			slider_baslik=:slider_baslik,
			slider_aciklama=:slider_aciklama,
			slider_buton=:slider_buton,
			slider_link=:slider_link


				");
		$update = $kaydet->execute(
			array(
				'slider_baslik' => ($_POST['baslik']),
				'slider_aciklama' => ($_POST['aciklama']),
				'slider_buton' => ($_POST['buton']),
				'slider_link' => ($_POST['link']),


			)
		);
		if ($update) {
			Header("Location:slider.php?durum=okey");
		} else {
			Header("Location:slider.php?durum=no");
		}

	}
}
if (isset($_POST['icerikaydet'])) {

    $resimadi='resim-yok.jpg';

    if(isset($_FILES['resim']['name']) && $_FILES['resim']['size'] > 0)
    {
        $uploads_dir = 'resimler/afisler';
        $tmp_name = $_FILES['resim']["tmp_name"];
        $name = $_FILES['resim']["name"];
        $sayi1 = rand(1, 100000000);
        $sayi2 = rand(1, 100000000);
        $sayi3 = rand(1, 100000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    }

	$kaydet = $baglanti->prepare("INSERT INTO icerikler SET
                        icerik_isim     = :icerik_isim, 
                        icerik_turu     = :icerik_turu, 
                        icerik_cinsi    = :icerik_cinsi, 
                        icerik_aciklama = :icerik_aciklama, 
                        icerik_puan     = :icerik_puan, 
                        icerik_resim    = :icerik_resim,
                        icerik_url      = :icerik_url"
    );

    $insert = $kaydet->execute([
        "icerik_isim"     => $_POST['ad'],
        "icerik_turu"     => $_POST['tur'],
        "icerik_cinsi"    => $_POST['cins'],
        "icerik_aciklama" => $_POST['aciklama'],
        "icerik_puan"     => $_POST['puan'],
        "icerik_resim"    => $resimadi,
        "icerik_url"     => $_POST['url'],
    ]);


	if ($insert) {
		Header("Location:icerik.php?durum=okey");
	} else {
		Header("Location:icerik.php?durum=no");
	}
}

if (isset($_POST['icerikduzenle'])) {

    $resimadi="resim-yok.jpg";
    if (isset($_FILES['resim']['name']) && $_FILES['resim']['size'] > 0) {
        $uploads_dir = 'resimler/afisler';
        $tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];
        $sayi1 = rand(1, 100000000);
        $sayi2 = rand(1, 100000000);
        $sayi3 = rand(1, 100000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE icerikler SET
                        icerik_isim     = :icerik_isim, 
                        icerik_turu     = :icerik_turu, 
                        icerik_cinsi    = :icerik_cinsi, 
                        icerik_aciklama = :icerik_aciklama, 
                        icerik_puan     = :icerik_puan, 
                        icerik_resim    = :icerik_resim,
                        icerik_url      = :icerik_url
                        WHERE icerik_id={$_POST['id']}
                        "
        );
        $update = $kaydet->execute(
            [
                "icerik_isim"     => $_POST['ad'],
                "icerik_turu"     => $_POST['tur'],
                "icerik_cinsi"    => $_POST['cins'],
                "icerik_aciklama" => $_POST['aciklama'],
                "icerik_puan"     => $_POST['puan'],
                "icerik_url"      => $_POST['url'],
                "icerik_resim"    => $resimadi,

            ]
        );
        if ($update) {
            $eskiresim = $_POST['eskiresim'];
            unlink("resimler/afisler/$eskiresim");
            Header("Location:icerik.php?durum=okey");
        } else {
            Header("Location:icerik.php?durum=no");
        }
    } else {
        $kaydet = $baglanti->prepare("UPDATE icerikler SET 
                        icerik_isim     = :icerik_isim, 
                        icerik_turu     = :icerik_turu, 
                        icerik_cinsi    = :icerik_cinsi, 
                        icerik_aciklama = :icerik_aciklama, 
                        icerik_puan     = :icerik_puan,
                        icerik_url      = :icerik_url
                        WHERE icerik_id={$_POST['id']}
				");
        $update = $kaydet->execute(
            array(
                "icerik_isim"     => $_POST['ad'],
                "icerik_turu"     => $_POST['tur'],
                "icerik_cinsi"    => $_POST['cins'],
                "icerik_aciklama" => $_POST['aciklama'],
                "icerik_puan"     => $_POST['puan'],
                "icerik_url"      => $_POST['url'],


            )
        );
        if ($update) {
            Header("Location:icerik.php?durum=okey");
        } else {
            Header("Location:icerik.php?durum=no");
        }

    }
}
if (isset($_POST['iceriksil'])) {
    $eskiresim = $_POST['eskiresim'];
    unlink("resimler/afisler/$eskiresim");
    $sil = $baglanti->prepare("DELETE  FROM icerikler where icerik_id=:icerik_id");
    $sil->execute(array('icerik_id' => $_POST['id']));
    if ($sil) {
        Header("Location:icerik.php?durum=okey");
    } else {
        Header("Location:icerik.php?durum=no");
    }
}
if (isset($_POST['galerikaydet'])) {
    $resimadi='resim-yok.jpg';

    if(isset($_FILES['resim']['name']) && $_FILES['resim']['size'] > 0)
    {
        $uploads_dir = 'resimler/galeri';
        $tmp_name = $_FILES['resim']["tmp_name"];
        $name = $_FILES['resim']["name"];
        $sayi1 = rand(1, 100000000);
        $sayi2 = rand(1, 100000000);
        $sayi3 = rand(1, 100000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    }

    $kaydet = $baglanti->prepare("INSERT INTO galeri SET
                        galeri_isim     = :galeri_isim, 
                        galeri_aciklama = :galeri_aciklama, 
                        galeri_resim    = :galeri_resim,
                        galeri_meslek    = :galeri_meslek
                        "

    );

    $insert = $kaydet->execute([
        "galeri_isim"     => $_POST['ad'],
        "galeri_aciklama" => $_POST['aciklama'],
        "galeri_resim"    => $resimadi,
        "galeri_meslek" => $_POST['meslek'],
    ]);


    if ($insert) {
        Header("Location:Sanat.php?durum=okey");
    } else {
        Header("Location:Sanat.php?durum=no");
    }
}



if (isset($_POST['galeriduzenle'])) {
    $resimadi="resim-yok.jpg";
    if (isset($_FILES['resim']['name']) && $_FILES['resim']['size'] > 0) {
        $uploads_dir = 'resimler/galeri';
        $tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];
        $sayi1 = rand(1, 100000000);
        $sayi2 = rand(1, 100000000);
        $sayi3 = rand(1, 100000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE galeri SET
                        galeri_isim     = :galeri_isim, 
                        galeri_aciklama = :galeri_aciklama, 
                        galeri_resim    = :galeri_resim,
                        galeri_meslek    = :galeri_meslek
                        WHERE galeri_id={$_POST['id']}
                        "
        );
        $update = $kaydet->execute(
            [
                "galeri_isim"     => $_POST['ad'],
                "galeri_aciklama" => $_POST['aciklama'],
                "galeri_meslek" => $_POST['meslek'],
                "galeri_resim"    => $resimadi,

            ]
        );
        if ($update) {
            $eskiresim = $_POST['eskiresim'];
            unlink("resimler/galeri/$eskiresim");
            Header("Location:Sanat.php?durum=okey");
        } else {
            Header("Location:Sanat.php?durum=no");
        }
    } else {
        $kaydet = $baglanti->prepare("UPDATE galeri SET 
                        galeri_isim     = :galeri_isim, 
                        galeri_aciklama = :galeri_aciklama,
                        galeri_meslek =:galeri_meslek
                        WHERE galeri_id={$_POST['id']}
				");
        $update = $kaydet->execute(
            array(
                "galeri_isim"     => $_POST['ad'],
                "galeri_aciklama" => $_POST['aciklama'],
                "galeri_meslek"    => $_POST['meslek']

            )
        );
        if ($update) {
            Header("Location:Sanat.php?durum=okey");
        } else {
            Header("Location:Sanat.php?durum=no");
        }

    }
}

if (isset($_POST['galerisil'])) {
    $eskiresim = $_POST['eskiresim'];
    unlink("resimler/galeri/$eskiresim");
    $sil = $baglanti->prepare("DELETE  FROM galeri where galeri_id=:galeri_id");
    $sil->execute(array('galeri_id' => $_POST['id']));
    if ($sil) {
        Header("Location:Sanat.php?durum=okey");
    } else {
        Header("Location:Sanat.php?durum=no");
    }
}
if (isset($_POST['blogkaydet'])) {
    $uploads_dir='resimler/blog';
    @$tmp_name=$_FILES['resim'] ["tmp_name"];
    @$name=$_FILES['resim'] ["name"];

    $sayi1=rand(1,10000000);
    $sayi2=rand(1,10000000);
    $sayi3=rand(1,10000000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimadi=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


    $kaydet=$baglanti->prepare("INSERT into blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,
blog_resim=:blog_resim
	");
    $insert=$kaydet->execute(array(

        'blog_baslik'=>htmlspecialchars($_POST['baslik']),
        'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
        'blog_sira'=>htmlspecialchars($_POST['sira']),
        'blog_aciklama'=>$_POST['aciklama'],
        'blog_resim'=>$resimadi
    ));




    if ($insert) {
        Header("Location:blog.php?durum=okey");
    }else{
        Header("Location:blog.php?durum=no");
    }

}

if (isset($_POST['blogduzenle'])) {

    if ($_FILES['resim'] ["size"]>0) {

        $uploads_dir='resimler/blog';
        @$tmp_name=$_FILES['resim'] ["tmp_name"];
        @$name=$_FILES['resim'] ["name"];

        $sayi1=rand(1,10000000);
        $sayi2=rand(1,10000000);
        $sayi3=rand(1,10000000);
        $sayilar=$sayi1.$sayi2.$sayi3;
        $resimadi=$sayilar.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





        $kaydet=$baglanti->prepare("UPDATE blog SET 


blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
WHERE blog_id={$_POST['id']}
	");
        $update=$kaydet->execute(array(


            'blog_baslik'=>htmlspecialchars($_POST['baslik']),
            'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
            'blog_sira'=>htmlspecialchars($_POST['sira']),
            'blog_aciklama'=>$_POST['aciklama'],
            'blog_resim'=>$resimadi
        ));


        if ($update) {
            $eskiresim=$_POST['eskiresim'];
            unlink("resimler/blog/$eskiresim");
            Header("Location:blog.php?durum=okey");
        }else{

            Header("Location:blog.php?durum=no");
        }

    }

    else{


        $kaydet=$baglanti->prepare("UPDATE blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama

WHERE blog_id={$_POST['id']}

	");
        $update=$kaydet->execute(array(
            'blog_baslik'=>htmlspecialchars($_POST['baslik']),
            'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
            'blog_sira'=>htmlspecialchars($_POST['sira']),
            'blog_aciklama'=>$_POST['aciklama']
        ));
        if ($update) {
            Header("Location:blog.php?durum=okey");
        }else{
            Header("Location:blog.php?durum=no");
        }

    }


}






if (isset($_POST['blogsil'])) {
    $eskiresim=$_POST['eskiresim'];
    unlink("resimler/blog/$eskiresim");

    $sil=$baglanti->prepare("DELETE  FROM blog where blog_id=:blog_id");
    $sil->execute(array(

        'blog_id'=>$_POST['id']
    ));


    if ($sil) {
        Header("Location:blog.php?durum=okey");
    }
    else{
        Header("Location:blog.php?durum=no");

    }
}

if(isset($_POST['girisyap'])) {

    $email=htmlspecialchars($_POST['email']);
    $sifre=htmlspecialchars($_POST['sifre']);
    $md5=md5($sifre);
    $kullanicisor = $baglanti->prepare("SELECT * FROM kullanici where kullanici_email=:kullanici_email AND kullanici_sifre=:kullanici_sifre");
    $kullanicisor->execute(array(
        'kullanici_email'=>$email,
        'kullanici_sifre'=>$md5,
    ));
    $var=$kullanicisor->rowCount();
    if ($var=="0")
    {
        Header("Location:giris.php?durum=hata");
    }else
    {
        $_SESSION['giris']=$email;
        Header("Location:index.php?durum=okey");
    }
}
if (isset($_POST['abone'])) {


    $kaydet=$baglanti->prepare("INSERT into abone SET 

abone_email=:abone_email
	");
    $insert=$kaydet->execute(array(

        'abone_email'=>htmlspecialchars($_POST['email'])
    ));




    if ($insert) {
        Header("Location:../iletişim.php?durum=okey");
    }else{
        Header("Location:../iletişim.php?durum=no");
    }

}
if (isset($_POST['mesas'])) {
    $kaydet=$baglanti->prepare("INSERT into mesaslar SET 
            kullanici_isim=:kullanici_isim,
            kullanici_email=:kullanici_email,
            konu=:konu,
            mesas_icerik=:mesas_icerik
	");
    $insert=$kaydet->execute(array(

        'kullanici_isim'=>$_POST['isim'],
        'kullanici_email'=>$_POST['email'],
        'konu'=>$_POST['konu'],
        'mesas_icerik'=>$_POST['mesass'],
    ));




    if ($insert) {
        Header("Location:../iletişim.php?durum=okey");
    }else{
        Header("Location:../iletişim.php?durum=no");
    }

}
if (isset($_POST['mesajsil'])) {

    $sil=$baglanti->prepare("DELETE  FROM mesaslar where mesas_id=:mesas_id");
    $sil->execute(array(

        'mesas_id'=>$_POST['id']
    ));


    if ($sil) {
        Header("Location:mesajlar.php?");
    }
    else{
        Header("Location:mesajlar.php?");

    }
}
?>