<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= base_url('/assets/img/main-logo.svg') ?>" type="image/x-icon">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <title><?= $title ?> - TAX SESSION</title>
        <link href="<?= base_url('assets/css/guest/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="<?= base_url('assets/css/guest/custom.css') ?>" rel="stylesheet">
        
        <!-- Slick Slider -->
        <link href="<?= base_url('assets/vendor/slick/slick.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/vendor/slick/slick.theme.css') ?>" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
  

    </head>
    <body class="position-relative">
        
        <!-- NAVBAR LANDING PAGE -->
        <nav class="navbar navbar-expand-lg navbar-dark py-3" style="background: #751119;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('/assets/img/main-logo-white.svg') ?>" alt="Logo" class="d-inline-block align-text-center" style="height: 50px;">
                    <span class="d-lg-inline d-none text-white ms-1 font-weight-bolder">Tax Session</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto align-items-center">
                        <li class="nav-item my-lg-0 my-2">
                            <a class="nav-link text-white <?= ($this->uri->segment(1) == NULL) ? 'active' : '' ?>" aria-current="page" href="<?= site_url() ?>">Beranda</a>
                        </li>
                        <li class="nav-item my-lg-0 my-2 mx-2">
                            <a class="nav-link text-white <?= ($this->uri->segment(1) == 'course') ? 'active' : '' ?>" href="<?= site_url('course') ?>">Kelas</a>
                        </li>
                        <li class="nav-item my-lg-0 my-2 mx-2">
                            <a class="nav-link text-white" href="#">Cara Pembayaran</a>
                        </li>
                        <li class="nav-item my-lg-0 my-2 mx-2">
                            <button type="button" class="d-lg-none d-block btn btn-md btn-light rounded-pill" style="padding: 12px 30px; font-weight: 600;">CEK TRANSAKSI</button>
                        </li>
                    </ul>
                    <button type="button" class="d-lg-block d-none btn btn-md btn-light rounded-pill" style="padding: 12px 30px; font-weight: 600;">CEK TRANSAKSI</button>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

