<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Corporate</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">About Us</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>About Us Kualanamu International Airport</h2>
            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    403 Forbidden
                </div>
            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "CorporateAboutUs": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>"><?= lang("Lang.menuHome"); ?></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"><?= lang("Lang.corporate"); ?></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"><?= lang("Lang.corporateAboutAs"); ?></a></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2><?= lang("Lang.corporateAboutAs"); ?></a> Kualanamu International Airport</h2>
            </div>
        </section>

        <section id="faq" class="faq section-bg ">


            <div class="faq-list">
                <ul>
                    <!-- Sejarah -->
                    <li data-aos="fade-up" data-aos-delay="100">
                        <!-- <i class="bx bx-help-circle icon-help"></i> -->
                        <!-- <i class="bi bi-book"></i> -->
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse " data-bs-target="#faq-list-1"> <?= lang("Lang.corporateTabSejarah"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse pt-5" data-bs-parent=".faq-list ">
                            <hr class="mt-0">
                            <div class="row">
                                <div class="col-md-7" data-aos="fade-up" data-aos-delay="150">
                                    <blockquote class="blockquote">
                                        <p><?= lang("Lang.corporateTitleSejarah"); ?></p>
                                    </blockquote>

                                    <?= lang("Lang.corporateSejarah"); ?>

                                </div>
                                <div class="col-md-5" data-aos="fade-up" data-aos-delay="250">
                                    <img src="<?= site_url(); ?>assets/img/img-sejarah.jpg" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </li>

                    <!-- Award -->
                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-2"> <?= lang("Lang.corporatePenghargaan"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse pt-5" data-bs-parent=".faq-list">
                            <hr class="mt-0">

                            <div class="row content mt-4">
                                <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                                    <img src="<?= site_url(); ?>assets/img/penghargaan/award-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                                    <h3><?= lang("Lang.awardTitle1"); ?></h3>
                                    <p class="fst-italic">
                                        <?= lang("Lang.awardContent1"); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row content mt-4">
                                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                    <img src="<?= site_url(); ?>assets/img/penghargaan/award-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                    <h3><?= lang("Lang.awardTitle2"); ?></h3>
                                    <?= lang("Lang.awardContent2"); ?>
                                </div>
                            </div>

                            <div class="row content mt-4">
                                <div class="col-md-5" data-aos="fade-right">
                                    <img src="<?= site_url(); ?>assets/img/penghargaan/award-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-5" data-aos="fade-left">
                                    <h3><?= lang("Lang.awardTitle3"); ?></h3>
                                    <p class="fst-italic">
                                        <?= lang("Lang.awardContent3"); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row content mt-4">
                                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                    <img src="<?= site_url(); ?>assets/img/penghargaan/award-4.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                    <h3><?= lang("Lang.awardTitle4"); ?></h3>
                                    <?= lang("Lang.awardContent4"); ?>
                                </div>
                            </div>

                        </div>
                    </li>

                    <!-- Direksi -->
                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-3"> <?= lang("Lang.corporateTabDireksi"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse pt-5" data-bs-parent=".faq-list">

                            <section id="team" class="team">
                                <div class="container" data-aos="fade-up">

                                    <div class="row">

                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/president-director.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/president-director.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>ACHMAD RIFAI</h4>
                                                    <span><?= lang("Lang.PRESIDENT_DIRECTOR"); ?> </span>
                                                    <?= lang("Lang.PRESIDENT_DIRECTOR_INFO"); ?>

                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/raviiiii.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/raviiiii.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>RAVISHANKAR SARAVU</h4>
                                                    <span><?= lang("Lang.MANAGING_DIRECTOR"); ?> </span>
                                                    <?= lang("Lang.MANAGING_DIRECTOR_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="300">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/HERYY.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/HERYY.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>HERIYANTO WIBOWO</h4>
                                                    <span> <?= lang("Lang.DIRECTOR_OF_OPERATION_SERVICE"); ?> </span>
                                                    <?= lang("Lang.DIRECTOR_OF_OPERATION_SERVICE_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="400">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/HARISSSS.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/HARISSSS.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>HARIS</h4>
                                                    <span><?= lang("Lang.DIRECTOR_OF_HUMAN_CAPITAL"); ?> </span>
                                                    <?= lang("Lang.DIRECTOR_OF_HUMAN_CAPITAL_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="400">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/director-of-commercial-business-development.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/director-of-commercial-business-development.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>KEDAR DESHPANDE</h4>
                                                    <span> <?= lang("Lang.DIRECTOR_OF_COMMERCIAL_AND_BUSINESS_DEVELOPMENT"); ?> </span>
                                                    <?= lang("Lang.DIRECTOR_OF_COMMERCIAL_AND_BUSINESS_DEVELOPMENT_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="400">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/director-of-finance.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/director-of-finance.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>B.V PRASAD</h4>
                                                    <span> <?= lang("Lang.DIRECTOR_OF_FINANCE"); ?> </span>
                                                    <?= lang("Lang.DIRECTOR_OF_FINANCE_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>


                        </div>
                    </li>

                    <!-- DOKUMEN & REGULASI -->
                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-4"> <?= lang("Lang.corporateDokumenRegulasi"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse pt-5" data-bs-parent=".faq-list">
                            <section id="services" class="services">
                                <div class="container" data-aos="fade-up">

                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/UU%20NO%201%20TAHUN%202009-PENERBANGAN.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi1"); ?> </a></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/PP%20No.3%20Tahun%202001%20KEAMANAN%20DAN%20KESELAMATAN%20PENERBANGAN.PDF" target="_blank"> <?= lang("Lang.DokumenRegulasi2"); ?> </a></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/PP%20No.70%20Tahun%202001%20Kebandarudaraan.PDF" target="_blank"> <?= lang("Lang.DokumenRegulasi3"); ?> </a></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/2.%20PM%2092%20Tahun%202011.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi4"); ?> </a></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/2.%20PM_167_TAHUN_2015.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi5"); ?> </a></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/PM_180_TAHUN_2015%20PENGENDALIAN%20PENGOPERASIAN%20PESAWAT%20UDARA%20TANPA%20AWAK%20DI%20RUANG%20UDARA%20YANG%20DILAYANI%20INDONESIA.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi6"); ?> </a></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/2.%20PM%2058%20Tahun%202016.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi7"); ?> </a></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/PM%2051%20TAHUN%202020_KEAMANAN%20PENERBANGAN%20NASIONAL.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi8"); ?> </a></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/PM%2027%20TAHUN%202021%20-%20SANKSI%20ADM.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi9"); ?> </a></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/SKEP%20100%20XI%20Tahun%201985.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi10"); ?> </a></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/SKEP%20100%20VII%20tahun%202003.PDF" target="_blank"> <?= lang("Lang.DokumenRegulasi11"); ?> </a></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                                            <div class="icon-box">
                                                <i class="bi bi-briefcase"></i>
                                                <h4><a href="https://kno.serasijayanusantara.com/assets/sk/SKEP_2765_XII%20_2010%20Tata%20Cara%20Pemeriksaan%20Keamanan.pdf" target="_blank"> <?= lang("Lang.DokumenRegulasi12"); ?> </a></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </li>

                    <!-- CSR -->
                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-5"> <?= lang("Lang.corporateTabCSR"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse pt-5" data-bs-parent=".faq-list">
                            <?= lang("Lang.corporateCSRContent"); ?>
                        </div>
                    </li>

                    <!-- Visi-Misi -->
                    <li data-aos="fade-up" data-aos-delay="600">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-6"> <?= lang("Lang.corporateTitleVisiMisi"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-6" class="collapse pt-5" data-bs-parent=".faq-list">
                            <div class="row content">
                                <?= lang("Lang.corporateVisi"); ?>
                                <?= lang("Lang.corporateMisi"); ?>
                            </div>
                        </div>
                    </li>

                    <!-- DEWAN KOMISARIS -->
                    <li data-aos="fade-up" data-aos-delay="700">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-7"> <?= lang("Lang.corporateKomisaris"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-7" class="collapse " data-bs-parent=".faq-list">
                            <section id="team" class="team">
                                <div class="container" data-aos="fade-up">

                                    <div class="row">

                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/KOMISARIS-UTAMA.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/KOMISARIS-UTAMA.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>AJAR SETIADI</h4>
                                                    <span><?= lang("Lang.KOMISARIS_UTAMA"); ?></span>
                                                    <?= lang("Lang.KOMISARIS_UTAMA_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/KOMISARIS-VIVEK.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/KOMISARIS-VIVEK.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>VIVEK SINGHAL</h4>
                                                    <span><?= lang("Lang.KOMISARIS1"); ?></span>
                                                    <?= lang("Lang.KOMISARIS1_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-4" data-aos="fade-up" data-aos-delay="300">
                                            <div class="member d-flex align-items-start">
                                                <div class="pic" href="<?= site_url(); ?>assets/img/Direksi/KOMISARIS-ANDREW.jpg" target="_blank">
                                                    <img src="<?= site_url(); ?>assets/img/Direksi/KOMISARIS-ANDREW.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="member-info">
                                                    <h4>ANDREW ACQUAAH HARRISON</h4>
                                                    <span><?= lang("Lang.KOMISARIS2"); ?></span>
                                                    <?= lang("Lang.KOMISARIS2_INFO"); ?>
                                                    <div class="social">
                                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>
                        </div>
                    </li>

                    <!-- CONCTACT US -->
                    <li data-aos="fade-up" data-aos-delay="800">
                        <i class='bx bxs-bank icon-help'></i>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-8"> <?= strtoupper(lang("Lang.menuContactAs")); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-8" class="collapse pt-5" data-bs-parent=".faq-list">

                            <div class="row content mt-4">
                                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                    <img src="<?= site_url(); ?>assets/img/slide/slide-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                    <h3><?= lang("Lang.tentangPerusahaan"); ?></h3>
                                    <p class="fst-italic">
                                        <?= lang("Lang.sekilasPerusahaan"); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row content mt-4">
                                <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                                    <img src="<?= site_url(); ?>assets/img/slide/slide-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                                    <h3><?= lang("Lang.alamatPerusahaan"); ?></h3>
                                    <p class="fst-italic">
                                        <?= lang("Lang.textAlamatPerusahaan"); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row content mt-4">
                                <div class="col-md-12 pt-4" data-aos="fade-left" data-aos-delay="100">
                                    <h3><?= lang("Lang.sosialMedia"); ?></h3>

                                    <div class="social-links">
                                        <a href="#" target="_blank" class="twitter text-info mt-3 fs-3"><i class="bx bxl-twitter bx-lg"></i> @kno_airport</a>
                                        <a href="#" target="_blank" class="facebook mt-3 fs-3"><i class="bx bxl-facebook bx-lg"></i> Bandara Internasional Kualanamu</a>
                                        <a href="https://www.instagram.com/kualanamu.airport/" target="_blank" class="instagram mt-3 fs-3 text-danger"><i class="bx bxl-instagram bx-lg"></i>@kualanamu.airport</a>
                                        <a href="mailto:corcomm@avi.id" target="_blank" class="google-plus mt-3 fs-3 text-warning"><i class='bx bx-envelope bx-lg'></i>contact.center@avi.id</a>
                                        <a href="#" target="_blank" class="google-plus mt-3 fs-3 text-secondary"><i class='bx bx-phone-call bx-lg'></i>138 </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </li>
                </ul>
            </div>

            <div class="container" data-aos="fade-up">
                <!-- <div class="section-title">
                    <h2>FAQ</h2>
                </div> -->

            </div>
        </section>

        <section class="d-none">
            <div class="container" data-aos="fade-up">
                <!-- <div class="section-title">
                    <h2> About Us </h2>
                </div> -->
                <div class="row loadContentCorporateAboutUs">
                    <?= $this->include('layout/content-loading'); ?>
                </div>
            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadContentCorporateAboutUs": ?>
        <nav>
            <div class="nav nav-tabs" role="tablist">
                <?php foreach ($result->data->data as $key => $rest) { ?>
                    <button class="nav-link <?= $key == 0 ? 'active' : ''; ?>" id="nav-tabAbout<?= $key; ?>" data-bs-toggle="tab" data-bs-target="#tabAbout<?= $key; ?>" type="button" role="tab" aria-controls="tabAbout<?= $key; ?>" aria-selected="<?= $key == 0 ? 'true' : 'false'; ?>"><?= $rest->name; ?></button>
                <?php } ?>
            </div>
        </nav>
        <div class="tab-content">
            <?php foreach ($result->data->data as $key => $rest) { ?>
                <div class="tab-pane fade <?= $key == 0 ? 'show active' : ''; ?> pt-3" id="tabAbout<?= $key; ?>" role="tabpanel" aria-labelledby="nav-tabAbout<?= $key; ?>">
                    <?php if (count($rest->detail_data) > 0) { ?>
                        <div class="accordion accordion-flush" id="accordionFlush">
                            <?php foreach ($rest->detail_data as $ky => $rs) { ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne<?= $ky; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?= $ky; ?>" aria-expanded="<?= $ky == 0 ? true : false; ?>" aria-controls="flush-collapseOne<?= $ky; ?>">
                                            <?= $rs->name; ?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne<?= $ky; ?>" class="accordion-collapse collapse <?= $ky == 0 ? 'show' : ''; ?>" aria-labelledby="flush-headingOne<?= $ky; ?>" data-bs-parent="#accordionFlush">
                                        <div class="accordion-body">
                                            <?= $rs->value; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <?= $rest->value; ?>
                    <?php } ?>

                </div>
            <?php } ?>
        </div>
<?php break;
} ?>