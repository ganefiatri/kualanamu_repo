<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Business</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Advertise</a></li>
                </ol>
                <h2>Advertise Kualanamu International Airport</h2>
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
    case "BusinessAdvertise": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Business</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Advertise</a></li>
                </ol>
                <h2>Advertise Kualanamu International Airport</h2>
            </div>
        </section>
        <section>
            <div class="container contentBusinessAdvertise" data-aos="fade-up">
                <?= $this->include('layout/content-loading'); ?>
            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "contentBusinessAdvertise": ?>
        <?= $result->data->profile_company->advertise; ?>
<?php break;
} ?>