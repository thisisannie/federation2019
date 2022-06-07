<?php 
    function includeNewsItem($side, $title, $copy, $slug, $img) {
        include('partials/news-item.php');
    }

    $page_title = "Leading change";
    $page_description = "A leading, independent advertising agency in Aotearoa, New Zealand. Marketing solutions for your challenges and new opportunities.";

    include 'config.php';
	include ABSPATH . '/partials/header.php';
    include ABSPATH . '/partials/work-video.php'; 
?>

<div class="page page--home">   
    <div class="section section--white section--intro">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="feature-img">
                    <h1 class="visuallyhidden">Federation | Leading Change</h1>
                    <div class="feature-img__text-mask feature-img__text-mask--outer">
                        <div class="feature-img__text feature-img__text--outer">
                            <span class="animate animate--slide-right-25">Leading</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;change</span>
                        </div>
                        <div class="feature-img__text feature-img__text--mobile feature-img__text--outer">
						<span class="animate animate--slide-right-25">Leading</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;change</span>
                        </div>
                    </div>
                    <div class="feature-img__bgvideo-wrapper" id="feature-img__bgvideo-wrapper">
                        <video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="video/920x518_mobile.webm" type="video/webm"><source src="video/920x518_mobile.mp4" type="video/mp4"><source src="video/920x518_mobile.ogv" type="video/ogg"></video>
                    </div>
                    <div class="feature-img__text-mask feature-img__text-mask--inner">
                        <div class="feature-img__text feature-img__text--desktop feature-img__text--inner">
                            <span class="animate animate--slide-right-25">Leading</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;change</span>
                        </div>
                        <div class="feature-img__text feature-img__text--mobile feature-img__text--inner">
                            <span class="animate animate--slide-right-25">Leading</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;change</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p class="animate animate--fade-up-25">Welcome to Federation.  We are a leading, independent advertising agency in Aotearoa, New Zealand. We create marketing solutions for the challenges you have now - and the opportunities you have next. Let us help you navigate your next move.</p>
                    <a href="<?=HTML_ROOT;?>/our-work" class="button button--red-inverse animate animate--fade-up-25">See our case studies</a>
                </div>
            </div>
        </div>            
    </div>
<!--
    <div class="section section--black section--why-work">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10">
                    <div class="feature-video feature" id="home__why-work">
                        <h2 class="visuallyhidden">Why work with us</h2>
                        <div class="feature-video__text-mask feature-video__text-mask--outer">
                            <div class="feature-video__text feature-video__text--outer">
                                <span class="animate animate--slide-left-25">Why work with us</span>
                            </div>
                            <div class="feature-video__text feature-video__text--mobile feature-video__text--outer">
                                <span class="animate animate--slide-left-25">Why work</span><br>
                                <span class="animate animate--slide-right-25">&nbsp;&nbsp;with us</span>
                            </div>
                        </div>
                        <div class="feature-video__image-group">
                            <img src="<?=HTML_ROOT;?>/img/page--home/why-work-img.jpg" alt="" class="feature-video__image">
                            <img src="<?=HTML_ROOT;?>/img/video-play-btn.png" alt="" class="feature-video__play-btn">
                        </div>
                        <div class="feature-video__text-mask feature-video__text-mask--inner">
                           <div class="feature-video__text feature-video__text--inner">
                                <span class="animate animate--slide-left-25">Why work with us</span>
                            </div>
                            <div class="feature-video__text feature-video__text--mobile feature-video__text--inner">
                                <span class="animate animate--slide-left-25">Why work</span><br>
                                <span class="animate animate--slide-right-25">&nbsp;&nbsp;with us</span>
                            </div>
                       </div>
                        <div class="feature-video__caption">
                            <span class="feature-video__caption--medium">Chardonnay Jankies</span><br>
                            <span class="feature-video__caption--light">CEO, Business</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-12 col-sm-10 offset-sm-1 col-md-6">
                    <p class="animate animate--fade-up-25">Strong client partnerships are crucial to success. Hear what some of our key marketing connections have to say about working with Federation.</p>
                    <a href="" class="link-button animate animate--fade-up-25">See all testimonials</a>
                </div>
            </div>
        </div>
    </div>
-->
<div class="section section--white section--adding-value">
        <div class="container">
            <div class="row row-a">
                <div class="col-12 col-sm-8">
                    <h2 class="visuallyhidden">Creating value</h2>
                    <div class="feature-img">
                        <div class="feature-img__text feature-img__text--outer">
                            <span class="animate animate--slide-left-25">Helping<br></span>
                            <span class="animate animate--slide-right-25">&nbsp;&nbsp;brands to dare<br></span>
							<span class="animate animate--slide-left-25">and endure</span>
                        </div>
                        <div class="feature-img__text feature-img__text--mobile feature-img__text--outer">
                            <span class="animate animate--slide-left-25">Helping</span><br>
                            <span class="animate animate--slide-right-25">&nbsp;&nbsp;brands</span><br>
                            <span class="animate animate--slide-left-25">to dare</span><br>
							<span class="animate animate--slide-right-25">&nbsp;&nbsp;and endure</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-4">
                    <img src="<?=HTML_ROOT;?>/img/page--home/value-img-a.jpg" alt="" class="feature-img__image talent-img-a">
                </div> -->
            </div>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <img src="<?=HTML_ROOT;?>/img/page--home/value-img-b.png" alt="" class="phone animate animate--fade-up-25">
                </div>
                <div class="col-12 col-sm-6 offset-sm-1">
                    <p class="animate animate--fade-up-25">We are independent by nature and use our challenger attitude to transform your brand and business results. But we know it only works when it ALL works. Which is why we involve ourselves in so much more than just advertising.  At Federation, we work with you to transform the entire customer experience your brand delivers, challenging the traditional with you to create the exceptional – for your brand, for every campaign and for every customer interaction and touchpoint.</p>
                    <a href="<?=HTML_ROOT;?>/what-we-do" class="button button--red animate animate--fade-up-25">Why work with us?</a>
                    <img src="<?=HTML_ROOT;?>/img/page--home/value-img-c.jpg" alt="" class="value-img-c animate animate--fade-up-25">
                </div>
            </div>
        </div>
    </div>
    <div class="section section--white section--collaborative">
        <div class="container">
            <div class="row">
                <div class="col-10 col-sm-8">
                    <div class="feature-img collab-feature">
                        <h2 class="visuallyhidden">We are 100% NZ</h2>
                        <img src="<?=HTML_ROOT;?>/img/page--home/Staff-shot.jpg" alt="" class="feature-img__image">
                        <div class="feature-img__text feature-img__text--outer">
                            <span class="animate animate--slide-right-25">We are</span><br>
                            <div class="feature-titles">
                                <div class="feature-title feature-title--1">
                                    <span class="animate animate--slide-left-25">&nbsp;&nbsp;100% NZ</span><br>
                                    <span></span>
                                </div>
                                <div class="feature-title feature-title--2">
                                    <span>&nbsp;&nbsp;Collaborative</span>
                                </div>
                                <div class="feature-title feature-title--3">
                                    <span>&nbsp;&nbsp;Agile</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-img__text feature-img__text--mobile feature-img__text--outer">
                            <span>We are</span><br>
                           <div class="feature-titles">
                                <div class="feature-title feature-title--1">
                                    <span>&nbsp;&nbsp;Collaborative</span>
                                    <br>
                                    <span></span>
                                </div>
                                <div class="feature-title feature-title--2">
                                    <span>&nbsp;&nbsp;New Zealand</span><br>
                                    <span>owned</span>
                                </div>
                                <div class="feature-title feature-title--3">
                                    <span>&nbsp;&nbsp;Agile</span>
                                    <br>
                                    <span></span>
                                </div>
                                <div class="feature-title feature-title--4">
                                    <span>&nbsp;&nbsp;Results</span>
                                    <br>
                                    <span>Focused</span>
                                </div>
                            </div>
                        </div>
                        <div class="stamp">
                            <img src="<?=HTML_ROOT;?>/img/page--home/stamp__rondell.png" alt="" class="stamp__rondell animate animate--rotate">
                            <img src="<?=HTML_ROOT;?>/img/page--home/stamp__f.png" alt="" class="stamp__f">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-3 offset-sm-1">
                    <img src="<?=HTML_ROOT;?>/img/page--home/collaborative-img-b.jpg" alt="" class="photo-b d-none d-sm-block animate animate--fade-up-25">
                </div> -->
            </div>
        </div>
    </div>
    <!-- <div class="section section--white section--talent">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-xl-7 offset-xl-1">
                    <h2 class="talent-header animate animate--fade-up-25">A Federation of Talent</h2>
                    <p class="animate animate--fade-up-25">Current times demand a different way of working. We focus on what matters, we’re nimble and we understand what makes <span style="white-space: nowrap">New Zealanders</span> tick.</p>
                    <p class="animate animate--fade-up-25">Every challenge has unique requirements. We bring the right talent to the table to get to the job done, and done well. Because of this, we deliver extraordinary results faster.</p>
                    <a href="<?=HTML_ROOT;?>/about" class="button button--red animate animate--fade-up-25">Find out more</a>
                    <p class="federation animate animate--fade-up-25"><span class="def-med">Federation</span><span class="def-reg"> | fɛdəˈreɪʃ(ə)n | (n)</span><br>
                    The action of forming organisations into a single group with centralised control.</p>
                </div>
                <div class="col-12 col-sm-3 offset-sm-1 talent-img-col">
                    <img src="<?=HTML_ROOT;?>/img/page--home/collaborative-img-b.jpg" alt="" class="photo-b d-none d-sm-block animate animate--fade-up-25">
                </div>
            </div>
        </div>
    </div> -->
    
    <div class="section section--white section--recent-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-header">
                        <h2 class="feature-header__text"><span class="animate animate--slide-left-25">Latest News</span></h2>
                    </div>
                </div>
            </div>
            <div class="row intro">
                <div class="col-12 col-sm-6 offset-sm-1">
                    <p class="animate animate--fade-up-25">Find out what Federation has been up to lately. We’ll keep you posted on our latest projects, events and happenings.</p>
                    <a href="<?=HTML_ROOT;?>/news" class="button button--red d-none d-sm-inline-block animate animate--fade-up-25">More latest news</a>
                </div>
            </div>
            <div class="row">
                <?php 
                    includeNewsItem(
                        "left",
                        "Massey",
                        "Federation Wins Massey University Account After 4-Way Pitch.",
                        "massey",
                        "massey-posters-thumb_v2.png"
                    );
                    includeNewsItem(
                        "right",
                        "Maritime NZ",
                        "Maritime NZ taps Federation as new behaviour-change agency.",
                        "maritime",
                        "thumb_maritime.jpg"
                    );
                ?>
            <div class="row">
                <div class="col-12 col-sm-6 offset-sm-1">
                    <a href="<?=HTML_ROOT;?>/news" class="button button--red d-inline-block d-sm-none animate animate--fade-up-25">More latest news</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php include ABSPATH . '/partials/footer.php'; ?>