<?php 
    $page_title = "Massey Pacific - Massey University";
    $page_description = "We designed a new visual identity for Pacific@Massey to encompass rich culture and history, as well as celebrate the success and achievement of past, current and future students.";

    include '../config.php';
	include ABSPATH . '/partials/header.php';
    include ABSPATH . '/partials/work-video.php';
    
	$array = [
		"title1" => "Massey",
		"title2" => "Pacific",
		"client" => "Massey University",
		"intro" => "We designed a new visual identity for Pacific@Massey to encompass rich culture and history, as well as celebrate the success and achievement of past, current and future students.",
		"slug" => "massey-pacific",
	];
?>

<div class="page page--recent-news__article">
    <div class="section section--white section--projects-intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="project-feature-header">
                        <h2 class="visuallyhidden"><?php echo $array['title1'] . ' ' . $array['title2']; ?></h2>
                        <div class="project-feature-header__text">
                            <span class="animate animate--slide-left-25"><?php echo $array['title1']; ?></span><br>
                            <span class="animate animate--slide-right-25">&nbsp;<?php echo $array['title2']; ?></span>
                        </div>
                        <div class="project-feature-header__text project-feature-header__text--mobile">
                            <span class="animate animate--slide-left-25"><?php echo $array['title1']; ?></span><br>
                            <span class="animate animate--slide-right-25">&nbsp;<?php echo  $array['title2']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-2 col-md-6">
                    <p class="animate animate--fade-up-25 project-intro-company"><?php echo  $array['client']; ?></p>
                    <p class="animate animate--fade-up-25 project-intro-description"><?php echo  $array['intro']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--black section--banner">
        <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Massey-Pacific-1400x600-hero_v1.webp" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">Brand</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">Utilising traditional patterns from everyday life in the Pacific, we designed a new visual identity for the Pacific at Massey team.</p>
                        <p class="animate animate--fade-up-25">We introduced a modern take on the traditional Fala weave pattern as the supporting icon for the new logo design, which is popular in all corners of the Pacific. All the arrows are facing in, representing the coming together of all pacific regions and Massey University, symbolising collaboration, and a connected community.</p>
                        <p class="animate animate--fade-up-25">The introduction of a new pattern design strengthens the design identity of Pacific at Massey further. This pattern acknowledges the past, while moving forward to the future. A modern twist on an old classic. The pattern is dynamic and can be used across a wide variety of print and digital material.</p>
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
                                <!-- <li data-slide="1" data-slide-title="Video" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="<?php echo  $array['slug']; ?>">
                                       <div class="feature-video__image-group">
                                            <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/video-placeholder.webp" alt="" class="feature-video__image">
                                            <img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li> -->
                                <li data-slide="1" data-slide-title="OOH" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/OOH-945x496.webp" alt="">
                                </li>
                                <li data-slide="2" data-slide-title="Mobile" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/IG-945x496.webp" alt="">
                                </li>
                                <li data-slide="3" data-slide-title="Pattern" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Pattern-945x496.webp" alt="">
                                </li>
                                <li data-slide="4" data-slide-title="Logo" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/logo-945x496.webp" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25">OOH</p>
<!--                        <p class="mini-slider__paragraph animate animate--fade-up-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="mini-slider__nav animate animate--fade-up-25">
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--inactive mini-slider__btn--left"><path d="M10.24.69,1.4,9.82l8.85,9.12" transform="translate(-0.7 -0.35)" fill="none" /></svg>
                            <span data-slide="1" class="mini-slider__slide-no mini-slider__slide-no--current">1</span>
                            <span class="mini-slider__progress-meter">
                                <span class="mini-slider__current-progress"></span>
                            </span>
                            <span class="mini-slider__slide-no mini-slider__slide-no--total">4</span>
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--right"><path d="M.75.69,9.6,9.82.75,18.94" transform="translate(-0.4 -0.35)" fill="none" /></svg>
                        </div>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25">30" Video</p>
                        <p class="mini-slider__paragraph animate animate--fade-up-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                </div>-->
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>