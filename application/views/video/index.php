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
          <h3 class="judulnya text-center">Daftar kompetisi Short Movie</h3>
        </div>
      </div>

      <div class="container">
        <div class="row mt-2">
          <div class="col-md-2"></div>
          <div class="col-md">
            <form action="" method="post">
              <div class="form-group">
                <label for="nama_ketua">Nama Ketua Team</label>
                <input type="text" class="form-control" name="nama_ketua" id="nama_ketua" value="<?= set_value('nama_ketua') ?>" placeholder="Nama Ketua Team...">
                <?= form_error('nama_ketua', '<p class="text-danger">', '</p>'); ?>
              </div>
              <div class="form-group">
                <label for="nama_tim">Nama nama Team</label>
                <textarea name="nama_tim" id="nama_tim" class="form-control" rows="6" placeholder="1.
2.
3.
4.
5."><?= set_value('nama_tim') ?></textarea>
                <?= form_error('nama_tim', '<p class="text-danger">', '</p>'); ?>
              </div>
              <div class="form-group">
                <label for="perguruan">Perguruan / Sekolah</label>
                <input type="text" class="form-control" name="perguruan" id="perguruan" value="<?= set_value('perguruan') ?>" placeholder="Perguruan / Sekolah....">
                <?= form_error('perguruan', '<p class="text-danger">', '</p>'); ?>
              </div>
              <div class="form-group">
                <label for="phone">Nomor Hp</label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?= set_value('phone') ?>" placeholder="Nomor Whatsapp....">
                <?= form_error('phone', '<p class="text-danger">', '</p>'); ?>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="Email....">
                <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
              </div>
              <button type="submit" name="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Submit</button>
              <button type="reset" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i> Reset</button>
              <div class="row mt-2">
                <div class="col-md">
                  <div class="alert alert-warning text-left" role="alert">
                    Setelah melakukan pendaftaran, silahkan melakukan transfer sebesar Rp.150.000,- <br>
                    Ke rekening BRI 1332-01-001-002-53-8 an MITHA FEBRIANA Sitanggang <br>
                    Dan mengirim foto STRUK bukti transfer ke panitia berikut, sebagai bukti telah melakukan pendaftaran <br>
                    1.082363066974 (An Crissanti) <br>
                    2.08972966375 (An Febri) <br>
                    Kirim foto struk bukti transfer dengan format (nama),(Video) ke salah satu nomor panitia diatas<br>
                    contoh : foto (Andi),(Video)
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </main>