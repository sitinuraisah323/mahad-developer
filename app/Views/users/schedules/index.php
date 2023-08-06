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
                    Jadwal Pembelajaran
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
                                <div class="row">
                                    <?Php foreach ($schedule as $s) { ?>
                                        <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-primary">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header"><?php echo $s->hari; ?></h3>
                                            <div class="popover-body">
                                                <p><?php echo $s->materi; ?></p>
                                                <b><?php echo $s->startdate." - ".$s->enddate; ?></b>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->

            <?php echo $this->endSection(); ?>