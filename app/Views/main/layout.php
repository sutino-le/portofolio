<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Sutino S.Kom</title>

    <link href="<?= base_url() ?>/upload/logo.png" rel="icon">
    <link href="<?= base_url() ?>/upload/logo.png" rel="apple-touch-icon">

    <link href="<?= base_url() ?>/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/libs/jquery-steps/steps.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/dist/css/style.min.css" rel="stylesheet" />

    <link href="<?= base_url() ?>/assets/libs/flot/css/float-chart.css" rel="stylesheet" />

    <style>
        .list-group-flush {
            height: 700px;
            overflow-y: auto;
        }
    </style>

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <b class="logo-icon ps-2">
                            <img src="<?= base_url() ?>/upload/logo.png" alt="homepage" class="light-logo" width="25" />
                        </b>
                        <span class="logo-text ms-2">
                            Sutino S.Kom
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li></li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/main/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/profil/index" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Profil</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/pendidikan/index" aria-expanded="false"><i class="fas fa-graduation-cap"></i><span class="hide-menu">Pendidikan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/pengalaman/index" aria-expanded="false"><i class="fas fa-calendar"></i><span class="hide-menu">Pengalaman</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <?= $this->section('judul') ?>
        <?php
        if ($subjudul != "Awal") {
            $judule     = "";
            $subjudule  = "";
        } else {
            $judule     = $judul;
            $subjudule  = $subjudul;
        }
        ?>
        <?= $this->endSection('judul') ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"><?= $halaman; ?></h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><a href="<?= base_url() . '' . $link ?>"><?= $judule; ?><?= $this->renderSection('judul'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?= $subjudule; ?><?= $this->renderSection('subjudul'); ?>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mb-5">
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>

                        <?= $this->renderSection('isi'); ?>

                    </li>
                </ul>
            </div>

            <footer class="footer text-center fixed-bottom">
                <?php

                require 'hitcounter.php';

                $hit = new HitCounter();
                //cek dan simpan
                $hit->Hitung();


                ?>
                <strong>Copyright &copy; <a href="<?= base_url() ?>">Sutino S.Kom</a> 2022.</strong> <strong>Views : <?= $hit->tampil() ?></strong>
                <?php
                //tampilkan history jika ada
                $h = $hit->waktu();
                if (!empty($h)) {
                    echo '<br>Anda telah mengunjungi halaman ini pada : ' . $h;
                }
                ?>
            </footer>
        </div>
    </div>

    <script src="<?= base_url() ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="<?= base_url() ?>/assets/dist/js/waves.js"></script>
    <script src="<?= base_url() ?>/assets/dist/js/sidebarmenu.js"></script>
    <script src="<?= base_url() ?>/assets/dist/js/custom.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script>
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password",
                },
            },
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                alert("Selesai");
            },
        });
    </script>
</body>

</html>