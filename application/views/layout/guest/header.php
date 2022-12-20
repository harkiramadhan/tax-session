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
                            <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
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
        <section id="partner" class="container py-5">

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

        <section id="benefit" class="py-5">
            
            <div class="container">

                <div class="head-section py-5">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2">Benefit <span>Pelatihan</span></h1>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-benefit card border-0 p-3">
                            <div class="card-body">
                                <img class="mb-5" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                                <h4 class="mb-3"><span>The New Way</span> to Achieve Good Skills</h4>
                                <p class="mb-0">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-4">
                        <div class="card-benefit card border-0 p-3" style="background: #751119;">
                            <div class="card-body">
                                <img class="mb-5 text-white" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                                <h4 class="mb-3 text-white">The New Way to Achieve Good Skills</h4>
                                <p class="mb-0 text-white">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-4">
                        <div class="card-benefit card border-0 p-3">
                            <div class="card-body">
                                <img class="mb-5" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                                <h4 class="mb-3">The New Way to Achieve Good Skills</h4>
                                <p class="mb-0">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>    
                    </div>
                </div>

            </div>

        </section>

        <!-- BENEFIT PELATIHAN DONE -->

        <!-- STATISTIK -->
        
        <section id="pelatihan">

            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
                    </div>
                    <div class="col-lg-6">

                        <div class="head-section">
                            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                            <h1 class="ms--2">Statistik<span> Pelatihan</span></h1>
                        </div>
                        <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill</p>
                        
                        <div class="row statistik-list mb-4">
                            <div class="col-lg-4">
                                <div class="card border-0 text-center p-3">
                                    <h1 class="mb-0">21</h1>
                                    <p>Pengajar</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border-0 text-center p-3">
                                    <h1 class="mb-0">21</h1>
                                    <p>Pengajar</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border-0 text-center p-3">
                                    <h1 class="mb-0">21</h1>
                                    <p>Pengajar</p>
                                </div>
                            </div>
                        </div>                            
                        
                        <button class="btn btn-light btn-icon-session btn-icon-session-light rounded-pill d-flex align-items-center px-1 ps-3">Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>

                    </div>
                </div>
            </div>

        </section>

        <!-- STATISTIK DONE -->

        <!-- DAFTAR PELATIHAN -->

        <section id="daftar-pelatihan" style="background: #FBF3F2;">

            <div class="container  py-5">
                
                <div class="row">

                    <div class="col-lg-7 pb-3">
                        <div class="head-section">
                            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                            <h1 class="ms--2">Ikuti <span>Pelatihan</span> Berikut</h1>
                        </div>
                    </div>

                    <div class="col text-end">                        
                        <button class="btn btn-light btn-icon-session btn-icon-session-light rounded-pill d-flex align-items-center px-1 ps-3 ms-auto">Lebih Semua<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="pelatihan-item card shadow border rounded-3">
                            <img class="rounded shadow" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="Cover Pelatihan">
                            
                            <div class="card-body">
                                <span class="badge rounded-pill text-uppercase text-dark mb-2">Primary</span>
                                <h5 class="mb-3">Ini adalah Pelatihan paling populer di Indonesia</h5>
                                <p class="text-muted">By Satria Sambiring</p>
                                <h4 class="mb-3">Rp. 799.000</h4>
                                <button class="btn btn-light rounded-pill w-100 text-uppercase text-white">Daftar Pelatihan</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- DAFTAR PELATIHAN DONE -->

        <!-- FAQ -->

        <section id="daftar-faq">

            <div class="container py-5">
                

                <div class="head-section">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2"><span>FAQ</span></h1>
                </div>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="mb-3">
                        <h2 class="accordion-header  faq-item" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h2 class="accordion-header  faq-item" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Accordion Item #2
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h2 class="accordion-header  faq-item" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Accordion Item #3
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- FAQ DONE -->

        <!-- TESTIMONI  -->

        <section id="testimoni">

            <div class="container py-5">
                
                <div class="head-section mb-4">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2">Testimoni <span>Peserta Kami</span></h1>
                </div>

                <div class="daftar-testimoni">
                    <div class="testimoni-item card border-0 p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="mb-4" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                                <h5 class="mb-1">Alfian Rahmatullah</h5>
                                <p class="mb-0">Web Designer</p>
                            </div>
                            <div class="col-lg-9 d-flex align-items-center">
                                <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus onWe provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus onWe provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                            </div>
                        </div>
                    </div>


                    <div class="testimoni-item card border-0 p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="mb-4" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                                <h5 class="mb-1">Alfian Rahmatullah</h5>
                                <p class="mb-0">Web Designer</p>
                            </div>
                            <div class="col-lg-9 d-flex align-items-center">
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
            
            <div class="container py-5 text-center">

                <div class="card border-0 tanyalebihlanjut-item align-items-center">
                    <h1 class="text-white mb-4">Tertarik dengan Pelatihan kami?</h1>
                    <p class="text-white mb-4">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We</p>
                    <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Tanya Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                </div>
            </div>

        </section>

        <!-- PERTANYAAN DONE -->

        <section class="footer text-white">
            <div class="container">
                <footer class="py-5">
                    <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                        </form>
                    </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 text-center">
                        <p>2022 Copyright Tax Session. All Rights Reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                        </ul>
                    </div>
                </footer>
                </div>
        </section>

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