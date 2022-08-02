<?php 
    $page_title = "Alcohol Awareness";
    $page_description = "Playing a key role in Auckland Transport’s Vision Zero strategy, we created a behavioural change campaign that prompts Aucklanders to ensure a safe ride home.";

    include '../config.php';
	include ABSPATH . '/partials/header.php';
    include ABSPATH . '/partials/work-video.php';

	$array = [
		"title1" => "Alcohol",
		"title2" => "Awareness",
		"client" => "Auckland Transport",
		"intro" => "Nights out are often planned meticulously and there are certain things we know will always happen. But the key detail that people often miss is how they’re going to get home safely – the most important part. No game plan is complete without a safe plan to get home.",
		"slug" => "alcohol-awareness",
        "bannerimg" => "banner_dance.webp",
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
        <img src="<?=HTML_ROOT;?>/img/news/<?php echo $array['slug']; ?>/<?php echo $array['bannerimg']; ?>" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">ONLINE VIDEO</li>
                            <li class="project-detail__item">SOCIAL</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">Drinking &amp; driving is an important issue in Auckland and a large contributor to serious accidents on our roads. Playing a key role in Auckland Transport’s Vision Zero strategy, we created a behavioural change campaign that prompts Aucklanders to ensure a safe ride home is accounted for before the night begins so that this decision isn’t left to be made late at night when one’s judgement may be impaired by alcohol and consequently the risk of a bad decision high.</p>
                        <p class="animate animate--fade-up-25">Our ‘Game Plan Complete’ script taps into the notion that Kiwi’s like to have a plan for their night out and that no game plan is complete without the inclusion of a safe journey home at the end of the night.</p>
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
                                <li data-slide="1" data-slide-title="OOH video" data-slide-paragraph="" class="mini-slider__slide">
                                    <div class="feature-video feature" id="video-<?php echo $array['slug']; ?>">
                                       <div class="feature-video__image-group">
                                            <img src="<?=HTML_ROOT;?>/img/news/<?php echo $array['slug']; ?>/video_preview_slide.webp" alt="AT Game plan video" class="feature-video__image">
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
                        <p class="mini-slider__title animate animate--fade-up-25">AT Game Plan</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>