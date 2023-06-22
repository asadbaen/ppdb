<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
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
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?php echo base_url() ?>assets/img/logo.png" alt="">
                </a>
              </div><!-- End Logo -->
              <h3 class="d-none d-lg-block text-center">TK TUNAS HARAPAN BANGSA</h3>
              <div class="card mb-3">
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">BUAT AKUNMU</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="user row g-3" action="<?= base_url('register') ?>" method="post">
                    <div class="col-12">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="username" class="form-control" id="name" value="<?php echo set_value('username') ?>">
                      <?= form_error('username'); ?>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email') ?>">
                      <?= form_error('email'); ?>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password1" class="form-control" id="password1" value="<?= set_value('password1'); ?>">
                      <?= form_error('password1'); ?>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Ulangi Password</label>
                      <input type="password" name="password2" class="form-control" id="password2">
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit"> BUAT AKUN</button>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?= base_url('Auth') ?>">sudah punya akun? Login!</a>
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