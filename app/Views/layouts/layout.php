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

  <?= view_cell("HeaderCell") ?>
  <?= view_cell("SidebarCell") ?>
  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <?php if($hlm_name == "Home") : ?>
                    <li class="breadcrumb-item active"><a href="/">Home</a></li>
                <?php else : ?>
                    <li class="breadcrumb-item "><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#"><?= $hlm_name ?></a></li>

                <?php endif ?>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><?= $hlm_name ?></h5>
                <?= $this->renderSection('content') ?>
                </div>
            </div>

            </div>
        </div>
        </section>

    </main><!-- End #main -->
  <?= view_cell("FooterCell") ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="<?= base_url('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/chart.js/chart.umd.js') ?>"></script>
  

  <!-- Template Main JS File -->
  <script src="<?= base_url('NiceAdmin/assets/js/main.js') ?>"></script>

</body>

</html>