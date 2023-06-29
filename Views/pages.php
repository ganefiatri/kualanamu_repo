<!DOCTYPE html>
<html lang="<?= lang('Lang.menuHome') ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kualanamu International Airport</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= site_url(); ?>assets/img/logo.png" rel="icon">
    <link href="<?= site_url(); ?>assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- fontawesome -->
    <link href="<?= site_url(); ?>assets/vendor/fontawesome-free-6.2.1/css/all.css" rel="stylesheet">
    <script src="<?= site_url(); ?>assets/vendor/fontawesome-free-6.2.1/js/all.js"></script>

    <!-- Vendor CSS Files -->
    <link href="<?= site_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= site_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= site_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="<?= site_url(); ?>assets/js/jquery-3.6.3.min.js"></script>

    <!-- moment -->
    <script src="<?= site_url(); ?>assets/vendor/moment/moment.min.js"></script>

    <!-- Crypto JS -->
    <script src="<?= site_url(); ?>assets/vendor/crypto-js/crypto-js.js"></script>

    <!-- lazyscrollloading -->
    <script src="<?= site_url(); ?>assets/vendor/lazyscrollloading/jquery.lazyscrollloading.js"></script>

    <script>
        var host = "<?= site_url(); ?>";
        var module = "<?= $module; ?>";
        var act = "<?= $act; ?>";
        var path = "<?= $path; ?>";

        var apiUrl = '<?= API_URL; ?>';
        var imgUrl = '<?= IMAGE_URL; ?>';
        var imgUrl1 = '<?= IMAGE_URL1; ?>';

        var clientkey = '<?= CLIENT_KEY; ?>';
        var clientid = '<?= CLIENT_ID; ?>';
        var companyid = '<?= COMPANY_ID; ?>';

        var aeskey = '<?= AES_KEY; ?>';
        var aesiv = '<?= AES_IV; ?>';

        var dateNow = new Date();
        dateNowStr = moment(dateNow).format("YYYYMMDD");

        strClientSecret = clientid + "|" + dateNowStr;
        clientSecret = CryptoJS.HmacSHA256(strClientSecret, clientkey).toString(CryptoJS.enc.Base64);
    </script>


    <style>
        .nav-tabs-custom .nav-item .nav-link {
            background-color: #0080FF;
            color: #FFF;
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            background-color: #1e2225;
            color: #FFF;
        }
    </style>



</head>

<body>

    <?= $this->include("layout/header"); ?>
    <?= $module == 'Home' && $act == "Home" ? $this->include("layout/slide") : ''; ?>

    <main id="main">
        <?= $this->renderSection('main'); ?>
    </main>
    <?= $this->include("layout/footer"); ?>


    <div id="preloaderOld"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="<?= site_url(); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= site_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= site_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= site_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= site_url(); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= site_url(); ?>assets/js/main.js"></script>

    <!-- General -->
    <script src="<?= site_url(); ?>js/General.js"></script>

</body>

</html>