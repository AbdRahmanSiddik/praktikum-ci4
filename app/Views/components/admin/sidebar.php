<nav class="sidebar-main">
  <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
  <div id="sidebar-menu">
    <ul class="sidebar-links" id="simple-bar">
      <li class="back-btn"><a href="index.html"><img class="img-fluid"
            src="<?= base_url('') ?>assets/images/logo/logo-icon.png" alt=""></a>
        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
        </div>
      </li>
      <li class="pin-title sidebar-main-title">
        <div>
          <h6>Pinned</h6>
        </div>
      </li>
      <li class="sidebar-main-title">
        <div>
          <h6 class="lan-1">General</h6>
        </div>
      </li>
      <li class="sidebar-list">
        <i class="fa fa-thumb-tack"></i>
        <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('') ?>">
          <svg class="stroke-icon">
            <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-home"></use>
          </svg>
          <svg class="fill-icon">
            <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#fill-home"></use>
          </svg>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sidebar-main-title">
        <div>
          <h6>Users</h6>
        </div>
      </li>
      <li class="sidebar-list">
        <i class="fa fa-thumb-tack"></i>
        <a class="sidebar-link sidebar-title" href="#">
          <svg class="stroke-icon">
            <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-user"></use>
          </svg>
          <svg class="fill-icon">
            <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#fill-user"></use>
          </svg>
          <span>Users</span>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="<?= base_url('users') ?>">All User</a></li>
          <li><a href="<?= base_url('users-add') ?>">Add User</a></li>
        </ul>
      </li>
      <li class="sidebar-main-title">
        <div>
          <h6>Other & Settings</h6>
        </div>
      </li>
      <li class="sidebar-list">
        <i class="fa fa-thumb-tack"></i>
        <a class="sidebar-link sidebar-title" href="#">
          <svg class="stroke-icon">
            <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
          </svg>
          <svg class="fill-icon">
            <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
          </svg>
          <span>Settings</span>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="<?= base_url('profile') ?>">Profile</a></li>
          <li><a href="#">Account</a></li>
          <li><a href="<?= base_url('logout') ?>">LogOut</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
</nav>
