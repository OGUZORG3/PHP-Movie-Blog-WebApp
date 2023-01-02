<?php require_once 'header.php';
require_once 'sidebar.php';
$iceriksor = $baglanti->prepare("SELECT * FROM icerikler ");
$iceriksor->execute(array());




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
                            <h3 class="card-title">İcerik Kontrol</h3>
                            <button  style="float: right ; margin-right: ;" class="bg bg-info"><a href="ekle.php?sayfa=icerik">İcerik Ekle</a></button>


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
                                <table class="table table-hover text-wrap ">
                                    <thead>
                                        <tr>
                                            <th>İcerik İD</th>
                                            <th>İcerik İsim</th>
                                            <th>İcerik Tür</th>
                                            <th>İcerik Cins</th>
                                            <th>İcerik Aciklama </th>
                                            <th>İcerik Puan</th>
                                            <th>İcerik Resim</th>
                                            <th>icerik url</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($icerikcek = $iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td><?php echo $icerikcek['icerik_id'] ?></td>
                                                <td><?php echo $icerikcek['icerik_isim'] ?></td>
                                                <td><?php echo $icerikcek['icerik_turu'] ?></td>
                                                <td><?php echo $icerikcek['icerik_cinsi'] ?></td>
                                                <td><div style=" max-height: 200px; max-width: 200px; overflow: hidden"><?php echo $icerikcek['icerik_aciklama'] ?></div></td>
                                                <td><?php echo $icerikcek['icerik_puan'] ?></td>
                                                <td><img style="width: 200px;height: 200px;object-fit: scale-down;" src="resimler/afisler/<?php echo $icerikcek['icerik_resim'] ?>" alt=""></td>
                                                <td><div style="max-height: 200px; max-width: 200px; overflow: hidden"><?php echo $icerikcek['icerik_url'] ?></div></td>
                                                <td><button type="submit"  style="float: right ; margin-right: ;" class="bg bg-primary"><a href="duzenle.php?sayfa=icerik&id=<?php echo $icerikcek['icerik_id'] ?>">Düzenle</a></button> </td>
                                                <td>
                                                    <form action="islem.php" method="post">
                                                    <button type="submit" name="iceriksil" style="float: right ; margin-right: ;" class="bg bg-danger">Sil</button>
                                                    <input name="id" value="<?php echo $icerikcek['icerik_id'] ?>" type="hidden">
                                                    <input type="hidden" name="eskiresim" value="<?php echo $icerikcek['icerik_resim'] ?>">
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