<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6 footer-info">
          <img src="<?= base_url('asets/images/logo.png'); ?>" alt="TheEvenet">
          <p>Selamat datang di Website IT COMPETITION FIKOM Universitas Methodist Indonesia. Sebuah Kompetisi yang bertujuan untuk mengembangkan minat dan bakat mahasiswa dibidang Teknologi</p>
        </div>

        <div class="col-lg-6 col-md-6 footer-contact">
          <h4><i class="fas fa-id-card-alt mb-1"></i> Informasi Dan Kontak</h4>
          <p>
            Jl. Hangtuah No. 8<br>
            Medan, <br>
            <strong>Phone:</strong> 08972966375<br>
            <strong>Email:</strong> itcompetitionumi@gmail.com<br>
          </p>

          <div class="social-links">
            <a href="https://www.facebook.com/fikom.univmethodist" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/focs_umi/?hl=id" class="instagram"><i class="fab fa-instagram"></i></a>

          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; <strong>UMI KOMPETISI</strong> <?= date('Y'); ?>
    </div>
  </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?= base_url('asets/vendor/'); ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/jquery/jquery-migrate.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/superfish/hoverIntent.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/superfish/superfish.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/venobox/venobox.min.js"></script>
<script src="<?= base_url('asets/vendor/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript File -->
<script src="<?= base_url('asets/vendor/'); ?>contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="<?= base_url('asets/vendor/'); ?>js/main.js"></script>


<script>
  $(document).ready(function() {

    $("select[id=combo2]").on("change", function() {
      if ($(this).val() === "pilih") {
        $("div[id=kode]").hide();
      } else {
        $("div[id=kode]").show();
      }
    });
    $("select[id=combo2]").trigger("change");


  });
</script>

<script src="<?= base_url('assets/dist/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/myscript.js'); ?>"></script>

</body>

</html>