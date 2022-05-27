<?php 
    $page_title = "Auckland Future in Progress";
    $page_description = "Out of Home advertising for Auckland Council, building a better Auckland with a city centre that puts people first.";     

	$array = [
		"title1" => "Auckland Future",
		"title2" => "in Progress – Summer OOH",
		"client" => "Auckland Council",
		"intro" => "Auckland Council is building a better Auckland with a city centre that puts people first. This summer OOH campaign showcases all the recently completed spaces for Aucklanders to make the most of their city.",
		"slug" => "akl-council-afip",
        "bannerimg" => "AKL-Council-AFIP-1400x600-hero_v1.jpg",
	];

    include 'header.php';
    include 'work-video.php';
?>

<div class="page page--recent-news__article">
    <div class="section section--white section--projects-intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="project-feature-header">
                        <h2 class="visuallyhidden"><?php echo $array['title1']; ?> <?php echo $array['title2']; ?></h2>
                        <div class="project-feature-header__text">
                            <span class="animate animate--slide-left-25"><?php echo $array['title1']; ?></span><br>
                            <span class="animate animate--slide-right-25">&nbsp;<?php echo $array['title2']; ?></span>
                        </div>
                        <div class="project-feature-header__text project-feature-header__text--mobile">
                            <span class="animate animate--slide-left-25"><?php echo $array['title1']; ?></span><br>
                            <span class="animate animate--slide-right-25">&nbsp;<?php echo $array['title2']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-2 col-md-6">
                    <p class="animate animate--fade-up-25 project-intro-company"><?php echo $array['client']; ?></p>
                    <p class="animate animate--fade-up-25 project-intro-description"><?php echo $array['intro']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--black section--banner">
        <img src="img/news/<?php echo $array['slug']; ?>/<?php echo $array['bannerimg']; ?>" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">OOH</li>
                            <li class="project-detail__item">Press</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">Auckland spend months and years in the construction phase of projects (public spaces/street upgrades/inner city parks) with the spotlight on the negatives as Aucklanders complain of the disruption. Once projects are complete, and the benefits are finally there for all Aucklanders to see, the attention shifts to the start of construction for another project.</p>
                        <p class="animate animate--fade-up-25">This campaign is about showing Aucklanders the benefits of these completed new spaces and streets so they can see for themselves the great work Auckland Council is doing. We chose to hero the recently completed K-Road cycleway extension, Quay Street upgrades and brand-new waterfront space Te Wānanga, where every seat comes with a view. </p>
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
                                <!-- <li data-slide="1" data-slide-title="OOH video" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="<?php echo $array['slug']; ?>">
                                       <div class="feature-video__image-group">
                                            <img src="img/news/<?php echo $array['slug']; ?>/video.jpg" alt="" class="feature-video__image">
                                            <img src="img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li> -->
                                <li data-slide="1" data-slide-title="Te Wānanga" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/TeWananga-945x496.jpg" alt="">
                                </li>
                                <li data-slide="2" data-slide-title="KRD" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/Krd-945x496.jpg" alt="">
                                </li>
                                <li data-slide="3" data-slide-title="Quay Street" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/Quay-street-945x496.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25">Te Wānanga</p>
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
    <?php include 'results-widget.php'; ?>
</div>
    
<?php include 'footer.php'; ?>