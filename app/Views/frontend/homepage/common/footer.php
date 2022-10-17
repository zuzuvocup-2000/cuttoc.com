<?php /*$main_nav = get_menu(array('keyword' => 'menu-footer','language' => $language, 'output' => 'array'));*/ ?>
<footer class="panel-footer">
    <div class=" uk-container uk-container-center">
        <div class="footer-logo uk-hidden-large">
            <a href="" title="" class="image img-scaledown">
                <img src="<?php echo $general['homepage_logo'] ?>">
            </a>
        </div>
        <div class="panel-body">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-1-1 uk-width-medium-1-3 mb30">
                    <div class="footer-col">
                        <div class="footer-description">
                            <?php echo $general['homepage_ft'] ?>
                        </div>
                        <div class="footer-check uk-flex uk-flex-middle">
                            <div class="pic-1">
                                <a href="<?php echo $general['contact_link_bct'] ?>" class="image img-scaledown">
                                    <img src="resources/img/congthuongicon.png">
                                </a>
                            </div>
                            <div class="pic-2">
                                <a href="<?php echo $general['contact_link_dmca'] ?>" class="image img-scaledown">
                                    <img src="resources/img/dmca_protected_26_120.png">
                                </a>
                            </div>
                        </div>
                        <div class="footer-logo uk-hidden-large">
                            <a href="" title="" class="image img-scaledown">
                                <img src="<?php echo $general['homepage_logo'] ?>">
                            </a>
                        </div>
                        <div class="footer-description">
                            <div class="footer-description">
                                <?php echo $general['homepage_ft_2'] ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="uk-width-1-1 uk-width-medium-1-3 uk-visible-large">
                    <div class="footer-col">
                        <div class="footer-title">
                            <?php echo $language == 'vi' ? 'GIỜ PHỤC VỤ' : 'HOURS OF SERVICE' ?>
                        </div>
                        <div class="footer-text">
                            <?php echo $general['homepage_time'] ?>
                        </div>
                        <div class="footer-hotline uk-visible-large">
                            <a href="tel:<?php echo $general['contact_hotline'] ?>" title="">
                                <img src="resources/img/phone-2.aecf5e0a.svg">
                                <span>
                                    HOTLINE: <?php echo $general['contact_hotline'] ?> 
                                </span>
                            </a>
                        </div>
                        <div class="footer-pay">
                            <div class="footer-text">
                                <?php echo $language == 'vi' ? 'Chấp nhận thanh toán' : 'Accept payment' ?>
                            </div>
                            <ul class="uk-flex uk-flex-middle">
                                <li>
                                    <a href="" title="" class="img img-scaledown">
                                        <img src="resources/img/mastercard.7d32e23f.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="" class="img img-scaledown">
                                        <img src="resources/img/visa.689e1cc5.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-medium-1-3">
                    <div class="footer-col">
                        <div class="footer-title uk-visible-large">
                            <?php echo $language == 'vi' ? 'TẢI ỨNG DỤNG CỦA '.$general['homepage_company'] : "DOWNLOAD ".$general['homepage_company']." APP" ?>
                        </div>
                        <div class="footer-text uk-visible-large">
                            <?php echo $language == 'vi' ? 'Trải nghiệm đặt lịch nhanh chóng và nhiều tiện ích khác với ứng dụng  '.$general['homepage_company'] : "Experience quick booking and many other utilities with the ".$general['homepage_company']." app" ?>
                        </div>
                        <div class="footer-download">
                            <ul class="uk-flex uk-flex-middle">
                                <li>
                                    <a href="" title="" class="img img-scaledown">
                                        <img src="resources/img/gg-play.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="" class="img img-scaledown">
                                        <img src="resources/img/app.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="footer-media">
                            <div class="footer-title">
                                <?php echo $language == 'vi' ? 'THAM GIA CỘNG ĐỒNG' : 'JOIN THE COMMUNITY' ?>
                            </div>
                            <div class="footer-text">
                                <?php echo $language == 'vi' ? 'Cùng 2.5tr thành viên '.$general['homepage_company'] : 'With 2.5 million '.$general['homepage_company'].' members' ?>
                                
                            </div>
                            <ul class="uk-flex uk-flex-middle footer-media-list">
                                <li>
                                    <a href="<?php echo $general['social_tiktok'] ?>" title="" class="img img-scaledown">
                                        <img src="resources/img/tiktok.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $general['social_youtube'] ?>" title="" class="img img-scaledown">
                                        <img src="resources/img/youtube.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-hotline uk-hidden-large">
                            <a href="tel:<?php echo $general['contact_hotline'] ?>" title="">
                                <img src="resources/img/phone-2.aecf5e0a.svg">
                                <span>
                                    HOTLINE: <?php echo $general['contact_hotline'] ?> 
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="panel-foot">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="copyright">
                    <?php echo $general['homepage_copyright'] ?>
                </div>
            </div>
        </div>
    </div>
</footer>