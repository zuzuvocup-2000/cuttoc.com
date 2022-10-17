<div class="panel-experience">
	<div class="uk-container uk-container-center">
		<div class="panel-head">
			<div class="uk-flex uk-flex-middle uk-flex-space-between">
				<div class="head-left">
					<a href="<?php echo $panel_article['canonical'] ?>" title="service">
						<div class="title"><?php echo $panel_article['title'] ?></div>
						<div class="sub-title"><?php echo $panel_article['description'] ?></div>
					</a>
				</div>
				<div class="head-right">
					<a href="<?php echo $panel_article['canonical'] ?>" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="banner-wraper">
				<a href="<?php echo $panel_article['canonical'] ?>" title="banner" class="thumb img-cover img-zoomin">
					<img src="<?php echo $panel_article['image'] ?>" alt="">
				</a>
			</div>
			<div class="service-list">
				<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" >
					<?php foreach ($panel_article['data'] as $key => $value) { ?>
					<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4">
						<div class="service-item">
							<a href="<?php echo $value['canonical'].HTSUFFIX ?>" title="service-item" >
								<div class="uk-flex uk-flex-middle" >
									<div class="thumb img-cover img-zoomin">
										<img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
									</div>
									<div class="service-content">
										<div class="title limit-line-2"><?php echo $value['title'] ?></div>
										<div class="sub-title limit-line-2"><?php echo strip_tags(base64_decode($value['description'])) ?></div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>