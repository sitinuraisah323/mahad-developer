<?php echo $this->extend('layouts/login'); ?>

<?php echo $this->section('content'); ?>

<section>
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
      <div class="row flex-grow">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
          <div class="auth-form-transparent text-left p-3">
            <h3 class="card-title text-center pb-3 fs-2 mb-0"> أَهْلًا وَسَهْلًا فِيْ</h3>
            <p class="text-center small mt-0"><b>MA'HAD AL JAMI'AH IAIN SYEKH NURJATI</b></p>
            <!-- <h6 class="font-weight-light">Happy to see you again!</h6> -->
            <form class="pt-3" onsubmit="loginHandler(event)">
              <div class="alert alert-danger d-none">
                Username / Password Salah
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="fa fa-user text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control form-control-lg border-left-0" id="username" name="username" placeholder="Username" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="fa fa-lock text-primary"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control form-control-lg border-left-0" id="password" name="password" placeholder="Password" required>
                </div>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Keep me signed in
                  </label>
                </div>
                <a href="#" class="auth-link text-black">Forgot password?</a>
              </div>
              <div class="my-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn btnlogin" type="submit">LOGIN</button>
              </div>
              <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 login-half-bg d-flex flex-row">
          <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023 TEAM IT MAHAD AL JAMI'AH.</p>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
</section>

<!-- page-body-wrapper ends -->
<?php echo $this->endsection(); ?>

<?php echo $this->section('jslibraries') ?>
<script type="text/javascript">
  const loginHandler = (event) => {
    console.log('2134');
    event.preventDefault();
    let formData = new FormData();
    formData.append('username', $('#username').val());
    formData.append('password', $('#password').val());
    console.log(formData);
    axios.post(`<?php echo base_url(); ?>/api/auth/login`, formData).then(res => {
      if (res.data.status !== 201) {

        $('.alert-danger').removeClass('d-none');
        return;
      }
      console.log(res.data.data.user.id_level);
      if(res.data.data.user.id_level == 1){
        location.href = `<?php echo base_url('/dashboard');?>`;
      }
      else{
        location.href = `<?php echo base_url('/dashboard/users');?>`;
      }
      
    })
  }
</script>
<?php echo $this->endSection(); ?>