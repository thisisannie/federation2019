<?php include 'header.php'; ?>
<?php include 'work-video.php'; ?>
<?php 
	$array = [
		"title1" => "Massey",
		"title2" => "University",
		"client" => "",
		"intro" => "Federation Wins Massey University Account After 4-Way Pitch.",
		"slug" => "massey",
		"bannerimg" => "massey-posters-banner_v2.png",
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
						<p class="animate animate--fade-up-25"><strong>Independent agency Federation has been appointed lead creative agency for Massey University after a four-way competitive pitch for brand, integrated campaigns and media. </strong></p>
						<p class="animate animate--fade-up-25">Massey University is truly the University for New Zealand, spread across three cities and campuses in Auckland, Palmerston North and Wellington; and is also a leader in global online education.</p>
						<p class="animate animate--fade-up-25">Today it has confirmed that both its creative and media accounts are moving to independent agency Federation with Rocket Media winning the media business.</p>
						<p class="animate animate--fade-up-25">CEO, Sharon Henderson says, “It’s a fantastic win that will see Federation lead the charge as creative agency, partnering with Rocket to deliver one, seamlessly integrated creative and media solution.”</p>
						<p class="animate animate--fade-up-25">Massey University Director of Marketing, Recruitment and Alumni, Ruth Mackenzie says,“The University found Federation to be intuitively aligned to the growth and innovation journey it is on. Federation and Rocket impressed our Panel with their creative approach, strategic insight and outside the square digital and media thinking. They showed a real passion and drive for our brand and our future as a university. This came through in every part of their response to our brief. We look forward to achieving great things together.”</p>
						<p class="animate animate--fade-up-25">Managing Partner of Federation Elizabeth Beatty added, “We are thrilled and delighted to be creating the next chapter with the team at Massey University.  They are without doubt, one of the most iconic brands in our education sector and are on a mission to deliver more world-ready, entrepreneurial graduates in a contemporary Aotearoa New Zealand than ever before.  We can’t wait to get started and conquer the world with them!”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'results-widget.php'; ?>
</div>
	
<?php include 'footer.php'; ?>