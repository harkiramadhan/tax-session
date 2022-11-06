
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/img/main-logo.svg') ?>">
    <title><?= $title ?> - TAX SESSION</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    
    <link id="pagestyle" href="<?= base_url('assets/css/admin/argon-dashboard.css') ?>" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url('assets/css/admin/custom.css') ?>" rel="stylesheet" />

    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    </head>

    <body class="">
        <main class="main-content mt-0">
            <section>
            <div class="page-header min-vh-100">
                <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-start">
                            <img class="w-25 mb-5" src="<?= base_url('/assets/img/main-logo.svg') ?>" alt="">
                            <h4 class="font-weight-bolder">Akses Admin <br> Tax Session</h4>
                            <p class="mb-0">Kelola pelatihanmu sekarang, </p>
                        </div>
                        <div class="card-body">
                            <form role="form" action="<?= site_url('admin/auth/action') ?>" method="post">
                                <?php if($this->session->flashdata('error')): ?>
                                    <p class="mb-3 text-danger"><strong><?= $this->session->flashdata('error') ?></strong></p>
                                <?php endif; ?>
                                <div class="mb-3">
                                    <input name="email" type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                                </div>
                                <div class="mb-3">
                                    <input name="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                </div>
                                <div class="text-center">
                                    <button type="post" class="btn btn-lg bg-primary text-white btn-lg w-100 mt-4 mb-0">MASUK SEKARANG</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                            <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </main>
    </body>
</html>