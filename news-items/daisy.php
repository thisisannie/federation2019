<?php 
    $page_title = "Daisy Conroy-Botica joins Federation as Social Strategy Lead";
    $page_description = "Formerly the Social and Digital Manager at Special Group, Daisy has been apointed into the newly created role of Digital and Social Strategy Lead.";

    include '../config.php';
	include ABSPATH . '/header.php';
    include ABSPATH . '/work-video.php';
    
	$array = [
		"title1" => "Daisy joins",
		"title2" => "Federation",
		"client" => "",
		"intro" => "Federation nabs Daisy Conroy-Botica as Digital and Social Lead.",
		"slug" => "daisy",
        "bannerimg" => "banner_daisy.jpg",
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
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-7 col-xl-7">
                    <div class="project-detail__description">
                        <p class="animate animate--fade-up-25"><strong>Independent New Zealand agency, Federation has announced the appointment of Daisy Conroy-Botica, formerly Social and Digital Manager at Special Group, into the newly created role of Digital and Social Strategy Lead.  Daisy joins Federation to work alongside Head of Digital, Jeremy Clark, and Chief Creative Officer, Tony Clewett.</strong></p>
                        <p class="animate animate--fade-up-25">Managing Partner for Federation, Olly Boden says. “Daisy is a fantastic addition to the team. She’s a highly awarded, proven digital native with a string of the biggest global awards to her name for her involvement in Tourism’s ‘Good Morning World’ and the ‘Meddler’ campaign for Every Kiwi Vote Counts. We’re super-impressed by Daisy.  She’s a strong lateral thinker, adding innovative, best practice thinking to the digital and social space.”</p>
						<p class="animate animate--fade-up-25">Daisy says, "It’s a great feeling to join Federation – I am in my element here. There’s tremendous opportunity to bring digital and social innovation to campaigns for every client. I’m looking forward to working with a great team, creating great work, that we’re all proud of.”</p>
						<p class="animate animate--fade-up-25">Daisy has carved out a career as a digital specialist, and at Special Group was responsible for social and digital campaigns with Tourism New Zealand (including a secondment there running social), Uber Eats, Red Bull, and Every Kiwi Vote Counts. Her personal haul of awards includes local and global awards for helping Kiwis to say ‘Good Morning’ to the world every single day for a year, encouraging New Zealanders overseas to vote in the 2020 general election, and a high speed chase involving a burger and a shark down Auckland’s Tāmaki drive (and onto mobile phones around the country). </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ABSPATH . '/results-widget.php'; ?>
</div>
    
<?php include ABSPATH . '/footer.php'; ?>