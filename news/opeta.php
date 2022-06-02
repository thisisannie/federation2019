<?php 
	$page_title = "Opeta Elika joins Federation as Senior Designer";
	$page_description = "Opeta Elika, whose ground-breaking social impact work is held in Te Papa, joins Federation as Senior Designer, Culture & Brand.";

	include '../config.php';
	include ABSPATH . '/header.php';
	include ABSPATH . '/work-video.php';

	$array = [
		"title1" => "Opeta",
		"title2" => "Elika",
		"client" => "",
		"intro" => "Opeta Elika, whose ground-breaking social impact work is held in Te Papa, joins Federation as Senior Designer, Culture & Brand.",
		"slug" => "opeta",
		"bannerimg" => "banner_opeta.jpg",
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
						<p class="animate animate--fade-up-25"><strong>Elika joins Federation from Mediaworks where he was responsible for commercial branding and brand identity projects. He’s also a renowned Pasifika designer in his own right, with a unique understanding of branding for its power to connect with audiences and have social impact.</strong></p>
						<p class="animate animate--fade-up-25">Elika, is the creator of the Advance Pasifika symbol has the rare honour of being held in Te Papa’s history collection. Elika says of the piece, “Advance Pasifika was designed to underline the generational contribution of the Pasifika community to Tamaki Makaurau and Aotearoa. It is a rallying cry and call for change, for equality for our people and access to health, education, housing and fairness in the justice system. My inspiration came from the tatau patterns of the Pacific which are fused with the clenched fist symbol to create an embodiment of Pacific people taking a stand.”</p>
						<p class="animate animate--fade-up-25">Federation’s Chief Creative Officer Tony Clewett says “Design is a fundamental part of branding. It has the potential to make the most powerful statements and Opeta’s work for Advance Pasifika is a great testament to that. We’re very proud Opeta has chosen to join Federation. He is a powerhouse of thoughtful, beautiful design that is rich in cultural relevance and sensitivity. He is an exceptional talent who will make his mark on design history many more times yet. He is able to consider design intuitively through a Pasifika and tikanga Māori lens.”</p>
						<p class="animate animate--fade-up-25">Elika says he is thrilled to join independent New Zealand agency, Federation. “The opportunity to work alongside Tony, Sharon, Elizabeth, Olly and the team was a huge pull for me. There’s an energy, respectfulness and passion in the agency for all cultures that makes it an exciting environment to be a part of. I can’t wait to get out of lockdown and back into the office with the team.”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ABSPATH . '/results-widget.php'; ?>
</div>
	
<?php include ABSPATH . '/footer.php'; ?>