<?php $angel = get_slide(['keyword' => 'angel' , 'language' => $language ]); ?>
<?php $stylish = get_slide(['keyword' => 'stylish' , 'language' => $language ]); ?>
<?php $moment = get_slide(['keyword' => 'moment' , 'language' => $language ]); ?>
<div class="page-home">
	<?php echo view('frontend/homepage/common/slide') ?>
	<?php 
		if(isset($panel['dich-vu']['data']) && is_array($panel['dich-vu']['data']) && count($panel['dich-vu']['data'])){
		 	$data['panel_article'] = $panel['dich-vu'];
			echo view('frontend/homepage/common/article', $data);
		} 
	?>
	<?php if(isset($panel['hanh-trinh']['data']) && is_array($panel['hanh-trinh']['data']) && count($panel['hanh-trinh']['data'])){ ?>
		<div class="panel-slide-2item">
			<div class="uk-container uk-container-center">
				<div class="panel-head">
					<div class="uk-flex uk-flex-middle uk-flex-space-between">
						<div class="head-left">
							<a href="<?php echo $panel['hanh-trinh']['canonical'] ?>" title="service">
								<div class="title"><?php echo $panel['hanh-trinh']['title'] ?></div>
								<div class="sub-title"><?php echo $panel['hanh-trinh']['description'] ?></div>
							</a>
						</div>
						<div class="head-right">
							<a href="<?php echo $panel['hanh-trinh']['canonical'] ?>" title="read-all" class="read-all"><span><?php echo $language == 'vi' ? 'Xem tất cả' : 'View more' ?></span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php
					$owlInit = [
					'nav' => true,
					'dots' => false,
					'loop' => true,
					'margin' => 20,
					'responsive' => array(
					0 => array(
					'items' => 1,
					),
					480 => array(
					'items' => 1.5,
					),
					768 => array(
					'items' => 2,
					),
					960 => array(
					'items' => 2,
					),
					),
					];
					?>
					<div class="owl-slide">
						<div class="owl-carousel owl-theme " data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
							<?php foreach ($panel['hanh-trinh']['data'] as $key => $value) { ?>
							<div class="item">
								<div class="thumb">
									<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="slide" class="image-slide img-cover img-zoomin">
										<img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
									</a>
								</div>
								<div class="thumb-info">
									<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="<?php echo $value['title'] ?>" class="title">
										<?php echo $value['title'] ?>
									</a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if(isset($angel) && is_array($angel) && count($angel)){ ?>
		<div class="panel-angel">
			<div class="uk-container uk-container-center">
				<div class="panel-head">
					<div class="uk-flex uk-flex-middle uk-flex-space-between">
						<div class="head-left">
							<div>
								<div class="title"><?php echo $angel[0]['cat_title'] ?></div>
								<div class="sub-title"><?php echo $angel[0]['cat_description'] ?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php
					$owlInit = [
					'nav' => true,
					'dots' => false,
					'loop' => true,
					'margin' => 20,
					'responsive' => array(
					0 => array(
					'items' => 1,
					),
					480 => array(
					'items' => 1.5,
					),
					768 => array(
					'items' => 2.5,
					),
					960 => array(
					'items' => 3.5,
					),
					),
					];
					?>
					<div class="owl-slide">
						<div class="owl-carousel owl-theme " data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
							<?php foreach ($angel as $key => $value) { ?>
								<div class="item">
									<div class="thumb">
										<a href="<?php echo HTBOOK.HTSUFFIX ?>" title="slide" class="image-slide img-cover img-zoomin">
											<img src="<?php echo $value['image'] ?>" alt="">
										</a>
										<div class="contact-thumb">
											<a href="<?php echo HTBOOK.HTSUFFIX ?>" title="book lịch ngay"><i class="fa fa-calendar-check-o mr10"></i><?php echo $language == 'vi' ? 'Book lịch ngay' : 'Booking now' ?></a>
										</div>
									</div>
									<div class="thumb-info">
										<a href="<?php echo HTBOOK.HTSUFFIX ?>" title="" class="title">
											<?php echo $value['title'] ?>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if(isset($stylish) && is_array($stylish) && count($stylish)){
		$data['partner'] = $stylish;
		echo view('frontend/homepage/common/partner', $data);
	} ?>
	<?php 
		if(isset($panel['khong-gian']['data']) && is_array($panel['khong-gian']['data']) && count($panel['khong-gian']['data'])){
		 	$data['panel_article'] = $panel['khong-gian'];
			echo view('frontend/homepage/common/article', $data);
		} 
	?>
	<?php if(isset($panel['an-tam']['data']) && is_array($panel['an-tam']['data']) && count($panel['an-tam']['data'])){ ?>
		<div class="panel-trust">
			<div class="uk-container uk-container-center">
				<div class="panel-head">
					<div class="uk-flex uk-flex-middle uk-flex-space-between">
						<div class="head-left">
							<a href="<?php echo $panel['an-tam']['canonical'] ?>" title="service">
								<div class="title"><?php echo $panel['an-tam']['title'] ?></div>
								<div class="sub-title"><?php echo $panel['an-tam']['description'] ?></div>
							</a>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php
					$owlInit = [
					'nav' => true,
					'dots' => false,
					'loop' => true,
					'margin' => 20,
					'responsive' => array(
					0 => array(
					'items' => 1,
					),
					480 => array(
					'items' => 1.5,
					),
					768 => array(
					'items' => 2,
					),
					960 => array(
					'items' => 3,
					),
					),
					];
					?>
					<div class="owl-slide">
						<div class="owl-carousel owl-theme " data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
							<?php foreach ($panel['an-tam']['data'] as $key => $value) { ?>
								<div class="item">
									<div class="thumb">
										<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="<?php echo $value['title'] ?>" class="image-slide img-cover img-zoomin">
											<img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
										</a>
									</div>
									<div class="thumb-info">
										<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="<?php echo $value['title'] ?>" class="title">
											<?php echo $value['title'] ?>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if(isset($panel['uu-dai']['data']) && is_array($panel['uu-dai']['data']) && count($panel['uu-dai']['data'])){ ?>
		<div class="panel-endow">
			<div class="uk-container uk-container-center">
				<div class="panel-head">
					<div class="uk-flex uk-flex-middle uk-flex-space-between">
						<div class="head-left">
							<a href="<?php echo $panel['uu-dai']['canonical'] ?>" title="service">
								<div class="title"><?php echo $panel['uu-dai']['title'] ?></div>
								<div class="sub-title"><?php echo $panel['uu-dai']['description'] ?></div>
							</a>
						</div>
						<div class="head-right">
							<a href="<?php echo $panel['uu-dai']['canonical'] ?>" title="read-all" class="read-all"><span><?php echo $language == 'vi' ? 'Xem tất cả' : 'View more' ?></span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php
					$owlInit = [
					'nav' => true,
					'dots' => false,
					'loop' => true,
					'margin' => 20,
					'responsive' => array(
					0 => array(
					'items' => 1,
					),
					480 => array(
					'items' => 1.5,
					),
					768 => array(
					'items' => 2.5,
					),
					960 => array(
					'items' => 3.5,
					),
					),
					];
					?>
					<div class="owl-slide">
						<div class="owl-carousel owl-theme " data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
							<?php foreach ($panel['uu-dai']['data'] as $key => $value) { ?>
							<div class="item">
								<div class="thumb">
									<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="<?php echo $value['title'] ?>" class="image-slide img-cover img-zoomin">
										<img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
									</a>
								</div>
								<div class="thumb-info">
									<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="<?php echo $value['title'] ?>" class="title">
										<?php echo $value['title'] ?>
									</a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if(isset($moment) && is_array($moment) && count($moment)){
		$data['partner'] = $moment;
		echo view('frontend/homepage/common/partner', $data);
	} ?>
	<div class="panel-commit">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<div >
							<div class="title"><?php echo $general['camket_title'] ?></div>
							<div class="sub-title"><?php echo $general['camket_description'] ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="banner-wraper">
					<div class="thumb img-cover">
						<img src="<?php echo $general['camket_banner'] ?>" alt="<?php echo $general['camket_title'] ?>">
					</div>
					<div class="sub-banner">
						<div class="title"><?php echo $general['camket_banner_title'] ?></div>
						<div class="sub-title"><?php echo $general['camket_banner_description'] ?></div>
					</div>
				</div>
				<div class="service-list">
					<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" >
						<?php for($i = 1; $i <= 4; $i++){ ?>
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/logo.jpg" alt="">
											<div class="thumb-info "><?php echo $general['camket_block_'.$i.'_number'] ?></div>
										</div>
										<div class="service-content">
											<div class="title"><?php echo $general['camket_block_'.$i.'_title'] ?></div>
											<div class="sub-title"><?php echo $general['camket_block_'.$i.'_description'] ?></div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>