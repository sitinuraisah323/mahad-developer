    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-info col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <span class="navbar-brand brand-logo" href="index-2.html"><img src="<?= base_url(); ?>/assets/images/auth/komputrer.png" style="width:40px; height:40px;" alt="logo" />
          <a style="font-weight: bold; color:#000000;">
            E-Learning
          </a></span>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?= base_url(); ?>/assets/images/auth/komputrer.png" style="width:40px; height:40px;" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <!-- <span class="count">16</span> -->
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-envelope mx-0"></i>
              <!-- <span class="count">25</span> -->
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url('profil') ?>" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url(); ?>/assets/images/faces/users2.png" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fa fa-user menu-icon text-primary"></i>
                Profil
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url('monitoring/login/logout'); ?>">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="far fa-sun menu-icon"></i>
              <span class="menu-title">Data Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('settings/levels');?>">Level</a></li>
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('datamaster/users') ?>>Users</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo base_url('datamaster/student') ?>">Siswa</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo base_url('datamaster/teacher') ?>">Guru</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo base_url('Days') ?>">Days</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">Data Pembelajaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('MateriController') ?>">Judul Materi</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('DetailSubject') ?>">Detail Materi</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('schedule/schedules') ?>">Jadwal Pembelajaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Soal') ?>">Soal</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="fas fa-pen-square menu-icon"></i>
              <span class="menu-title">Penilaian</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <?php 
                if ( session('subject')) {
                  foreach(session('subject') as $data){ ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("evaluations/show/$data->id") ?>"><?php echo $data->name; ?></a></li>
                <?php } }else{ ?>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                <?php }?>
              </ul>
            </div>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Guru</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Siswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Materi</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Penilaian</a></li>
              </ul>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Pengumuman') ?>">
              <i class="fa fa-info-circle menu-icon"></i>
              <span class="menu-title">Pengumuman</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Profil/admin') ?>">
              <i class="fa fa-user menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->