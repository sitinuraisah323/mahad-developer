<?php echo $this->extend('layouts/administrator'); ?>

<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets-panel/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets-panel/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Profile
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Sample Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="border-bottom text-center pb-4">
                  <img src="<?= base_url(); ?>/assets/images/faces/users2.png" alt="profile" class="img-lg rounded-circle mb-3" />
                  <h3>

                  </h3>
                  <!-- <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p> -->
                  <div class="d-flex justify-content-between">
                    <button class="btn btn-primary">Santri Generasi Indonesia</button>
                    <h3><?= session('user.username'); ?></h3>
                    <button class="btn btn-primary">Beramal untuk Negara</button>
                  </div>
                </div>
                <!-- <div class="border-bottom py-4">
                  <p>Kelas</p>
                  <div>
                    <label class="badge badge-outline-dark">Beramal</label>
                    <label class="badge badge-outline-dark">Hand lettering</label>
                    <label class="badge badge-outline-dark">Information Design</label>
                    <label class="badge badge-outline-dark">Graphic Design</label>
                    <label class="badge badge-outline-dark">Web Design</label>
                  </div>
                </div> -->
                <div class="border-bottom py-4">
                  <div class="d-flex mb-3">
                    <div class="progress progress-md flex-grow">
                      <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="progress progress-md flex-grow">
                      <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                        </div>
                      </div>
                  <div class="py-4">
                  <p class="clearfix">
                    <span class="float-left">
                      Nama
                    </span>
                    <span class="float-right text-muted">
                      <?= session('user.name'); ?>
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      Status
                    </span>
                    <span class="float-right text-muted">
                      <?= session('user.level'); ?>
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      Jenis Kelamin
                    </span>
                    <span class="float-right text-muted">
                      <?= session('user.gender'); ?>
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      Mail
                    </span>
                    <span class="float-right text-muted">
                      <?= session('user.email'); ?>
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      Alamat
                    </span>
                    <span class="float-right text-muted">
                      <?= session('user.address'); ?>
                    </span>
                  </p>

                </div>
                <!-- <button class="btn btn-primary btn-block">Preview</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <?php echo $this->endsection(); ?>

  <?php echo $this->section('jslibraies') ?>
  <script src="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>/assets/js/page/datatables.js"></script> -->
  <script src="<?php echo base_url(); ?>/assets/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->

  <script src="<?php echo base_url(); ?>/assets/js/page/sweetalert.js"></script>

  <script type="text/javascript">
    var dataTable;
    const formClear = () => {
      $('#addRole').find('[name="id"]').val("");
      $('#addRole').find('[name="username"]').val("");
      // $('#addRole').find('[name="first_name"]').val("");
      // $('#addRole').find('[name="last_name"]').val("");
      $('#addRole').find('[name="email"]').val("");
      $('#addRole').find('[name="password"]').val("");
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
      let id = $('#addRole').find('[name="id"]').val();
      let id_visitor = $('#addRole').find('[name="id_visitor"]').val();
      let password = $('#addRole').find('[name="password_id"]').val();
      if (id === '') {
        axios.post(`<?php echo base_url(); ?>/api/auth/insert`, formData).then(res => {
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
      } else {
        axios.post(`<?php echo base_url(); ?>/api/users/updated`, formData).then(res => {
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
      }
    }

    // Tabel Users
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
          url: `<?php echo base_url(); ?>/api/users`,
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
            data: "username"
          },
          {
            data: "email"
          },
          {
            data: "id_level",
            render: function(data, type, row) {
              if (data == 1) {
                return 'Administrator';
              } else if (data == 2) {
                return "Guru";
              } else {
                return "Siswa";
              }
            }
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
      axios.get(`<?php echo base_url(); ?>/api/users/view/${id}`).then(res => {
        swal({
          title: 'Are you sure?',
          text: `Once deleted, you will not be able to recover ${res.data.data.level}!`,
          icon: 'warning',
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            axios.get(`<?php echo base_url(); ?>/api/users/deleted/${id}`).then(res => {
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
      axios.get(`<?php echo base_url(); ?>/api/users/view/${id}`).then(res => {
        $('#addRole').find('[name="id"]').val(res.data.data.id);
        $('#addRole').find('[name="username"]').val(res.data.data.username);
        $('#addRole').find('[name="email"]').val(res.data.data.email);
        $('#addRole').find('[name="password"]').val();

      }).then(res => $('#addRole').modal('show'))
    }

    axios.get(`<?php echo base_url(); ?>/api/settings/levels`).then(res => {
      $('[name="id_level"]').append(`<option value="">--Pilih Level--</option>`)
      res.data.data.forEach(data => {
        $('[name="id_level"]').append(`<option value="${data.id}">${data.level}</option>`)
      })
    })

    const view = () => {

      axios.get(`<?php echo base_url(); ?>/api/users/view/${id}`).then(res => {
        $('#addRole').find('[name="id"]').val(res.data.data.id);
        $('#addRole').find('[name="username"]').val(res.data.data.username);
        $('#addRole').find('[name="email"]').val(res.data.data.email);
        $('#addRole').find('[name="password"]').val();

      }).then(res => $('#addRole').modal('show'))
    }


    initDataTable();
  </script>
  <?php echo $this->endSection(); ?>