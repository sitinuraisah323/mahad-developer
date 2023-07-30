<?php echo $this->extend('layouts/users'); ?>
<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
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
        <div class="col-12 grid-margin stretch-card d-none d-md-flex">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Halaman Informasi~</h4>
                    <div class="row">
                        <div class="col-4">
                            <ul class="nav nav-tabs nav-tabs-vertical-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-custom" data-toggle="tab" href="#home-3" role="tab" aria-controls="home-3" aria-selected="true">
                                        Daftar Ulang Santri Baru!
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-custom" data-toggle="tab" href="#profile-3" role="tab" aria-controls="profile-3" aria-selected="false">
                                        Nilai Sementara
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab-custom" data-toggle="tab" href="#contact-3" role="tab" aria-controls="contact-3" aria-selected="false">
                                        Tips untuk selalu semangat Belajar!
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-9 col-lg-6">
                            <div class="tab-content tab-content-vertical tab-content-vertical-custom">
                                <div class="tab-pane fade show active" id="home-3" role="tabpanel" aria-labelledby="home-tab-custom">
                                    <h3 class="font-weight-normal">Tahun Ajaran Baru Dimulai!</h3>
                                    <div class="d-flex mt-4">
                                        <!-- -->
                                        <img src="<?php echo base_url() ?>/assets/images/auth/santri.jpg" class="w-25 h-100 ml-2 rounded" alt="image" />
                                    </div>
                                    <p class="mt-4">
                                        Untuk kedatangan santri kembali ke pondok pesantren di bagi kepada dua tahap, untuk santri kelas 8,9, 11, dan 12, mereka kembali pada hari Minggu, 9 Juli 2023. Sementara santri kelas 7 dan kelas 10, atau santri baru, datang pada Rabu, 12 Juli 2023. Suasana bahagia, haru, sedih, dan keriuhan tampak di halaman pondok pesantren tersebut.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-custom">
                                    <div class="media">
                                        <img class="align-self-center mr-3 w-25 rounded" src="../../images/samples/300x300/15.jpg" alt="sample image">
                                        <div class="media-body">
                                            <p>
                                                And until then, I can never die? I'm a thing. Fry, you can't just sit here in the dark listening to
                                                classical music. Is today's hectic lifestyle making you tense and impatient? Is today's hectic lifestyle
                                                making you tense and impatient?
                                            </p>
                                            <p>
                                                Robot 1-X, save my friends! And Zoidberg! Aww, it's true. I've been hiding it for so long. Fry, we have a
                                                crate to deliver. Yes! In your face, Gandhi! Interesting. No, wait, the other thing: tedious.
                                            </p>
                                            <p>
                                                Five hours? Aw, man! Couldn't you just get me the death penalty? Yes! In your face, Gandhi! We're rescuing
                                                ya. Yeah, I do that with my stupidness. With gusto.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-3" role="tabpanel" aria-labelledby="contact-tab-custom">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">You've swallowed a planet!</h5>
                                            Did I mention we have comfy chairs? You hate me; you want to kill me! Well, go on! Kill me! KILL ME! I'm the Doctor,
                                            I'm worse than everyone's aunt. *catches himself* And that is not how I'm introducing myself.
                                        </div>
                                        <img class="ml-3 w-25" src="../../images/samples/300x300/5.jpg" alt="sample image">
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