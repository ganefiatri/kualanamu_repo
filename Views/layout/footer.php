<!-- ======= Footer ======= -->
<footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3 class="nama_perusahaan"><?= lang("Lang.namaPerusahaan"); ?></h3>
                    <p class="tentang_perusahaan">
                        <?= lang("Lang.sekilasPerusahaan"); ?>
                    </p>
                    <!-- <div class="social-links mt-3">
                        <a href="#" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" target="_blank" class="youtube"><i class='bx bxl-youtube'></i></a>
                        <a href="#" target="_blank" class="tiktok"><i class='bx bxl-tiktok'></i></a>
                    </div> -->
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4><?= lang("Lang.footerLink"); ?></h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>"><?= lang('Lang.menuHome') ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>flightinformation"><?= lang('Lang.menuFlightInformation') ?></a></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>airportguidelines"><?= lang('Lang.menuTransportation') ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>businessgeneralaviation"><?= lang('Lang.menuMaps') ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>shopdine"><?= lang('Lang.menuShopDine') ?> </a></a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <!-- <h4>Our Services</h4> -->
                    <h4>&ensp;</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>corporateaboutus"><?= lang("Lang.corporateAboutAs"); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>corporatecareers"><?= lang("Lang.corporateKarir"); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>passengerguide/detailflightdepartureguide?id=awqpyqEU5FB3elLE6%2F63ag%3D%3D"><?= lang("Lang.menuFasilitasBU"); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>corporateaboutus"><?= lang("Lang.menuContactAs"); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>news"><?= lang("Lang.menuNews"); ?></a></li>
                        <li class="d-none"> <i class="bx bx-chevron-right"></i> <a href="<?= site_url(); ?>contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact d-none">
                    <h4>Contact Us</h4>
                    <p class="alamat_perusahaan">
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                    </p>
                    <p>
                        <strong>Phone :</strong> <span class="no_hp_perusahaan"> +1 5589 55488 55 </span> <br>
                        <strong>Email :</strong> <span class="email_perusahaan"> info@example.com </span> <br>
                    </p>

                </div>



            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
            Designed by <a href="https://avi.id/">AVI</a>
        </div>
    </div>
</footer>