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
                        <li class="breadcrumb-item"><a href="#">Materi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Audio Visual</li>
                    </ol>
                </nav>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Video</h4>
                            <div class="owl-carousel owl-theme video-carousel">
                                <div class="item-video">
                                    <iframe width="560" height="450" src="https://www.youtube.com/embed/F_qZpeJ00QI"></iframe>
                                </div>
                                <!-- <div class="item-video"><a class="owl-video" url="https://www.youtube.com/watch?v=F_qZpeJ00QI'"></a></div> -->
                                <!-- <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=noJKKOWFTuk&t=63s"></a></div>
                      <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=PAtIJVi_d8E"></a></div>
                      <div class="item-video"><a class="owl-video" href="https://vimeo.com/35451452"></a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Video</h4>
                            <div class="owl-carousel owl-theme video-carousel">
                                <!-- <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=F_qZpeJ00QI"></a></div> -->
                                <div class="item-video"><iframe width="560" height="450" src="https://www.youtube.com/embed/noJKKOWFTuk"></iframe></div>
                                <!-- <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=PAtIJVi_d8E"></a></div>
                      <div class="item-video"><a class="owl-video" href="https://vimeo.com/35451452"></a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Video</h4>
                            <div class="owl-carousel owl-theme video-carousel">
                            <div class="item-video"><iframe width="560" height="450" src="https://www.youtube.com/embed/PAtIJVi_d8E"></iframe></div>
                                <!-- <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=noJKKOWFTuk&t=63s"></a></div>
                      <div class="item-video"><a class="owl-video" href="https://www.youtube.com/watch?v=PAtIJVi_d8E"></a></div>
                      <div class="item-video"><a class="owl-video" href="https://vimeo.com/35451452"></a></div> -->
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

        <script src="<?php echo base_url(); ?>/assets/js/owl-carousel.js"></script>

        <script type="text/javascript">
            var dataTable;
            const formClear = () => {
                $('#addSubject').find('[name="id"]').val('');
                $('#addSubject').find('[name="name"]').val('');
                $('#addSubject').find('[name="description"]').val('');
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
                    axios.post(`<?php echo base_url(); ?>/api/subject/subject/insert`, formData).then(res => {
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
                    axios.post(`<?php echo base_url(); ?>/api/subject/subject/updated`, formData).then(res => {
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
                        url: `<?php echo base_url(); ?>/api/subject/subject`,
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
                axios.get(`<?php echo base_url(); ?>/api/subject/subject/view/${id}`).then(res => {
                    swal({
                        title: 'Are you sure?',
                        text: `Once deleted, you will not be able to recover ${res.data.data.level}!`,
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            axios.get(`<?php echo base_url(); ?>/api/subject/subject/deleted/${id}`).then(res => {
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
                axios.get(`<?php echo base_url(); ?>/api/subject/subject/view/${id}`).then(res => {
                    $('#addSubject').find('[name="id"]').val(res.data.data.id);
                    $('#addSubject').find('[name="name"]').val(res.data.data.name);
                    $('#addSubject').find('[name="description"]').val(res.data.data.description);
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