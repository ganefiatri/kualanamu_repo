 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="fixed-top d-flex align-items-center <?= $module == 'Home' && $act == "Home" ? '' : 'topbar-inner-pages'; ?>">
     <div class="container d-flex align-items-between justify-content-between justify-content-md-between">
         <div class="contact-info d-flex align-items-center">
             <i class="bi bi-twitter be-lg"></i> <a href="#" target="_blank" class="twitterName"> twitter </a> &ensp;
             <i class="bi bi-instagram be-lg"></i> <a href="#" target="_blank" class="instagramName"> instagram </a>

         </div>
         <!-- <div class="cta d-none d-md-block"> -->
         <!-- <a href="#about" class="scrollto">Get Started</a> -->
         <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
             <a href="<?= site_url(); ?>lang/id" class="btn <?= lang('Lang.lang') == "id" ? "btn-warning disabled" : "btn-outline-danger text-white"; ?>">ID</a>
             <a href="<?= site_url(); ?>lang/en" class="btn <?= lang('Lang.lang') == "en" ? "btn-warning disabled" : "btn-outline-danger text-white"; ?> ">EN</a>
         </div>
     </div>
 </div>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center <?= $module == 'Home' && $act == "Home" ? '' : 'header-inner-pages'; ?>">
     <div class="container d-flex align-items-center justify-content-between">

         <!-- <h1 class="logo"><a href="<?= base_url(); ?>">Kualanamu Airport</a></h1> -->
         <!-- Uncomment below if you prefer to use an image logo -->
         <a href="<?= base_url(); ?>" class="logo"><img src="<?= site_url(); ?>assets/img/logo.png" alt="" class="img-fluid"></a>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link scrollto active" href="<?= base_url(); ?>"><?= lang('Lang.menuHome') ?></a></li>
                 <li class="dropdown"><a href="#"><span> <?= lang('Lang.menuAirport'); ?> </span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="<?= site_url(); ?>flightinformation"><?= lang('Lang.menuFlightInformation') ?></a></li>
                         <li><a href="<?= site_url(); ?>airportguidelines"><?= lang('Lang.menuTransportation') ?></a></li>
                         <li><a href="<?= site_url(); ?>businessgeneralaviation"><?= lang('Lang.menuMaps') ?></a></li>
                         <li><a href="<?= site_url(); ?>shopdine"><?= lang('Lang.menuShopDine') ?> </a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>passengerguide">Panduan Penumpang</a></li>
                         <!-- <li><a href="<?= site_url(); ?>tofromairport">To &amp; From Airport</a></li>
                         <li><a href="<?= site_url(); ?>inaroundairport">In &amp; Around Airport</a></li> -->
                     </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span> <?= lang("Lang.corporate"); ?> </span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <!-- <li><a href="<?= site_url(); ?>corporate">Overview</a></li> -->
                         <li><a href="<?= site_url(); ?>corporateaboutus"><?= lang("Lang.corporateAboutAs"); ?> </a></li>
                         <li><a href="<?= site_url(); ?>corporatecareers"><?= lang("Lang.corporateKarir"); ?></a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>corporatemedia">Media</a></li>
                     </ul>
                 </li>
                 <li class="d-none"><a class="nav-link scrollto" href="<?= site_url(); ?>investor"> Investor </a></li>
                 <li class="dropdown"><a href="#"><span> <?= lang("Lang.menuFasilitas"); ?> </span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <!-- <li><a href="<?= site_url(); ?>business">Overview</a></li> -->
                         <li><a href="<?= site_url(); ?>passengerguide/detailflightdepartureguide?id=awqpyqEU5FB3elLE6%2F63ag%3D%3D"><?= lang("Lang.menuFasilitasBU"); ?></a></li>
                         <li><a href="<?= site_url(); ?>corporateaboutus"><?= lang("Lang.menuContactAs"); ?></a></li>

                         <li class="d-none"><a href="<?= site_url(); ?>businessairlines">Airlines</a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>businessairlines">Airlines</a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>businessgeneralaviation">General Aviation</a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>businessadvertise">Advertise</a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>socialbusinessrelations">Social And Business Relations</a></li>
                         <li class="d-none"><a href="<?= site_url(); ?>securityoperationsform">Security Operations Form</a></li>
                         <!-- <li><a href="<?= site_url(); ?>tariffandnacchart">PSC</a></li> -->
                         <!-- <li><a href="<?= site_url(); ?>tariff-and-nac-chart">Tariff and NAC charts</a></li> -->
                         <li class="d-none"><a href="<?= site_url(); ?>buildingplan">Building Plan</a></li>
                     </ul>
                 </li>
                 <!-- <li><a class="nav-link scrollto" href="<?= site_url(); ?>cargo"> Cargo </a></li> -->
                 <li><a class="nav-link scrollto" href="<?= site_url(); ?>news"> <?= lang("Lang.menuNews"); ?> </a></li>
                 <li class="d-none"><a class="nav-link scrollto" href="<?= site_url(); ?>contact"> Contact </a></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->