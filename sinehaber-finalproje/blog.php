<?php require_once "header.php";
$blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC ");
$blogsor->execute(array());


?>

  <main id="main" data-aos="fade-in">

      <br><br><br>

    <!-- ======= Courses Section ======= -->

      <section id="courses" class="courses">
          <h1 class="" style="margin-left: 190px;margin-bottom: 20px; text-shadow: 0 0 15px white">Haberler!!!</h1>
<?php while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {  ?>

          <div class="container my-4" data-aos="fade-up">
          <div class="row " data-aos="zoom-in" data-aos-delay="100">
          <div class="col-12 d-flex w-100  align-items-stretch" >
        <div class="course-item w-100">
            <img style="height:250px; float: left;" src="Admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="img-fluid w-25" alt="...">
            <div class="course-content " style="margin-left:270px ">
                <h3><a href="blog-detay-<?=($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>"><?php echo $blogcek['blog_baslik'] ?></a></h3>
                <span>admin</span>
                <div class="trainer d-flex justify-content-between align-items-center">
                    <p><?php $aciklama=$blogcek['blog_aciklama']; echo $aciklama;?></p>
                </div>
            </div>
        </div>
    </div> <!-- End Course Item-->







        </div>

      </div><?php } ?>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
<?php require_once "footer.php"?>