
<?php
$hlm_name = "Home";
if(uri_string() != "")
{
    $hlm_name = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>- Toko - <?= $hlm_name ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="<?= base_url('NiceAdmin/assets/css/style.css') ?>" rel="stylesheet">

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
    <?= $this->renderSection('content') ?>
  </main>
  <script src="<?= base_url('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/chart.js/chart.umd.js') ?>"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('NiceAdmin/assets/js/main.js') ?>"></script>

</body>

</html>