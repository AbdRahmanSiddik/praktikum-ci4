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
          <form class="row g-3 needs-validation custom-input" novalidate="">
            <div class="col-md-4 position-relative">
              <label class="form-label" for="validationTooltip01">First name</label>
              <input class="form-control" id="validationTooltip01" type="text" placeholder="Mark" required="">
              <div class="valid-tooltip">Looks good!</div>
            </div>
            <div class="col-md-4 position-relative">
              <label class="form-label" for="validationTooltip02">Last name</label>
              <input class="form-control" id="validationTooltip02" type="text" placeholder="Otto" required="">
              <div class="valid-tooltip">Looks good!</div>
            </div>
            <div class="col-md-4 position-relative">
              <label class="form-label" for="validationTooltipUsername">Username</label>
              <div class="input-group has-validation"><span class="input-group-text"
                  id="validationTooltipUsernamePrepend">@</span>
                <input class="form-control" id="validationTooltipUsername" type="text"
                  aria-describedby="validationTooltipUsernamePrepend" required="">
                <div class="invalid-tooltip">Please choose a unique and valid username.</div>
              </div>
            </div>
            <div class="col-md-6 position-relative">
              <label class="form-label" for="validationTooltip03">City</label>
              <input class="form-control" id="validationTooltip03" type="text" required="">
              <div class="invalid-tooltip">Please provide a valid city.</div>
            </div>
            <div class="col-md-3 position-relative">
              <label class="form-label" for="validationTooltip04">State</label>
              <select class="form-select" id="validationTooltip04" required="">
                <option selected="" disabled="" value="">Choose...</option>
                <option>U.S </option>
                <option>Thailand </option>
                <option>India </option>
                <option>U.K</option>
              </select>
              <div class="invalid-tooltip">Please select a valid state.</div>
            </div>
            <div class="col-md-3 position-relative">
              <label class="form-label" for="validationTooltip05">Zip</label>
              <input class="form-control" id="validationTooltip05" type="text" required="">
              <div class="invalid-tooltip">Please provide a valid zip.</div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>
