<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>notlarim.net</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- <style> * { border: 1px solid red; } </style> -->
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="<?= base_url('page-home-user') ?>"><i>notlarim.net</i></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Ana Sayfa</a></li>
                    <li class="dropdown"><a href="#"><span>İşlemler</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Bilgilerim</a></li>
                            <li><a href="#">Şifre</a></li>
                            <li><a href="<?= base_url('logout-user') ?>">Çıkış Yap</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1 style="font-size:40px;"><i>Merhaba
                            <?= isset($username) ? "@".$username : null ?>!
                        </i></h1>
                    <h2>Unutmadan notunu al!</h2>
                </div>
            </div>
            <div class="text-center">

                <!-- Button of Modal -->
                <button type="button" class="btn btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#create_note">
                    Yeni Bir Not Oluştur!
                </button>

                <!-- Modal of Create New Note -->
                <div class="modal fade" id="create_note" tabindex="-1" aria-labelledby="create_noteLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:whitesmoke">
                                <h5 class="modal-title" id="create_noteLabel"><i><b>notlarim.net</b></i></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5 pt-4">
                                <h3 class="text-center pb-3">Yeni Bir Not Oluştur!</h3>
                                <form action="<?= base_url('create-note') ?>" method="post">
                                    <div class="mt-4">
                                        <input type="text" class="form-control" name="note_title" placeholder="Başlık" required autofocus />
                                    </div>
                                    <div class="mt-4">
                                        <textarea class="form-control" name="note_content" rows="8" placeholder="İçerik" required></textarea>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end">
                                        <button type="button" class="col-2 btn btn-danger me-3" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="col-2 btn btn-success">Kaydet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <main id="main">
        <!-- <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2" class="purecounter"></span>
              <p>Years of experience</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 style="margin-bottom: -10px;">NOTLARIM</h2>
                </div>
                <div class="section-title">
                    <button 
                        class="btn btn-lg btn-outline-dark border-dark ms-1" 
                        data-bs-toggle="modal"
                        data-bs-target="#hidden_note" 
                        style="box-shadow: 1px 1px 1px 1px black;"
                        title="Gizli notlarımı göster."
                        ><i class="fa-solid fa-eye-slash"></i>
                    </button>
                </div>
                <!-- Modal of Hidden -->
                <div class="modal fade" id="hidden_note" tabindex="-1" aria-labelledby="hidden_noteLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:whitesmoke">
                                <h5 class="modal-title" id="hidden_noteLabel"><i><b>notlarim.net</b></i></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5 pt-4">
                                <h1 class="text-center pb-3">Gizlenmiş Notlar</h1>
                                <table class="table table-responsive table-hover table-bordered">
                                    <tr>
                                        <th class="ps-3" style="width: 40%;">Başlık</th>
                                        <th class="ps-3" style="width: 40%;">İçerik</th>
                                        <th style="width: 10%;" class="bg-primary text-white text-center">Göster</th>
                                        <th style="width: 10%;" class="bg-danger text-white text-center">Sil</th>
                                    </tr>
                                    <?php foreach ($hide_notes as $h_note): ?>
                                        <tr style="vertical-align: middle;">
                                            <td class="ps-3 pe-3" title="<?= $h_note["note_title"]?>"><?= $h_note["note_title"]?></td>
                                            <td class="ps-3 pe-3" title="<?= $h_note["note_content"]?>"><?= $h_note["note_content"]?></td>
                                            <td><a class="btn btn-outline-primary w-100 h-100" title="Göster" href="<?= base_url("hidden-note/").$h_note["note_id"]?>"><i class="fa-solid fa-eye"></i></a></td>
                                            <td><a class="btn btn-outline-danger w-100 h-100" title="Sil" href="<?= base_url("hiddenDelete-note/").$h_note["note_id"]?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($notes as $note): ?>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="bg-warning text-primary rounded p-5 m-4" style="height:400px;
                                                                        box-shadow:    1px 5px 5px 5px silver;
                                                                        overflow-wrap: break-word; 
                                                                        overflow-x:    hidden; 
                                                                        overflow-y:    hidden; ">
                                <div class="text-end mb-4" style="margin-top: -40px; margin-right: -40px;">
                                    <button 
                                        class="btn btn-lg btn-danger border-dark ms-1" 
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete_note<?= $note["note_id"] ?>" 
                                        style="box-shadow: 1px 1px 1px 1px black;">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <button class="btn btn-lg btn-primary border-dark ms-1" 
                                        data-bs-toggle="modal"
                                        data-bs-target="#hide_note<?= $note["note_id"] ?>" 
                                        style="box-shadow: 1px 1px 1px 1px black;">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </button>
                                    <button class="btn btn-lg btn-success border-dark ms-1" 
                                        data-bs-toggle="modal"
                                        data-bs-target="#update_note<?= $note["note_id"] ?>" 
                                        style="box-shadow: 1px 1px 1px 1px black;">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </div>
                                
                                <p class="text-end" style="translate: 30px;"><?= $note["note_updateDate"]; ?></p>
                                <h4 id="q_note_title"><?= $note["note_title"]; ?></h4>
                                <p id="q_note_content"><?= $note["note_content"]; ?></p>
                            </div>
                        </div>
                        
                        <!-- Modal of Update -->
                        <div class="modal fade" id="update_note<?= $note["note_id"] ?>" tabindex="-1" aria-labelledby="update_noteLabel<?= $note["note_id"] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:whitesmoke">
                                        <h5 class="modal-title" id="update_noteLabel<?= $note["note_id"] ?>"><i><b>notlarim.net</b></i></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-4">
                                        <h3 class="text-center pb-3">Notunuzu Düzenleyin!</h3>
                                        <form action="<?= base_url('update-note') ?>" method="post">
                                            <input hidden name="note_id" value="<?= $note["note_id"] ?>"/>
                                            <div>
                                                <label class="form-label mb-1">Başlık:</label>
                                                <input type="text" class="form-control" name="note_title" value="<?= $note["note_title"]; ?>" required autofocus />
                                            </div>
                                            <div class="mt-4">
                                                <label class="form-label mb-1">İçerik:</label>
                                                <textarea class="form-control" name="note_content" rows="8" required><?= $note["note_content"]; ?></textarea>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-end">
                                                <button type="button" class="col-2 btn btn-secondary me-3" data-bs-dismiss="modal">İptal</button>
                                                <button type="submit" class="col-2 btn btn-success">Güncelle</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal of Hide -->
                        <div class="modal fade" id="hide_note<?= $note["note_id"] ?>" tabindex="-1" aria-labelledby="hide_noteLabel<?= $note["note_id"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:whitesmoke">
                                        <h5 class="modal-title" id="hide_noteLabel<?= $note["note_id"] ?>"><i><b>notlarim.net</b></i></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="p-3 text-center"><b>Bu notu gizlemek istediğinizden emin misiniz?</b></p>
                                        <form action="<?= base_url('hide-note') ?>" method="post">
                                            <input hidden name="note_id" value="<?= $note["note_id"] ?>"/>
                                            <div class="mt-4 d-flex justify-content-end">
                                                <button type="button" class="col-2 btn btn-secondary me-3" data-bs-dismiss="modal">İptal</button>
                                                <button type="submit" class="col-2 btn btn-primary">Gizle</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal of Delete -->
                        <div class="modal fade" id="delete_note<?= $note["note_id"] ?>" tabindex="-1" aria-labelledby="delete_noteLabel<?= $note["note_id"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:whitesmoke">
                                        <h5 class="modal-title" id="delete_noteLabel<?= $note["note_id"] ?>"><i><b>notlarim.net</b></i></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="p-3 text-center"><b>Bu notu silmek istediğinizden emin misiniz?</b></p>
                                        <form action="<?= base_url('delete-note') ?>" method="post">
                                            <input hidden name="note_id" value="<?= $note["note_id"] ?>"/>
                                            <div class="mt-4 d-flex justify-content-end">
                                                <button type="button" class="col-2 btn btn-secondary me-3" data-bs-dismiss="modal">İptal</button>
                                                <button type="submit" class="col-2 btn btn-danger">Sil</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>
    </section> -->
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
                <a href="https://www.linkedin.com/in/hakankumas" target="_blank" class="linkedin"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/hakankumas" target="_blank" class="github"><i
                        class="fa-brands fa-github"></i></a>
                <a href="https://www.youtube.com/@hakan.developer" target="_blank" class="youtube"><i
                        class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
    <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/js/line_hidden.js') ?>"></script>
</body>

</html>