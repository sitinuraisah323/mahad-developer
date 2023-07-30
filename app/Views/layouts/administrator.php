<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAHAD || E LEARNING</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
    <div class="container-scroller">

        <!-- start site-header -->
        <?php echo view('includes/administrator/menubar'); ?>
        <!-- end site-header -->

        <!-- Main Content -->

        <?php echo $this->renderSection('content'); ?>

        <!-- End Content -->

        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 . TEAM IT.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made with <i class="far fa-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    <!-- General JS Scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/app.min.js"></script>

    <!-- JS Libraies -->


    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/axios/dist/axios.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/page/ion-icons.js"></script>

    
    <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/export-tables/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/export-tables/dataTables.buttons.min.js">
    </script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
    <!-- <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script> -->
    <script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>
    <!-- Add Canvas.js -->
    <!-- <script src="<?php echo base_url(); ?>/assets/canvas/canvasjs.min.js" type="text/javascript"></script> -->
    <script src="<?= base_url(); ?>/assets/js/settings.js"></script>
    <script src="<?= base_url(); ?>/assets/js/todolist.js"></script>
    <script src="<?= base_url(); ?>/assets/js/wizard.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dropify.js"></script>
    
    <script>
        function convertToRupiah(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return rupiah.split('', rupiah.length - 1).reverse().join('');
        }
    </script>


    <?php echo $this->renderSection('jslibraies'); ?>
</body>

<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>