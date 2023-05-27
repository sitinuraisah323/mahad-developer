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
                    Schedules
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
                        <div class="card-body" style="text-align:center">
                            <h4 class="card-title">Jadwal Pembelajaran</h4>
                            <p class="card-description">Berikut jadwal pembelajaran yang berlaku saat ini di Ma'had IAIN Syekh Nurjati</p>
                            <div class="popover-static-demo">
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-success">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Minggu</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-warning">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Senin</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-danger">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Selasa</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-info">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Rabu</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-primary">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Kamis</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Jum'at</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-dark">
                                    <div class="arrow"></div>
                                    <h3 class="popover-header">Sabtu</h3>
                                    <div class="popover-body">
                                        <p>Al-Qur'an Hadits</p>
                                        <b>13.00 - 16.00</b>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <?php echo $this->endSection(); ?>