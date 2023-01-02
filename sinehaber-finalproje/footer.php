
<footer id="footer">

    <div class="footer-top ">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>SineHaber</h3>
                    <p>
                        <strong>Adres:</strong><?php echo $ayarcek['ayar_adres'] ?><br>
                        <strong>Phone:</strong><?php echo $ayarcek['ayar_telefon'] ?><br>
                        <strong>Email:</strong><?php echo $ayarcek['ayar_email'] ?><br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Hızlı Erişim</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Ana sayfa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="blog.php">Haberler</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Hızlı Erişim</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="iletişim.php">iletişim</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="Sanat.php">Tüm sanatcılar</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <div class="col col-md-6 footer-newsletter">
                            <h4 style="color:white">E-bültene abone olun</h4>
                            <p style="color:white">E-bültene abone olarak anında içeriklerden haberdar olabilirsiniz.</p>
                        </div>
                        <div class=" footer-newsletter">
                        <form action="admin/islem.php" method="post">
                            <input placeholder="Lütfen email giriniz." type="email" name="email">
                            <input name="abone" type="submit" value="Abone Ol">
                        </form>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="container d-md-flex py-4">


        <div class="mr-md-auto text-center text-md-left">
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="<?php echo $ayarcek['ayar_twiter'] ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="<?php echo $ayarcek['ayar_facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="<?php echo $ayarcek['ayar_instangram'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="<?php echo $ayarcek['ayar_youtube'] ?>" class="google-plus"><i class="bx bxl-youtube"></i></a>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>