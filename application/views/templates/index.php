<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">Universitas Methodist Indonesia<br><span class="small">IT Competition FIKOM UMI (Season II)</span> </h1>
    <a href="#about" class="about-btn scrollto">Tentang Kompetisi</a>
  </div>
</section>

<main id="main">
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="text-center"><i class='fas fa-question-circle'></i> Tentang</h3>
          <p class="text-center">IT COMPETITION FIKOM UMI Merupakan Salah satu Kegiatan yang di selenggarakan BEM FIKOM UMI kepada Mahasiswa, agar mahasiswa dapat mengembangkan minat dan bakatnya baik di bidang Akademik maupun E-sports. IT COMPETITION ini berusaha mengembangkan minat berkembang mahasiswa di bidang Teknologi</p>
        </div>
        <div class="col-md-6">
          <h3 class="text-center"><i class='fas fa-university'></i> Tempat Dan Waktu Pelaksanaan</h3>
          <p class="text-center">Aula Universitas Methodist Indonesia Lt.3, Jl. Hang tuah no. 8 Medan</p>
          <p class="text-center">17 April 2020 - 18 April 2020</p>
        </div>
      </div>
    </div>
  </section>


  <section id="speakers" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h1 class="judulnya text-center">Kompetisi</h1>
        <p>Berikut ini adalah kompetisi yang diperlombakan</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="speaker">
            <img src="<?= base_url('asets/images/fotografi.jpg'); ?>" alt="Lomba fotografi" height="400px">
            <div class="details">
              <h3><a href="<?= base_url('home/panduanlombafotografi'); ?>"> Klik Disini </a></h3>
              <p>Klik Disini untuk melihat lomba Fotografi</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="speaker">
            <img src="<?= base_url('asets/images/film.jpg'); ?>" alt="Lomba edit video" height="400px">
            <div class="details">
              <h3><a href="<?= base_url('home/panduanlombavideo'); ?>"> Klik Disini </a></h3>
              <p>Klik Disini untuk melihat lomba Kompetisi Film Pendek (Short Movie)</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="speaker">
            <img src="<?= base_url('asets/images/mobille.jpg'); ?>" alt="Lomba Mobile Legend" height="400px">
            <div class="details">
              <h3><a href="<?= base_url('home/panduanML'); ?>"> Klik Disini </a></h3>
              <p>Klik Disini untuk melihat lomba Mobile Legends</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="speaker">
            <img src="<?= base_url('asets/images/pes.jpg'); ?>" alt="Lomba edit video" height="400px">
            <div class="details">
              <h3><a href="<?= base_url('home/panduanPES'); ?>"> Klik Disini </a></h3>
              <p>Klik Disini untuk melihat lomba PES 2017</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="supporters" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h1 class="judulnya text-center">Sponsor</h1>
      </div>
      <div class="row">
        <div class="col-md">
          <img src="<?= base_url('assets/img/telkomsel.jpg') ?>" class="img-fluid" height="400">
        </div>
        <div class="col-md">
          <img src="<?= base_url('assets/img/digi.png') ?>" class="img-fluid" height="400">
        </div>
      </div>

    </div>

  </section>


  <section id="contact" class="section-with-bg wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h1 class="judulnya text-center">Kontak</h1>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Alamat</h3>
            <address><i class="fas fa-map-marker-alt"></i> Jl. Hangtuah No. 8 Medan</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>WhastApp</h3>
            <p><i class="fab fa-whatsapp"></i> 08972966375</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><i class="fas fa-envelope"></i> itcompetitionumi@gmail.com</p>
          </div>
        </div>

      </div>

      <div class="form">
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?= set_value('name') ?>">
              <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?= set_value('email') ?>">
              <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?= set_value('subject') ?>">
            <?= form_error('subject', '<p class="text-danger">', '</p>'); ?>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5"><?= set_value('message') ?></textarea>
            <?= form_error('message', '<p class="text-danger">', '</p>'); ?>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row">
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
          </div>
        </div>
      <?php endif; ?>


    </div>
  </section>

</main>