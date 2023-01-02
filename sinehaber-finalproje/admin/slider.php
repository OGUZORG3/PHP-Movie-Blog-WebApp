<?php require_once 'header.php';
require_once 'sidebar.php';

$slidersor = $baglanti->prepare("SELECT * FROM slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek = $slidersor->fetch(PDO::FETCH_ASSOC);



?>  


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <?php
              if (@$_GET['durum'] == "okey") { ?>
                <p style="color:green ; ">İşlem başarılı</p>
                <?php } elseif (@$_GET['durum'] == "no") { ?>
                <p style="color:red ; ">İşlem başarısız</p>

                <?php }
              ?>

              <div class="card-header">
                <h3 class="card-title">Slider Ekleme</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Slider resmi</label>
                    <img style="width:600px;height: 300px;object-fit: scale-down;" src="resimler/slider/<?php echo $slidercek['slider_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider resmi</label>
                    <input name="resim" value="<?php echo $slidercek['slider_resim'] ?>" type="file" class="form-control"
                      placeholder="Lütfen Film resmi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider başlık</label>
                    <input name="baslik" value="<?php echo $slidercek['slider_baslik'] ?>" type="text"
                      class="form-control" placeholder="Lütfen Film adı giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">buton ismi</label>
                    <input name="buton" value="<?php echo $slidercek['slider_buton'] ?>" type="text"
                      class="form-control" placeholder="Lütfen Film adı giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Buton linki</label>
                    <input name="link" value="<?php echo $slidercek['slider_link'] ?>" type="text"
                      class="form-control" placeholder="Lütfen Film adı giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Acıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor" ><?php echo $slidercek['slider_aciklama'] ?></textarea>
                  </div>
                </div>

                <div class="card-footer">
                  <button name="sliderkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php require_once 'footer.php'; ?>