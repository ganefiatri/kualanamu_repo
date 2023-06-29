<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Business</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Airlines</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Airlines Kualanamu International Airport</h2>
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
    case "BusinessAirlines": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Business</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Airlines</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Airlines Kualanamu International Airport</h2>
            </div>
        </section>
        <style>
            .BusinessAirlines {
                background: url("<?= site_url(); ?>assets/img/bg-airlines.jpg") fixed center center;
                background-size: cover;
                padding: 120px 0;
                min-height: 60vh;
            }
        </style>
        <section id="header-custom" class="header-custom BusinessAirlines">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start text-white">
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Airlines</h2>
                </div>
                <div class="form-group row g-3">
                    <div class="col-lg-6">
                        <label for="keywordSearch" class="visually-hidden"></label>
                        <input type="text" class="form-control keywordSearch" id="keywordSearch" name="keywordSearch" placeholder="Search Airlines...">
                    </div>
                    <div class="col-lg-6">
                        <button type="button" id="btnSearch" name="btnSearch" class="btnSearch btn btn-primary mb-3"> <i class="fas fa-search"></i> Find</button>
                    </div>
                </div>
                <div class="loadContentBusinessAirlines">
                    <?= $this->include('layout/content-loading'); ?>
                </div>


            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadContentBusinessAirlines": ?>
        <div class="row row-cols-3 row-cols-lg-4 g-2 g-lg-3 ">
            <?php foreach ($result->data->datas as $key => $rest) { ?>
                <div class="col d-grid" data-aos="fade-up" data-aos-delay="100">
                    <a href="<?= $rest->company_url; ?>" class="btn btn-outline-primary btn-lg pt-3 pb-3" target="_blank">
                        <div><?= $rest->airline_name; ?></div>
                        <div>(<?= $rest->icao; ?>)</div>
                        <div><?= $rest->country; ?></div>
                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="col-lg-12 text-center mt-4 mb-4">
            <?php
            $page_size = $param->page_size;
            $row_datas = $result->data->row_datas;
            $offset_row_datas = $result->data->offset_row_datas;

            $page = $param->current_page;
            $count_page = ceil($row_datas / $page_size);
            $count_number = 3;
            $start_number = ($page > $count_number) ? $page - $count_number : 1;
            $end_number = ($page < ($count_page - $count_number)) ? $page + $count_number : $count_page;
            ?>

            <?php if ($count_page > $start_number) : ?>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <?php
                        $linkparam = $param;
                        $linkparam->current_page = $param->current_page == 1 ? 1 : ($param->current_page - 1);
                        ?>
                        <?php if ($page > $start_number) : ?><li><a href="#" class="linkPage" data-linkparam='<?= json_encode($linkparam); ?>'><?= '<< Previous'; ?></a></li> <?php endif; ?>
                        <?php for ($i = $start_number; $i <= $end_number; $i++) { ?>
                            <?php
                            $linkparam = $param;
                            $linkparam->current_page = $i;
                            $link_active = $page == $i ? 'active' : '';
                            ?>
                            <li class="<?= $link_active; ?>"><a href="#" class="linkPage" data-linkparam='<?= json_encode($linkparam); ?>'><?= $i; ?></a></li>
                        <?php } ?>
                        <?php
                        $linkparam = $param;
                        $linkparam->current_page = $page == $end_number ? $page : ($page + 1);
                        ?>
                        <?php if ($page < $end_number) : ?><li><a href="#" class="linkPage" data-linkparam='<?= json_encode($linkparam); ?>'>Next >> </a></li><?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
<?php break;
} ?>