<?php include 'header.php'; ?>
<?php include 'work-video.php'; ?>
<?php 
	$array = [
		"title1" => "Drive Calmer,",
		"title2" => "Spread Good Karma",
		"client" => "Auckland Transport",
		"intro" => "As part of the Auckland Transport’s Vison Zero goal Federation developed a behaviour change campaign that gets drivers to see the connection between speed and its consequences to other road users, especially vulnerable road users like pedestrians and cyclists. And in doing so, reduce their speeds to the new lower limits, and help create safer communities.",
		"slug" => "drive-karma",
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
        <img src="img/news/<?php echo $array['slug']; ?>/banner_Karma.jpg" alt="" class="feature-image">
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
                        <p class="animate animate--fade-up-25">Aucklanders were introduced to the behaviour change message of ‘<?php echo $array['title1']; ?> <?php echo $array['title2']; ?>’– happiness is contagious. One person’s mood can impact another person’s wellbeing, and even their actions. This ‘contagious’ behaviour also applies to our driving. ‘Good’ drivers stick to the speed limit and help to spread positivity, both to other drivers and pedestrians.  In engaging content, we modelled the behaviour we want to see - good, safe driving. </p>
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
                                <li data-slide="1" data-slide-title="Drive Karma" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="video-<?php echo $array['slug']; ?>">
                                       <div class="feature-video__image-group">
                                            <img src="img/news/<?php echo $array['slug']; ?>/Karma_video_preview.jpg" alt="" class="feature-video__image">
                                            <img src="img/video-play-btn.png" alt="" class="feature-video__play-btn">
                                        </div>
                                    </div>
                                </li>
                                <li data-slide="2" data-slide-title="Ad Shell" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/_karma_superliteslide-a.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 offset-md-1">
                        <p class="mini-slider__title animate animate--fade-up-25">Drive Karma</p>
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
    <?php include 'results-widget.php'; ?>
</div>
    
<?php include 'footer.php'; ?>