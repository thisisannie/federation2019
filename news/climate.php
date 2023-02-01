<?php 
	$page_title = "Massey University";
	$page_description = "Federation Wins Massey University Account After 4-Way Pitch for brand, integrated campaigns and media.";

	include '../config.php';
	include ABSPATH . '/partials/header.php';
	include ABSPATH . '/partials/work-video.php';

	$array = [
		"title1" => "Sustainability",
		"title2" => "Consulting",
		"client" => "1 February 2022",
		"intro" => "Over the last year we’ve been busy applying our learnings and helping organisations and marketers on their journey to net zero.  Here are some highlights.",
		"slug" => "climate",
		"bannerimg" => "ebus_motion_1400x600.webp",
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
		<img src="<?=HTML_ROOT;?>/img/news/<?php echo $array['slug']; ?>/<?php echo $array['bannerimg']; ?>" alt="Sustainable Business Network teams up with Te Radar for #SueTheSea campaign via Federation" class="feature-image">
	</div>
	<div class="section section--white project-detail">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8 col-lg-7 col-xl-7">
					<div class="project-detail__description">
						<p class="animate animate--fade-up-25"><strong>Hard to believe it’s been 12 months since Federation became the first Agency in Aotearoa to be accredited in Business and Climate Change: Towards Net Zero Transmission from the University of Cambridge Institute for Sustainability Leadership.</strong></p>

						<p class="animate animate--fade-up-25"><a href="https://campaignbrief.co.nz/2022/04/21/federation-becomes-first-creative-agency-in-aotearoa-to-launch-sustainability-consulting/" target="_blank">Read Campaign brief Article: Federation becomes first creative agency in Aotearoa to launch sustainability consulting</a></p>
						<p class="animate animate--fade-up-25">Over the last year we’ve been busy applying our learnings and helping organisations and marketers on their journey to net zero.  Here are some highlights.</p>
						<p class="animate animate--fade-up-25">Back in May 2022 we held a thought-provoking session to kick-start the return of the Marketing Association’s CMO breakfast where our lead team spoke about how authentic sustainability and purpose can be embedded into brands to create a nucleus for future growth. We were privileged to have our clients LOréal and Auckland Transport talk about their transition to Net Zero and it was fascinating to hear the experience so many senior marketers are having in their industries in their own journeys.</p>
						<div class="feature-video feature animate animate--fade-up-25" id="video-<?php echo $array['slug']; ?>" style="margin-bottom:1.5em;">
								<div class="feature-video__image-group">
										<img src="<?=HTML_ROOT;?>/img/news/<?php echo $array['slug']; ?>/sue-the-sea-1.webp" alt="Sue the Sea video ad" class="feature-video__image">
										<img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="Play" class="feature-video__play-btn">
								</div>
						</div>
						
						<p class="animate animate--fade-up-25">During 2022 Federation also partnered with the Sustainable Business Network and we were thrilled to be a sponsor of the Sustainable Business Awards, celebrating organisations across the country making strides in sustainability. Our first campaign for SBN, Te Radar’s #SueTheSea, demonstrated how we need to stop holding others accountable for climate change and instead own what we can do ourselves. The work has driven awareness of Sustainable Business Network’s support of organisations who want to start their own journey in adopting more sustainable practices.</p>
						<p class="animate animate--fade-up-25"><a href="https://campaignbrief.co.nz/2022/11/28/sustainable-business-network-teams-up-with-te-radar-for-suethesea-campaign-via-federation/" target="_blank">Read Campaign Brief article: Sustainable Business Network teams up with Te Radar for #SueTheSea campaign via Federation</a></p>
						<img src="<?=HTML_ROOT;?>/img/news/<?php echo $array['slug']; ?>/bus_back.webp" alt="Mission Electric: Less Grrrr, More Shhh" class="feature-image animate animate--fade-up-25" style="margin-bottom:1.5em;">
						<p class="animate animate--fade-up-25">We’ve also worked with Auckland Transport to support the introduction of low-emission electric and hydrogen vehicles. The creative platform ‘Mission Electric’ provides a rallying idea to build awareness of Auckland Transport’s emissions reduction plan and achievements in delivering on their commitment to building an efficient and sustainable transport network.</p>
						<p class="animate animate--fade-up-25"><a href="https://campaignbrief.co.nz/2022/12/07/auckland-transport-leads-tamaki-makauraus-electric-travel-future-in-new-work-via-federation/" target="_blank">Read Campaign Brief article: Auckland Transport leads Tāmaki Makaurau’s electric travel future in new work via Federation</a></p>
						<p class="animate animate--fade-up-25">And for Auckland Council we developed another long term creative platform, Auckland Forever  providing an umbrella for Auckland Council’s current and planned climate change activities. One which inspires Aucklanders, drives awareness of what they are doing and ultimately motivates people to take action to protect Tāmaki Makaurau for future generations.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
	
<?php include ABSPATH . '/partials/footer.php'; ?>