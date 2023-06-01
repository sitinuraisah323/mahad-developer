<?php echo $this->extend('layouts/users'); ?>
<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Data Umum</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Guru</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List ustad & ustadzah</h4>
                            <p class="card-description">Beriku beberapa ustad & ustadzah yang ada di Ma'had Al-Jami'ah IAIN Syekh Nurjati</p>
                            <div class="row">
                                <div class="col-md-12 h-100">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <i class="fas fa-table"></i>
                                                     List Data
                                                </h4>
                                                <div class="table-responsive">
                                                    <table class="table" id="table-1">
                                                        <thead>
                                                            <tr>
                                                                <th>#Id</th>
                                                                <th>Name</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Alamat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <?php echo $this->endSection(); ?>

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
                if (id === '') {
                    axios.post(`<?php echo base_url(); ?>/api/visitors/insert`, formData).then(res => {
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
                    axios.post(`<?php echo base_url(); ?>/api/visitors/updated`, formData).then(res => {
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
                        url: `<?php echo base_url(); ?>/api/visitors/teacher`,
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
                            data: "name"
                        },
                        {
                            data: "gender",
                            render: function(data, type, row) {
                                gender = data == 'Female' ? `<label class="badge badge-success badge-pill">Perempuan</label>` : `<label class="badge badge-info badge-pill">Laki - laki</label>`;
                                return gender;
                            }

                        },
                        {
                            data: "address"
                        },
                        
                    ],

                });
            }

            const btnDelete = (id) => {
                axios.get(`<?php echo base_url(); ?>/api/visitors/view/${id}`).then(res => {
                    swal({
                        title: 'Are you sure?',
                        text: `Once deleted, you will not be able to recover ${res.data.data.name}!`,
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            axios.get(`<?php echo base_url(); ?>/api/visitors/deleted/${id}`).then(res => {
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
                axios.get(`<?php echo base_url(); ?>/api/visitors/view/${id}`).then(res => {
                    $('#addRole').find('[name="id"]').val(res.data.data.id);
                    $('#addRole').find('[name="name"]').val(res.data.data.name);
                    $('#addRole').find('[name="gender"]').val(res.data.data.gender);
                    $('#addRole').find('[name="address"]').val(res.data.data.address);
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