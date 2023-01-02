<?php require_once "header.php";

    $iceriksor=$baglanti->prepare("SELECT * FROM icerikler where icerik_id=:icerik_id");
    $iceriksor->execute(array(
    'icerik_id'=>$_GET['id']
    ));
    $icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);


?>

    <main id="main">
    <br><br><br>


    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 bg-dark" >
                    <div class="row">
                    <div class="col-2 "></div>
                    <div style="width: 100%;" class=" col-8">
                        <?php if (isset($icerikcek['icerik_url'])) {?>
                    <iframe width="100%" height="500px" src="<?php echo $icerikcek['icerik_url'] ?>"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php }else { ?>
                        <img src="admin/<?php echo $icerikcek['icerik_resim']; echo "alt=resim>"; }?>
                    </div>
                    <div class="col-2 "></div>
                </div>
                </div>
                    <h1><?php echo $icerikcek['icerik_isim'] ?></h1>&nbsp;&nbsp;&nbsp;
                <br/><h3><?php echo $icerikcek['icerik_cinsi'] ?></h3>&nbsp;
                <br/><h3><?php echo $icerikcek['icerik_turu'] ?></h3>
                    <p>
                        <?php echo $icerikcek['icerik_aciklama'] ?>
                    </p>


            </div>

        </div>
    </section>



</main>


<?php require_once "footer.php"?>