<?php $this->setVar('title', 'Praktikum Satu'); ?>
<?= $this->extend('layout/admin') ?>

<?= $this->section('breadcrumb') ?>
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6 p-0">
        <h3>Blog</h3>
      </div>
      <div class="col-sm-6 p-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('breadcrumb') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">
          <h4>Ini Bencana</h4><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
        <div class="card-body">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum."</p>
          <h4 class="mb-3">Daftar Hero Tank</h4>
          <ul class="list-group">
            <li class="list-group-item">Tigreal</li>
            <li class="list-group-item">Franco</li>
            <li class="list-group-item">Hylos</li>
            <li class="list-group-item">Atlas</li>
            <li class="list-group-item">Gloo</li>
          </ul>
          <div class="card mt-3">
            <div class="card-header">
              <h5>Tigreal</h5>
            </div>
            <div class="card-body">
              <img src="<?= base_url('./image/MLBB_GoldBaronTigreal-61165981a367c.jpg') ?>" alt="" width="100%">
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              <h5>Franco</h5>
            </div>
            <div class="card-body">
              <img src="<?= base_url('./image/48253-franco-mobile-legends.jpg') ?>" alt="" width="100%">
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              <h5>Hylos</h5>
            </div>
            <div class="card-body">
              <img src="<?= base_url('./image/feature-image-hylos256c3661-ca50-4184-b254-3c7826e3c840.webp') ?>" alt="" width="100%">
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              <h5>Atlas</h5>
            </div>
            <div class="card-body">
              <img src="<?= base_url('./image/skin-collector.webp') ?>" alt="" width="100%">
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              <h5>Gloo</h5>
            </div>
            <div class="card-body">
              <img src="<?= base_url('./image/Untitled-179.jpg') ?>" alt="" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>
