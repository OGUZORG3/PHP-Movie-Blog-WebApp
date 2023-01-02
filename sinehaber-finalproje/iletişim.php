<?php require_once("header.php") ?>
<br><br><br>
<main id="main">



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">


    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Adres:</h4>
              <p>
                <?php echo $ayarcek['ayar_adres'] ?>
              </p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>
                <?php echo $ayarcek['ayar_email'] ?>
              </p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Telefon numaramız:</h4>
              <p>
                <?php echo $ayarcek['ayar_telefon'] ?>
              </p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="admin/islem.php" method="post">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="isim" class="form-control" id="name" placeholder="Adınız" data-rule="minlen:3"
                  data-msg="lutfen minimum 3 karakter girin" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="email" data-rule="email"
                  data-msg="doğrun bir email adresi girin" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="konu" id="subject" placeholder="Konu"
                data-rule="minlen:3" data-msg="lütfen minimum 3 karakter girin" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="mesass" rows="5" data-rule="required" data-msg="Mesajınızı giriniz"
                placeholder="Mesajınız"></textarea>
              <div class="validate"></div>
            </div>
            <div class="text-center"><button name="mesas" type="submit">Gönder</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.5900440357373!2d29.89536322188713!3d39.478589238354694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c946c124460f71%3A0x292659bf8d0625b4!2sK%C3%BCtahya%20Dumlup%C4%B1nar%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1672294368949!5m2!1str!2str"
      width="600" height="450" style="border:100%;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>

  </div>
</main><!-- End #main -->

<?php require_once 'footer.php'; ?>