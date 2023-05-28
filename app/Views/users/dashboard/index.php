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
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-user mr-2"></i>
                                        New users
                                    </p>
                                    <h2>54000</h2>
                                    <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-male mr-2"></i>
                                        Ustadz
                                    </p>
                                    <h2>123.50</h2>
                                    <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-female mr-2"></i>
                                        Ustadzah
                                    </p>
                                    <h2>3500</h2>
                                    <label class="badge badge-outline-success badge-pill">12% increase</label>
                                </div>

                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-book mr-2"></i>
                                        Materi
                                    </p>
                                    <h2>7500</h2>
                                    <label class="badge badge-outline-success badge-pill">57% increase</label>
                                </div>

                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Penilaian
                                    </p>
                                    <h2>9000</h2>
                                    <label class="badge badge-outline-success badge-pill">10% increase</label>
                                </div>

                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                        Pending
                                    </p>
                                    <h2>7500</h2>
                                    <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-table"></i>
                                Sales Data
                            </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Item code</th>
                                            <th>Orders</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-weight-bold">
                                                Clifford Wilson
                                            </td>
                                            <td class="text-muted">
                                                PT613
                                            </td>
                                            <td>
                                                350
                                            </td>
                                            <td>
                                                <label class="badge badge-success badge-pill">Dispatched</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                Mary Payne
                                            </td>
                                            <td class="text-muted">
                                                ST456
                                            </td>
                                            <td>
                                                520
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-pill">Processing</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                Adelaide Blake
                                            </td>
                                            <td class="text-muted">
                                                CS789
                                            </td>
                                            <td>
                                                830
                                            </td>
                                            <td>
                                                <label class="badge badge-danger badge-pill">Failed</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                Adeline King
                                            </td>
                                            <td class="text-muted">
                                                LP908
                                            </td>
                                            <td>
                                                579
                                            </td>
                                            <td>
                                                <label class="badge badge-primary badge-pill">Delivered</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                Bertie Robbins
                                            </td>
                                            <td class="text-muted">
                                                HF675
                                            </td>
                                            <td>
                                                790
                                            </td>
                                            <td>
                                                <label class="badge badge-info badge-pill">On Hold</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-calendar-alt"></i>
                                Calendar
                            </h4>
                            <div id="inline-datepicker-example" class="datepicker"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-thumbtack"></i>
                                Todo
                            </h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                <button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse todo-list">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Meeting with Alisa
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Call John
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Create invoice
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Print Statements
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Prepare for presentation
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Pick up kids from school
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-rocket"></i>
                                Projects
                            </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Assigned to
                                            </th>
                                            <th>
                                                Project name
                                            </th>
                                            <th>
                                                Priority
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face1.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                South Shyanne
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-pill">Medium</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face2.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                New Trystan
                                            </td>
                                            <td>
                                                <label class="badge badge-danger badge-pill">High</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face3.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                East Helga
                                            </td>
                                            <td>
                                                <label class="badge badge-success badge-pill">Low</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face4.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                Omerbury
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-pill">Medium</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <button class="btn btn-social-icon btn-facebook btn-rounded">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Facebook</h5>
                                        <p class="mb-0">813 friends</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <button class="btn btn-social-icon btn-twitter btn-rounded">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Twitter</h5>
                                        <p class="mb-0">9000 followers</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <button class="btn btn-social-icon btn-google btn-rounded">
                                        <i class="fab fa-google-plus-g"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Google plus</h5>
                                        <p class="mb-0">780 friends</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-social-icon btn-linkedin btn-rounded">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Linkedin</h5>
                                        <p class="mb-0">1090 connections</p>
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