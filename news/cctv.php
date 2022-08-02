<?php 
    $page_title = "CCTV Bus Lanes";
    $page_description = "Auckland Transport wanted to let people know that a new network of CCTV cameras had been installed in bus lanes on all the major routes in the city.";

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
                        <h2 class="visuallyhidden">CCTV Bus Lanes</h2>
                        <div class="project-feature-header__text">
                            <span class="animate animate--slide-left-25">CCTV</span><br>
                            <span class="animate animate--slide-right-25">&nbsp;Bus Lanes</span>
                        </div>
                        <div class="project-feature-header__text project-feature-header__text--mobile">
                            <span class="animate animate--slide-left-25">CCTV</span><br>
                            <span class="animate animate--slide-right-25">&nbsp;Bus Lanes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-2 col-md-6">
                    <p class="animate animate--fade-up-25 project-intro-company">Auckland Transport</p>
                    <p class="animate animate--fade-up-25 project-intro-description">Getting across a serious message with a lighter touch.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--black section--banner">
        <img src="<?=HTML_ROOT;?>/img/news/cctv/Header-Image-1400x600.webp" alt="Portraits of your car, $150 each. Bus lane CCTV." class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row justify-content-center">
<!--
                <div class="col-12 col-sm-4 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1">
                    <div class="project-detail__tag-container">
                        <ul class="project-detail__tags animate--stagger-left">
                            <li class="project-detail__item">???</li>
                            <li class="project-detail__item">???</li>
                            <li class="project-detail__item">???</li>
                            <li class="project-detail__item">???</li>
                            <li class="project-detail__item">???</li>
                            <li class="project-detail__item">???</li>
                        </ul>
                        <span class="project-detail__square"></span>
                    </div>
                </div>
-->
                <div class="col-12 col-sm-8 col-lg-7 col-xl-7">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25">Auckland Transport wanted to let people know that a new network of CCTV cameras had been installed in bus lanes on all the major routes in the city. Any unauthorized car driver caught in one now faced an immediate $150 fine.</p>
                        <p class="animate animate--fade-up-25">The challenge was to get this message across in a noticeable way that was not nagging or threatening in tone. The use of humour helps the message to be hard hitting without being authoritarian.</p>
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
                        <img src="<?=HTML_ROOT;?>/img/news/cctv/Img-946x495.webp" alt="CCTV Out of house billboard. Portraits of your car, $150 each.">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>