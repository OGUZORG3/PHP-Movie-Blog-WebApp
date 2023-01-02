<?php require_once 'header.php'; 
require_once 'sidebar.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Aboneler</h3><br>
          <?php if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>

<?php }  ?>
          <div class="card-tools">
             <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">

          <table class="table table-striped projects">
              <thead>

                  <tr>
                      <th >Kullanıcı adı</th>
                      <th >Email</th>
                      <th >konu</th>
                      <th >mesaj</th>
                      <th >sil</th>

                         
                  </tr>
              </thead>
              <tbody>

                <?php

$mesassor=$baglanti->prepare("SELECT * FROM mesaslar   order by mesas_id ASC");
$mesassor->execute(array());
while ($mesascek=$mesassor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
                  <tr>
                      <td>
                          <?php echo $mesascek['kullanici_isim'] ?>
                      </td>
                   
                       <td>
                          <?php echo $mesascek['kullanici_email'] ?>
                      </td>
                      <td>
                          <?php echo $mesascek['konu'] ?>
                      </td>

                      <td>
                              <a href=mesaj.php?id=<?php echo $mesascek['mesas_id'] ?>"><button class="bg-primary border-0" style="border-radius: 15px">mesaj</button></a>
                      </td>
                        <td>
                            <form action="islem.php" method="post">
                                <button  name="mesajsil" type="submit" class="btn btn-danger">Sil</button>
                                <input name="id" value="<?php echo $mesascek['mesas_id'] ?>" type="hidden">
                            </form>
                        </td>
            
                  </tr>
                  
                <?php } ?>
                  
              
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once 'footer.php'; ?>