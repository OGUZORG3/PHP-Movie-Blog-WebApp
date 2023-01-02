<style type="text/css">
  .yazi {
    color: white;
  }


</style>
<aside style="background-color:darkslateblue;" class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">SineHaber</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
          <a href="#" class="d-block yazi">Kullanıcı:</a>
        <a href="#" class="d-block"><?PHP echo $_SESSION['giris'] ?></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php" class="nav-link active">
            <i class="fas fa-indent"></i>
            <p class="yazi">
              Anasayfa
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="slider.php" class="nav-link ">
            <i id="beyazyazi" class="fas fa-photo-video"></i>
            <p class="yazi">
              Slider
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="icerik.php" class="nav-link ">
              <i id="beyazyazi" class="fas fa-regular fa-film"></i>
            <p class="yazi">
              İcerik
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="gununfilmi.php" class="nav-link ">
            <i id="beyazyazi" class=" fas fa-duotone fa-film"></i>
            <p class="yazi">
              günün filmi
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active ">
            <i id="beyazyazi" class="fas fa-users-cog"></i>
            <p class="yazi">
              Ayarlar
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="ayarlar.php?sayfa=ayarlar" class="nav-link ">
                <i id="beyazyazi" class="fas fa-cogs"></i>
                <p class="yazi">Genel Ayarlar</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="ayarlar.php?sayfa=sosyalmedya" class="nav-link">
                <i id="beyazyazi" class="fab fa-facebook"></i>
                <p class="yazi">Sosyal Medya</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="blog.php" class="nav-link">
            <i id="beyazyazi" class="fa fa-comment"></i>
            <p class="yazi">
              Haber yazıları
            </p>
          </a>
        </li>
        <li class="nav-item">
              <a href="abone.php" class="nav-link">
                  <i id="beyazyazi" class="fa fa-comment"></i>
                  <p class="yazi">
                      Aboneler
                  </p>
              </a>
          </li>

        <li class="nav-item">
          <a href="Sanat.php" class="nav-link">
            <i id="beyazyazi" class="fas fa-images"></i>
            <p class="yazi">
              Sanatcılar
            </p>
          </a>
        </li>
          <li class="nav-item">
              <a href="mesajlar.php" class="nav-link">
                  <i id="beyazyazi" class="fas fa-images"></i>
                  <p class="yazi">
                      Mesajlar
                  </p>
              </a>
          </li>

        <li class="nav-item">
          <a href="cikis.php" class="nav-link">
            <i id="beyazyazi" class="fas fa-sign-out-alt"></i>
            <p class="yazi">
              Çıkış yap
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>