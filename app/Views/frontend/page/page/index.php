<div class="panel-address">
    <div class="uk-container uk-container-center">
        <div class="panel-head">
            <div class="thumb">
                <div class="image img-cover">
                    <img src="<?php echo $detailCatalogue['image'] ?>">
                </div>
                <div class="address-heading">
                    <h3>
                        <?php echo $detailCatalogue['title'] ?>
                    </h3>
                    <span>
                        <?php echo $object['title'] ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <div class="address-des address-pic">
                <?php echo $object['description'] ?>
                <?php echo $object['content'] ?>
            </div>
        </div>

        <div class="panel-foot">
            <div class="address-more">
                <a href="booking" title="">
                    <?php echo $language == 'vi' ? 'Đặt lịch trải nghiệm' : 'Schedule an experience' ?>
                </a>
            </div>
        </div>
    </div>
</div>