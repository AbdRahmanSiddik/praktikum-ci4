<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Crocs admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Crocs admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?= base_url('') ?>assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?= base_url('') ?>assets/images/favicon.png" type="image/x-icon">
  <title><?= esc($title) ?></title>
  
  <?= $this->include('components\admin\head') ?>

</head>

<body onload="startTime()">
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="loader">
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
    </div>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?= $this->include('components\admin\nav-header') ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper" data-layout="fill-svg">
        <div>
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?= base_url('') ?>assets/images/logo/logo.png"
                alt=""></a>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle">
                <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#toggle-icon"></use>
              </svg>
            </div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="index.html"><img class="img-fluid" src="<?= base_url('') ?>assets/images/logo/logo-icon.png" alt=""></a>
          </div>
          
          <?= $this->include('components\admin\sidebar') ?>

        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <?= $this->renderSection('breadcrumb') ?>
        <!-- Container-fluid starts-->
        <?= $this->renderSection('content') ?>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 p-0 footer-copyright">
              <p class="mb-0">Copyright 2024 © Crocs theme by pixelstrap.</p>
            </div>
            <div class="col-md-6 p-0">
              <p class="heart mb-0">Hand crafted &amp; made with
                <svg class="footer-icon">
                  <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#heart"></use>
                </svg>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <?= $this->include('components\admin\script') ?>

</body>

</html>
