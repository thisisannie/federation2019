<?php include 'header.php'; ?>
<?php include 'work-video.php'; ?>

<?php 
	$array = [
		"title1" => "Summer",
		"title2" => "Cycling",
		"client" => "Auckland Transport",
		"intro" => "Biking delivers joy, freedom, and fresh air – with this in mind we set out to inspire Aucklanders to grab their bike for their next short journey. You were going there anyway, so why not have a little fun along the way?",
		"slug" => "summer-cycling",
	];

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
                            <span class="animate animate--slide-left-25"><?php echo $array['title2']; ?></span><br>
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
        <img src="img/news/<?php echo $array['slug']; ?>/banner_summer.jpg" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">TVC</li>
                            <li class="project-detail__item">OOH</li>
                            <li class="project-detail__item">Social</li>
                            <li class="project-detail__item">Digital</li>
                            <li class="project-detail__item">Radio</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">There are many rational reasons to grab your bike from the back of the shed for the spring & summer season: health, cost-savings, mental wellbeing, fitness, fresh air - but the simplest and most emotive of all is ‘fun’. Freedom equals fun.</p>
                        <p class="animate animate--fade-up-25">Biking is a simple, joyful activity we’ve all learnt at a young age, and one that seems to reveal a smile every time. We tapped into that insight to own and celebrate the fact, creating an impactful campaign that inspires Aucklanders to jump on their bike for their next local journey. The intention was to firstly help Aucklander’s rediscover a love for biking locally before moving into a second phase which spoke to commuting via bike.</p>
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
                                <li data-slide="1" data-slide-title="Video" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="video-<?php echo $array['slug']; ?>">
                                       <div class="feature-video__image-group">
                                            <img src="img/news/<?php echo $array['slug']; ?>/summer_vid_preview.jpg" alt="" class="feature-video__image">
                                            <img src="img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li>
                                <li data-slide="2" data-slide-title="Britomart Tower" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/brit_tower_summer.jpg" alt="">
                                </li>
                                <li data-slide="3" data-slide-title="OOH Victoria East" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/OOH_vic_east_summer.jpg" alt="">
                                </li>
                                <li data-slide="4" data-slide-title="OOH Victoria West" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/OOH_vic_west_summer.jpg" alt="">
                                </li>
                                <li data-slide="5" data-slide-title="Triple Summer" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/vert_triple_summer.jpg" alt="">
                                </li>
                                
                                <!-- <li data-slide="3" data-slide-title="Activation" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="emirates-bali-activation">
                                        <div class="feature-video__image-group">
                                            <img src="img/news/emirates-bali/slide-c.jpg" alt="" class="feature-video__image">
                                            <img src="img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25"><!-- Lorem --></p>
<!--                        <p class="mini-slider__paragraph animate animate--fade-up-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="mini-slider__nav animate animate--fade-up-25">
                            <svg width="9.9" height="18.94" viewBox="0 0 9.9 18.94" class="mini-slider__btn mini-slider__btn--inactive mini-slider__btn--left"><path d="M10.24.69,1.4,9.82l8.85,9.12" transform="translate(-0.7 -0.35)" fill="none" /></svg>
                            <span data-slide="1" class="mini-slider__slide-no mini-slider__slide-no--current">1</span>
                            <span class="mini-slider__progress-meter">
                                <span class="mini-slider__current-progress"></span>
                            </span>
                            <span class="mini-slider__slide-no mini-slider__slide-no--total">5</span>
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
    <?php include 'results-widget.php'; ?>
</div>
    
<?php include 'footer.php'; ?>