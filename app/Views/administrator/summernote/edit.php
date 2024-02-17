<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/text_editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:26 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/summernote/dist/summernote-bs4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
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
      <!-- partial:../../partials/_settings-panel.html -->
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
      <!-- partial:../../partials/_sidebar.html -->
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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">

            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Editors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pembelajaran</li>
              </ol>
            </nav>
          </div>
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <form id="example-form" action="/SummernoteController/updated/<?= $summernote['id']; ?>">
                  <div class="card-body">
                    <h4 class="card-title">Editor</h4>
                    <div class="row mt-2">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="subject">
                              <?php foreach ($subject as $s) : ?>
                                <option value="<?= $s->id; ?>" <?php echo ($s->id == $summernote['subject']) ? 'selected' : ''; ?>><?= $s->name; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sub Subject</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="sub_subject" name="sub_subject" value="<?= $summernote['sub_subject']; ?>" placeholder="Judul Sub Subject">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea id="summernoteExample" name="summernoteExample" placeholder="">
                          <?= $summernote['content']; ?>
                      </textarea>
                    </div>

                    <div class="mt-2">
                      <button type="submit" class="btn btn-info btn-save">Edit</button>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
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
  <script src="<?php echo base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo base_url(); ?>/assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendors/tinymce/themes/modern/theme.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendors/summernote/dist/summernote-bs4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>/assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/todolist.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/axios/dist/axios.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>/assets/js/editorDemo.js"></script>
  <!-- End custom js for this page-->
  <!-- <script type="text/javascript">
      var dataTable;
      const formClear = () => {
        $('#addRole').find('[name="id"]').val('');
        $('#addRole').find('[name="subject"]').val('');
        $('#addRole').find('[name="content"]').val('');
      }
      const openModal = () => {
        formClear();

        $('#addRole').modal('show');
      }

      $('#upload-file').on('change', function(event) {
        $('#addRole').find('.btn-save').addClass('d-none');
        let file = event.target.files[0];
        let formData = new FormData();
        formData.append('file', file);
        axios.post(`<?php echo base_url(); ?>/api/filedrives/upload`, formData).then(res => {
          let id = res.data.data.id;
          $('#id_file_drive').val(id);
        }).then(res => {
          $('#addRole').find('.btn-save').removeClass('d-none');
        })
      });

      const submitform = (event) => {
        event.preventDefault();
        let formData = new FormData(event.target);
        console.log(formData);
          axios.post(`<?php echo base_url(); ?>/api/Summernote/SummerNote/insert`, formData).then(res => {
            let status = res.data.status;
            let data = res.data.data;
            if (status === 422) {
              let message = Object.values(data)[0];
              swal('Validasi Inputan', message, 'error');
              return;
            }
            formClear();
            dataTable.ajax.reload();
            $('#addRole').modal('hide');
          });
        // } else {
        //   axios.post(`<?php echo base_url(); ?>/api/Summernote/SummerNote/updated`, formData).then(res => {
        //     let status = res.data.status;
        //     let data = res.data.data;
        //     console.log(status)
        //     if (status === 422) {
        //       let message = Object.values(data)[0];
        //       swal('Validasi Inputan', message, 'error');
        //       return;
        //     }
        //     formClear();
        //     dataTable.ajax.reload();
        //     $('#addRole').modal('hide');
        //   });
        // }
      }

      const initDataTable = () => {
        dataTable = $('#table-1').DataTable({
          ordering: true,
          retrieve: true,
          dom: 'Bfrtip',
          pageLength: 25,
          destroy: true,
          bDestroy: true,
          processing: true,
          serverSide: false,
          ajax: {
            url: `<?php echo base_url(); ?>/api/settings/levels`,
            dataFilter: function(data) {
              var json = jQuery.parseJSON(data);
              json.recordsTotal = json.message.totalRecord;
              json.recordsFiltered = json.message.totalRecord;
              json.data = json.data;
              return JSON.stringify(json); // return JSON string
            },
          },
          columns: [{
              data: "id"
            },
            {
              data: "level"
            },
            {
              data: function(data) {
                return ` <button  onclick="btnEdit(${data.id})" class="btn btn-info btn-edit">Edit</button>
                                      <button  onclick="btnDelete(${data.id})" class="btn btn-danger btn-delete">Delete</button>`;
              }
            }
          ],
        });
      }

      const btnDelete = (id) => {
        axios.get(`<?php echo base_url(); ?>/api/Summernote/SummerNote/view/${id}`).then(res => {
          swal({
            title: 'Are you sure?',
            text: `Once deleted, you will not be able to recover ${res.data.data.level}!`,
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
              axios.get(`<?php echo base_url(); ?>/api/Summernote/SummerNote/deleted/${id}`).then(res => {
                swal(`Poof! ${res.data.data.level} has been deleted!`, {
                  icon: 'success',
                });
                dataTable.ajax.reload();
              });
            } else {
              swal('Your imaginary file is safe!');
            }
          });
        })

      }

      const btnEdit = (id) => {
        axios.get(`<?php echo base_url(); ?>/api/Summernote/SummerNote/view/${id}`).then(res => {
          $('#addRole').find('[name="id"]').val(res.data.data.id);
          $('#addRole').find('[name="level"]').val(res.data.data.level);
          $('#addRole').find('[name="description"]').val(res.data.data.description);
        }).then(res => $('#addRole').modal('show'))
      }

      const btnHistory = (id) => {
        url = `<?php echo base_url(); ?>/api/settings/levelshistories?id_price_lm=${id}`;
        dataTableHistory.ajax.url(url).load();
        $('#modal-history').modal('show');
      }

      initDataTable();
    </script> -->

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
      //   formData.append('id_level', $('#id_level').val());
      console.log(formData);
      axios.post(`<?php echo base_url(); ?>/api/Summernote/SummerNote/insert`, formData).then(res => {
        console.log(res)
        let status = res.data.status;
        let data = res.data.data;
        if (status === 422) {
          let message = Object.values(data)[0];
          swal('Validasi Inputan', message, 'error');
          return;
        }
        window.location.href = `<?php echo base_url('SummernoteController/index'); ?>`;
        // dataTable.ajax.reload();
        // $('#modal-catalog-category').modal('hide');
      });

    }
  </script>
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/text_editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:29 GMT -->

</html>