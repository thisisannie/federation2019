<?php 
	$page_title = "Maritime New Zealand";
	$page_description = "Federation has won the coveted safety and behaviour-change advertising account of Maritime New Zealand and the Safer Boating Forum following a 4-way competitive pitch.";

	include 'header.php';
	include 'work-video.php';
		
	$array = [
		"title1" => "Maritime",
		"title2" => "New Zealand",
		"client" => "",
		"intro" => "Maritime NZ taps Federation as new behaviour-change agency.",
		"slug" => "maritime",
		"bannerimg" => "banner_maritime.jpg",
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
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8 col-lg-7 col-xl-7">
					<div class="project-detail__description">
						<p class="animate animate--fade-up-25"><strong>Federation has won the coveted safety and behaviour-change advertising account of Maritime New Zealand and the Safer Boating Forum following a 4-way competitive pitch.</strong></p>
						<p class="animate animate--fade-up-25">Olly Boden, Managing Partner at Federation says, “The appointment of Federation to Maritime New Zealand gives a definitive nod to our position in Auckland and Wellington as the agency that’s providing a fresh approach and genuine expertise in social and behaviour change marketing.  Together with the Maritime team, we’ll be deploying a two-year strategy that engages and educates recreational boaties and at-risk segments through behavioural science-based campaigns.</p>
						<p class="animate animate--fade-up-25">Sharon Henderson, CEO of Federation added, “Maritime New Zealand is much more than a business win to us. Recreational boating has the highest number of fatalities in the maritime sector with an average of 20 boaties dying each year so this is critically important, life-saving work.  This is a step change moment for boating in New Zealand, that will see the embedding of essential safety messages for lasting, measurable impact.”</p>
						<p class="animate animate--fade-up-25">Deputy Chief Executive Communication and Stakeholder Engagement at Maritime New Zealand, Sharyn Forsyth says, “The appointment of Federation heralds a new chapter for Maritime New Zealand and our Safer Boating Forum partners. Our panel felt Federation nailed the brief, providing an exceptional response to what was a rigorous strategy and creative review process. They demonstrated their significant experience with safety campaigns, delivering a very strategic behaviour change solution to the disparate audience segment and geo-specific problems we face.</p>
						<p class="animate animate--fade-up-25">“Around 1.7m adults, around 45% of all New Zealanders, participate in recreational boating and that number is growing. We’re very much looking forward to working together with Federation to create a step-change in attitudes and behaviours.”</p>
						<p class="animate animate--fade-up-25">The appointment is effectively immediately with planning for the summer 2021/2022 campaign already underway.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'results-widget.php'; ?>
</div>
	
<?php include 'footer.php'; ?>