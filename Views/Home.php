<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?>"></a></li>
                </ol>
                <h2>Kualanamu International Airport </h2>
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
    case "Home": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>

        <!-- ======= Highlights ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <!-- <div class="section-title mt-4">
                    <h2>Highlights</h2>
                </div> -->
                <div class="section-title">
                    <h2><?= lang("Lang.menuBeritaTerbaru"); ?> </h2>
                </div>
                <div class="row highlightsNews">
                </div>
            </div>
        </section>

        <section id="Flight" class="icon-boxes">
            <div class="container">
                <div class="section-title mt-4">
                    <h2><?= lang("Lang.menuFlightStatus"); ?></h2>
                </div>
                <div class="row contentFlightSchedule">
                </div>
            </div>
        </section>

        <!-- ======= Event ======= -->
        <div class="EventContent">
            <section id="why-us" class="why-us">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("<?= IMAGE_URL1; ?>/incoming/event/2_577433_20230522102305.png");' data-aos="fade-right">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4" target="_blank"></a>
                        </div>
                        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
                            <div class="content">
                                <h3><strong><?= lang("Lang.titleEvent"); ?></strong></h3>
                                <p><?= lang("Lang.contentEvent"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ======= Gallery ======= -->
        <section id="portfolio" class="portfoio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2><?= lang("Lang.menuGaleri"); ?></h2>
                </div>

                <div class="row portfolio-container contentGallery" data-aos="fade-up">

                </div>

            </div>
        </section>

        <!-- ======= Airline ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center contentAirlines">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>FAQ</h2>
                </div>
                <div class="faq-list contentFAQ1">

                    <ul>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-<?= $i; ?>"> <?= lang("Lang.faqTitle$i"); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-<?= $i; ?>" class="collapse <?= $i == 1 ? 'show' : ''; ?>" data-bs-parent=".faq-list">
                                    <p><?= lang("Lang.faq$i"); ?></p>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>

                </div>
            </div>
        </section>



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><?= strtoupper(lang("Lang.menuContactAs")); ?> </h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                    <div class="col-lg-5">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p class="alamat_perusahaan">Beringin, Kabupaten Deli Serdang, Sumatera Utara, Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p class="email_perusahaan">corcomm@avi.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p class="no_hp_perusahaan">138</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control " name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>

    <?php break;
    case "SlideContent": ?>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner header-wrapper" role="listbox">

            <?php foreach ($result->data->datas as $key => $rest) { ?>
                <?php $active = $key == 0 ? 'active' : ''; ?>

                <!-- Slide 1 -->
                <div class="carousel-item <?= $active; ?> zoominheader " style="background-image: url(<?= site_url(); ?>assets/img/slide/slide-<?= ($key + 1); ?>.jpg);">
                    <div class="carousel-container zoomoutheader">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span><?= str_replace(chr(13), "<br>", $rest->title); ?></span></h2>
                            <p class="animate__animated animate__fadeInUp">
                                <?= character_limiter(strip_tags($rest->description), 200); ?>
                            </p>
                            <div>
                                <a href="<?= site_url(); ?><?= strtolower($module); ?>/slide_read?id=<?= $rest->id; ?>" class="btn-menu animate__animated animate__fadeInUp scrollto">Read More</a>
                                <!-- <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a> -->
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    <?php break;
    case "SlideContentOld": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <?php $active = $key == 0 ? 'active' : ''; ?>
            <div class="carousel-item <?= $active; ?>">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><?= $rest->title; ?></h2>
                    <p class="animate__animated animate__fadeInUp"><?= character_limiter(strip_tags($rest->description), 200); ?></p>
                    <a href="<?= site_url(); ?><?= strtolower($module); ?>/slide_read?id=<?= $rest->id; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
        <?php } ?>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>
    <?php break;
    case "slide_read": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?>"></a></li>
                </ol>
                <h2>Kualanamu International Airport</h2>

            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row slide_loadread">

                    <?= $this->include('layout/content-loading'); ?>

                </div>
            </div>
        </section>

        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "slide_loadread": ?>
        <?php
        $rest = $result->data->detail_data;
        $url_link = site_url() . strtolower($module) . '/slide_read?id=' . $rest->id;
        ?>

        <div class="col-lg-12 entries">

            <article class="entry entry-single">

                <div class="entry-img text-center">
                    <img src="<?= IMAGE_URL1; ?>/<?= $rest->image_url_real; ?>" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    <a href="<?= site_url(); ?><?= strtolower($module); ?>slide_read?id=<?= $rest->id; ?>"><?= $rest->title; ?></a>
                </h2>

                <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= date('Y-m-d', strtotime($rest->timestamp)); ?>"><?= date('d F Y', strtotime($rest->timestamp)); ?></time></a></li>
                    </ul>
                </div>

                <div class="entry-content">
                    <p>
                        <?= $rest->description; ?>
                    </p>
                </div>

                <?php
                $twitters = $url_link;
                ?>
                <div class="entry-footer">
                    Share :
                    <a href="https://twitters.com/intent/tweet?url=<?= $twitters; ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
            </article>




            <div class="blog-comments">
                <!-- <h4 class="comments-count">8 Comments</h4>

                <div id="comment-1" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                        <div>
                            <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2020-01-01">01 Jan, 2020</time>
                            <p>
                                Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                            </p>
                        </div>
                    </div>
                </div> -->
                <?= $this->include('layout/Post_Comment'); ?>
            </div>

        </div>
    <?php break;
    case "highlightsNews": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <div class="col-lg-4 entries">
                <article class="entry">
                    <div class="entry-img text-center">
                        <img src="<?= IMAGE_URL1; ?>/<?= $rest->image_url_real; ?>" alt="" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                        <a href="<?= site_url(); ?>news/read?id=<?= $rest->id; ?>"><?= $rest->title; ?></a>
                    </h2>
                    <hr>
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= date('Y-m-d', strtotime($rest->timestamp)); ?>"><?= date('d F Y', strtotime($rest->timestamp)); ?></time></a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>
                            <?= character_limiter(strip_tags($rest->description), 200); ?>
                        </p>
                        <div class="read-more">
                            <a href="<?= site_url(); ?>news/read?id=<?= $rest->id; ?>">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php } ?>
    <?php break;
    case "contentFlightSchedule": ?>

        <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-0 mb-lg-0 " data-aos="fade-up">
            <div class="icon-box col-md-12">
                <ul class="nav nav-tabs-custom nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <i class="fa-solid fa-plane-arrival"></i>
                            <?= lang("Lang.tabArrival"); ?>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            <i class="fa-solid fa-plane-departure"></i>
                            <?= lang("Lang.tabDeparture"); ?>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active table-responsive" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <table style="width: 100%;" class="table table-bordered table-striped table-dark">
                            <thead>
                                <tr>
                                    <th class="text-center"> <?= lang("Lang.tableTIME"); ?> </th>
                                    <th class="text-center"> <?= lang("Lang.tableFLIGHT_NO"); ?> </th>
                                    <th class="text-center"> <?= lang("Lang.tableORIGIN"); ?> </th>
                                    <th class="text-center"> <?= lang("Lang.tableSTATUS"); ?> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($result->data->list_arrival) == 0) : ?>
                                    <tr>
                                        <td colspan="5" class="text-center"> <i><?= lang("Lang.tabArrival"); ?> Not Found</i> </td>
                                    </tr>
                                <?php endif; ?>
                                <?php $x=0; ?>
                                <?php foreach ($result->data->list_arrival as $key => $rest) { ?>
                                    <?php if((date('Y-m-d H:i:s', strtotime($rest->WAKTU)) >= date("Y-m-d H:i:s")) && $x<=6){ ?> 
                                        <?php $x++; ?>
                                        <tr>
                                            <td class='text-center d-none'>
                                                <?php if ($rest->FLIGHT_IMAGE_URL_REAL != null && $rest->FLIGHT_IMAGE_URL_REAL != '') { ?>
                                                    <img src="<?= IMAGE_URL1; ?><?= $rest->FLIGHT_IMAGE_URL_REAL; ?>" class="img-fluid">
                                                    <?php } else { ?>
                                                        <?= $rest->FLIGHT_NAME; ?>
                                                        <?php } ?>
                                                    </td>
                                                    <td class='text-center'> <?= date('H.i', strtotime($rest->WAKTU)); ?></td>
                                                    <td class='text-center'> <?= $rest->FLIGHT_NO; ?> </td>
                                                    <td class='text-center'> <?= $rest->KOTAASAL; ?> </td>
                                                    <td class='text-center'> <?= lang("Lang.lang")=="en"?$rest->STATUS_ENG:$rest->STATUS_IND; ?></td>
                                        </tr>
                                        <?php }?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade table-responsive" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <table style="width: 100%;" class="table table-bordered table-striped table-dark">
                            <thead>
                                <tr>
                                    <th class="text-center"> <?= lang("Lang.tableTIME"); ?> </th>
                                    <th class="text-center"> <?= lang("Lang.tableFLIGHT_NO"); ?> </th>
                                    <th class="text-center"> <?= lang("Lang.tableDESTINATION"); ?> </th>
                                    <th class="text-center"> <?= lang("Lang.tableSTATUS"); ?> </th>
                                </tr>
                            </thead>
                            <tbody class="list_departure">
                                <?php if (count($result->data->list_departure) == 0) : ?>
                                    <tr>
                                        <td colspan="5" class="text-center"> <i><?= lang("Lang.tabDeparture"); ?> Not Found</i> </td>
                                    </tr>
                                <?php endif; ?>
                                <?php $x=0; ?>
                                <?php foreach ($result->data->list_departure as $key => $rest) { ?>
                                   <?php if((date('Y-m-d H:i:s', strtotime($rest->WAKTU)) >= date("Y-m-d H:i:s")) && $x<=6){ ?> 
                                        <?php $x++; ?>
                                    <tr>
                                        <td class='text-center d-none'>
                                            <?php if ($rest->FLIGHT_IMAGE_URL_REAL != null && $rest->FLIGHT_IMAGE_URL_REAL != '') { ?>
                                                <img src="<?= IMAGE_URL1; ?>/<?= $rest->FLIGHT_IMAGE_URL_REAL; ?>" style='max-height: 20px;'>
                                            <?php } else { ?>
                                                <?= $rest->FLIGHT_NAME; ?>
                                            <?php } ?>
                                        </td>
                                        <td class='text-center'> <?= date('H.i', strtotime($rest->WAKTU)); ?></td>
                                        <td class='text-center'> <?= $rest->FLIGHT_NO; ?> </td>
                                        <td class='text-center'> <?= $rest->KOTATUJUAN; ?> </td>
                                        <td class='text-center'> <?= lang("Lang.lang")=="en"?$rest->STATUS_ENG:$rest->STATUS_IND; ?></td>
                                    </tr>
                                <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-0 mb-lg-0 " data-aos="fade-up">
                        <div class="icon-box col-md-12">

                            dkfksdf
                        </div>
                    </div> -->


    <?php break;
    case "EventContent": ?>
        <div class="row ">
            <?php foreach ($result->data->datas as $key => $rest) { ?>

                <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("<?= IMAGE_URL1; ?>/<?= $rest->image_url_real; ?>");' data-aos="fade-right">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4" target="_blank"></a>
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
                    <div class="content">
                        <h3><strong><?= $rest->title; ?></strong></h3>
                        <p><?= character_limiter(strip_tags($rest->description), 200); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php break;
    case "contentGallery": ?>


        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Gallery</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container " data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum harum quidem placeat totam earum, perspiciatis nemo voluptates! Pariatur, perspiciatis quis necessitatibus officiis nemo quaerat omnis facere quos fugiat distinctio exercitationem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum harum quidem placeat totam earum, perspiciatis nemo voluptates! Pariatur, perspiciatis quis necessitatibus officiis nemo quaerat omnis facere quos fugiat distinctio exercitationem!"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="<?= site_url(); ?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="<?= site_url(); ?>assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

    <?php break;

    case "contentAirlines": ?>
        <?php foreach ($result->data->datas as $key => $rest) { ?>
            <div class="swiper-slide"><a href="<?= $rest->company_url; ?>" target="_blank"> <img src="<?= IMAGE_URL; ?>/assetsairlines?fileid=<?= $rest->image_url; ?>" class="img-fluid"> </a></div>
        <?php } ?>
    <?php break;
    case "contentFAQ": ?>
        <ul>
            <?php foreach ($result->data->datas as $key => $rest) { ?>
                <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-<?= $key; ?>"><?= $rest->question; ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-<?= $key; ?>" class="collapse <?= $key == 0 ? 'show' : ''; ?>" data-bs-parent=".faq-list">
                        <p>
                            <?= $rest->answer; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
<?php break;
} ?>