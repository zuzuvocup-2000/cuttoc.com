<?php $wcu = get_slide(['keyword' => 'wcu-banner' , 'language' => $language ]); ?>
<div id="page-1" class="pt30 pb30">
    <div class="panel-container">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-small-1-1 uk-width-medium-7-10">
                    <div class="panel-left">
                        <?php if(isset($detailCatalogue['album']) && is_array($detailCatalogue['album']) && count($detailCatalogue['album'])){ ?>
                        <div class="panel-head mb20">
                            <div class="panel-slider mb-10">
                                <?php
                                $owlInit = [
                                'nav' => false,
                                'dots' => false,
                                'loop' => true,
                                'margin' => 25,
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
                                    <div class="owl-carousel owl-theme" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
                                        <?php foreach ($detailCatalogue['album'] as $key => $value) { ?>
                                        <div class="item">
                                            <a class="image img-cover" title=""><img src="<?php echo $value ?>" alt=""></a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(isset($recruitment) && is_array($recruitment)&& count($recruitment)){
                        foreach ($recruitment as $key => $value) {
                        ?>
                        <div class="panel-body mb20">
                            <div class="title"><?php echo $value['title'] ?></div>
                            <ul>
                                <?php if(isset($value['data']) && is_array($value['data']) && count($value['data'])){
                                foreach ($value['data'] as $keyChild => $valueChild) {
                                ?>
                                <li>
                                    <div class="item">
                                        <!-- This is a button toggling the modal -->
                                        <div class="uk-button uk-flex uk-flex-middle uk-flex-space-between endow" data-uk-modal="{target:'#item-id'}" data-content="<?php echo $valueChild['content'] ?>" data-image="<?php echo $valueChild['image'] ?>" data-title="<?php echo $valueChild['title'] ?>" onclick="getData($(this))">
                                            <div class="panel-left">
                                                <div class="map"><?php echo $valueChild['title'] ?></div>
                                                <div class="price"><?php echo strip_tags(base64_decode($valueChild['description'])) ?></div>
                                            </div>
                                            <div class="panel-right">
                                                <div class="hot">hot</div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </li>
                                <?php }} ?>
                            </ul>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-3-10">
                    <div class="panel-right">
                        <?php if(isset($wcu) && is_array($wcu) && count($wcu)){ ?>
                        <div class="title"><?php echo $wcu[0]['cat_title'] ?></div>
                        <div class="job">
                            <ul>
                                <?php foreach ($wcu as $key => $value) { ?>
                                <li class="">
                                    <div class="item-list uk-flex">
                                        <div class="thumb img-scaledown">
                                            <img src="<?php echo $value['image'] ?>" title="" alt="">
                                        </div>
                                        <div class="info ml10">
                                            <div class="sub-title"><?php echo $value['title'] ?></div>
                                            <div class="description"><?php echo $value['description'] ?></div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                        <div class="register pt10">
                            <form class="uk-form form">
                                <fieldset data-uk-margin>
                                    <input type="text" placeholder="Họ và tên ...">
                                    <input type="text" placeholder="Số điện thoại ...">
                                    
                                    <button class="uk-button">Đăng kí ứng tuyển</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This is the modal -->
<div id="item-id" class="uk-modal modal-item">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close btn-close"></a>
        <div class="info">
            <div class="thumb">
                <a title="" class="image img-cover image-modal">
                    <img src="resources/img/banner-modal.jpg" alt="">
                </a>
            </div>
            <div class="popup uk-text-center">
                <!-- This is a button toggling the modal -->
                <button class="uk-button btn-button" data-uk-modal="{target:'#info-id'}" onclick="getJob($(this))"><?php echo $language == 'vi' ? 'Ứng tuyển ngay' : 'Apply now' ?></button>
            </div>
            <div class="description-list">
                <div class="title"></div>
                <div class="description"></div>
            </div>
        </div>
    </div>
</div>
<div id="info-id" class="uk-modal modal-info">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <form class="uk-form" id="form-apply">
            <fieldset data-uk-margin>
                <legend>THÔNG TIN CÁ NHÂN</legend>
                <div class="list-group">
                    <div class="sub-title mb10">Họ và tên</div>
                    <input class="mb20" type="text" name="fullname" placeholder="Họ tên đầy đủ...">
                    <div class="uk-grid uk-grid-medium mb20">
                        <div class="uk-width-small-1-1 uk-width-medium-1-2">
                            <div class="title-left">
                                <div class="sub-title mb10">Số diện thoại</div>
                                <input type="text" placeholder="Số diện thoại" name="phone" value="">
                            </div>
                        </div>
                        <div class="uk-width-small-1-1 uk-width-medium-1-2">
                            <div class="title-right">
                                <div class="sub-title mb10">Giới tính</div>
                                <select name="gender" id="">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="click mb30">
                        <div class="sub-title mb10">Vị trí ứng tuyển</div>
                        <select name="job" id="job-select">
                            <?php if(isset($recruitment) && is_array($recruitment)&& count($recruitment)){
                                foreach ($recruitment as $key => $value) {
                                if(isset($value['data']) && is_array($value['data']) && count($value['data'])){
                                foreach ($value['data'] as $keyChild => $valueChild) {
                            ?>
                                <option value="<?php echo $valueChild['title'] ?>"><?php echo $valueChild['title'] ?></option>
                            <?php }}}} ?>
                        </select>
                    </div>
                    <div class="btn-click uk-text-center">
                        <a class="btn-send" title="" onclick="document.getElementById('form-apply').submit();">GỬI THÔNG TIN </a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<script>
    function getData(_this){
        let content = _this.attr('data-content')
        let title = _this.attr('data-title')
        let image = _this.attr('data-image')

        $('#item-id').find('.description-list .title').html(title)
        $('#item-id').find('.description-list .description').html(b64DecodeUnicode(content))
        $('#item-id').find('.image-modal img').attr('src', image)
    }

    function getJob(_this){
        let title = _this.parents('#item-id').find('.description-list .title').text()
        $("#job-select").val(title).change();
    }

    function b64DecodeUnicode(str) {
    // Going backwards: from bytestream, to percent-encoding, to original string.
        return decodeURIComponent(atob(str).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
    }
</script>