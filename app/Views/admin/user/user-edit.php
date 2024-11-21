<?php $this->setVar('title', 'Admin - Edit User'.esc($user['name'])); ?>
<?= $this->extend('layout/admin') ?>

<?= $this->section('breadcrumb') ?>
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6 p-0">
        <h3>Edit User <?= esc($user['name']) ?></h3>
      </div>
      <div class="col-sm-6 p-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item">Edit User</li>
          <li class="breadcrumb-item active"><?= esc($user['name']) ?></li>
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
          <form class="row g-1 needs-validation custom-input" novalidate method="post" action="<?= base_url('./users-edit/'.esc($user['id'])) ?>"
            enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="col-sm-12 col-md-6 row g-0 p-2">
              <div class="">
                <label for="input-file" id="drop-area">
                  <input type="file" accept="image/*" name="profile" id="input-file" hidden>
                  <div id="image-view">
                    <img src="<?= base_url('508-icon.png') ?>">
                    <p>Image Profile <?= session('errors.profile') ?></p>
                    <p>Drag Here</p>
                  </div>
                </label>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="cv">Upload CV</label>
                <input class="form-control <?= session('errors.cv') ? 'is-invalid' : '' ?>" name="cv" id="cv" type="file" required>
                <div class="invalid-feedback"><?= session('errors.cv') ?></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 row g-0 p-2">
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="name">Name</label>
                <input class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>" name="name" id="name" type="text" placeholder="Your Name" value="<?= esc($user['name']) ?>"
                  required>
                <div class="invalid-feedback"><?= session('errors.name') ?></div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control <?= session('errors.nim') ? 'is-invalid' : '' ?>" name="nim" id="nim" type="text" placeholder="2202310..." value="<?= esc($user['nim']) ?>"
                  inputmode="numeric" required>
                <div class="invalid-feedback"><?= session('errors.nim') ?></div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label for="jurusan" class="form-label <?= session('errors.jurusan') ? 'is-invalid' : '' ?>">Jurusan</label>
                <select class="form-select" name="jurusan" id="jurusan" required>
                  <option selected disabled value="">Pilih Jurusan</option>
                  <?php foreach($jurusan as $item): ?>
                    <option value="<?= esc($item->id) ?>" <?= esc($user['jurusan_id']) == $item->id ? 'selected' : '' ?>><?= esc($item->nama_jurusan) ?></option>
                  <?php endforeach ?>
                </select>
                <div class="invalid-feedback">
                <?= session('errors.jurusan') ?>
                </div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="phone">Phone</label>
                <input class="form-control <?= session('errors.phone') ? 'is-invalid' : '' ?>" name="phone" id="phone" type="text" placeholder="08123..." required inputmode="numeric" value="<?= esc($user['phone']) ?>">
                <div class="invalid-feedback"><?= session('errors.phone') ?></div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label for="status" class="form-label <?= session('errors.status') ? 'is-invalid' : '' ?>">Status</label>
                <select class="form-select" name="status" id="status" required>
                  <option selected disabled value="">Default: Active</option>
                  <option value="active" <?= esc($user['status']) == 'active' ? 'selected' : '' ?> >active</option>
                  <option value="inactive" <?= esc($user['status']) == 'inactive' ? 'selected' : '' ?> >inactive</option>
                  <option value="passed" <?= esc($user['status']) == 'passed' ? 'selected' : '' ?> >passed</option>
                </select>
                <div class="invalid-feedback">
                <?= session('errors.status') ?>
                </div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="email">E-Mail</label>
                <input class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" name="email" id="email" type="email" placeholder="example@gmail.com" value="<?= esc($user['email']) ?>"
                  required>
                <div class="invalid-feedback"><?= session('errors.email') ?></div>
              </div>
              <div class="col-12 position-relative mb-2">
                <label class="form-label" for="address">Address</label>
                <input class="form-control <?= session('errors.address') ? 'is-invalid' : '' ?>" name="address" id="address" type="text" placeholder="Jln. Raya" value="<?= esc($user['address']) ?>"
                  required>
                <div class="invalid-feedback"><?= session('errors.address') ?></div>
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
