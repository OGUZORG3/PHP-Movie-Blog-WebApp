<?php require_once "header.php";

    $galerisor=$baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
    $galerisor->execute(array(
    'galeri_id'=>$_GET['id']
    ));
    $galericek=$galerisor->fetch(PDO::FETCH_ASSOC);


?>

    <main id="main">
    <br><br><br>


    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 bg-dark" style="border-radius: 15px">
                    <div class="row">
                    <div class="col-2 "></div>
                    <div style="width: 100%;" class=" col-8">

                        <?php ?>
                        <img src="admin/resimler/galeri/<?php echo $galericek['galeri_resim']?>" alt="resim">


                    <div class="col-2 "></div>
                </div>
                </div>
                    <h3><?php echo $galericek['galeri_isim'] ?></h3>
                    <h3><?php echo $galericek['galeri_meslek'] ?></h3>
                    <p>
                        <?php echo $galericek['galeri_aciklama'] ?>
                    </p>


            </div>

        </div>
    </section>



</main>


<?php require_once "footer.php"?>