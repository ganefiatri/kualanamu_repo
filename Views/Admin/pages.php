<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <title>KNO</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="<?= site_url() ?>assets/admin/js/jquery3.min.js"></script>
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/css/general.css">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/css/default/app.min.css" />
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/plugins/jvectormap-next/jquery-jvectormap.css" />
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/plugins/bootstrap-calendar/css/bootstrap_calendar.css" />
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/plugins/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/plugins/nvd3/build/nv.d3.css" />

    <link href="<?= site_url(); ?>assets/admin/plugins/summernote/dist/summernote.css" rel="stylesheet" />

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/admin/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Format Excel XLS and XLSX -->
    <script type="text/javascript" src="<?= site_url() ?>assets/admin/FormatRupiah/exportexcel/jquery.table2excel.js"></script>
    <script type="text/javascript" src="<?= site_url() ?>assets/admin/FormatRupiah/exportexcel/table2excel.js"></script>
    <script type="text/javascript" src="<?= site_url() ?>assets/admin/FormatRupiah/exportexcel/xlsx.full.min.js"></script>

    <!-- format numeric -->
    <script src="<?= site_url(); ?>assets/admin/js/format-numeric/format.min.js"></script>

    <!-- moment -->
    <script src="<?= site_url(); ?>assets/vendor/moment/moment.min.js"></script>

    <!-- Crypto JS -->
    <script src="<?= site_url(); ?>assets/admin/crypto-js/crypto-js.js"></script>

    <!-- jQuery -->
    <script src="<?= site_url(); ?>assets/admin/js/jquery.min.js"></script>
    <script>
        // var apiUrl = 'http://192.168.177.125:5002/api/v1';
        var host = "<?= site_url(); ?>";
        // var apiUrl = 'https://knoapi.serasijayanusantara.com/api/v1';
        var apiUrl = 'https://knoapi.kualanamuaviasi.com/api/v1';
        var clientkey = 'ebfadf891b7ec6b80f11cf2d3331ead65032e802';
        var clientid = '02';
        var companyid = '0001';
        var autorize = "<?= Session()->get('token'); ?>";
        var module = "<?= $module; ?>";
        var path = "<?= $path; ?>";
        var act = "<?= $act; ?>";

        var aes_key = "<?= $aes_key; ?>";
        var aes_iv = "<?= $aes_iv; ?>";

        var dateNow = new Date();
        dateNowStr = moment(dateNow).format("YYYYMMDD");

        strClientSecret = clientid + "|" + dateNowStr;
        clientSecret = CryptoJS.HmacSHA256(strClientSecret, clientkey).toString(CryptoJS.enc.Base64);
    </script>
</head>

<body>
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>

    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <div id="header" class="header navbar-default">
            <div class="navbar-header">
                <a href="<?= site_url(); ?>Dashboard" class="navbar-brand"><span class="navbar-logo"></span> <b>KNO</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <ul class="navbar-nav navbar-right">

                <li class="dropdown navbar-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= site_url(); ?>assets/admin/img/logo/logo-sjn.png" alt="" />
                        <span class="d-none d-md-inline"><?= Session()->get('name'); ?></span>
                        <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" id='logout'>Log Out <i class="fa fa-sign-out-alt"></i></a>
                    </div>
                </li>
            </ul>
        </div>

        <div id="content" class="content">
            <?= $this->renderSection('main'); ?>
        </div>
        <?= $this->include("Admin/library/modal"); ?>

        <div id="sidebar" class="sidebar">
            <div data-scrollbar="true" data-height="100%">
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image">
                                <img src="<?= site_url(); ?>assets/admin/img/logo/logo-sjn.png" alt="" />
                            </div>
                            <div class="info">
                                <b class="caret pull-right"></b><?= Session()->get('name'); ?>
                                <small>Administrator</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <ul class="nav nav-profile">
                            <li <?= $module == 'GantiPassword' ? "class='active'" : ''; ?>>
                                <a href="<?= site_url(); ?>GantiPassword"><i class="fa fa-key"></i> Ganti Password</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub <?= strtolower($module) == 'dashboard' ? 'active' : ''; ?>">
                        <a href="<?= site_url(); ?>admin/dashboard">
                            <i class="fa fa-th-large"></i>
                            <span>Dashboard <?= strtolower($module) == 'dashboard' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></span>
                        </a>
                    </li>
                    <li class="has-sub <?= strtolower($module) == 'setupparameter' || 'setupairports' ? 'active' : ''; ?>">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-cogs"></i>
                            <span>Setup Data</span>
                        </a>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupparameter' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupparameter">Setup Parameter <?= strtolower($module) == 'setupparameter' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupairports' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupairports">Setup Airports <?= strtolower($module) == 'setupairports' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupairlines' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupairlines">Setup Airlines <?= strtolower($module) == 'setupairlines' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupterminal' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupterminal">Setup Terminal <?= strtolower($module) == 'setupterminal' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupshopdinecategory' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupshopdinecategory">Setup Shop & Dine Category <?= strtolower($module) == 'setupshopdinecategory' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupshopdine' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupshopdine">Setup Shop & Dine <?= strtolower($module) == 'setupshopdine' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupactivity' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupactivity">Setup Activity <?= strtolower($module) == 'setupactivity' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'setupairportguides' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/setupairportguides">Setup Airport Guides <?= strtolower($module) == 'setupairportguides' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                        <ul class="sub-menu">
                            <li <?= strtolower($module) == 'aboutcorporate' ? "class='active'" : ''; ?>><a href="<?= site_url(); ?>admin/aboutcorporate">Setup About Corporate <?= strtolower($module) == 'aboutcorporate' ? "<i class='fa fa-paper-plane text-theme'></i>" : ''; ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-bg"></div>
        <script src="<?= site_url(); ?>assets/admin/js/app.min.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/js/theme/default.min.js" type="text/javascript"></script>

        <!-- Sweetalert -->
        <script src="<?= site_url(); ?>assets/admin/sweetalert/sweetalert.js"></script>

        <!-- Notif -->
        <script src="<?= site_url(); ?>assets/admin/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>

        <!-- DataTables  & Plugins -->
        <script src="<?= site_url(); ?>assets/admin/datatables/jquery.dataTables2.min.js"></script>
        <script src="<?= site_url(); ?>assets/admin/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= site_url(); ?>assets/admin/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= site_url(); ?>assets/admin/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= site_url(); ?>assets/admin/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= site_url(); ?>assets/admin/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


        <script src="<?= site_url(); ?>assets/admin/plugins/d3/d3.min.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/plugins/nvd3/build/nv.d3.min.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/plugins/jvectormap-next/jquery-jvectormap.min.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/plugins/gritter/js/jquery.gritter.js" type="text/javascript">
        </script>
        <script src="<?= site_url(); ?>assets/admin/js/demo/dashboard-v2.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/js/rocket-loader.min.js" data-cf-settings="f69137063e154444686ba3f4-|49" defer=""></script>

        <script src="<?= site_url(); ?>assets/admin/inputmask/jquery.inputmask.min.js"></script>
        <script src="<?= site_url(); ?>assets/admin/plugins/summernote/dist/summernote.min.js" type="text/javascript"></script>
        <script src="<?= site_url(); ?>assets/admin/js/demo/form-summernote.demo.js" type="text/javascript"></script>



        <!-- bs-custom-file-input -->
        <script src="<?= site_url(); ?>assets/admin/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script src="<?= site_url(); ?>js/General.js"></script>
</body>

</html>