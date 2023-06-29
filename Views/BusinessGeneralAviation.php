<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Business</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">General Aviation</a></li>
                </ol>
                <h2>General Aviation Kualanamu International Airport</h2>
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
    case "BusinessGeneralAviation": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Business</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Maps</a></li>
                </ol>
                <h2>Maps Kualanamu International Airport</h2>
            </div>
        </section>
        <iframe style="border:0; width: 100%; height: 80vh;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9470.396736228617!2d98.86736793279485!3d3.6305154667141655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30314a34dfa5662d%3A0xc536c90019a09ea6!2sBandar%20Udara%20Internasional%20Kualanamu!5e0!3m2!1sid!2sid!4v1686363976334!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        <!-- <section>
            <div class="container contentBusinessGeneralAviation" data-aos="fade-up">
            </div>
        </section> -->
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "contentBusinessGeneralAviation": ?>
        <section id="header-custom" class="header-custom maps-content">
            <div class="container">
            </div>
        </section>
<?php break;
} ?>