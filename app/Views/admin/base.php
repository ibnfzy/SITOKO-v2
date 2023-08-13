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
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?= $this->include('admin/layout/footer'); ?>
  </div>
  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="<?= base_url('') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('') ?>plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('') ?>dist/js/adminlte.min.js"></script>

  <?= $this->renderSection('script'); ?>
</body>

</html>