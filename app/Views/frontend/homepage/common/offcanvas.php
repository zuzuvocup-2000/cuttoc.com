<?php $main_nav = get_menu(array('keyword' => 'main-menu','language' => 'vi', 'output' => 'array')); ?>
<?php 
	$cookie  = [];
    if(isset($_COOKIE[AUTH.'member'])) $cookie = json_decode($_COOKIE[AUTH.'member'],TRUE);
 ?>

<div class="site-canvas">
    <div class="site-scroll">
        <div class="canvas-header">
            <div class="site-brand">
                <a href="" title="" class="img-cover">
                    <img src="<?php echo $general['homepage_logo'] ?>" alt="" />
                </a>
            </div>
            <!-- site-brand -->
            <div class="close-canvas">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <!-- close-canvas -->
        </div>
        <!-- canvas-header -->

        <div class="canvas-main">
            <nav class="canvas-menu canvas-primary vertical">
                <ul id="menu-menu-1" class="menu">
                    <li class="dropdown mega-menu menu-item menu-item-type-post_type menu-item-object-page ">
                        <a href="" title="" class="uk-flex uk-flex-middle uk-flex-space-between">
                          <span>Trải nghiệm dịch vụ</span>
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="dropdown mega-menu menu-item menu-item-type-post_type menu-item-object-page ">
                        <a href="" title="" class="uk-flex uk-flex-middle uk-flex-space-between">
                          <span>Vòng quay may mắn</span>
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="dropdown mega-menu menu-item menu-item-type-post_type menu-item-object-page ">
                        <a href="" title="" class="uk-flex uk-flex-middle uk-flex-space-between">
                          <span>Trải nghiệm dịch vụ</span>
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="dropdown mega-menu menu-item menu-item-type-post_type menu-item-object-page ">
                        <a href="" title="" class="uk-flex uk-flex-middle uk-flex-space-between">
                          <span>Trải nghiệm dịch vụ</span>
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="dropdown mega-menu menu-item menu-item-type-post_type menu-item-object-page ">
                        <a href="" title="" class="uk-flex uk-flex-middle uk-flex-space-between">
                          <span>Trải nghiệm dịch vụ</span>
                          <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- site-menu -->
        </div>
    </div>
    <!-- site-scroll -->
</div>
<!-- site-canvas -->
<div class="header-mobile header-wrapper">
    <div class="uk-container uk-container-center">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
          <div class="logo">
            <a href="#" title="logo" class="img-cover">
              <img src="<?php echo $general['homepage_logo'] ?>" alt="">
            </a>
          </div>
          <div class="button-menu">
            <div class="uk-flex uk-flex-middle">
              <div class="button-login">
                <a href="#" title="đăng nhập">Đăng nhập</a>
              </div>
              <div class="header-canvas button-item">
                  <a href="#" title="menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                  </a>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
