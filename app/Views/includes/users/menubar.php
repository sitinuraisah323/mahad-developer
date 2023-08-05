<nav class="navbar horizontal-layout-navbar  fixed-top navbar-expand-lg">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo" href="<?= base_url(); ?>/assets/index-2.html"><img src="<?= base_url(); ?>/assets/images/auth/komputrer.png" style="width:60px; height:60px;" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>/assets/index-2.html"><img src="<?= base_url(); ?>/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex flex-grow">
        <ul class="navbar-nav navbar-nav-left collapse navbar-collapse" id="horizontal-top-example">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="projects-dropdown" data-toggle="dropdown" aria-expanded="false">
                    Materi
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="projects-dropdown">
                    <a class="dropdown-item" href="<?php echo base_url('subject/subject') ?>">
                        <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                        Media Visual
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('subject/audio_visual') ?>">
                        <i class="mdi mdi-database mr-2 text-primary"></i>
                        Media Audio Visual
                    </a>
                    <div class="dropdown-divider"></div>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="employees-dropdown" data-toggle="dropdown" aria-expanded="false">
                    Data Umun
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="employees-dropdown">
                    <a class="dropdown-item" href="<?php echo base_url('information') ?>">
                        <i class="mdi mdi-monitor-multiple mr-2 text-primary"></i>
                        Pengumuman
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('dataumum/guru') ?>">
                        <i class="mdi mdi-scale-balance mr-2 text-primary"></i>
                        Data Guru
                    </a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user mr-2 text-primary"></i>
                        Managers
                    </a> -->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="actions-dropdown" data-toggle="dropdown" aria-expanded="false">
                    Personal
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="actions-dropdown">
                    <a class="dropdown-item" href="<?php echo base_url('evaluations/users') ?>">
                        <i class="mdi mdi-launch mr-2 text-primary"></i>
                        Penilaian
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('profil/user') ?>">
                        <i class="fa fa-user mr-2 text-primary"></i>
                        Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('schedule/schedule/users') ?>">
                        <i class="fa fa-user-multiple-outline mr-2 text-primary"></i>
                        Jadwal Pembelajaran
                    </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-search">
                <div class="nav-link">
                    <div class="search-field d-none d-md-block">
                        <form class="d-flex align-items-stretch h-100" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search your projects ...">
                            </div>
                        </form>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-profile">
                <a class="nav-link" href="<?php echo base_url('profil/user'); ?>">
                    <div class="nav-profile-text">
                        <?= session('user.username'); ?>
                    </div>
                    <div class="nav-profile-img">
                        <img src="<?= base_url(); ?>/assets/images/faces/users2.png" alt="image" class="img-xs rounded-circle ml-3">
                        <span class="availability-status online"></span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('monitoring/login/logout'); ?>">
                    <i class="fas fa-power-off font-weight-bold icon-sm"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="collapse" data-target="#horizontal-top-example">
            <span class="fa fa-bars"></span>
        </button>
    </div>
</nav>