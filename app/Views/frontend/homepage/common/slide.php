<?php $main_slide = get_slide(['keyword' => 'banner-home' , 'language' => $language ]); ?>
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