<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="<?= base_url('asets/'); ?>images/methodist.gif" rel="icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('asets/vendor/'); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('asets/vendor/'); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('asets/vendor/'); ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('asets/vendor/'); ?>lib/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('asets/vendor/'); ?>lib/owlcarousel/asets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('asets/vendor/'); ?>css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('asets/css/style.css'); ?>">
  <style>
    @media (max-width: 767.98px) {
      .kecil {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>

  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left angkat">
        <a href="<?= base_url('home') ?>#intro" class="scrollto logo text-white"><img src="<?= base_url('asets/'); ?>images/methodist.gif" alt="fikom-umi">IT COMPETITION FIKOM UMI</a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">

          <li class="menu-active"><a href="<?= base_url('home/'); ?>#intro">Home</a></li>
          <li><a href="<?= base_url('home/'); ?>#about">Tentang</a></li>
          <li><a href="<?= base_url('home/'); ?>#speakers">Kompetisi</a></li>
          <li><a href="<?= base_url('home/'); ?>#supporters">Sponsor</a></li>
          <li><a href="<?= base_url('home/'); ?>#contact">Kontak</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <main id="main" class="main-page">

    <!-- <section id="speakers-details" class="wow fadeIn"> -->
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md mt-5">
          <h3 class="judulnya text-center">Daftar kompetisi yang anda inginkan</h3>
        </div>
      </div>

      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row">
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
          </div>
        </div>
      <?php endif; ?>

      <div class="row mt-2">
        <div class="col-md-3">
          <div class="card cardxx kecil">
            <img src="<?= base_url('asets/images/mobile_legend.jpg'); ?>" class="card-img-top" alt="mobile legend" height="200">
            <div class="card-body">
              <h5 class="card-title text-center">Mobile Legend</h5>
              <a href="<?= base_url('daftar/mobile_legend') ?>" class="btn btn-primary w-100" target="_blank">Daftar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card cardxx kecil">
            <img src="<?= base_url('asets/images/pes.jpg'); ?>" class="card-img-top" alt="PES" height="200">
            <div class="card-body">
              <h5 class="card-title text-center">PES 2017</h5>
              <a href="<?= base_url('daftar/pes') ?>" class="btn btn-primary w-100" target="_blank">Daftar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card cardxx kecil">
            <img src="<?= base_url('asets/images/film.jpg'); ?>" class="card-img-top" alt="PES" height="200">
            <div class="card-body">
              <h5 class="card-title text-center">Short Movie</h5>
              <a href="<?= base_url('daftar/short_movie') ?>" class="btn btn-primary w-100" target="_blank">Daftar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card cardxx kecil">
            <img src="<?= base_url('asets/images/fotografi.jpg'); ?>" class="card-img-top" alt="PES" height="200">
            <div class="card-body">
              <h5 class="card-title text-center">Lomba Fotografi</h5>
              <a href="<?= base_url('daftar/fotografi') ?>" class="btn btn-primary w-100" target="_blank">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>