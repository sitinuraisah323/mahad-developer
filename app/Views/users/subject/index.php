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
                <h3 class="page-title">
                    Data Utadz & Ustadzah
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Personal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jadwal Pembelajaran</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container text-center pt-5">
                                <h4 class="mb-3 mt-5">Start up your Bussiness today</h4>
                                <p class="w-75 mx-auto mb-5">Choose a plan that suits you the best. If you are not fully satisfied, we offer 30-day money-back guarantee no questions asked!!</p>
                                <div class="row pricing-table">
                                    <div class="col-md-4 grid-margin stretch-card pricing-card">
                                        <div class="card border-primary border pricing-card-body">
                                            <div class="text-center pricing-card-head">
                                                <h3>Free</h3>
                                                <p>Basic Plan</p>
                                                <h1 class="font-weight-normal mb-4">$00.00</h1>
                                            </div>
                                            <ul class="list-unstyled plan-features">
                                                <li>Email preview on air</li>
                                                <li>Spam testing and blocking</li>

                                            </ul>
                                            <div class="wrapper">
                                                <a href="#" class="btn btn-outline-primary btn-block">Download</a>
                                            </div>
                                            <p class="mt-3 mb-0 plan-cost text-gray">Free</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 grid-margin stretch-card pricing-card">
                                        <div class="card border border-success pricing-card-body">
                                            <div class="text-center pricing-card-head">
                                                <h3 class="text-success">Professional</h3>
                                                <p>For Business</p>
                                                <h1 class="font-weight-normal mb-4">$50.90</h1>
                                            </div>
                                            <ul class="list-unstyled plan-features">
                                                <li>Email preview on air</li>
                                                <li>Spam testing and blocking</li>

                                            </ul>
                                            <div class="wrapper">
                                                <a href="#" class="btn btn-success btn-block">Start trial</a>
                                            </div>
                                            <p class="mt-3 mb-0 plan-cost text-success">or purchase now</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 grid-margin stretch-card pricing-card">
                                        <div class="card border border-primary pricing-card-body">
                                            <div class="text-center pricing-card-head">
                                                <h3>Enterprise</h3>
                                                <p>Custom Business</p>
                                                <h1 class="font-weight-normal mb-4">$80.90</h1>
                                            </div>
                                            <ul class="list-unstyled plan-features">
                                                <li>Email preview on air</li>
                                                <li>Spam testing and blocking</li>

                                            </ul>
                                            <div class="wrapper">
                                                <a href="#" class="btn btn-outline-primary btn-block">Start trial</a>
                                            </div>
                                            <p class="mt-3 mb-0 plan-cost text-gray">or purchase now</p>
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