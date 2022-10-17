<div class="panel-stylist">
    <div class="uk-container uk-container-center">
        <div class="panel-head">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="head-left">
                    <div >
                        <div class="title"><?php echo $partner[0]['cat_title'] ?></div>
                        <div class="sub-title"><?php echo $partner[0]['cat_description'] ?></div>
                    </div>
                </div>
                <!-- <div class="head-right">
                    <a href="" title="read-all" class="read-all"><span>Xem tất cả</span> <i class="fa fa-chevron-right ml10" aria-hidden="true"></i></a>
                </div> -->
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
                    <?php foreach ($partner as $key => $value) { ?>
                    <div class="item">
                        <div class="thumb">
                            <div class="image-slide img-cover img-zoomin">
                                <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
                            </div>
                        </div>
                        <div class="thumb-info">
                            <div class="title">
                                <?php echo $value['title'] ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>