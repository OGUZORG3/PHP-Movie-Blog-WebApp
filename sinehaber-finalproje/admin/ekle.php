<?php require_once 'header.php';
require_once 'sidebar.php';




?>

<?php if ($_GET['sayfa'] == "icerik") { ?>
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
                                        <label for="exampleInputEmail1">İcerik Resmi</label>
                                        <input name="resim" value="" type="file" class="form-control"
                                            placeholder="Lütfen İcerik Resmi giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">İcerik Adı</label>
                                        <input name="ad" value="" type="text" class="form-control"
                                            placeholder="Lütfen Film adı giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">İcerik Türü</label>
                                        <input name="tur" value="" type="text" class="form-control"
                                            placeholder="Lütfen İcerik Türü giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">İcerik Cinsi</label>
                                        <input name="cins" value="" type="text" class="form-control"
                                            placeholder="Lütfen İcerik Cinsi giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">İcerik Puan</label>
                                        <input name="puan" value="" type="text" class="form-control"
                                            placeholder="Lütfen İcerik Puangiriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Film Acıklama</label>
                                        <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">video url</label>
                                        <input name="url" value="" type="text" class="form-control"
                                               placeholder="url girin">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button name="icerikaydet" style="float:right" type="submit"
                                        class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } if ($_GET['sayfa'] == "galeri") {?>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">Sanatcı Ekle</h3>
                            </div>
                            <form action="islem.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <input type="hidden" name="eskiresim" value="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sanatcı Resmi</label>
                                        <input name="resim" value="" type="file" class="form-control"
                                               placeholder="Lütfen Sanatcı Resmi giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sanatçı Adı</label>
                                        <input name="ad" value="" type="text" class="form-control"
                                               placeholder="Lütfen Sanatcı adı giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meslek</label>
                                        <input name="meslek" value="" type="text" class="form-control"
                                               placeholder="Lütfen Film adı giriniz.">
                                    </div>
                                    </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sanatçı Acıklama</label>
                                        <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button name="galerikaydet" style="float:right" type="submit"
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
<?php if ($_GET['sayfa']=="blog") { ?>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div  class="col-md-12">
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="islem.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Resim</label>
                                        <input name="resim"  type="file" class="form-control"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Başlık</label>
                                        <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Sıra</label>
                                        <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Anahtar Kelime</label>
                                        <input name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Açıklama</label>
                                        <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button name="blogkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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