<?php require_once 'header.php';
require_once 'sidebar.php';

$sanatsor = $baglanti->prepare("SELECT * FROM galeri ");
$sanatsor->execute(array());



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
                            <h3 class="card-title">Actör,sanatcı Ekle</h3>
                            <button  style="float: right ; margin-right: ;" class="bg bg-info"><a href="ekle.php?sayfa=galeri">Ekle</a></button>


                        </div>
                        <div class="card">
                            <!--  <div class="card-header">
                                <h3 class="card-title">İcerikler</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>İcerik İD</th>
                                            <th>İcerik İsim</th>
                                            <th>İcerik Açıklama</th>
                                            <th>Meslek</th>
                                            <th>İcerik Resim</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($sanatcek = $sanatsor->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td><?php echo $sanatcek['galeri_id'] ?></td>
                                                <td><?php echo $sanatcek['galeri_isim'] ?></td>
                                                <td><div style=" max-height: 200px; max-width: 200px; overflow: hidden"><?php echo $sanatcek['galeri_aciklama'] ?></div></td>
                                                <td><?php echo $sanatcek['galeri_meslek'] ?></td>
                                                <td><img style="width: 200px;height: 200px;object-fit: scale-down;" src="resimler/galeri/<?php echo $sanatcek['galeri_resim'] ?>" alt=""></td>
                                                <td><button type="submit"  style="float: right ; margin-right: ;" class="bg bg-primary"><a href="duzenle.php?sayfa=sanat&id=<?php echo $sanatcek['galeri_id'] ?>">Düzenle</a></button> </td>
                                                <td>
                                                    <form action="islem.php" method="post">
                                                    <button type="submit" name="galerisil" style="float: right ; margin-right: ;" class="bg bg-danger">Sil</button>
                                                    <input name="id" value="<?php echo $sanatcek['galeri_id'] ?>" type="hidden">
                                                    <input type="hidden" name="eskiresim" value="<?php echo $sanatcek['galeri_resim'] ?>">
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php require_once 'footer.php'; ?>