<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:25 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MA'HAD || E LEARNING</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:<?= base_url(); ?>/assets/partials/_navbar.html -->
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
          <?php if (session('user.level') == 'Administrator') { ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="far fa-sun menu-icon"></i>
                <span class="menu-title">Data Settings</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('settings/levels'); ?>">Level</a></li>
                  <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('datamaster/users') ?>>Users</a></li>
                </ul>
              </div>
            </li>
          <?php } ?>
          <?php if (session('user.level') == 'Administrator') { ?>
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
          <?php } ?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">Data Pembelajaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('MateriController') ?>">Judul Materi</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('DetailSubjectss') ?>">Detail Materi</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('SummernoteController') ?>">Summernote</a></li>
                <?php if (session('user.level') == 'Administrator') { ?>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('schedule/schedule') ?>">Jadwal Pembelajaran</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Soal') ?>">Soal</a></li>
                <?php } ?>
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
                if (session('subject')) {
                  foreach (session('subject') as $data) { ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("evaluations/show/$data->id") ?>"><?php echo $data->name; ?></a></li>
                  <?php }
                } else { ?>
                  <li class="nav-item"><a class="nav-link" href="#"></a></li>
                <?php } ?>
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
          <?php if (session('user.level') == 'Administrator') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Pengumuman') ?>">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Pengumuman</span>
              </a>
            </li>
          <?php } ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Profil/admin') ?>">
              <i class="fa fa-user menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data Users
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form pendaftaran User Baru</h4>
                  <form id="example-form" onsubmit="submitform(event)">
                    <div>
                      <h3>Account</h3>
                      <section>
                        <!-- <h4>Account</h4> -->
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" id="username" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
                        </div>
                        <div class="form-group">
                          <label>Level User</label>
                          <select type="text" id='id_level' name="id_level" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                            <option value="">-- Pilih Level --</option>
                          </select>
                        </div>

                      </section>
                      <h3>Profile</h3>
                      <section>
                        <h4>Profile</h4>
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" name="name" id="name" class="form-control" aria-describedby="emailHelp" placeholder="Nama Lengkap" required autofocus>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select type="text" id='gender' name="gender" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Male">Laki-laki</option>
                            <option value="Female">Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="address" id="address" class="form-control" placeholder="Jl. Pegangsaan ......" required autofocus>
                        </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <h4>Finish</h4>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--vertical wizard-->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/assets/js/misc.js"></script>
  <script src="<?= base_url(); ?>/assets/js/settings.js"></script>
  <script src="<?= base_url(); ?>/assets/js/todolist.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/axios/dist/axios.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>/assets/js/wizard.js"></script>

  <script>
    // Get Data level
    var level = document.getElementById('id_level');

    axios.get(`<?php echo base_url(); ?>/api/settings/levels`).then(
      res => {
        const {
          data
        } = res.data;

        data.forEach(item => {
          var opt = document.createElement("option");
          opt.value = item.id;
          opt.text = item.level;
          level.appendChild(opt);

        })
      });

    // Post Data    
    const submitform = (event) => {
      event.preventDefault();
      let formData = new FormData(event.target);
      formData.append('id_level', $('#id_level').val());
      console.log(formData);
      axios.post(`<?php echo base_url(); ?>/api/visitors/insert`, formData).then(res => {
        console.log(res)
        let status = res.data.status;
        let data = res.data.data;
        if (status === 422) {
          let message = Object.values(data)[0];
          swal('Validasi Inputan', message, 'error');
          return;
        }

      });
      axios.post(`<?php echo base_url(); ?>/api/users/insert`, formData).then(res => {
        console.log(res)
        let status = res.data.status;
        let data = res.data.data;
        if (status === 422) {
          let message = Object.values(data)[0];
          swal('Validasi Inputan', message, 'error');
          return;
        }
        window.location.href = `<?php echo base_url('datamaster/users'); ?>`;
        // dataTable.ajax.reload();
        // $('#modal-catalog-category').modal('hide');
      });

    }
  </script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:26 GMT -->

</html>