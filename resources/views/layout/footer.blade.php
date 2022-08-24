<?php
use Illuminate\Support\Facades\DB;

$site = DB::table('konfigurasi')->first();
// var_dump($end);
// dd($start);
?>
<!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3><?php echo $site->namaweb; ?></h3>
                        <div class="pb-3">
                            <?php echo $site->deskripsi; ?>
                        </div>
                        <div class="social-links mt-3">
                            <a href="<?php echo $site->facebook; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="<?php echo $site->instagram; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="<?php echo $site->twitter; ?>" class="google-plus"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/') }}">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('produk') }}">Lihat Produk</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('pemesanan') }}">Pemesanan Produk</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('pembayaran') }}">Cara Pembayaran</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('kontak') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Pemesanan</h4>
                    <div class="pb-3">
                        <strong><?php echo strtoupper($site->namaweb); ?></strong>
                        <br><?php echo nl2br($site->alamat); ?>
                        <br>Email: <?php echo $site->email; ?>
                        <br>Telepon: <?php echo $site->telepon; ?>
                        <br>HP <i class="fab fa-whatsapp"></i>: <?php echo $site->hp; ?>
                        <br>Website: <?php echo $site->website; ?>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span><?php echo $site->namaweb; ?></span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script>
    $(".tanggal").datepicker({
        inline: true,
        changeYear: true,
        changeMonth: true,
        dateFormat: "dd-mm-yy",
        datehRange: "05:09",
        yearRange: "2022:2026"
    });

    $('.owl-carousel').owlCarousel({
        items: 1,
        autoHeight: true,
        loop: false,
        center: true,
        margin: 5,
        callbacks: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash'
    });
</script>
<script src="{{ asset('public/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/template/assets/vendor/aos/aos.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('public/template/assets/js/main.js') }}"></script>

<script ript type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</body>

</html>