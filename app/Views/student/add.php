<?php echo $this->extend('layouts/administrator'); ?>

<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets-panel/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets-panel/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Form wizard
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Wizard</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <!-- <h4 class="card-title">jquery-steps wizard</h4> -->
            <form onsubmit="submitform(event)">
              <div>
                <h3>Account</h3>
                <section>
                  <h4>Account</h4>
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm" class="form-control" placeholder="Confirm password">
                  </div>
                </section>
                <h3>Profile</h3>
                <section>
                  <h4>Profile</h4>
                  <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter first name">
                  </div>
                  <div class="form-group">
                    <label>Last name</label>
                    <input type="password" class="form-control" placeholder="Last name">
                  </div>
                  <div class="form-group">
                    <label>Profession</label>
                    <input type="password" class="form-control" placeholder="Profession">
                  </div>
                </section>
                <h3>Comments</h3>
                <section>
                  <h4>Comments</h4>
                  <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </section>
                <h3>Finish</h3>
                <section>
                  <h4>Finish</h4>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      I agree with the Terms and Conditions.
                    </label>
                  </div>
                </section>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--vertical wizard-->
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <?php echo $this->endsection(); ?>
  <!-- container-scroller -->
  <?php echo $this->section('jslibraies') ?>
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/assets/js/misc.js"></script>
  <script src="<?= base_url(); ?>/assets/js/settings.js"></script>
  <script src="<?= base_url(); ?>/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>/assets/js/wizard.js"></script>
  <!-- End custom js for this page-->
  <?php echo $this->endSection(); ?>