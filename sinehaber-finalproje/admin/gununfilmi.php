<?php require_once 'header.php';
require_once 'sidebar.php';

$gunsor = $baglanti->prepare("SELECT * FROM gunicerik where gunicerik_id=?");
$gunsor->execute(array(1));
$guncek = $gunsor->fetch(PDO::FETCH_ASSOC);



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
                <h3 class="card-title">Günün Filmi güncelleme</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Film resmi</label>
                    <img style="width:600px;height: 300px;object-fit: scale-down;" src="resimler/gununicerigi/<?php echo $guncek['gunicerik_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $guncek['gunicerik_resim'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Film resmi</label>
                    <input name="resim" value="<?php echo $guncek['gunicerik_resim'] ?>" type="file" class="form-control"
                      placeholder="Lütfen Film resmi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Film Adı</label>
                    <input name="baslik" value="<?php echo $guncek['gunicerik_baslik'] ?>" type="text"
                      class="form-control" placeholder="Lütfen Film adı giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Film Acıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor" ><?php echo $guncek['gunicerik_aciklama'] ?></textarea>
                  </div>
                </div>

                <div class="card-footer">
                  <button name="gunicerikkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php require_once 'footer.php'; ?>