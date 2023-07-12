<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" /> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/landingPage.css'); ?>" />

</head>
<body>
      <!-- Sidebar Start -->
       <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Acceuil</span>
                </a>
              </li>

              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('user/User/choixRegime');?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Choisir mon regime</span>
                </a>
              </li>


              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('user/User/addWallet/'.$this->session->userdata('user_id'));?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Ajout porte monnaie</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('user/User/getUserById/'.$this->session->userdata('user_id'));?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Profile</span>
                </a>
              </li>
           
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Regime</span>
              </li>
              <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                  <span>
                    <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Maigrissant</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Grossir</span>
                </a>
              </li> -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                      <a href="<?php echo site_url('user/user/logout'); ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  <!-- <span class="hide-menu">Grossir</span> -->
                </a>
              </li>
            </ul>
          </nav>
</div>
</aside>
<div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
                <li class="nav-item dropdown">
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="<?php echo base_url('assets/img/user.png'); ?>" alt="" width="50" height="48" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" >
                    <div class="message-body">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>

