<?php 
    $page_title = "Motorbike Safety";
    $page_description = "With a Vision Zero goal that identifies one death on our roads is one too many, AT worked with Federation to create a disruptive behaviour-change campaign.";

    include 'header.php';
    include 'work-video.php';

	$array = [
		"title1" => "Motorbike",
		"title2" => "Safety",
		"client" => "Auckland Transport",
		"intro" => "Nearly half of all motorcycle crashes in Tamaki Makaurau take place at urban intersections. The most common crash factors are poor observation and failure to give way or stop, and too often result in death or serious injury.",
		"slug" => "motorbike-safety",
        "bannerimg" => "banner_bird.jpg",
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
        <img src="img/news/<?php echo $array['slug']; ?>/<?php echo $array['bannerimg']; ?>" alt="" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left"> 
                            <li class="project-detail__item">OOH</li>
                            <li class="project-detail__item">Digital</li>
                            <li class="project-detail__item">Press</li>
                            <li class="project-detail__item">Social</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-lg-7 col-xl-7 offset-xl-1">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">With a Vision Zero goal that identifies one death on our roads is one too many, AT worked with Federation to create a disruptive behaviour-change campaign aimed squarely at reducing motorcycle crashes at intersections. Our research identified that if riders knew how to maximise their vision on the road, they could spot dangers earlier, and crucially, avoid them altogether.</p>
                        <p class="animate animate--fade-up-25">The result is a campaign that uses disruptive visual metaphors and messaging, reframing how motorcyclists need to ride. We replaced the riders with native birds known for their exceptional vision and hypervigilance, the Ruru and the Karearea, and hit the message home with the clear message, “Intersections. See everything. React to anything”.</p>
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
                                <li data-slide="1" data-slide-title="OOH 1" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/OOH-a.jpg" alt="">
                                </li>
                                <li data-slide="2" data-slide-title="OOH 2" data-slide-paragraph="" class="mini-slider__slide">
                                    <img src="img/news/<?php echo $array['slug']; ?>/OOH-b.jpg" alt="">
                                </li>
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