<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/main-logo.svg">
  <title><?= $title ?> - TAX SESSION</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  
  <link id="pagestyle" href="<?= base_url() ?>assets/css/admin/argon-dashboard.css" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url() ?>assets/css/admin/custom.css" rel="stylesheet" />

  <!-- Include stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header h-auto">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 py-3 d-flex justify-content-center align-items-center" href="<?= base_url() ?>adminberanda">
        <img src="<?= base_url() ?>assets/img/main-logo.svg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-2 font-weight-bold">Dashboard Admin</span>
      </a>
    </div>
    <hr class="horizontal dark my-2 mt-0">
    <div class="collapse navbar-collapse w-auto h-75" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == "admin/beranda") ? 'active' : '' ?>" href="<?= site_url('admin/beranda') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-home text-primary text-lg" style="top:1px;"></i> 
            </div>
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($this->uri->segment(1) == "admin/pelatihan") ? 'active' : '' ?>" href="<?= site_url('admin/pelatihan') ?>">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-book text-primary text-lg" style="top:1px;"></i> 
                </div>
                <span class="nav-link-text ms-1">Pelatihan</span>
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == "admin/banners") ? 'active' : '' ?>" href="<?= site_url('admin/banners') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-slideshare text-primary text-lg" style="top:1px;"></i> 
            </div>
            <span class="nav-link-text ms-1">Banners</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == "admin/landing") ? 'active' : '' ?>" href="<?= site_url('admin/landing') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-file text-primary text-lg" style="top:1px;"></i> 
            </div>
            <span class="nav-link-text ms-1">Landing Page</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == "admin/settings") ? 'active' : '' ?>" href="<?= site_url('admin/settings') ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-cog text-primary text-lg" style="top:1px;"></i> 
            </div>
            <span class="nav-link-text ms-1">Pengaturan</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-0 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white" href="<?= base_url() ?>adminberanda"><i class="fa fa-home cursor-pointer text-lg"></i></a></li>
            <li class="breadcrumb-item text-sm text-white active opacity-10" aria-current="page">Dashboard</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-xl-none ps-3 pe-3 d-flex align-items-center pb-1">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0 me-1" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-circle cursor-pointer text-lg me-2"></i> 
                <strong>Admin</strong>
                <i class="fa fa-angle-down ms-2" aria-hidden="true"></i>

              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-2 me-sm-n4" aria-labelledby="dropdownMenuButton" stlye="top: 0rem !important">
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <p class="text-sm mb-0">
                          <i class="fa fa-sign-out me-2 text-danger"></i>
                          <span class="text-dark">Keluar Admin</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">