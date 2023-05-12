<?php echo $this->extend('layouts/administrator'); ?>

<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets-panel/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets-panel/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Data User
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data table</li>
        </ol>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <h4 class="card-title">Data User</h4>
          </div>

          <div class="col-lg-6 d-flex justify-content-end">
            <a href="<?php echo base_url('monitoring/users/create') ?>">
              <button type="button" class="btn btn-inverse-primary btn-fw">
                <i class="fa fa-plus"></i> Buat Baru
              </button>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Ima Nirmala</td>
                    <td>22</td>
                    <td>Garut Kota</td>
                    <td>D3</td>
                    <td>Manajemen Informatika</td>
                    <td>
                      <label class="badge badge-info">Perempuan</label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Setiawan</td>
                    <td>24</td>
                    <td>Majalengka</td>
                    <td>S1 </td>
                    <td>Tekhnik Informatika</td>
                    <td>
                      <label class="badge badge-danger">Laki - laki</label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Nirmala</td>
                    <td>20</td>
                    <td>Tokyo</td>
                    <td>S2</td>
                    <td>Akidah Akhlaq</td>
                    <td>
                      <label class="badge badge-success">Perempuan</label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <?php echo $this->endsection(); ?>

  <?php echo $this->section('jslibraies') ?>
  <script src="<?php echo base_url(); ?>/assets-panel/bundles/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets-panel/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
  </script>
  <script src="<?php echo base_url(); ?>/assets-panel/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>/assets-panel/js/page/datatables.js"></script> -->
  <script src="<?php echo base_url(); ?>/assets-panel/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?= base_url(); ?>/assets/js/wizard.js"></script>
  

  <script type="text/javascript">
    var dataTable;
    const formClear = () => {
      $('#modal-catalog-category').find('[name="id"]').val("");
      $('#modal-catalog-category').find('[name="username"]').val("");
      // $('#modal-catalog-category').find('[name="first_name"]').val("");
      // $('#modal-catalog-category').find('[name="last_name"]').val("");
      $('#modal-catalog-category').find('[name="email"]').val("");
      $('#modal-catalog-category').find('[name="password"]').val("");
    }
    const openModal = () => {
      formClear();

      $('#modal-catalog-category').modal('show');
    }

    $('#upload-file').on('change', function(event) {
      $('#modal-catalog-category').find('.btn-save').addClass('d-none');
      let file = event.target.files[0];
      let formData = new FormData();
      formData.append('file', file);
      axios.post(`<?php echo base_url(); ?>/api/filedrives/upload`, formData).then(res => {
        let id = res.data.data.id;
        $('#id_file_drive').val(id);
      }).then(res => {
        $('#modal-catalog-category').find('.btn-save').removeClass('d-none');
      })
    });

    const submitform = (event) => {
      event.preventDefault();
      let formData = new FormData(event.target);
      let id = $('#modal-catalog-category').find('[name="id"]').val();
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
          $('#modal-catalog-category').modal('hide');
        });
      } else {
        axios.post(`<?php echo base_url(); ?>/api/auth/updated`, formData).then(res => {
          let status = res.data.status;
          let data = res.data.data;
          if (status === 422) {
            let message = Object.values(data)[0];
            swal('Validasi Inputan', message, 'error');
            return;
          }
          formClear();
          dataTable.ajax.reload();
          $('#modal-catalog-category').modal('hide');
        });
      }
    }

    const initDataTable = () => {
      dataTable = $('#table-1').DataTable({
        serverSide: true,
        ordering: true,
        searching: true,
        ajax: {
          url: `<?php echo base_url(); ?>/api/auth`,
          dataFilter: function(data) {
            var json = jQuery.parseJSON(data);
            json.recordsTotal = json.message.totalRecord;
            json.recordsFiltered = json.message.totalRecord;
            json.data = json.data;
            return JSON.stringify(json); // return JSON string
          },
        },
        columns: [{
            //     data: "first_name"
            // },
            // {
            data: "username"
          },
          {
            data: "email"
          },
          {
            data: function(data) {
              return `<button  onclick="btnEdit(${data.id})" class="btn btn-info btn-edit">Edit</button>
                                 <button  onclick="btnDelete(${data.id})"  class="btn btn-danger btn-delete">Hapus</button>`;
            }
          }
        ],
        scrollY: 200,
        scroller: {
          loadingIndicator: true
        },
      });
    }

    const btnDelete = (id) => {
      axios.get(`<?php echo base_url(); ?>/api/auth/view/${id}`).then(res => {
        swal({
          title: 'Are you sure?',
          text: `Once deleted, you will not be able to recover ${res.data.data.name}!`,
          icon: 'warning',
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            axios.get(`<?php echo base_url(); ?>/api/auth/deleted/${id}`).then(res => {
              swal(`Poof! ${res.data.data.name} has been deleted!`, {
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
      axios.get(`<?php echo base_url(); ?>/api/auth/view/${id}`).then(res => {
        $('#modal-catalog-category').find('[name="id"]').val(res.data.data.id);
        $('#modal-catalog-category').find('[name="username"]').val(res.data.data.username);
        // $('#modal-catalog-category').find('[name="first_name"]').val(res.data.data.first_name);
        // $('#modal-catalog-category').find('[name="last_name"]').val(res.data.data.last_name);
        $('#modal-catalog-category').find('[name="email"]').val(res.data.data.email);
        $('#modal-catalog-category').find('[name="id_level"]').val(res.data.data.id_level);
      }).then(res => $('#modal-catalog-category').modal('show'))
    }

    axios.get(`<?php echo base_url(); ?>/api/settings/levels`).then(res => {
      $('[name="id_level"]').append(`<option value="">--Pilih Level--</option>`)
      res.data.data.forEach(data => {
        $('[name="id_level"]').append(`<option value="${data.id}">${data.level}</option>`)
      })
    })


    initDataTable();
  </script>
  <?php echo $this->endSection(); ?>