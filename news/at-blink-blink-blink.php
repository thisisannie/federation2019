<?php 
    $page_title = "Auckland Transport's Bike Bike Bike";
    $page_description = "An audio aide memoir to get drivers thinking about bike riders every time they turn.";

    include '../config.php';
	include ABSPATH . '/partials/header.php';
    include ABSPATH . '/partials/work-video.php'; 
?>

<div class="page page--recent-news__article">
    <div class="section section--white section--projects-intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="project-feature-header">
                        <h2 class="visuallyhidden">Bike Bike Bike</h2>
                        <div class="project-feature-header__text">
                            <span class="animate animate--slide-left-25">Bike Bike Bike</span>
                        </div>
                        <div class="project-feature-header__text project-feature-header__text--mobile">
                            <span class="animate animate--slide-left-25">Bike Bike Bike</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-2 col-md-6">
                    <p class="animate animate--fade-up-25 project-intro-company">Auckland Transport</p>
                    <p class="animate animate--fade-up-25 project-intro-description">An audio aide memoir to get drivers thinking about bike riders every time they turn.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--black section--banner">
        <img src="<?=HTML_ROOT;?>/img/news/at-blink-blink-blink/banner.webp" alt="Car indicating" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                           <li class="project-detail__item">Behaviour Change</li>
                            <li class="project-detail__item">Radio</li>
                            <li class="project-detail__item">OOH</li>
                            <li class="project-detail__item">Social video</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">Motorists are responsible for most accidents between vehicles and bikes. We simply have a blind spot when it comes to bikes. Experts call this “inattentional blindness” – an inability to see an unexpected object in plain sight. We wanted to hardwire a new behaviour with motorists to think bike when they make a turn. Using the sound of the turning indicator to say bike, bike, bike, we encourage drivers to be extra vigilant and to see what they were missing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--white section--video-feature">
        <div class="mini-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="mini-slider__slides-mask animate animate--fade-up-25">
                            <ul class="mini-slider__slides">
                                <li data-slide="1" data-slide-title="Radio" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="blink-blink-video-a">
                                       <div class="feature-video__image-group">
                                            <img src="<?=HTML_ROOT;?>/img/news/at-blink-blink-blink/slide-a.webp" alt="Car indicating blink blink blink = bike bike bike radio edit" class="feature-video__image">
                                            <img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="Play" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li>
                                <li data-slide="2" data-slide-title="OOH" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/at-blink-blink-blink/slide-b.webp" alt="Blink blink blink. Think bike bike bike. Out of house advertising.">
                                </li>
                                <li data-slide="3" data-slide-title="Social Video" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="blink-blink-video-c">
                                       <div class="feature-video__image-group">
                                            <img src="<?=HTML_ROOT;?>/img/news/at-blink-blink-blink/slide-c.webp" alt="Car indicating blink blink blink = bike bike bike video for social media" class="feature-video__image">
                                            <img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="Play" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25">Radio</p>
<!--                        <p class="mini-slider__paragraph animate animate--fade-up-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="mini-slider__nav animate animate--fade-up-25">
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--inactive mini-slider__btn--left"><path d="M10.24.69,1.4,9.82l8.85,9.12" transform="translate(-0.7 -0.35)" fill="none" /></svg>
                            <span data-slide="1" class="mini-slider__slide-no mini-slider__slide-no--current">1</span>
                            <span class="mini-slider__progress-meter">
                                <span class="mini-slider__current-progress"></span>
                            </span>
                            <span class="mini-slider__slide-no mini-slider__slide-no--total">3</span>
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--right"><path d="M.75.69,9.6,9.82.75,18.94" transform="translate(-0.4 -0.35)" fill="none" /></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>