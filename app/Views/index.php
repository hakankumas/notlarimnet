<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>notlarim.net</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="<?= base_url() ?>"><i><strong>notlarim.net</strong></i></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Ana Sayfa</a></li>
          <li><a class="nav-link scrollto" href="#counts">Hizmetlerimiz</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('page-register-user')?>">Kayıt Ol</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('page-login-user')?>" style="background-color:green;">Giriş Yap</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>notlarim.net!</h1>
          <h2>Sanal Not Defteriniz!</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="<?= base_url('page-login-user')?>" class="btn-get-started scrollto" >Not Al</a>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box text-center">
            <div class="icon"><i class="ri-file-add-line"></i></div>
            <h4 class="title"><a href="">Yeni Bir Not Oluştur</a></h4>
            <p class="description">Limit olmaksızın yeni notlar oluşturabilirsin.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box text-center">
            <div class="icon"><i class="ri-file-edit-line"></i></div>
            <h4 class="title"><a href="">Dilediğin Gibi Düzenle</a></h4>
            <p class="description">Notlarını her türlü şekilde düzenleyebilirsin.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box text-center">
            <div class="icon"><i class="ri-cloud-line"></i></div>
            <h4 class="title"><a href="">Her Yerden Eriş</a></h4>
            <p class="description">Bulut altyapısı sayesinde herhangi bir platforma bağlı kalmadan her yerden notlarına erişebilirsin.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <main id="main">
    <section id="counts" class="counts section-bg" style="background-color: white;">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-6 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kullanıcı</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Oluşturulan Not</p>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2" class="purecounter"></span>
              <p>Years of </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Awards</p> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer" style="background-color: #eeee">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://www.linkedin.com/in/hakankumas" target="_blank">Hakan KUMAŞ</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.linkedin.com/in/hakankumas" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://github.com/hakankumas" target="_blank" class="github"><i class="bx bxl-github"></i></a>
        <a href="https://www.youtube.com/@hakan.developer" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>