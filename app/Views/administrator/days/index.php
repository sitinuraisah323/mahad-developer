<?php echo $this->extend('layouts/administrator'); ?>

<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Jadwal Hari Pembelajaran
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jadwal Hari Pembelajaran</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">List Jadwal Hari Pembelajaran</h4>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <button type="button" class="btn btn-inverse-info btn-fw" data-toggle="modal" data-target="#addSubject" data-whatever="@fat">
                                <i class="fa fa-plus"></i> Buat Baru
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover" id="table-1">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>Name</th>
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

        <!-- Add data -->

        <form onsubmit="submitform(event)" class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
            <!-- <div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true"> -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Form add Materi Pembelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required autofocus>
                        </div>
                        <!-- <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" name="description" id="description" required></textarea>
                        </div> -->

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
                $('#addSubject').find('[name="id"]').val('');
                $('#addSubject').find('[name="name"]').val('');
            }
            const openModal = () => {
                formClear();

                $('#addSubject').modal('show');
            }

            $('#upload-file').on('change', function(event) {
                $('#addSubject').find('.btn-save').addClass('d-none');
                let file = event.target.files[0];
                let formData = new FormData();
                formData.append('file', file);
                axios.post(`<?php echo base_url(); ?>/api/filedrives/upload`, formData).then(res => {
                    let id = res.data.data.id;
                    $('#id_file_drive').val(id);
                }).then(res => {
                    $('#addSubject').find('.btn-save').removeClass('d-none');
                })
            });

            const submitform = (event) => {
                event.preventDefault();
                let formData = new FormData(event.target);
                let id = $('#addSubject').find('[name="id"]').val();
                if (id === '') {
                    axios.post(`<?php echo base_url(); ?>/api/Days/Days/insert`, formData).then(res => {
                        let status = res.data.status;
                        let data = res.data.data;
                        if (status === 422) {
                            let message = Object.values(data)[0];
                            swal('Validasi Inputan', message, 'error');
                            return;
                        }
                        formClear();
                        dataTable.ajax.reload();
                        $('#addSubject').modal('hide');
                    });
                } else {
                    axios.post(`<?php echo base_url(); ?>/api/Days/Days/updated`, formData).then(res => {
                        let status = res.data.status;
                        let data = res.data.data;
                        if (status === 422) {
                            let message = Object.values(data)[0];
                            swal('Validasi Inputan', message, 'error');
                            return;
                        }
                        formClear();
                        dataTable.ajax.reload();
                        $('#addSubject').modal('hide');
                    });
                }
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
                        url: `<?php echo base_url(); ?>/api/Days/Days`,
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
                            data: function(data) {
                                return `   <button  onclick="btnEdit(${data.id})" class="btn btn-info btn-edit">Edit</button>
                                      <button  onclick="btnDelete(${data.id})" class="btn btn-danger btn-delete">Delete</button>`;
                            }
                        }
                    ],
                });
            }

            const btnDelete = (id) => {
                axios.get(`<?php echo base_url(); ?>/api/Days/Days/view/${id}`).then(res => {
                    swal({
                        title: 'Are you sure?',
                        text: `Once deleted, you will not be able to recover ${res.data.data.level}!`,
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            axios.get(`<?php echo base_url(); ?>/api/Days/Days/deleted/${id}`).then(res => {
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
                axios.get(`<?php echo base_url(); ?>/api/Days/Days/view/${id}`).then(res => {
                    $('#addSubject').find('[name="id"]').val(res.data.data.id);
                    $('#addSubject').find('[name="name"]').val(res.data.data.name);
                    $('#addSubject').find('[name="startdate"]').val(res.data.data.startdate);
                    $('#addSubject').find('[name="enddate"]').val(res.data.data.enddate);
                }).then(res => $('#addSubject').modal('show'))
            }

            const btnHistory = (id) => {
                url = `<?php echo base_url(); ?>/api/settings/levelshistories?id_price_lm=${id}`;
                dataTableHistory.ajax.url(url).load();
                $('#modal-history').modal('show');
            }

            initDataTable();
        </script>
        <?php echo $this->endSection(); ?>