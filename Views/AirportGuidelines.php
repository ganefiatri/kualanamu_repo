<?php switch ($act) {
    default: ?>
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
    case "AirportGuidelines": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Transportation</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Transportation Kualanamu International Airport</h2>
            </div>
        </section>

        <section id="header-custom" class="header-custom airport-guidelines">
            <div class="container">
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container contentAirportGuidelines" data-aos="fade-up">

                <?= $this->include('layout/content-loading'); ?>

            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "contentAirportGuidelines": ?>

        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    <?php foreach ($result->data->datas as $key => $rest) { ?>
                        <div class="col-lg-3 col-md-4 mt-4">
                            <a href="<?= site_url(); ?><?= strtolower($module); ?>/detail?id=<?= $rest->id; ?>">
                                <div class="icon-box">
                                    <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
                                    <?php if ($rest->icon <> "") { ?>
                                        <i class="<?= $rest->icon; ?> fa-2xl text-warning"></i>
                                    <?php } else { ?>
                                        <i class="fas fa-question-circle fa-2xl text-warning"></i>
                                    <?php }; ?>
                                    <h3>&ensp;<?= $rest->nama_singkat; ?>
                                    </h3>
                                </div>
                            </a>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>
    <?php break;
    case "detail": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">AirportGuidelines</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Detail</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Airport Facilities Kualanamu International Airport</h2>
            </div>
        </section>



        <div class="loadDetailAirportGuidelines">

            <?= $this->include('layout/content-loading'); ?>

        </div>



        <!-- <section id="blog" class="blog">
            <div class="container loadDetailAirportGuidelines" data-aos="fade-up">

                <section id="header-custom" class="custom-detail-header">
                    <div class="container">
                    </div>
                </section>

            </div>
        </section> -->
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>

    <?php break;
    case "loadDetailAirportGuidelines": ?>
        <?php $rest = $result->data->detail_data; ?>

        <style>
            .custom-detail-header {
                background: url("<?= IMAGE_URL; ?>/assetsairportguide?fileid=<?= $rest->image_url; ?>") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>


        <section id="header-custom" class="custom-detail-header">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <h1 class="fw-bold">Airport Guide <?= ucwords($rest->nama_singkat); ?></h1>
                        <p>
                            Facilities for your comfort at Kualanamu International Airport
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>
                        <?php if ($rest->icon <> "") { ?>
                            <i class="<?= $rest->icon; ?> text-primary"></i>
                        <?php } else { ?>
                            <i class="fas fa-question-circle text-primary"></i>
                        <?php }; ?>
                        <?= $rest->name; ?>
                    </h2>
                </div>

                <p>
                    <?= $rest->description; ?>
                </p>
            </div>
        </section>

<?php break;
} ?>