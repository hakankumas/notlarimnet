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
          <li><a class="nav-link scrollto active" href="<?= base_url()?>">Ana Sayfa</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url()?>">Hizmetlerimiz</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('page-register-user')?>">Kayıt Ol</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('page-login-user')?>" style="background-color:green;">Giriş Yap</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  
  <section id="hero" class="d-flex align-items-center" style="translate: 0px -100px">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row icon-boxes justify-content-center">
        <div class="col-6 p-5 border rounded" style="box-shadow: 1px 1px 10px 5px silver;">
          <h3 class="text-center">Kayıt İşlemleri</h3>
          <form action="<?= base_url('insert-user') ?>" method="post">
            <div class="mt-4">
              <label class="form-label">Kullanıcı Adı</label>
              <input type="text" class="form-control" name="username" required autofocus/>
            </div>
            <div class="mt-4">
              <label class="form-label">Şifre</label>
              <input type="text" class="form-control" name="password" required/>
            </div>
            <div class="mt-4 text-center">
              <button type="submit" class="btn btn-outline-primary">Kayıt Ol</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" style="background-color: #eeee">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://www.linkedin.com/in/hakankumas">Hakan KUMAŞ</a>
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