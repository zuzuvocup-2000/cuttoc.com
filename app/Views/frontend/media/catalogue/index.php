<div class="panel-way">
    <div class="uk-container uk-container-center">
        <div class="panel-head">
            <h2 class="heading">
                <?php echo $detailCatalogue['title'] ?>
            </h2>
            <div class="way-des">
                <?php echo base64_decode($detailCatalogue['description']) ?>
            </div>
        </div>
        <div class="panel-body">
            <div class="way-body">
                <div class="uk-grid uk-grid-medium uk-grid-match">
                    <?php if(isset($articleList) && is_array($articleList) && count($articleList)){
                        foreach ($articleList as $key => $value) {
                    ?>
                    <?php if($key < 2){ ?>
                        <div class="uk-width-1-1 uk-width-medium-1-2 way-wrap ">
                            <div class="way-item">
                                <div class="thumb">
                                    <a href="<?php echo $value['iframe'] ?>" target="_blank" title="" class="image img-cover">
                                        <img src="<?php echo $value['image'] ?>">
                                    </a>
                                </div>
                                <div class="way-info">
                                    <a href="<?php echo $value['iframe'] ?>" target="_blank" title="">
                                        <span class="title line-2">
                                            <?php echo $value['title'] ?>
                                        </span>
                                        <span class="way-des line-2">
                                            <?php echo strip_tags(base64_decode($value['description'])) ?>
                                        </span>
                                    </a>
                                    <!-- <div class="way-view">
                                        425K views
                                    </div> -->
                                    <div class="way-tag">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="uk-width-1-1 uk-width-medium-1-4 way-wrap">
                            <div class="way-item">
                                <div class="thumb">
                                    <a href="<?php echo $value['iframe'] ?>" target="_blank" title="" class="image img-cover">
                                        <img src="<?php echo $value['image'] ?>">
                                    </a>
                                </div>
                                <div class="way-info">
                                    <a href="<?php echo $value['iframe'] ?>" target="_blank" title="">
                                        <span class="title line-2">
                                            <?php echo $value['title'] ?>
                                        </span>
                                        <span class="way-des line-2">
                                            <?php echo strip_tags(base64_decode($value['description'])) ?>
                                        </span>
                                    </a>
                                    <!-- <div class="way-view">
                                        425K views
                                    </div> -->
                                    <div class="way-tag">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <?php }}} ?>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div id="pagination">
                <?php echo (isset($pagination)) ? $pagination : ''; ?>
            </div>
        </div>
    </div>
</div>