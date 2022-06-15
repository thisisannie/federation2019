<?php 
	$page_title = "L’Oréal moves luxury brand portfolio to Federation.";
	$page_description = "The move sees Lancôme, Kiehl’s Since 1851, Yves Saint Laurent, Georgio Armani, Urban Decay, Viktor&Rolf, Valentino, Diesel, Prada and more, head to the independent agency.";

	include '../config.php';
	include ABSPATH . '/partials/header.php';
	include ABSPATH . '/partials/work-video.php';
		
	$array = [
		"title1" => "Luxe",
		"title2" => "",
		"client" => "L’Oréal",
		"intro" => "L’Oréal moves luxury brand portfolio to Federation.",
		"slug" => "luxe",
		"bannerimg" => "banner_luxe.webp",
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
						<p class="animate animate--fade-up-25"><strong>The Luxe Division of L’Oréal New Zealand has appointed its stable of luxury brands to creative agency, Federation. The move sees Lancôme, Kiehl’s Since 1851, Yves Saint Laurent, Georgio Armani, Urban Decay, Viktor&Rolf, Valentino, Diesel, Prada and more, head to the independent agency. The move adds substantially to Federation’s appointment to the Consumer Products Division brands of L’Oréal Paris, Maybelline New York, Garnier and Essie.</strong></p>
						<p class="animate animate--fade-up-25">L’Oréal New Zealand Country Manager, Aurelie de Cremiers says an agency review was undertaken to deliver greater strategic value to the New Zealand business. “L’Oréal is recognised as the leading beauty company in the world and in New Zealand. We are very ambitious to drive further growth for our brands and the beauty market in New Zealand.”</p>
						<p class="animate animate--fade-up-25">Business and Commercial Lead for L’Oréal Luxe, Elizabeth Grant says, “The Luxe division was looking for an agency who could offer genuine business partnership while helping us to deliver continued growth across our entire portfolio of luxury brands, especially the fast-growing e-commerce sector. </p>
						<p class="animate animate--fade-up-25">Federation has demonstrated the talent, dedication and capability needed to deliver across all of our offline and online touchpoints, together with seamless media integration.”</p>
						<p class="animate animate--fade-up-25">CEO of Federation, Sharon Henderson added: “Federation is incredibly proud to be partnering with L’Oréal’s luxury brands team. L’Oréal is a global leader and they stand up for the things that really matter. Diversity, inclusion, gender equality.  And sustainability with their commitment to net-zero CO2 emissions including renewable energy without carbon offsetting.”</p>
						<p class="animate animate--fade-up-25">Elizabeth Beatty, Managing Partner for Federation confirms “The appointment is effective immediately. L’Oréal’s Luxe portfolio encompasses the world’s best-known luxury cosmetic, fragrance and skincare brands including Lancôme, Kiehl’s Since 1851, Yves Saint Laurent, Georgio Armani, Urban Decay, Viktor&Rolf, Valentino, Diesel and Prada. We couldn’t be more excited!”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ABSPATH . '/partials/results-widget.php'; ?>
</div>
	
<?php include ABSPATH . '/partials/footer.php'; ?>