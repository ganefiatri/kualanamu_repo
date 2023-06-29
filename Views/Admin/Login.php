<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin | KNO</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/css/general.css">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/css/default/app.min.css" />
    <script>
        var host = "<?= site_url(); ?>";
        var module = "<?= $module; ?>";
        var path = "<?= $path; ?>";
        var api_url = "<?= $api_url ?>";
        var client_id = "<?= $client_id ?>";
        var clientkey = "<?= $clientkey ?>";
        var client_ip = "<?= $client_ip ?>";

        var aes_key = "<?= $aes_key; ?>";
        var aes_iv = "<?= $aes_iv; ?>";
    </script>
</head>

<body class="pace-top">
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>


    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url(<?= site_url(); ?>assets/admin/img/login-bg/bglogin.jpg)" data-id="login-cover-image"></div>
        <div class="login-cover-bg"></div>
    </div>


    <div id="page-container" class="fade">

        <div class="login login-v2" data-pageload-addclass="animated fadeIn">

            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>Silahkan</b> Masuk!
                    <small>Website Admin Kualanamu</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>


            <div class="login-content">
                <form action="<?= site_url(); ?>ceksignin" class="form-horizontal" method="POST" enctype="multipart/form-data" id="formData" name="formData">
                    <div class="form-group m-b-20">
                        <input type="text" id="nama_login" name="nama_login" class="form-control form-control-lg" placeholder="Enter Username" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" id="kata_sandi" name="kata_sandi" class="form-control form-control-lg" placeholder="Enter Password" autocomplete="off">
                    </div>
                    <div class="login-buttons">
                        <button type="submit" id="submit" name="submit" class="btn btn-success btn-block btn-lg">Masuk</button>
                    </div>
                </form>
            </div>

        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>

    <!-- jQuery -->
    <script src="<?= site_url(); ?>assets/admin/js/jquery.min.js"></script>
    <script src="<?= site_url(); ?>assets/admin/js/app.min.js" type="text/javascript"></script>
    <script src="<?= site_url(); ?>assets/admin/js/theme/default.min.js" type="text/javascript"></script>
    <script src="<?= site_url(); ?>assets/admin/js/demo/login-v2.demo.js" type="text/javascript"></script>
    <script src="<?= site_url(); ?>assets/admin/sweetalert/sweetalert.js"></script>
    <script src="<?= site_url(); ?>assets/admin/js/rocket-loader.min.js" data-cf-settings="f69137063e154444686ba3f4-|49" defer=""></script>

    <!-- Crypto JS -->
    <script src="<?= site_url(); ?>assets/admin/crypto-js/crypto-js.js"></script>
</body>

</html>
<script src="<?= site_url(); ?>js/Admin/<?= $module; ?>.js"></script>