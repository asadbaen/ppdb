<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User / Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets'); ?>/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets'); ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets'); ?>/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">

                <h4>Website Pendaftaran Peserta <span>Didik Baru</span></h4>

                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <?= $this->session->flashdata('message'); ?>

                  <form class="row g-3 needs-validation" action="<?= site_url('Auth'); ?>" method="post">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="email">@</span>
                        <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                        <div class="invalid-feedback">Mohon Masukkan email</div>
                      </div>
                    </div>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="Password" value="<?= set_value('password'); ?>">
                      <div class="invalid-feedback">Mohon Masukkan password!</div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">MASUK</button>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?= base_url('auth/registration') ?>">buat akunmu</a>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>