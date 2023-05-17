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
            <a href="<?php echo base_url('datamaster/users/create') ?>">
              <button type="button" class="btn btn-inverse-primary btn-fw">
                <i class="fa fa-plus"></i> Buat Baru
              </button>
            </a>
          </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" id="table-1">
              <thead>
                <tr>
                  <th>#Id</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>

      </div>
    </div>
  </div>

  <form onsubmit="submitform(event)" class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
      <!-- <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true"> -->
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Form add role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="id_visitor" value="">
            <input type="hidden" name="password_id" value="">
            <div class="form-group">
              <label for="username" class="col-form-label">Username</label>
              <input type="text" class="form-control" name="username" id="username" required autofocus>
            </div>
            <div class="form-group">
              <label for="email" class="col-form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" required autofocus>
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
              <label for="level" class="col-form-label">Level</label>
              <select type="text" id = 'id_level' name = "id_level" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
              </select>
            </div>
            

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-save">Save</button>
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </form>
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
                render: function ( data, type, row ) { 
                  if (data == 1) {
                    return 'Administrator';
                  }else if(data==2){
                    return "Guru";
                  }else{
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
          
          // var level = document.getElementById('id_level');
        
          // axios.get(`<?php echo base_url(); ?>/api/settings/levels`).then(
          //   res => {
          //       const {
          //           data
          //       } = res.data;
                
          //       data.forEach(item => {
          //           var opt = document.createElement("option");
          //           opt.value = item.id;
          //           opt.text = item.level;
          //           level.appendChild(opt);

          //       })
          //   });
          // if (res.data.data.id_level == 1) {
          //   level = 'Administrator';
          // }else if(res.data.data.id_level==2){
          //   level =  "Guru";
          // }else{
          //   level =  "Siswa";
          // }      
          // $('#addRole').find('[name="id_level"]').val(level);

        }).then(res => $('#addRole').modal('show'))
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