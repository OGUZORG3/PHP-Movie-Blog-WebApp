<?php require_once 'header.php';
    $iceriksor = $baglanti->prepare("SELECT * FROM icerikler ");
    $iceriksor->execute(array());
    $slidersor = $baglanti->prepare("SELECT * FROM slider where slider_id=?");
    $slidersor->execute(array(1));
    $slidercek = $slidersor->fetch(PDO::FETCH_ASSOC);?>



<!-- ======= Hero Section ======= -->
<section style="background-image:url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>) " id="hero" class="d-flex justify-content-center align-items-center">
<div class="container position-relative" data-aos="zoom-in " data-aos-delay="100">
    <h1><?php echo $slidercek['slider_baslik'] ?></h1>
    <h2><?php echo $slidercek['slider_aciklama']?></h2>
    <a class="buton" href="<?php echo $slidercek['slider_link'] ?>"><?php echo $slidercek['slider_buton'] ?></a>

</div>
</section>

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-between d-flex px-5 p-2 anaskapsayıcı " >
<?php while ($icerikcek = $iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="col-lg-4 col-md-6 d-flex align-items-center my-3 ">
        <div class=" m-auto afiskapsa ">
            <img src="admin/resimler/afisler/<?php echo $icerikcek['icerik_resim'] ?>" class="img-fluid filmafis" alt="">
            <div class="member-content p-3">
                <h4><?php echo $icerikcek['icerik_isim']  ?></h4>
                <span><?php echo $icerikcek['icerik_turu'] ?></span>
                <span><?php echo $icerikcek['icerik_cinsi'] ?></span>


                <div class="social">
                    <td>
                        <a class="buttons afiskapsa float-right m-3" href=filmdetay.php?id=<?php echo $icerikcek['icerik_id'] ?>"><button class="bg-primary border-0" style="border-radius: 15px">Ayrıntı</button></a>

                </div>
            </div>
        </div>
    </div>
<?php } ?>
        </div>
    </div>
  </section>


  <div class="row">
    <div class="col-lg-6 order-1 order-lg-2" style="background-color: black;" data-aos="fade-left" data-aos-delay="100">


    </div>
  </div>

  </div>


</main>
<?php require_once "footer.php"; ?>