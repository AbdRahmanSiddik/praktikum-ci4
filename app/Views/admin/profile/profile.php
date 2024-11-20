<?php $this->setVar('title', "admin - Profile (". $user["name"].")"); ?>
<?= $this->extend('layout\admin') ?>

<?= $this->section('breadcrumb') ?>
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6 p-0">
        <h3><?= esc($user["name"]) ?> Profile</h3>
      </div>
      <div class="col-sm-6 p-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url('') ?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">Profile</li>
          <li class="breadcrumb-item active"><?= esc($user["name"]) ?></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection('breadcrumb') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="user-profile">
    <div class="row">
      <!-- user profile first-style start-->
      <div class="col-sm-12">
        <div class="card hovercard text-center">
          <div class="cardheader"></div>
          <div class="user-image">
            <div class="avatar"><img alt="" src="<?= base_url('./media/profile/'.esc($user["profile"])) ?>"></div>
            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
          </div>
          <div class="info">
            <div class="row">
              <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                <div class="row">
                  <div class="col-md-6">
                    <div class="ttl-info text-start">
                      <h5><i class="fa fa-envelope"></i>   Email</h5><span><?= esc($user["email"]) ?></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="ttl-info text-start">
                      <h5><i class="fa fa-calendar"></i>   BOD</h5><span>02 January 1988</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                <div class="user-designation">
                  <div class="title"><a target="_blank" href="#"><?= esc($user["name"]) ?></a></div>
                  <div class="desc"><?= esc($user["specialist"]) ?></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="ttl-info text-start">
                      <h5><i class="fa fa-phone"></i>   Contact Us</h5><span>India +91 123-456-7890</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="ttl-info text-start">
                      <h5><i class="fa fa-location-arrow"></i>   Status</h5><span><?= esc($user["status"]) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="social-media">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i
                      class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i
                      class="fa fa-google-plus"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                      class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                      class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
            <div class="follow">
              <div class="row">
                <div class="col-6 text-md-end border-right">
                  <div class="follow-num counter">25869</div><span>Follower</span>
                </div>
                <div class="col-6 text-md-start">
                  <div class="follow-num counter">659887</div><span>Following</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- user profile first-style end-->
      <!-- user profile second-style start-->
      <div class="col-sm-12">
        <div class="card">
          <div class="profile-img-style">
            <div class="row">
              <div class="col-sm-8">
                <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="<?= base_url('./media/profile/'.esc($user["profile"])) ?>"
                    alt="Generic placeholder image">
                  <div class="flex-grow-1 align-self-center">
                    <h5 class="mt-0 user-name"><?= esc($user["name"]) ?></h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 align-self-center">
                <div class="float-sm-end"><small>CV</small></div>
              </div>
            </div>
            <hr>
            <div>
              <iframe src="<?= base_url("./media/cv/".esc($user['cv'])) ?>" frameborder="0" width="100%" height="600px"></iframe>
            </div>
            <div class="like-comment">
              <ul class="list-inline">
                <li class="list-inline-item border-right pe-3">
                  <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a>  Like</label><span
                    class="ms-2 counter">2659</span>
                </li>
                <li class="list-inline-item ms-2">
                  <label class="m-0"><a href="#"><i class="fa fa-comment"></i></a>  Comment</label><span
                    class="ms-2 counter">569</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- user profile second-style end-->
      <!-- <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
          <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
          </div>
          <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
              <div class="pswp__counter"></div>
              <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
              <button class="pswp__button pswp__button--share" title="Share"></button>
              <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
              <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
              <div class="pswp__preloader">
                <div class="pswp__preloader__icn">
                  <div class="pswp__preloader__cut">
                    <div class="pswp__preloader__donut"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
              <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
              <div class="pswp__caption__center"></div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>
