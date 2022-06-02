<?php 
    $page_title = "Suncorp Early Warning";
    $page_description = "Their new severe weather alert service in co-operation with Metservice NZ can help you get prepared for whatever mother nature throws your way.";

    include '../config.php';
	include ABSPATH . '/header.php';
    include ABSPATH . '/work-video.php';
?>

<div class="page page--recent-news__article">
    <div class="section section--white section--projects-intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="project-feature-header">
                        <h2 class="visuallyhidden">Suncorp Early Warning</h2>
                        <div class="project-feature-header__text">
                            <span class="animate animate--slide-left-25">Suncorp</span><br>
                            <span class="animate animate--slide-right-25">&nbsp;Early Warning</span>
                        </div>
                        <div class="project-feature-header__text project-feature-header__text--mobile">
                            <span class="animate animate--slide-left-25">Suncorp</span><br>
                            <span class="animate animate--slide-right-25">&nbsp;Early</span><br>
                            <span class="animate animate--slide-left-25">Warning</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-2 col-md-6">
                    <p class="animate animate--fade-up-25 project-intro-company">Suncorp</p>
                    <p class="animate animate--fade-up-25 project-intro-description">Helping customers prepare for severe weather.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--black section--banner">
        <img src="<?=HTML_ROOT;?>/img/news/suncorp-early-warning/Header-Image-1400x600.jpg" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row justify-content-center">
<!--
                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">PRINT</li>
                            <li class="project-detail__item">POS</li>
                            <li class="project-detail__item">ONLINE VIDEO</li>
                            <li class="project-detail__item">SOCIAL</li>
                            <li class="project-detail__item">DIRECT MARKETING</li>
                            <li class="project-detail__item">B2B</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>
-->
                <div class="col-12 col-sm-8 col-lg-7 col-xl-7">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">Suncorp is always thinking of ways to protect you and your property. Their new severe weather alert service in co-operation with Metservice NZ can help you get prepared for whatever mother nature throws your way.</p>
                        <p class="animate animate--fade-up-25">Customers receive an early warning of severe weather events affecting their community, plus helpful tips on how to keep themselves and their property safe.</p>
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
                                <li data-slide="1" data-slide-title="Title-1" data-slide-paragraph="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam." class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/suncorp-early-warning/Img-01-946x495.jpg" alt="">
                                </li>
                                <li data-slide="2" data-slide-title="Title-2" data-slide-paragraph="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.-2" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/suncorp-early-warning/Img-02-946x495.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
<!--
                        <p class="mini-slider__title animate animate--fade-up-25">Title-1</p>
                        <p class="mini-slider__paragraph animate animate--fade-up-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="mini-slider__nav animate animate--fade-up-25">
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--inactive mini-slider__btn--left"><path d="M10.24.69,1.4,9.82l8.85,9.12" transform="translate(-0.7 -0.35)" fill="none" /></svg>
                            <span data-slide="1" class="mini-slider__slide-no mini-slider__slide-no--current">1</span>
                            <span class="mini-slider__progress-meter">
                                <span class="mini-slider__current-progress"></span>
                            </span>
                            <span class="mini-slider__slide-no mini-slider__slide-no--total">2</span>
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--right"><path d="M.75.69,9.6,9.82.75,18.94" transform="translate(-0.4 -0.35)" fill="none" /></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/footer.php'; ?>