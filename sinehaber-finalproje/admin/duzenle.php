<?php require_once 'header.php';
require_once 'sidebar.php';




?>

<?php if ($_GET['sayfa'] == "icerik") {
    $iceriksor = $baglanti->prepare("SELECT * FROM icerikler where icerik_id=:icerik_id");
    $iceriksor->execute(array(


            'icerik_id'=>$_GET['id']
    ));
    $icerikcek = $iceriksor->fetch(PDO::FETCH_ASSOC);



    ?>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">İcerik Düzenle</h3>
                            </div>
                            <form action="islem.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">

                                    <input type="hidden" name="eskiresim" value="">
                                    <div class="form-group">
                                        <label >İcerik Resmi</label>
                                        <input name="resim" value="<?php echo $icerikcek['icerik_resim'] ?>" type="file" class="form-control"
                                            placeholder="Lütfen İcerik Resmi giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label >İcerik Adı</label>
                                        <input name="ad" value="<?php echo $icerikcek['icerik_isim'] ?>" type="text" class="form-control"
                                            placeholder="Lütfen Film adı giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label >İcerik Türü</label>
                                        <input name="tur" value="<?php echo $icerikcek['icerik_turu'] ?>" type="text" class="form-control"
                                            placeholder="Lütfen İcerik Türü giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label >İcerik Cinsi</label>
                                        <input name="cins" value="<?php echo $icerikcek['icerik_cinsi'] ?>" type="text" class="form-control"
                                            placeholder="Lütfen İcerik Cinsi giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label >İcerik Puan</label>
                                        <input name="puan" value="<?php echo $icerikcek['icerik_puan'] ?>" type="text" class="form-control"
                                            placeholder="Lütfen İcerik Puangiriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Film Acıklama</label>
                                        <textarea name="aciklama"  id="editor1" class="ckeditor"><?php echo $icerikcek['icerik_aciklama'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">video url</label>
                                        <input name="url" value="<?php echo $icerikcek['icerik_url'] ?>" type="text" class="form-control"
                                               placeholder="url girin">
                                    </div>
                                </div>
                                <input type="hidden" name="eskiresim" value="<?php echo $icerikcek['icerik_resim'] ?>">
                                <input type="hidden" name="id" value="<?php echo $icerikcek['icerik_id'] ?>">
                                <div class="card-footer">
                                    <button name="icerikduzenle" style="float:right" type="submit"
                                        class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>
<?php if ($_GET['sayfa'] == "sanat") {
    $galerisor = $baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
    $galerisor->execute(array(


        'galeri_id'=>$_GET['id']
    ));
    $galericek = $galerisor->fetch(PDO::FETCH_ASSOC);



    ?>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">İcerik Ekle</h3>
                            </div>
                            <form action="islem.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">

                                    <input type="hidden" name="eskiresim" value="">
                                    <div class="form-group">
                                        <label >İcerik Resmi</label>
                                        <input name="resim" value="<?php echo $galericek['galeri_resim'] ?>" type="file" class="form-control"
                                               placeholder="Lütfen İcerik Resmi giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label >Sanatçı Adı</label>
                                        <input name="ad" value="<?php echo $galericek['galeri_isim'] ?>" type="text" class="form-control"
                                               placeholder="Lütfen Film adı giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label >Meslek</label>
                                        <input name="meslek" value="<?php echo $galericek['galeri_meslek'] ?>" type="text" class="form-control"
                                               placeholder="Lütfen Film adı giriniz.">
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sanatçı Acıklama</label>
                                        <textarea name="aciklama"  id="editor1" class="ckeditor"><?php echo $galericek['galeri_aciklama'] ?></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="eskiresim" value="<?php echo $galericek['galeri_resim'] ?>">
                                <input type="hidden" name="id" value="<?php echo $galericek['galeri_id'] ?>">
                                <div class="card-footer">
                                    <button name="galeriduzenle" style="float:right" type="submit"
                                            class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>
<?php  if ($_GET['sayfa']=="blog") {

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
    'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);




?>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div  class="col-md-12">
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">Blog düzenle</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="islem.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog  Resim</label>
                                        <img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog  Resim</label>
                                        <input name="resim"  type="file" class="form-control"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog  Başlık</label>
                                        <input value="<?php echo $blogcek['blog_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog  anahtar kelime</label>
                                        <input value="<?php echo $blogcek['blog_anahtarkelime'] ?>" name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime   giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog  sıra</label>
                                        <input value="<?php echo $blogcek['blog_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ekip Açıklama</label>
                                        <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $blogcek['blog_aciklama'] ?></textarea>
                                    </div>


                                </div>
                                <!-- /.card-body -->
                                <input type="hidden" name="eskiresim" value="<?php echo $blogcek['blog_resim'] ?>">
                                <input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
                                <div class="card-footer">
                                    <button name="blogduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
<?php } ?>
<?php require_once 'footer.php'; ?>