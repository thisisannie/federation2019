<?php 
    $page_title = "Success from a thousand little moments";
    $page_description = "Using real student insights to build Massey Universities 2022 recruitment campaign, celebrating success from a thousand little moments.";

    include '../config.php';
	include ABSPATH . '/partials/header.php';
    include ABSPATH . '/partials/work-video.php';

	$array = [
		"title1" => "Success from a",
		"title2" => "Thousand Little Moments",
		"client" => "Massey University",
		"intro" => "Using real student insights to build Massey Universities 2022 recruitment campaign, celebrating success from a thousand little moments.",
		"slug" => "massey-recruitment",
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
        <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Massey-recruitment-1400x600-hero_v1.webp" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">OOH</li>
                            <li class="project-detail__item">SOCIAL</li>
                            <li class="project-detail__item">Digital</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">The university recruitment genre traditionally features the cliché of skyward gazing students with an inspirational quote around perseverance and success. We promised both Massey and the students we wouldn’t go there. Massey wanted to cut away from the pack, opting for originality with the new brand platform ‘success from a thousand little moments', bringing to life the mahi of student life at Massey.</p>
                        <p class="animate animate--fade-up-25">The campaign had to be genuine, in touch, and highly relevant to students. Because of this, the insight for the campaign was formed during a visit to Massey’s three campus locations in Palmerston North, Wellington and Auckland from conversations with real students themselves, and exactly why they chose Massey.</p>
                        <p class="animate animate--fade-up-25">The 2022 recruitment campaign launched in September 2021 across print, digital, and OOH. Bold, bright, and featuring a suite of illustrations of all types of students young and old. We’re very proud of this new creative platform anchored with a fresh, unpolished authenticity that we can’t wait to carry into the future with Massey University.</p>
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
                                <li data-slide="1" data-slide-title="Social Video 1" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="video-<?php echo  $array['slug']; ?>-1">
                                       <div class="feature-video__image-group">
                                            <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Social-video-tile-945x496.webp" alt="" class="feature-video__image">
                                            <img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li>
                                <li data-slide="2" data-slide-title="Social Video 2" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="video-<?php echo  $array['slug']; ?>-2">
                                       <div class="feature-video__image-group">
                                            <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Social-video-tile-945x496.webp" alt="" class="feature-video__image">
                                            <img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li>
                                <li data-slide="3" data-slide-title="Street Poster" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Street-poster-series-945x496.webp" alt="">
                                </li>
                                <li data-slide="4" data-slide-title="OOH" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/OOH-945x496.webp" alt="">
                                </li>
                                <li data-slide="5" data-slide-title="Bus Side" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/Bus-side-945x496.webp" alt="">
                                </li>
                                <li data-slide="6" data-slide-title="OOH Series" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="<?=HTML_ROOT;?>/img/news/<?php echo  $array['slug']; ?>/OOH-series-945x496.webp" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25">Social Video 1</p>
<!--                        <p class="mini-slider__paragraph animate animate--fade-up-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="mini-slider__nav animate animate--fade-up-25">
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--inactive mini-slider__btn--left"><path d="M10.24.69,1.4,9.82l8.85,9.12" transform="translate(-0.7 -0.35)" fill="none" /></svg>
                            <span data-slide="1" class="mini-slider__slide-no mini-slider__slide-no--current">1</span>
                            <span class="mini-slider__progress-meter">
                                <span class="mini-slider__current-progress"></span>
                            </span>
                            <span class="mini-slider__slide-no mini-slider__slide-no--total">6</span>
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