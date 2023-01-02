<?php
require_once "header.php";
require_once  "sidebar.php";
$mesajsor=$baglanti->prepare("SELECT * FROM mesaslar where mesas_id=:mesas_id");
$mesajsor->execute(array(
    'mesas_id'=>$_GET['id']
));
$mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC);




?>
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div  class="col-md-12">
                        <div class="card card-primary ">
                            <div class="m-5">
                                <section class="badge-dark w-25" style="border-radius: 5px;"><h4><?php echo $mesajcek['kullanici_isim']?>'den gelen mesajınız</h4></section>
                                <div class="badge-info " style="border-radius: 5px; width: 10%"> <h5><?php echo $mesajcek['konu']?></h5> </div>
                                <div style="border: 2px solid black;border-radius: 15px; padding: 5px;"><p><?php echo $mesajcek['mesas_icerik']?></p></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
