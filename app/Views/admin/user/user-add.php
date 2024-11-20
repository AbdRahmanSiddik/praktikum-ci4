<?php $this->setVar('title', 'Admin - Add User'); ?>
<?= $this->extend('layout/admin') ?>

<?= $this->section('breadcrumb') ?>
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6 p-0">
        <h3>Add User</h3>
      </div>
      <div class="col-sm-6 p-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Add User</li>
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
          <h4>Tooltip form validation</h4>
        </div>
        <div class="card-body">
          <form class="row g-1 needs-validation custom-input" novalidate method="post" action=""
            enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="col-sm-12 col-md-6 row g-0 p-2">
              <div class="">
                <label for="input-file" id="drop-area">
                  <input type="file" accept="image/*" name="profile" id="input-file" hidden>
                  <div id="image-view">
                    <img src="508-icon.png">
                    <p>Image Profile</p>
                    <p>Drag Here</p>
                  </div>
                </label>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="cv">Upload CV</label>
                <input class="form-control" name="cv" id="cv" type="file" placeholder="Your Name"
                  required>
                <div class="invalid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 row g-0 p-2">
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="name">Name</label>
                <input class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>" name="name" id="name" type="text" placeholder="Your Name"
                  required>
                <div class="invalid-feedback"><?= session('errors.name') ?></div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control <?= session('errors.nim') ? 'is-invalid' : '' ?>" name="nim" id="nim" type="text" placeholder="2202310..."
                  inputmode="numeric" required>
                <div class="invalid-feedback"><?= session('errors.nim') ?></div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="specialist">Specialist</label>
                <input class="form-control" name="specialist" id="specialist" type="text" placeholder="CodeIgniter"
                  required>
                <div class="invalid-feedback">Looks good!</div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" required>
                  <option selected disabled value="">Default: Active</option>
                  <option value="active">active</option>
                  <option value="inactive">inactive</option>
                  <option value="passed">passed</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="email">E-Mail</label>
                <input class="form-control" name="email" id="email" type="email" placeholder="example@gmail.com"
                  required>
                <div class="invalid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="col-12 text-end">
              <button class="btn btn-primary" type="submit">Submit form</button>
              <a href="users" class="btn btn-danger">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>
