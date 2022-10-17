<?php
	$currentDay = date('Y-m-d H:i:s');
	$cookie  = [];
    if(isset($_COOKIE[AUTH.'member'])) $cookie = json_decode($_COOKIE[AUTH.'member'],TRUE);

?>
<?php $main_nav = get_menu(array('keyword' => 'main-menu','language' => 'vi', 'output' => 'array')); ?>

<div class="panel-header uk-visible-large">
    <div class="uk-container uk-container-center">
        <div class="panel-body uk-flex uk-flex-middle uk-flex-space-between">
            <div class="header-logo">
                <a href="" class="logo-image image img-scaledown" title="Logo">
                    <img src="<?php echo $general['homepage_logo'] ?>">
                </a>
            </div>
            <div class="navigation">
            	<?php if(isset($main_nav['data']) && is_array($main_nav['data']) && count($main_nav['data'])){ ?>
                <ul class="main-menu uk-flex uk-flex-middle">
                	<?php foreach ($main_nav['data'] as $key => $value) { ?>
	                    <li class="menu-item active">
	                        <a href="<?php echo $value['canonical'] ?>" title="<?php echo $value['title'] ?>"><?php echo $value['title'] ?></a>
	                        <?php if(isset($value['children']) && is_array($value['children']) && count($value['children'])){ ?>
	                        	<ul class="menu-child">
	                        		<?php foreach ($value['children'] as $keyChild => $valueChild) { ?>
		                            <li><a href="<?php echo $valueChild['canonical'] ?>" title="<?php echo $valueChild['title'] ?>"><?php echo $valueChild['title'] ?></a></li>
			                           	<!-- <li>
			                                <a href="" title="home page 1">home page 5</a>
			                                <ul class="menu-child-2">
			                                    <li><a href="" title="home page 1">home page 1</a></li>
			                                    <li><a href="" title="home page 1">home page 2</a></li>
			                                    <li><a href="" title="home page 1">home page 3</a></li>
			                                    <li><a href="" title="home page 1">home page 4</a></li>
			                                    <li><a href="" title="home page 1">home page 5</a></li>
			                                </ul>
			                            </li> -->
			                        <?php } ?>
		                        </ul>
	                        <?php } ?>
	                    </li>
	                <?php } ?>
                </ul>
            <?php } ?>
            </div>
            <?php if(!isset($cookie) || !is_array($cookie) || count($cookie) == 0){ ?>
	            <div class="header-login">
	                <a href="" title="" class="" data-uk-modal="{target:'#login-modal'}">
	                    <img src="resources/img/30shine.38a2a504.svg">
	                    <span>Đăng Nhập</span>
	                </a>
	            </div>
	        <?php }else{ ?>
	        <?php } ?>
        </div>
    </div>
</div>


<?php
	if(!isset($cookie) || !is_array($cookie) || count($cookie) == 0){
		echo view('frontend/homepage/common/modal_login');
	}else{
		echo view('frontend/homepage/common/modal_promotion');
	}
?>

