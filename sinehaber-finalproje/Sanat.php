<?php require_once "header.php";
$galerisor = $baglanti->prepare("SELECT * FROM galeri ");
$galerisor->execute(array());

?>

<main id="main" data-aos="fade-in">
    <br><br><br>

    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php while ($galericek = $galerisor->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-lg-4 col-md-6 d-flex  align-items-stretch">
                    <div class="course-item">
                        <img src="admin/resimler/galeri/<?php echo $galericek['galeri_resim']?>" class="img-fluid filmafis" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4><?php echo $galericek['galeri_meslek'] ?></h4>
                            </div>

                            <h3><?php echo $galericek['galeri_isim'] ?></h3>

                            <a class="buttons afiskapsa float-right m-3" href=actordetay.php?id=<?php echo $galericek['galeri_id'] ?>"><button class="bg-primary border-0" style="border-radius: 15px">Ayrıntı</button></a>
                        </div>
                    </div>
                </div>
                <?php }?>


            </div>
        </div>
    </section>

</main>
<?php  require_once    "footer.php"?>