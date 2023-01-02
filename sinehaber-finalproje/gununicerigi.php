<?php require_once 'header.php'; 
$gunsor = $baglanti->prepare("SELECT * FROM gunicerik where gunicerik_id=?");
$gunsor->execute(array(1));
$guncek = $gunsor->fetch(PDO::FETCH_ASSOC);?>
  <main id="main">
    <br><br><br>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <h1 style="margin-bottom: 50px;">Günün Filmi</h1>
        <div class="row" >

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" >
            <img src="Admin/resimler/gununicerigi/<?php echo $guncek['gunicerik_resim'] ?>" class="img-fluid" alt="" style="object-fit: contain; height: 450px; ">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $guncek['gunicerik_baslik'] ?></h3>
            <div style="width:450px;height:450px;  box-sizing: border-box;">
            <p class="font-italic">
             <?php echo $guncek['gunicerik_aciklama'] ?>
            </p>
          </div>
          </div>
        </div>

      </div>
    </section>



 
  </main>

  <?php require_once 'footer.php'; ?>