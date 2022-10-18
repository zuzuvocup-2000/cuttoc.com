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
	                    <span><?php echo $language == 'vi' ? 'Đăng Nhập' : 'Log in' ?></span>
	                </a>
	            </div>
	        <?php }else{ ?>
	        	<div class="login-member-profile">
            		<svg class="css-g0144v" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.0003 7C20.1343 7 17.0003 10.134 17.0003 14C17.0003 17.866 20.1343 21 24.0003 21C27.8663 21 31.0003 17.866 31.0003 14C31.0003 10.134 27.8663 7 24.0003 7ZM13.0003 14C13.0003 7.92487 17.9252 3 24.0003 3C30.0755 3 35.0003 7.92487 35.0003 14C35.0003 20.0751 30.0755 25 24.0003 25C17.9252 25 13.0003 20.0751 13.0003 14ZM24.0003 33C18.0615 33 13.0493 36.9841 11.4972 42.4262C11.3457 42.9573 10.8217 43.3088 10.2804 43.1989L8.32038 42.8011C7.77914 42.6912 7.4266 42.1618 7.5683 41.628C9.49821 34.358 16.1215 29 24.0003 29C31.8792 29 38.5025 34.358 40.4324 41.628C40.5741 42.1618 40.2215 42.6912 39.6803 42.8011L37.7203 43.1989C37.179 43.3088 36.6549 42.9573 36.5035 42.4262C34.9514 36.9841 29.9391 33 24.0003 33Z"></path></svg>
            		<ul class="list-action-member">
            			<svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 8" width="1em" height="1em" verticalPropKey="top" class="tamgiac" style="right: 10px;"><path d="M0 8c7 0 10-8 12-8s5 8 12 8z"></path></svg>
            			<li>
            				<a href="/thong-tin-chi-tiet">
                				<svg class="css-g0144v" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.0003 7C20.1343 7 17.0003 10.134 17.0003 14C17.0003 17.866 20.1343 21 24.0003 21C27.8663 21 31.0003 17.866 31.0003 14C31.0003 10.134 27.8663 7 24.0003 7ZM13.0003 14C13.0003 7.92487 17.9252 3 24.0003 3C30.0755 3 35.0003 7.92487 35.0003 14C35.0003 20.0751 30.0755 25 24.0003 25C17.9252 25 13.0003 20.0751 13.0003 14ZM24.0003 33C18.0615 33 13.0493 36.9841 11.4972 42.4262C11.3457 42.9573 10.8217 43.3088 10.2804 43.1989L8.32038 42.8011C7.77914 42.6912 7.4266 42.1618 7.5683 41.628C9.49821 34.358 16.1215 29 24.0003 29C31.8792 29 38.5025 34.358 40.4324 41.628C40.5741 42.1618 40.2215 42.6912 39.6803 42.8011L37.7203 43.1989C37.179 43.3088 36.6549 42.9573 36.5035 42.4262C34.9514 36.9841 29.9391 33 24.0003 33Z"></path></svg>
                				<?php echo $language == 'vi' ? 'Thông tin cá nhân': 'Personal information' ?>
            				</a>
            			</li>
            			<li>
            				<a href="/logout"><svg class="css-g0144v" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.1716 26L7 26C6.44771 26 6 25.5523 6 25L6 23C6 22.4477 6.44771 22 7 22L24.1716 22L20.2929 18.1213C19.9024 17.7308 19.9024 17.0976 20.2929 16.7071L21.7071 15.2929C22.0976 14.9024 22.7308 14.9024 23.1213 15.2929L30.4142 22.5858C31.1953 23.3668 31.1953 24.6332 30.4142 25.4142L23.1213 32.7071C22.7308 33.0976 22.0976 33.0976 21.7071 32.7071L20.2929 31.2929C19.9024 30.9024 19.9024 30.2692 20.2929 29.8787L24.1716 26ZM36 43L27 43C26.4477 43 26 42.5523 26 42L26 40C26 39.4477 26.4477 39 27 39L36 39C37.1046 39 38 38.1046 38 37L38 11C38 9.89543 37.1046 9 36 9L27 9C26.4477 9 26 8.55228 26 8L26 6C26 5.44771 26.4477 5 27 5L36 5C39.3137 5 42 7.68629 42 11L42 37C42 40.3137 39.3137 43 36 43Z"></path></svg>
            					<?php echo $language == 'vi' ? 'Đăng xuất': 'Logout' ?>
            				</a>
            			</li>
            		</ul>
            	</div>
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

