<?php 
    $page_title = "Bobby McKay joins Federation";
    $page_description = "Hot on the back of the appointment of new creative team Hathaway and France from Stanley Street, Federation’s CCO Tony Clewett announced another key hire.";

    include '../config.php';
	include ABSPATH . '/partials/header.php';
    include ABSPATH . '/partials/work-video.php';
    
	$array = [
		"title1" => "Bobbie joins",
		"title2" => "Federation",
		"client" => "",
		"intro" => "Federation expands, appoints Bobbie McKay to Creative Group Head.",
		"slug" => "bobbie",
        "bannerimg" => "banner_bobbie.webp",
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
        <img src="<?=HTML_ROOT;?>/img/news/<?php echo $array['slug']; ?>/<?php echo $array['bannerimg']; ?>" alt="Bobbie McKay" class="feature-image">
    </div>
    <div class="section section--white project-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-7 col-xl-7">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25"><strong>Hot on the back of the appointment of new creative team Hathaway and France from Stanley Street, Federation’s Chief Creative Officer Tony Clewett has announced another key hire, this time the appointment of award-winning creative, Bobbie McKay, into the newly created role of Creative Group Head.</strong></p>
                        <p class="animate animate--fade-up-25">Clewett says the agency is on a roll after a number of key new business wins and the appointment of McKay continues the agency’s creative momentum. He says McKay is “an award winning creative and known talent for her wit and left-field thinking. Bobbie can spin a mesmerizing yarn and make even the toughest audiences crack a smile when they least expect it. I’m often in awe as to how she can command a room. It’s a true pleasure to have Bobbie join the Feds family.”</p>
						<p class="animate animate--fade-up-25">Previously, McKay led the Z Energy account at Shine as Creative Director. Prior to that, she was Creative Group Head at FCB, working with Clewett on several key accounts, including Vodafone New Zealand, Air New Zealand and Pak‘nSave.</p>
						<p class="animate animate--fade-up-25">McKay says, “the opportunity to work with Tony is always a big drawcard. I’ve been having a great time at Federation so coming on board permanently is fantastic. They’re a driven bunch and super smart. It’s an agency that’s full of formidable talent and cool people as well – double bonus. I’ve watched the work coming out since Tony’s arrival and it’s exciting to be part of the amazing new story that’s unfolding.”</p>
						<p class="animate animate--fade-up-25">Clewett adds, “this is certainly an exciting time for an independent agency in Aotearoa and there’s plenty more to come. Watch this space.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>