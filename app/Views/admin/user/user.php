<?php $this->setVar('title', 'Admin - Users'); ?>
<?= $this->extend('layout\admin') ?>

<?= $this->section('breadcrumb') ?>
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6 p-0">
        <h3>User List</h3>
      </div>
      <div class="col-sm-6 p-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">User List</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('breadcrumb') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <!-- HTML (DOM) sourced data  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0 card-no-border">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h4 class="mb-3">Data user ICC 22</h4>
            <a class="btn btn-primary" href="<?= base_url('users-add') ?>">+ Add User</a>
          </div>
          <div class="alert border-warning alert-dismissible fade show p-0 mb-0" role="alert">
            <div class="alert-arrow bg-warning"><i class="icon-alert"></i></div>
            <p>Warning! <strong class="txt-dark"> Use this data as best as possible and do not share it!</strong></p>
            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span
                class="bg-warning text-white px-3 py-1" aria-hidden="true">Close</span></button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive custom-scrollbar">
            <table class="display border" id="data-source-1" style="width:100%">
              <thead>
                <tr>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>NIM</th>
                  <th>Specialist</th>
                  <th>CV</th>
                  <th>Status</th>
                  <th>E-mail</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $value): ?>
                <tr>
                  <td><?= esc($value->profile) ?></td>
                  <td><?= esc($value->name) ?></td>
                  <td><?= esc($value->nim) ?></td>
                  <td><?= esc($value->specialist) ?></td>
                  <td class="action">
                    <a class="pdf" href="<?= base_url("media/cv/esc($value->cv)") ?>" target="_blank"
                      download="<?= esc($value->cv) ?>">
                      <i class="icofont icofont-file-pdf"></i>
                    </a>
                  </td>
                  <td>
                    <span
                      class="badge rounded-pill <?= esc($value->status) == 'active' ? 'badge-success' : (esc($value->status) == 'inactive' ? 'badge-danger' : 'badge-primary') ?>"><?= esc($value->status) ?></span>
                  </td>
                  <td><?= esc($value->email) ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-primary rounded-pill dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-list-ul"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-block">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-magic"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-folder-open-o"></i> View</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-trash-o"></i> Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              <!-- <tfoot>
                <tr>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>NIM</th>
                  <th>Specialist</th>
                  <th>CV</th>
                  <th>Status</th>
                  <th>E-mail</th>
                  <th>Action</th>
                </tr>
              </tfoot> -->
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- HTML (DOM) sourced data  Ends-->
  </div>
</div>
<?= $this->endSection('content') ?>
