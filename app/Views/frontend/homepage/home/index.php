<?php $main_slide = get_slide(['keyword' => 'banner-home' , 'language' => $language ]); ?>
<div class="page-home">
	<?php if(isset($main_slide) && is_array($main_slide) && count($main_slide)){ ?>
		<div class="panel-slide">
			<?php
			$owlInit = [
			'nav' => true,
			'dots' => false,
			'loop' => true,
			'margin' => 0,
			'responsive' => array(
			0 => array(
			'items' => 1,
			),
			480 => array(
			'items' => 1,
			),
			768 => array(
			'items' => 1,
			),
			960 => array(
			'items' => 1,
			),
			),
			];
			?>
			<div class="owl-slide">
				<div class="owl-carousel owl-theme " data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
					<?php foreach ($main_slide as $key => $value) { ?>
						<div class="item">
							<div class="thumb">
								<a href="<?php echo $value['canonical'] ?>" title="slide" class="image-slide img-cover">
									<img src="<?php echo $value['image'] ?>" alt="">
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="form-booking">
				<div class="panel-head">
					<div class="title">Đặt lịch giữ chỗ chỉ 30 giây</div>
					<div class="sub-title">Cắt xong trả tiền, hủy lịch không sao</div>
				</div>
				<div class="panel-body">
					<form action="" method="">
						<div class="uk-flex uk-flex-middle">
							<div class="form-input">
								<input placeholder="Nhập SDT để đặt lịch" type="text" class="my-input" value="">
							</div>
							<div class="btn-booking">
								<button type="button" name="button">ĐẶT <span>LỊCH </span>NGAY</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="panel-experience">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">Trải nghiệm dịch vụ</div>
							<div class="sub-title">Thư giãn 30 phút và bạn sẽ tỏa sáng</div>
						</a>
					</div>
					<div class="head-right">
						<a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="banner-wraper">
					<a href="#" title="banner" class="thumb img-cover img-zoomin">
						<img src="resources/img/banner-1.jpg" alt="">
					</a>
				</div>
				<div class="service-list">
					<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" >
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a href="#" title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/service-item.jpg" alt="">
										</div>
										<div class="service-content">
											<div class="title">Uốn nhập khẩu hàn siêu bền tóc</div>
											<div class="sub-title">Chỉ từ 206k</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a href="#" title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/service-item.jpg" alt="">
										</div>
										<div class="service-content">
											<div class="title">Cắt gội massage</div>
											<div class="sub-title">Bảng giá 2022 (hấp dẫn)</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a href="#" title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/service-item.jpg" alt="">
										</div>
										<div class="service-content">
											<div class="title">Cắt gội massage</div>
											<div class="sub-title">Bảng giá 2022 (hấp dẫn)</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a href="#" title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/service-item.jpg" alt="">
										</div>
										<div class="service-content">
											<div class="title">Cắt gội massage</div>
											<div class="sub-title">Bảng giá 2022 (hấp dẫn)</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-slide-2item">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">Hành trình tỏa sáng</div>
							<div class="sub-title">Câu chuyện chân thực từ khách hàng</div>
						</a>
					</div>
					<div class="head-right">
						<a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
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
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/guest-1.jpg" alt="">
								</a>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									Can đảm thay đổi mái tóc 7 năm, nam sinh Kiến Trúc lột xác kiểu tóc mới cực đẹp
								</a>
							</div>
						</div>
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/guest-2.jpg" alt="">
								</a>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									Bạn sinh viên IT lột xác thành hot boy vạn người mê
								</div>
							</a>
						</div>
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/guest-1.jpg" alt="">
								</a>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									Can đảm thay đổi mái tóc 7 năm, nam sinh Kiến Trúc lột xác kiểu tóc mới cực đẹp
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-angel">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">30Shine’s Angels</div>
							<div class="sub-title">Những thiên thần xinh đẹp hết lòng vì khách hàng</div>
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
						<?php for($i = 1; $i <= 5; $i++){ ?>
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/angel-<?php echo $i ?>.jpg" alt="">
								</a>
								<div class="contact-thumb">
									<a href="#" title="book lịch ngay"><i class="fa fa-calendar-check-o mr10"></i>Book lịch ngay</a>
								</div>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									Can đảm thay đổi mái tóc 7 năm, nam sinh Kiến Trúc lột xác kiểu tóc mới cực đẹp
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-stylist">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">30Shine’s Stylist</div>
							<div class="sub-title">Đội ngũ Stylist dày dạn kinh nghiệm, tư vấn nhiệt tình để khách hàng có kiểu tóc ưng ý nhất</div>
						</a>
					</div>
					<div class="head-right">
						<a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
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
						<?php for($i = 1; $i <= 5; $i++){ ?>
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/stylist-<?php echo $i ?>.jpg" alt="">
								</a>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									Nguyễn Đỗ Bảo Thanh - 236 D. Bá Trạc, Quận 8, TP. Hồ Chí Minh
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-equipment">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">Không gian và thiết bị</div>
							<div class="sub-title">Nạp năng lượng với trải nghiệm không gian mở</div>
						</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="banner-wraper">
					<div class="thumb img-cover">
						<img src="resources/img/equipment-1.jpg" alt="">
					</div>
					<div class="sub-banner">Phá vỡ giới hạn của một tiệm tóc truyền thống, 30Shine mang đến không gian trải nghiệm hoàn toàn mới với diện tích lớn trên 200m2/ 16 ghế cắt. Tất cả đều được đặt tại vị trí dễ tìm trên những con phố lớn, hòa vào cuộc sống sôi động của người đàn ông hiện đại.</div>
				</div>
				<div class="service-list">
					<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" >
						<?php for($i = 1; $i <= 4; $i++){ ?>
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a href="#" title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/equipment-2.jpg" alt="">
										</div>
										<div class="service-content">
											<div class="title">Salon rộng lớn dễ tìm</div>
											<div class="sub-title">Không gian mở & kết nối</div>
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
	<div class="panel-trust">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">An tâm & Tin tưởng</div>
							<div class="sub-title">Cam kết phòng dịch tối đa & mỹ phẩm chính hãng</div>
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
						<?php for($i = 1; $i <= 3; $i++){ ?>
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/trust-1.jpg" alt="">
								</a>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									Mỹ phẩm & sản phẩm - Cam kết chất lượng - Đảm bảo xuất xứ
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-endow">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">Ưu đãi</div>
							<div class="sub-title">Quà tặng, chiết khấu đặc biệt cập nhật liên tục</div>
						</a>
					</div>
					<div class="head-right">
						<a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
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
						<?php for($i = 1; $i <= 5; $i++){ ?>
						<div class="item">
							<div class="thumb">
								<a href="" title="slide" class="image-slide img-cover img-zoomin">
									<img src="resources/img/endow-1.png" alt="">
								</a>
							</div>
							<div class="thumb-info">
								<a href="" title="" class="title">
									MUA SKIN&DR TẶNG MẶT NẠ HOT HIT
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-lightbox">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">Shine Moment</div>
							<div class="sub-title">Cùng lan tỏa những phút giây tỏa sáng tại 30Shine</div>
						</a>
					</div>
					<div class="head-right">
						<a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
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
				'items' => 2,
				),
				768 => array(
				'items' => 3,
				),
				960 => array(
				'items' => 4,
				),
				),
				];
				?>
				<div class="owl-slide">
					<div class="owl-carousel owl-theme " data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
						<?php for($i = 1; $i <= 5; $i++){ ?>
						<div class="item">
							<div class="thumb">
								<a href="resources/img/lightbox-<?php echo $i ?>.jpg" title="slide" class="image-slide img-cover img-zoomin" data-uk-lightbox="{group:'group-shine'}">
									<img src="resources/img/lightbox-<?php echo $i ?>.jpg" alt="">
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-commit">
		<div class="uk-container uk-container-center">
			<div class="panel-head">
				<div class="uk-flex uk-flex-middle uk-flex-space-between">
					<div class="head-left">
						<a href="#" title="service">
							<div class="title">Cam kết 30shine Care</div>
							<div class="sub-title">Sự hài lòng của anh là ưu tiên hàng đầu của 30Shine</div>
						</a>
					</div>
					<div class="head-right">
						<a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="banner-wraper">
					<div class="thumb img-cover">
						<img src="resources/img/commit-1.jpg" alt="">
					</div>
					<div class="sub-banner">
						<div class="title">VÌ CHẤT LƯỢNG PHỤC VỤ LÀ HÀNG ĐẦU</div>
						<div class="sub-title">Áp dụng tại salon bất kỳ toàn hệ thống 30Shine</div>
					</div>
				</div>
				<div class="service-list">
					<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" >
						<?php for($i = 1; $i <= 4; $i++){ ?>
						<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
							<div class="service-item">
								<a href="#" title="service-item" >
									<div class="uk-flex uk-flex-middle" >
										<div class="thumb img-cover img-zoomin">
											<img src="resources/img/commit-2.png" alt="">
										</div>
										<div class="service-content">
											<div class="title">7 ngày</div>
											<div class="sub-title">Chỉnh sửa tóc miễn phí</div>
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