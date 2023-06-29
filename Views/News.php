<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?>news">News</a></li>
                    <li><a href="<?= site_url(); ?>news"></a></li>
                </ol>
                <h2>News Kualanamu International Airport</h2>
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
    case "News": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?>news">News</a></li>
                    <li><a href="<?= site_url(); ?>news"></a></li>
                </ol>
                <h2>News Kualanamu International Airport</h2>
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row contentNews">

                    <?= $this->include('layout/content-loading'); ?>

                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "contentNews": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <div class="col-lg-4 entries">
                <article class="entry">
                    <div class="entry-img text-center">
                        <img src="<?= IMAGE_URL1; ?>/<?= $rest->image_url_real; ?>" alt="" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                        <a href="<?= site_url(); ?><?= strtolower($module); ?>/read?id=<?= $rest->id; ?>"><?= $rest->title; ?></a>
                    </h2>
                    <hr>
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= date('Y-m-d', strtotime($rest->activity_date)); ?>"><?= date('d F Y', strtotime($rest->activity_date)); ?></time></a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>
                            <?= character_limiter(strip_tags($rest->description), 200); ?>
                        </p>
                        <div class="read-more">
                            <a href="<?= site_url(); ?><?= strtolower($module); ?>/read?id=<?= $rest->id; ?>">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php } ?>

        <div class="col-lg-12 text-center">
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
    case "read": ?>

        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?>news">News</a></li>
                </ol>
                <h2>News Kualanamu International Airport</h2>
            </div>
        </section>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8 entries loadReadNews">

                        <?= $this->include('layout/content-loading'); ?>

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <hr>
                            <div class="sidebar-item recent-posts contentRecentposts">
                                <!-- <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div> -->

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "loadReadNews": ?>
        <?php $rest = $result->data->detail_data; ?>

        <article class="entry entry-single">

            <div class="entry-img text-center">
                <img src="<?= IMAGE_URL1; ?>/<?= $rest->image_url_real; ?>" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="<?= site_url(); ?><?= strtolower($module); ?>/read?id=<?= $rest->id; ?>"> <?= $rest->title; ?> </a>
            </h2>

            <div class="entry-meta">
                <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= date('Y-m-d', strtotime($rest->activity_date)); ?>"><?= date('d F Y', strtotime($rest->activity_date)); ?></time></a></li>
                </ul>
            </div>

            <div class="entry-content">
                <p>
                    <?= $rest->description; ?>
                </p>
            </div>

            <div class="entry-footer">
                Share :
                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
            </div>

        </article>

        <div class="blog-comments">

            <?= $this->include('layout/Post_Comment'); ?>

        </div>
    <?php break;
    case "contentRecentposts": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <div class="post-item clearfix">
                <img src="<?= IMAGE_URL1; ?>/<?= $rest->image_url_real; ?>" alt="">
                <h4><a href="<?= site_url(); ?><?= strtolower($module); ?>/read?id=<?= $rest->id; ?>"><?= $rest->title; ?></a></h4>
                <time datetime="<?= date('Y-m-d', strtotime($rest->timestamp)); ?>"><?= date('d F Y', strtotime($rest->timestamp)); ?></time>
            </div>
        <?php } ?>
<?php break;
} ?>