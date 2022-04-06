<?php include 'header.php'; ?>
<?php include 'work-video.php'; ?>
<?php 
	$array = [
		"title1" => "New Zealand",
		"title2" => "Opera",
		"client" => "",
		"intro" => "New Zealand Opera has appointed Federation, effective immediately, as the lead agency in New Zealand for brand, creative, strategy and design.",
		"slug" => "opera",
		"bannerimg" => "banner_opera.jpg",
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
						<p class="animate animate--fade-up-25"><strong>The Company has a long-term strategic agenda that seeks to re-imagine what opera might mean in New Zealand with the goal of becoming a more relevant and inclusive national cultural organisation.</strong></p>
						<p class="animate animate--fade-up-25">Terri Cumiskey, Director of Marketing and Development at NZ Opera says that Federation’s creative and strategic firepower is what’s needed as the Company looks to engage new audiences and reimagine the art form; “Federation has a proven track record of creating impactful and effective work based on strong creative platforms and deep strategic insight. NZ Opera is committed to enhancing and evolving opera by adding a diverse, inclusive lens. Therefore we need an agency who can connect to the changing needs and demands of our current and future audiences.”</p>
						<p class="animate animate--fade-up-25">Elizabeth Beatty, Managing Partner at Federation, added; “This is an amazing time of huge ambition for NZ Opera. We’re thrilled to be appointed lead creative agency working in partnership with Terri, and the General Director of NZ Opera, Thomas de Mallet Burgess”.</p>
						<p class="animate animate--fade-up-25">NZ Opera’s purpose is to enrich the cultural life of the people of Aotearoa through an experience of opera that connects, engages and inspires reflection on our human condition.</p>
						<p class="animate animate--fade-up-25"><em>He whakarangatira i te oranga ahurea o Aotearoa mā te whakakite i te puoro whakaari e tūhono nei, e toro nei, e whakaawe nei i te huringa o ngā whakaaro ki te āhua o te ira tangata.</em></p>
						<p class="animate animate--fade-up-25"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'results-widget.php'; ?>
</div>
	
<?php include 'footer.php'; ?>