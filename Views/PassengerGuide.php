<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Passenger Guide</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Passenger Guide Kualanamu International Airport</h2>
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
    case "PassengerGuide": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Airport Facilities</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Airport Facilities Kualanamu International Airport</h2>
            </div>
        </section>

        <section id="header-custom" class="header-custom airport-facilities">
            <div class="container">
            </div>
        </section>


        <section id="features-custom" class="features-custom" data-aos="fade-up">
            <div class="container">


                <div class="row content align-middle">
                    <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?= site_url(); ?>assets/img/Flight-Departure-Guide.jpeg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-7 pt-4 align-middle" data-aos="fade-left" data-aos-delay="100">
                        <h3>Flight Departure Guide</h3>
                        <p class="fst-italic">
                            Ensuring a seamless journey for every passenger at Kualanamu International Airport with complete flight information.
                        </p>
                        <a class="features-custom-btn align-middle" href="<?= site_url(); ?><?= strtolower($module); ?>/flightdepartureguide">Read More</a>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="<?= site_url(); ?>assets/img/Guidelines-for-Arriving-Passengers.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <h3>Guidelines for Arriving Passengers</h3>
                        <p class="fst-italic">
                            We promise you a hassle-free experience with our handy On-Arrival guide.
                        </p>
                        <a class="features-custom-btn align-middle" href="<?= site_url(); ?><?= strtolower($module); ?>/arrivingpassengers">Read More</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "flightdepartureguide": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Flight Departure Guide</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Flight Departure Guide Kualanamu International Airport</h2>
            </div>
        </section>

        <style>
            .flightdepartureguide {
                background: url("<?= site_url(); ?>assets/img/Flight-Departure-Guide.jpeg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom flightdepartureguide">
            <div class="container">
            </div>
        </section>

        <section id="services-custom" class="services-custom">
            <div class="container" data-aos="fade-up">
                <div class="row contentflightdepartureguide">
                    <?= $this->include('layout/content-loading'); ?>
                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "contentflightdepartureguide": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <!-- <i class="bi bi-card-checklist"></i> -->
                    <?php if ($rest->icon <> "") { ?>
                        <i class="<?= $rest->icon; ?> fa-2xl text-primary"></i>
                    <?php } else { ?>
                        <i class="fas fa-question-circle fa-2xl text-primary"></i>
                    <?php }; ?>
                    <a href="<?= site_url(); ?><?= strtolower($module); ?>/detailflightdepartureguide?id=<?= $rest->id; ?>">
                        <h4><?= $rest->nama_singkat; ?> </h4>
                    </a>
                    <p><?= $rest->name; ?></p>
                </div>
            </div>
        <?php } ?>
    <?php break;
    case "arrivingpassengers": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Guidelines for Arriving Passengers</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Guidelines for Arriving Passengers Kualanamu International Airport</h2>
            </div>
        </section>

        <style>
            .arrivingpassengers {
                background: url("<?= site_url(); ?>assets/img/Guidelines-for-Arriving-Passengers.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom arrivingpassengers">
            <div class="container">
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "contentarrivingpassengers": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <!-- <i class="bi bi-card-checklist"></i> -->
                    <?php if ($rest->icon <> "") { ?>
                        <i class="<?= $rest->icon; ?> fa-2xl text-primary "></i>
                    <?php } else { ?>
                        <i class="fas fa-question-circle text-primary"></i>
                    <?php }; ?>
                    <h4><a href="<?= site_url(); ?><?= strtolower($module); ?>/detail?id=<?= $rest->id; ?>"><?= $rest->nama_singkat; ?></a></h4>
                    <p><?= $rest->name; ?></p>
                </div>
            </div>
        <?php } ?>
    <?php break;
    case "detailflightdepartureguide": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"><?= lang("Lang.menuFasilitasBU"); ?></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2><?= lang("Lang.menuFasilitasBUTitle"); ?></h2>
            </div>
        </section>
        <div class="container">
            <div class="row content mt-4">
                <div class="col-md-2" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= site_url(); ?>assets/img/wifi.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-10 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3><?= lang("Lang.titleWIFI"); ?></h3>
                    <?= lang("Lang.contentWIFI"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= site_url(); ?>assets/img/lost-items.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3><?= lang("Lang.titleBarangHlg"); ?></h3>
                    <?= lang("Lang.contentBarangHlg"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-2" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= site_url(); ?>assets/img/airport.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-10 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3><?= lang("Lang.titleAirportApp"); ?></h3>
                    <?= lang("Lang.contentAirportApp"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= site_url(); ?>assets/img/hotelair.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3><?= lang("Lang.titlePenginapan"); ?></h3>
                    <?= lang("Lang.contentPenginapan"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-2" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= site_url(); ?>assets/img/exchanging.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-10 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3><?= lang("Lang.titleTukarUang"); ?></h3>
                    <?= lang("Lang.contentTukarUang"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= site_url(); ?>assets/img/mosque.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3><?= lang("Lang.titleTempatIbadah"); ?></h3>
                    <?= lang("Lang.contentTempatIbadah"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-2" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= site_url(); ?>assets/img/smoke.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-10 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3><?= lang("Lang.titleSmokingArea"); ?></h3>
                    <?= lang("Lang.contentSmokingArea"); ?>
                </div>
            </div>

            <div class="row content mt-4">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= site_url(); ?>assets/img/theatre.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3><?= lang("Lang.titleBioskop"); ?></h3>
                    <?= lang("Lang.contentBioskop"); ?>
                </div>
            </div>
        </div>
        <div class="col-md-12"><br><br></div>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "detailflightdepartureguide_old": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"><?= lang("Lang.menuFasilitasBU"); ?></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2><?= lang("Lang.menuFasilitasBUTitle"); ?></h2>
            </div>
        </section>
        <div class="loadDetail">
            <?= $this->include('layout/content-loading'); ?>
        </div>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "detailarrivingpassengers": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Guidelines for Arriving Passengers</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Guidelines for Arriving Passengers Kualanamu International Airport</h2>
            </div>
        </section>
        <div class="loadDetail">
            <?= $this->include('layout/content-loading'); ?>
        </div>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadDetail": ?>
        <?php $rest = $result->data->detail_data; ?>
        <style>
            .detailpassengers {
                background: url("<?= site_url(); ?>assets/img/Guidelines-for-Arriving-Passengers.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom airport-facilities">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white d-none">
                        <h1 class="fw-bold"><?= $rest->nama_singkat; ?> </h1>
                        <p>
                            <?= $rest->name; ?>
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <p>
                    <?= $rest->description; ?>
                </p>
            </div>
        </section>

<?php break;
} ?>