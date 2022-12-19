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
                            <a class="nav-link text-white active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item my-lg-0 my-2 mx-2">
                            <a class="nav-link text-white" href="#">Kelas</a>
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

        <!-- HEADER LANDING -->
        <section id="header-landing" class="position-relative" style="background: #751119;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">

                        <div class="mx-5">
                            <p class="text-uppercase text-white">We provide tons of pathskill</p>
                            <h1 class="text-white">The New Way to Achieve Good Skills</h1>
                            <p class="text-white">We provide tons of pathskill that you can choose and focus on</p>
                            <button class="btn btn-light rounded-pill">Lebih Lanjut</button>
                        </div>

                        
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
                    </div>
                </div>
            </div>

            <!-- <div class="bg-header" style="background-image: url(<?= base_url('/assets/img/bg-header-fix.svg') ?>);"></div> -->
        </section>
        <!-- HEADER LANDING END -->

        <!-- PATNER LOGO -->
        <section id="partner" class="container py-5 px-3">

            <div class="list-partner d-flex justify-content-around align-items-center">
                <div>
                    <img src="<?= base_url('assets/img/partner/tesla.png') ?>" alt="">
                </div>    
                <div>

                    <img src="<?= base_url('assets/img/partner/amazon.png') ?>" alt="">
                </div>
                <div>

                    <img src="<?= base_url('assets/img/partner/google.png') ?>" alt="">
                </div>
                <div>

                    <img src="<?= base_url('assets/img/partner/facebook.png') ?>" alt="">
                </div>
                <div>

                    <img src="<?= base_url('assets/img/partner/microsoft.png') ?>" alt="">
                </div>
            </div>
        
        </section>

        <!-- PATNER LOGO END -->

        <!-- BANNER -->

        <section id="banner">

            <div class="container list-banner">

                <div class="banner-item">
                    <img src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                </div>

                <div class="banner-item">
                    <img src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                </div>

            </div>

        </section>

        <!-- BANNER END -->

        <!-- BENEFIT PELATIHAN -->

        <section id="benefit">
            
            <div class="container">

                <p class="text-uppercase">We provide tons of pathskill</p>
                <h1 class="">Benefit Pelatihan</h1>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <img src="" alt="">
                                <h4>The New Way to Achieve Good Skills</h4>
                                <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <img src="" alt="">
                                <h4>The New Way to Achieve Good Skills</h4>
                                <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <img src="" alt="">
                                <h4>The New Way to Achieve Good Skills</h4>
                                <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>    
                    </div>
                </div>

            </div>

        </section>

        <!-- BENEFIT PELATIHAN DONE -->

        <!-- STATISTIK -->
        
        <section id="pelatihan">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
                    </div>
                    <div class="col-lg-6">
                        <p>We provide tons of pathskill</p>
                        <h1>Statistik Pelatihan Kami</h1>
                        <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill</p>
                        
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                        </div>
                        <button class="btn btn-light rounded-pill">Lebih Lanjut</button>
                    </div>
                </div>
            </div>

        </section>

        <!-- STATISTIK DONE -->

        <!-- DAFTAR PELATIHAN -->

        <section id="daftar-pelatihan">

            <div class="container">
                
                <div class="row">
                    <div class="col-lg-6">
                        <p>We provide tons of pathskill</p>
                        <h1>Ikuti Pelatihan Berikut</h1>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-light rounded-pill">Lebih Lanjut</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow border rounded-3">
                            <div class="card-body">

                                <img src="" alt="">
                                <span class="badge rounded-pill text-bg-primary">Primary</span>
                                <h5>Ini adalah Pelatihan paling populer di Indonesia</h5>
                                <p>By Satria Sambiring</p>
                                <h4>Rp. 799.000</h4>
                                <button class="btn btn-light rounded-pill">Lebih Lanjut</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- DAFTAR PELATIHAN DONE -->

        <!-- FAQ -->

        <section id="daftar-faq">

            <div class="container">
                <p>We provide tons of pathskill</p>
                <h1>FAQ</h1>
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                    </a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-bs-target
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>

        </section>

        <!-- FAQ DONE -->

        <!-- TESTIMONI  -->

        <section id="testimoni">

            <div class="container">
                <p>We provide tons of pathskill</p>
                <h1>Testimoni Peserta Kami</h1>

                <div class="daftar-testimoni">
                    <div class="testimoni-item card shadow">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="" alt="">
                                <h5>Alfian Rahmatullah</h5>
                                <p>Web Designer</p>
                            </div>
                            <div class="col-lg-8">
                                <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus onWe provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus onWe provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- TESTIMONI DONE -->

        <!-- PERTANYAAN -->

        <section id="tanyalebihlanjut">
            
            <div class="container">

                <div class="card shadow">
                    <h1>Tertarik dengan Pelatihan kami?</h1>
                    <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We</p>
                    <button class="btn btn-light rounded-pill">Lebih Lanjut</button>
                </div>
            </div>

        </section>

        <!-- PERTANYAAN DONE -->

        <!-- Boostrap Js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


        <!-- Jquery Js -->
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <!-- Slick Slider -->
        <script src="<?= base_url('assets/vendor/slick/slick.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/slick/slick.min.js') ?>"></script>
        
        <!-- Custom Js -->
        <script src="<?= base_url('assets/js/custom-slick.js') ?>"></script>
        

    </body>
</html>