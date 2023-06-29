<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
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
    case "ShopDine": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>

        <style>
            .shop {
                background: url("<?= site_url(); ?>assets/img/bg-shop.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom shop">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <h1 class="fw-bold"> Shopping and Dining experience </h1>
                        <p>
                            It's not just about the travel, it is a complete experience at Kualanamu International Airport
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <style>
            .contenus .boxshop {
                background: url("<?= site_url(); ?>assets/img/bg-box-shop.jpg") center center;
                background-size: cover;
            }

            .contenus .boxeatdine {
                background: url("<?= site_url(); ?>assets/img/bg-box-eatdine.jpg") center center;
                background-size: cover;
            }

            .contenus .boxservices {
                background: url("<?= site_url(); ?>assets/img/bg-box-services.jpg") center center;
                background-size: cover;
            }
        </style>

        <section id="contenus" class="contenus">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Shop & Dine</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <a href="<?= site_url(); ?><?= strtolower($module); ?>/shop">
                            <div class="box rounded shadow-lg boxshop">
                                <span><i class="fas fa-shopping-cart"></i></span>
                                <h4>Shop</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0 ">
                        <a href="<?= site_url(); ?><?= strtolower($module); ?>/eatdine">
                            <div class="box rounded shadow-lg boxeatdine">
                                <span><i class="fa-solid fa-utensils"></i></span>
                                <h4>Eat & Dine</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <a href="<?= site_url(); ?><?= strtolower($module); ?>/services">
                            <div class="box rounded shadow-lg boxservices">
                                <span><i class="fa-brands fa-servicestack"></i></span>
                                <h4> Services </h4>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>


    <?php break;
    case "shop": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>

        <style>
            .shop {
                background: url("<?= site_url(); ?>assets/img/bg-box-shop.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom shop">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <!-- <h1 class="fw-bold"> Shop </h1> -->

                    </div>
                </div>

            </div>
        </section>

        <section class="contenus1" id="contenus1">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Shop</h2>
                </div>

                <div class="row loadContentShop">
                    <?= $this->include('layout/content-loading'); ?>
                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadContentShop": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>

            <div class="col-lg-4 col-md-4">
                <a href="<?= site_url(); ?><?= strtolower($module); ?>/detailshop?id=<?= $rest->id; ?>">
                    <div class="icon-box" style="background: url('<?= IMAGE_URL; ?>/assetsshopdine?fileid=<?= $rest->image_url; ?>') center center; background-size: cover; color: white;">
                        <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
                        <h3><?= $rest->name; ?> </h3>
                        <p> <?= $rest->mst_shopdine_category_name; ?> </p>
                    </div>
                </a>
            </div>
        <?php } ?>

    <?php break;
    case "detailshop": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>


        <div class="contentdetailshop">
            <?= $this->include('layout/content-loading'); ?>
        </div>


        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>

    <?php break;
    case "contentdetailshop": ?>
        <?php
        $rest = $result->data->detail_data;
        ?>
        <style>
            .shop {
                background: url("<?= IMAGE_URL; ?>/assetsshopdine?fileid=<?= $rest->image_url; ?>") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom shop">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <h1 class="fw-bold"> <?= $rest->name; ?> </h1>
                        <p>
                            <?= $rest->mst_shopdine_category_name; ?>
                        </p>

                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">
                <p>
                    <?= $rest->description; ?>
                </p>
            </div>
        </section>
    <?php break;
    case "eatdine": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>

        <style>
            .eatdine {
                background: url("<?= site_url(); ?>assets/img/bg-box-eatdine.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom eatdine">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <!-- <h1 class="fw-bold"> Shop </h1> -->

                    </div>
                </div>

            </div>
        </section>

        <section class="contenus1" id="contenus1">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Eat & Dine</h2>
                </div>

                <div class="row loadEatDine">
                    <?= $this->include('layout/content-loading'); ?>
                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadEatDine": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>

            <div class="col-lg-4 col-md-4">
                <a href="<?= site_url(); ?><?= strtolower($module); ?>/detaileatdine?id=<?= $rest->id; ?>">
                    <div class="icon-box" style="background: url('<?= IMAGE_URL; ?>/assetsshopdine?fileid=<?= $rest->image_url; ?>') center center; background-size: cover; color: white;">
                        <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
                        <h3><?= $rest->name; ?> </h3>
                        <p> <?= $rest->mst_shopdine_category_name; ?> </p>
                    </div>
                </a>
            </div>
        <?php } ?>

    <?php break;
    case "detaileatdine": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>


        <div class="contentdetaileatdine">
            <?= $this->include('layout/content-loading'); ?>
        </div>


        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>

    <?php break;
    case "contentdetaileatdine": ?>
        <?php
        $rest = $result->data->detail_data;
        ?>
        <style>
            .shop {
                background: url("<?= IMAGE_URL; ?>/assetsshopdine?fileid=<?= $rest->image_url; ?>") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom shop">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <h1 class="fw-bold"> <?= $rest->name; ?> </h1>
                        <p>
                            <?= $rest->mst_shopdine_category_name; ?>
                        </p>

                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">
                <p>
                    <?= $rest->description; ?>
                </p>
            </div>
        </section>
    <?php break;
    case "services": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>

        <style>
            .services {
                background: url("<?= site_url(); ?>assets/img/bg-box-services.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom services">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <!-- <h1 class="fw-bold"> Shop </h1> -->

                    </div>
                </div>

            </div>
        </section>

        <section class="contenus1" id="contenus1">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                </div>

                <div class="row loadservices">
                    <?= $this->include('layout/content-loading'); ?>
                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadservices": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>

            <div class="col-lg-4 col-md-4">
                <a href="<?= site_url(); ?><?= strtolower($module); ?>/detailservices?id=<?= $rest->id; ?>">
                    <div class="icon-box" style="background: url('<?= IMAGE_URL; ?>/assetsshopdine?fileid=<?= $rest->image_url; ?>') center center; background-size: cover; color: white;">
                        <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
                        <h3><?= $rest->name; ?> </h3>
                        <p> <?= $rest->mst_shopdine_category_name; ?> </p>
                    </div>
                </a>
            </div>
        <?php } ?>

    <?php break;
    case "detailservices": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Shop & Dine</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Shop & Dine Kualanamu International Airport</h2>
            </div>
        </section>


        <div class="contentdetailservices">
            <?= $this->include('layout/content-loading'); ?>
        </div>


        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>

    <?php break;
    case "contentdetailservices": ?>
        <?php
        $rest = $result->data->detail_data;
        ?>
        <style>
            .shop {
                background: url("<?= IMAGE_URL; ?>/assetsshopdine?fileid=<?= $rest->image_url; ?>") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom shop">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                        <h1 class="fw-bold"> <?= $rest->name; ?> </h1>
                        <p>
                            <?= $rest->mst_shopdine_category_name; ?>
                        </p>

                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">
                <p>
                    <?= $rest->description; ?>
                </p>
            </div>
        </section>
<?php break;
} ?>