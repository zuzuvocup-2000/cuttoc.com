(function($) {
    "use strict";
    var doc = $(document);
    var win = $(window);
    var BACOLA_APP = {
        init: function() {
            this.dom();
            this.mobileMenu();
            this.mobileSearch();
        },
        dom: function() {
            var body = $('body');
            var html = $('html')
        },
        
        mobileMenu: function() {
            var canvasMenu = $('.site-canvas');
            var siteOverlay = $('.site-overlay');
            var canvasButton = $('.header-canvas > a');
            var canvasClose = $('.site-canvas .close-canvas');
            var categoryButton = $('.header-mobile-nav a.categories');
            var tl = gsap.timeline({
                paused: !0,
                reversed: !0
            });
            tl.set(canvasMenu, {
                autoAlpha: 1
            }).to(canvasMenu, .5, {
                x: 0,
                ease: 'power4.inOut'
            }).to(siteOverlay, .5, {
                autoAlpha: 1,
                ease: 'power4.inOut'
            }, "-=.5");
            categoryButton.on('click', function(e) {
                e.preventDefault();
                siteOverlay.addClass('active');
                tl.play();
                $('.site-canvas .dropdown-categories').addClass('show')
            });
            canvasButton.on('click', function(e) {
                e.preventDefault();
                siteOverlay.addClass('active');
                tl.play();
                $('.site-canvas .dropdown-categories').removeClass('show')
            });
            canvasClose.on('click', function(e) {
                e.preventDefault();
                tl.reverse();
                setTimeout(function() {
                    siteOverlay.removeClass('active')
                }, 1000)
            });
            siteOverlay.on('click', function(e) {
                e.preventDefault();
                tl.reverse();
                setTimeout(function() {
                    siteOverlay.removeClass('active')
                }, 1000)
            });
            var menuChildren = $('.canvas-menu .menu-item-has-children, .site-canvas .dropdown-categories .menu-item-has-children');
            menuChildren.append('<span class="menu-dropdown"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>');
            $('.canvas-menu .menu-item-has-children .menu-dropdown, .site-canvas .dropdown-categories .menu-item-has-children .menu-dropdown').on('click', function(e) {
                e.preventDefault();
                var link = $(this);
                var closestUL = link.closest('ul');
                var activeItem = closestUL.find('.active');
                var closestLI = link.closest('li');
                var linkClass = closestLI.hasClass('active');
                var count = 0;
                const resetAnimation = () => {
                    activeItem.removeClass('active')
                }
                gsap.to(closestUL.find('ul'), .5, {
                    height: 0,
                    ease: 'power4.inOut',
                    onComplete: resetAnimation()
                });
                if (!linkClass) {
                    gsap.to(closestLI.children('ul'), .5, {
                        height: 'auto',
                        ease: 'power4.inOut'
                    });
                    closestLI.addClass('active')
                }
            })
        },
        mobileSearch: function() {
            var searchButton = $('.header-mobile-nav .menu-item .search');
            var searchHolder = $('.header-search');
            if (searchButton.length) {
                searchButton.on('click', function(e) {
                    e.preventDefault();
                    $(this).toggleClass('active');
                    searchHolder.toggleClass('active')
                })
            }
        },
    }
    doc.ready(() => {
        BACOLA_APP.init()
    });
    $(document).ready(function() {
        $(".flex-control-thumbs").addClass("product-thumbnails");
        if ($(".woocommerce-product-gallery").hasClass("vertical") && $(window).width() > 992) {
            var verti = !0
        } else {
            var verti = !1
        }
        
        $(".flex-viewport, .flex-control-nav").wrapAll("<div class='slider-wrapper'></div>");
        if ($('.product-brand > *').length < 1) {
            $('.product-brand').remove()
        }
        $(".products > li.product-category").wrapAll("<div class='" + $('.content-primary > .products').attr('class') + " klb-category-wrapper'></div>");
        $(".klb-category-wrapper").insertBefore(".content-primary > .products")
    });
}(jQuery))
