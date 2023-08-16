<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SITOKO v2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('') ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/node_modules/toastr/build/toastr.min.css">
</head>

<body class="hold-transition layout-navbar-fixed text-sm layout-footer-fixed sidebar-mini-xs layout-fixed dark-mode"
  style="height: auto;">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url('SITOKO-WHITE.png') ?>" alt="AdminLTELogo" height="500"
        width="500">
    </div>

    <!-- Navbar -->
    <?= $this->include('admin/layout/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('admin/layout/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <?= $this->renderSection('content'); ?>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?= $this->include('admin/layout/footer'); ?>
  </div>
  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="<?= base_url('') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>/node_modules/toastr/build/toastr.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('') ?>plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('') ?>dist/js/adminlte.min.js"></script>
  <script>
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };
  </script>

  <?= $this->renderSection('script'); ?>

  <?php
  if (session()->getFlashdata('dataMessage')) {
    foreach (session()->getFlashdata('dataMessage') as $item) {
      echo '<script>toastr["' .
        session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
    }
  }
  if (session()->getFlashdata('message')) {
    echo '<script>toastr["' .
      session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
  }
  ?>

</body>

</html>