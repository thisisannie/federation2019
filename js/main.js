$(document).ready(function(){
    
    // page loading div
	var $loading = $('#loading');
    
    // Fade out loading div after Pace.js page-load progress bar has finished
    // Pace.on("done", function(){
	//     $loading.addClass('is-hidden').delay(400).queue(function(){
	//         $(this).hide();
	//     });
	// });
    
    // navigation active state
    function setNavigation() {
        var path = window.location.pathname;
        path = path.replace(/\//g, '');
        path = decodeURIComponent(path);
        
        $('.main-nav-link, .mobile-nav-link').each(function () {
            var href = $(this).attr('href');
            if (path.substring(0, href.length) === href) {
                $(this).addClass('active');
            }
        });
    }
    
    setNavigation();
    
    // sticky header
    var $body = $('body'),
        $header = $('#header'),
    	$windowWidth = $(window).width(),
   		$openMobileNav = $('#open-mobile-nav'),
   		tabletWidth = 991,
   		headerHeight = 70,
    	previousScrollPos = 0;
    
    $(window).scroll(function() {
        var $scrollTop = $(window).scrollTop();
        if (($scrollTop >= headerHeight) && (previousScrollPos < $scrollTop) && ($windowWidth > tabletWidth)) {
        	$header.addClass('slide-out');
        } else if (($scrollTop >= headerHeight) && (previousScrollPos > $scrollTop + 20)) {
        	$header.removeClass('slide-out').addClass('full-width');
        } else if ($scrollTop < headerHeight) {
        	$header.removeClass('full-width slide-out');
        }
        previousScrollPos = $scrollTop;
    });
    
    // mobile nav
	var $mobileNav = $('#mobile-nav'),
		$closeMobileNav = $('#close-mobile-nav, #mobile-nav-bg'),
		$mobileNavBg = $('#mobile-nav-bg');
    
	$openMobileNav.on('click', function(){
		$mobileNav.addClass('is-open');
        $body.addClass('body--video-open');
		$mobileNavBg.addClass('is-visible');
		$openMobileNav.removeClass('is-visible');
		$closeMobileNav.addClass('is-visible');
		$closeMobileNav.on('click', function(){
            $body.removeClass('body--video-open');
			$mobileNav.removeClass('is-open');
			$closeMobileNav.removeClass('is-visible');
			$openMobileNav.addClass('is-visible');
		});
	});
    
    // home page - featured video
//    var desktopVideo = '<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="video/shorty_web_VBR2_720p_v3.webm" type="video/webm"><source src="video/shorty_web_VBR2_720p_v3.mp4" type="video/mp4"><source src="video/shorty_web_VBR2_720p_v3.ogv" type="video/ogg"></video>';
//    var mobileVideo = '<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="video/1920x1080_mobile_webmhd.webm" type="video/webm"><source src="video/1920x1080_mobile.mp4" type="video/mp4"><source src="video/1920x1080_mobile_oggtheora.ogv" type="video/ogg"></video>';
//    var $bgVideoWrapper = $('#feature-img__bgvideo-wrapper');
//     
//    function insertVideo() {
//        browserwidth = document.getElementById('header').offsetWidth;
//        if (browserwidth < 768) {
//            $bgVideoWrapper.html('').append(mobileVideo);
//        } else if (browserwidth >= 768) {
//            $bgVideoWrapper.html('').append(desktopVideo);
//        }
//    }
//    
//    insertVideo();
    
    // about page - horizontal slider
//    $('.profile-scroller').slick({
//        centerMode: true,
//        variableWidth: true,
//        adaptiveHeight: true,
//        dots: true,
//        infinite: true,
//        speed: 400,
//        slidesToShow: 1,
//        slidesToScroll: 1,
//        autoplay: true,
//        autoplaySpeed: 1000,
//    });
//    
//    function openProfile(e) {
//        
//        var $profileItem = $(this);
//        var $profileItems = $profileItem.closest('.profile-scroller').find('.profile-item');
//        var $closeBtn = $profileItem.find('.close-btn');
//        var index = $profileItem.data("slick-index");
//        
//        e.stopPropagation();
//        
//        setTimeout(function () {
//            $profileItems.removeClass('profile-item--is-open');
//            $profileItem.addClass('profile-item--is-open');
//        }, 400);
//        
//        if ($('.profile-scroller').slick('slickCurrentSlide') !== index) {
//            $('.profile-scroller').slick('slickGoTo', index);
//            setTimeout(function() {
//                $profileItems.removeClass('profile-item--is-open');
//                $profileItem.addClass('profile-item--is-open');
//            }, 400);
//        }
//
//    }
//    
//    function closeProfile(event) {
//        var $closeBtn = $(this);
//        var $profileItems = $closeBtn.closest('.profile-scroller').find('.profile-item');
//
//        event.stopPropagation();
//        $profileItems.removeClass('profile-item--is-open');
//        $('.profile-scroller').on('click', '.profile-item', openProfile);
//    }
//    
//    $('.profile-scroller').on('click', '.profile-item', openProfile);
//    
//    $('.profile-scroller').on('click', '.close-btn', closeProfile);
    
    // about page - accordian
    $('#profiles--mobile .profile-button').on( 'click', function() {
        $(this)
            .closest('.more-button-container')
            .find('.profile-button')
            .toggleClass('d-none')
            .closest('.more-button-container')
            .next('.description')
            .slideToggle(200);
    });
    
    // project page - intro section
    var $bannerSection = $('.section--banner'),
        $sectionIntro = $('.section--projects-intro');
    
    function updateMargin() {
        var introHeight = $sectionIntro.outerHeight();
        $bannerSection.css('margin-top', introHeight + 'px');
    }
    
    $(window).resize(function() {
        updateMargin();
    });
    
    updateMargin();
    
    // accordian - what we do page
    $('.service-list__title').on( "click", function() {
        $(this)
            .toggleClass('service-list__title--open')
            .next('.service-list__content')
            .slideToggle(200);
    });
    
    // mini slider
    $('.mini-slider').each(function(){
        
        var $this = $(this),
            $sliderNav = $this.find('.mini-slider__nav--detachable'),
            $mobileNavWrapper = $this.find('.mini-slider__mobile-nav-wrapper'),
            $desktopNavWrapper = $this.find('.mini-slider__desktop-nav-wrapper'),
            $leftBtn = $this.find('.mini-slider__btn--left'),
            $rightBtn = $this.find('.mini-slider__btn--right'),
            $buttons = $this.find('.mini-slider__btn'),
            $currentSlideNo = $this.find('.mini-slider__slide-no--current'),
            $slides = $this.find('.mini-slider__slides'),
            $currentProgress = $this.find('.mini-slider__current-progress'),
            currentSlide = 1,
            $currentSlideTitle,
            $currentSlideParagraph,
            $slideTitle = $this.find('.mini-slider__title'),
            $slideParagraph = $this.find('.mini-slider__paragraph'),
            direction,
            totalSlides = $this.find('.mini-slider__slide').length,
            slidesPosition = 0,
            movementIncrement = 100,
            browserwidth = document.getElementById('header').offsetWidth;
        
        function changeSlide(currentSlide, direction) {
            
            $currentSlideTitle = $this
                                    .find('.mini-slider__slide[data-slide=' + currentSlide + ']')
                                    .data('slide-title');
            $currentSlideParagraph = $this
                                    .find('.mini-slider__slide[data-slide=' + currentSlide + ']')
                                    .data('slide-paragraph');
            $slideTitle.html($currentSlideTitle);
            $slideParagraph.html($currentSlideParagraph);
            $currentSlideNo.html(currentSlide);
            
            switch (direction) {
                case 'left':
                    slidesPosition = slidesPosition - movementIncrement;
                    $currentProgress.css('left', slidesPosition/totalSlides + '%');
                    $slides.css('left', '-' + slidesPosition + '%');
                    break;
                case 'right':
                    slidesPosition = slidesPosition + movementIncrement;
                    $currentProgress.css('left', slidesPosition/totalSlides + '%');
                    $slides.css('left', '-' + slidesPosition + '%');
            }
            
            if (currentSlide === 1) {
                $leftBtn.toggleClass('mini-slider__btn--inactive');
                $rightBtn.removeClass('mini-slider__btn--inactive');
            } else if (currentSlide === totalSlides) {
                $rightBtn.toggleClass('mini-slider__btn--inactive');
                $leftBtn.removeClass('mini-slider__btn--inactive');
            } else {
                if (direction === 'left') {
                    $buttons.removeClass('mini-slider__btn--inactive');
                } else {
                    $buttons.removeClass('mini-slider__btn--inactive');
                }
            }
            
        }
        
        $currentProgress.css('width', 100/totalSlides + '%');
        
        $this.on('click', '.mini-slider__btn--left', function(){
            currentSlide --;
            direction = 'left';
            changeSlide(currentSlide, direction);
        });
        
        $this.on('click', '.mini-slider__btn--right', function(){
            currentSlide ++;
            direction = 'right';
            changeSlide(currentSlide, direction);
        });
        
        function positionNav() {
            browserwidth = document.getElementById('header').offsetWidth;
            if (browserwidth < 576) {
                $sliderNav.detach().appendTo($mobileNavWrapper);
            } else {
                $sliderNav.detach().appendTo($desktopNavWrapper);
            }
        }
        
        positionNav();
        
        $(window).resize(function() {
            positionNav();
        });
        
    });
    
    // Recent News article - Results widget
    $('.results-widget-slider').slick({
        adaptiveHeight: true,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

});
