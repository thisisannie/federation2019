<?php 
    function includeNewsItem($side, $title, $copy, $slug, $img) {
        include('partials/news-item.php');
    } 
?>

<?php include "header.php"; ?>

<div class="page page--recent-news">   
    <div class="section section--white section--intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="feature-header">
                        <h1 class="visuallyhidden">Federation | News</h1>
                        <div class="feature-header__text">
							<span class="animate animate--slide-right-25">Check out what’s</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;happening</span>
                        </div>
                        <div class="feature-header__text feature-header__text--mobile">
							<span class="animate animate--slide-right-25">Check out</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;what’s</span><br>
							<span class="animate animate--slide-right-25">happening</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p class="animate animate--fade-up-25">The world is a dynamically changing place and we’ve always got a lot going on. New work. New people. New capabilities. New technologies. Check out what’s been happening with Federation.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--white section--recent-news">
        <div class="container">
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
                    includeNewsItem(
                        "left",
                        "Opeta Elika",
                        "Federation appoints renowned Pasifika designer, Opeta Elika.",
                        "opeta",
                        "thumb_opeta.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "Daisy Conroy-Botica",
                        "Federation nabs Daisy Conroy-Botica as Digital and Social Lead.",
                        "daisy",
                        "thumb_daisy.jpg"
                    );
                    includeNewsItem(
                        "left",
                        "Luxe",
                        "L’Oréal moves luxury brand portfolio to Federation.",
                        "luxe",
                        "thumb_luxe.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "NZ Opera",
                        "New Zealand Opera appoints Federation.",
                        "opera",
                        "thumb_opera.jpg"
                    ); 
                    includeNewsItem(
                        "left",
                        "Drive Calmer,<br>Spread Good Karma",
                        "As part of the Auckland Transport’s Vison Zero goal Federation developed a behaviour change campaign.",
                        "drive-karma",
                        "thumb_karma.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "Bobbie McKay",
                        "Federation expands, appoints Bobbie McKay to Creative Group Head.",
                        "bobbie",
                        "thumb_bobbie.jpg"
                    );
                    includeNewsItem(
                        "left",
                        "Motorbike Safety",
                        "With a Vision Zero goal that identifies one death on our roads is one too many, AT worked with Federation to create a disruptive behaviour-change campaign.",
                        "motorbike-safety",
                        "thumb_bird.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "Success from a Thousand Little Moments",
                        "Using real student insights to build Massey Universities 2022 recruitment campaign, celebrating success from a thousand little moments.",
                        "massey-recruitment",
                        "Massey-recruitment-488x294-thumbnail_v1.jpg"
                    );
                    includeNewsItem(
                        "left",
                        "Alcohol Awareness",
                        "Nights out are often planned meticulously and there are certain things we know will always happen.",
                        "alcohol-awareness",
                        "thumb_alcohol.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "Unruly Tourists",
                        "The Unruly Tourists is a new comedy opera commissioned by NZ Opera.",
                        "opera-unruly",
                        "Opera-Unruly-488x294-thumbnail_v1.jpg"
                    );
                    includeNewsItem(
                        "left",
                        "Pacific Pattern Project",
                        "We designed a new visual identity for Pacific@Massey to encompass rich culture and history.",
                        "massey-pacific",
                        "Massey-Pacific-488x294-thumbnail_v1.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "Mobile Moment",
                        "Our latest video campaign for Auckland Transport encourages drivers to have a “Mobile Moment” before they hit the road.",
                        "at-mobile-moment",
                        "article.jpg"
                    );
                    includeNewsItem(
                        "left",
                        "Summer Cycling",
                        "Biking delivers joy, freedom, and fresh air – with this in mind we set out to inspire Aucklanders to grab their bike for their next short journey. You were going there anyway, so why not have a little fun along the way?",
                        "summer-cycling",
                        "thumb_summer.jpg"
                    );
                    includeNewsItem(
                        "right",
                        "Auckland Council AFIP",
                        "This summer OOH campaign showcases all the recently completed spaces for Aucklanders to make the most of their city.",
                        "akl-council-afip",
                        "AKL-Council-AFIP-488x294-thumbnail_v1.jpg"
                    );                   
                ?>

                <?php // Please note, cols below are essentially the same as those using the partial above ?>
                
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
						<a href="news__blues" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Bring it Blue</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Bring it Blue</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/the-blues/article.png" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">Bring it Blue</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">How do you recruit Aucklanders to get behind The Blues? Easy… take aim at the country’s biggest Hurricane’s fan!</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                    <div class="news-article news-article--right">
					    <a href="news__tony" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Tony joins Federation</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Tony joins Federation</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/tony/article.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">Tony joins Federation</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">Tony Clewett joins Federation as Chief Creative Officer.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>						
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__nz-marketing-mag" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Epic experiences for everyone</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Epic experiences for everyone</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/nz-marketing-mag/mag-article-banner.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">Epic experiences for everyone</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">NZ Marketing magazine.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                    <div class="news-article news-article--right">
					<a href="news__elanco" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Fleasy Peasy</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Fleasy Peasy</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/elanco/Seresto-Cat-on-tin-Gold_article.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #000">Fleasy Peasy</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">Elanco makes it fleasy-peasy for dogs and cats with Federation.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					<a href="news__loreal" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">L’Oréal</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">L’Oréal</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/loreal/loreal-banner.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">L’Oréal</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">We’re thrilled L’Oréal New Zealand has appointed Federation for it’s Consumer Products Division, the umbrella group for the L’Oréal Paris, Garnier and Maybelline brands.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                    <div class="news-article news-article--right">
					    <a href="news__brand-new" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Brand New</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Brand New</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/brand-new.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #000">Brand New</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">Tabitha Harris joins Federation in the newly created role of Brand Director.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__change-agents" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Change Agents</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Change Agents</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/change-agents/banner.png" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #fff">Change Agents</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">Accelerating change is the only real constant in the world we live in right now…</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                   <div class="news-article news-article--right">
				        <a href="news__at-blink-blink-blink" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Bike Bike Bike</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Bike Bike Bike</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/blink-blink-blink.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner" style="color:#fff">
                                        <span class="animate animate--slide-left-25">Bike Bike Bike</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">An audio aide memoir to get drivers thinking about bike riders every time they turn.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__emirates-bali-weekend" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Bali week</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Bali week</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/emirates-bali.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #fff">Bali week</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">The beauty of Bali on your doorstep.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                   <div class="news-article news-article--right">
				        <a href="news__samoa" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Samoa</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Samoa</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/samoa.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #000">Samoa</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">Interrupting busy lives with moments of unique, simple beauty.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__q-airbnb" class="news-article__link">
                           <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Q Mastercard + Airbnb</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Q Mastercard + Airbnb</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/page--home/news-img-a.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                   <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">Q Mastercard + Airbnb</span>
                                    </div>
                               </div>
                            </div>
                            <p class="animate animate--fade-up-25">Helping Q Card holders get their home Airbnb ready.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                   <div class="news-article news-article--right">
				        <a href="news__cctv" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">CCTV Bus Lanes</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">CCTV Bus Lanes</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/cctv-bus-lanes-img.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">CCTV Bus Lanes</span>
                                    </div>
                                </div>
                            </div>
                            <p class="animate animate--fade-up-25">Getting across a serious message with a lighter touch.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__great-barrier" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Great Barrier</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Great Barrier</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/great-barrier-img.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                   <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25">Great Barrier</span>
                                    </div>
                               </div>
                            </div>
                            <p class="animate animate--fade-up-25">Getting the recycling message out to Great Barrier Island.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                    <div class="news-article news-article--right">
				        <a href="news__hop-top-up" class="news-article__link">
                            <div class="news-article__feature-img"> 
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Hop Top Up</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Hop Top Up</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/hop-top-up-img.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                    <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #000">Hop Top Up</span>
                                    </div>
                               </div>
                            </div>
                            <p class="animate animate--fade-up-25">Helping to make commuters’ lives just a little bit easier.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__simparica" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Simparica Taste Test</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Simparica Taste Test</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/simparica-img.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                   <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #000">Simparica Taste Test</span>
                                    </div>
                               </div>
                            </div>
                            <p class="animate animate--fade-up-25">The flea treatment that goes down a treat.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 offset-md-2 news-col">
                   <div class="news-article news-article--right">
				   <a href="news__suncorp-early-warning" class="news-article__link">
                            <div class="news-article__feature-img"> 
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Suncorp Early Warning</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Suncorp Early Warning</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/suncorp-ews-img.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                   <div class="news-article__text news-article__text--inner">
                                        <span class="animate animate--slide-left-25" style="color: #000">Suncorp Early Warning</span>
                                    </div>
                               </div>
                            </div>
                            <p class="animate animate--fade-up-25">Helping customers prepare for severe weather.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 not-offset news-col">
                    <div class="news-article news-article--left">
					    <a href="news__seatbelts" class="news-article__link">
                            <div class="news-article__feature-img">   
                                <div class="news-article__text-mask news-article__text-mask--outer">
                                    <h2 class="visuallyhidden">Seatbelts</h2>
                                    <div class="news-article__text news-article__text--outer">
                                        <span class="animate animate--slide-left-25">Seatbelts</span>
                                    </div>
                                </div>
                                <div class="news-article__image-mask">
                                    <img src="img/news/seatbelts.jpg" alt="" class="news-article__image">
                                </div>
                                <div class="news-article__text-mask news-article__text-mask--inner">
                                   <div class="news-article__text news-article__text--inner" style="color:#fff">
                                        <span class="animate animate--slide-left-25">Seatbelts</span>
                                    </div>
                               </div>
                            </div>
                            <p class="animate animate--fade-up-25">Finding the right way to reach a specific audience.</p>
                            <span class="link-button animate animate--fade-up-25">See more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'footer.php'; ?>