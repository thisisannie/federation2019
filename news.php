<?php 
    function includeNewsItem($side, $title, $copy, $slug, $img) {
        include('partials/news-item.php');
    }
    $news = [
        "climate" => [
            "slug" => "climate",
            "title" => "Sustainability Consulting",
            "copy" => "Over the last year we’ve been busy applying our learnings and helping organisations and marketers on their journey to net zero.  Here are some highlights.",
            "img" => "ebus_motion-thumb.webp",
        ],
        "massey" => [
            "slug" => "massey",
            "title" => "Massey",
            "copy" => "Federation Wins Massey University Account After 4-Way Pitch.",
            "img" => "massey-posters-thumb_v2.webp",
        ],
        "maritime" => [
            "slug" => "maritime",
            "title" => "Maritime NZ",
            "copy" => "Maritime NZ taps Federation as new behaviour-change agency.",
            "img" => "thumb_maritime.webp",
        ],
        "opeta" => [
            "slug" => "opeta",
            "title" => "Opeta Elika",
            "copy" => "Federation appoints renowned Pasifika designer, Opeta Elika.",
            "img" => "thumb_opeta.webp",
        ],
        "luxe" => [
            "slug" => "luxe",
            "title" => "Luxe",
            "copy" => "L’Oréal moves luxury brand portfolio to Federation.",
            "img" => "thumb_luxe.webp",
        ],
        "opera" => [
            "slug" => "opera",
            "title" => "NZ Opera",
            "copy" => "New Zealand Opera appoints Federation.",
            "img" => "thumb_opera.webp",
        ], 
        "drive-karma" => [
            "slug" => "drive-karma",
            "title" => "Drive Calmer,<br>Spread Good Karma",
            "copy" => "As part of the Auckland Transport’s Vison Zero goal Federation developed a behaviour change campaign.",
            "img" => "thumb_karma.webp",
        ],
        "bobbie" => [
            "slug" => "bobbie",
            "title" => "Bobbie McKay",
            "copy" => "Federation expands, appoints Bobbie McKay to Creative Group Head.",
            "img" => "thumb_bobbie.webp",
        ],
        "motorbike-safety" => [
            "slug" => "motorbike-safety",
            "title" => "Motorbike Safety",
            "copy" => "With a Vision Zero goal that identifies one death on our roads is one too many, AT worked with Federation to create a disruptive behaviour-change campaign.",
            "img" => "thumb_bird.webp",
        ],
        "massey-recruitment" => [
            "slug" => "massey-recruitment",
            "title" => "Success from a Thousand Little Moments",
            "copy" => "Using real student insights to build Massey Universities 2022 recruitment campaign, celebrating success from a thousand little moments.",
            "img" => "Massey-recruitment-488x294-thumbnail_v1.webp",
        ],
        "alcohol-awareness" => [
            "slug" => "alcohol-awareness",
            "title" => "Alcohol Awareness",
            "copy" => "Nights out are often planned meticulously and there are certain things we know will always happen.",
            "img" => "thumb_alcohol.webp",
        ],
        "opera-unruly" => [
            "slug" => "opera-unruly",
            "title" => "Unruly Tourists",
            "copy" => "The Unruly Tourists is a new comedy opera commissioned by NZ Opera.",
            "img" => "Opera-Unruly-488x294-thumbnail_v1.webp",
        ],
        "massey-pacific" => [
            "slug" => "massey-pacific",
            "title" => "Pacific Pattern Project",
            "copy" => "We designed a new visual identity for Pacific@Massey to encompass rich culture and history.",
            "img" => "Massey-Pacific-488x294-thumbnail_v1.webp",
        ],
        "at-mobile-moment" => [
            "slug" => "at-mobile-moment",
            "title" => "Mobile Moment",
            "copy" => "Our latest video campaign for Auckland Transport encourages drivers to have a “Mobile Moment” before they hit the road.",
            "img" => "article.webp",
        ],
        "summer-cycling" => [
            "slug" => "summer-cycling",
            "title" => "Summer Cycling",
            "copy" => "Biking delivers joy, freedom, and fresh air – with this in mind we set out to inspire Aucklanders to grab their bike for their next short journey. You were going there  anyway, so why not have a little fun along the way?",
            "img" => "thumb_summer.webp",
        ],
        "akl-council-afip" => [
            "slug" => "akl-council-afip",
            "title" => "Auckland Council AFIP",
            "copy" => "This summer OOH campaign showcases all the recently completed spaces for Aucklanders to make the most of their city.",
            "img" => "AKL-Council-AFIP-488x294-thumbnail_v1.webp",
        ],
        "blues" => [
            "slug" => "blues",
            "title" => "Bring it Blue",
            "copy" => "How do you recruit Aucklanders to get behind The Blues? Easy… take aim at the country’s biggest Hurricane’s fan!",
            "img" => "article.webp",
        ],
        "tony" => [
            "slug" => "tony",
            "title" => "Tony joins Federation",
            "copy" => "Tony Clewett joins Federation as Chief Creative Officer.",
            "img" => "article.webp",
        ],
        "nz-marketing-mag" => [
            "slug" => "nz-marketing-mag",
            "title" => "Epic experiences for everyone",
            "copy" => "NZ Marketing magazine.",
            "img" => "mag-article-banner.webp",
        ],
        "elanco" => [
            "slug" => "elanco",
            "title" => "Fleasy Peasy",
            "copy" => "Elanco makes it fleasy-peasy for dogs and cats with Federation.",
            "img" => "Seresto-Cat-on-tin-Gold_article.webp",
        ],
        "loreal" => [
            "slug" => "loreal",
            "title" => "L’Oréal",
            "copy" => "We’re thrilled L’Oréal New Zealand has appointed Federation for it’s Consumer Products Division, the umbrella group for the L’Oréal Paris, Garnier and Maybelline brands.",
            "img" => "loreal-banner.webp",
        ],
        "change-agents" => [
            "slug" => "change-agents",
            "title" => "Change Agents",
            "copy" => "Accelerating change is the only real constant in the world we live in right now…",
            "img" => "banner.webp",
        ],
        "at-blink-blink-blink" => [
            "slug" => "at-blink-blink-blink",
            "title" => "Bike Bike Bike",
            "copy" => "An audio aide memoir to get drivers thinking about bike riders every time they turn.",
            "img" => "blink-blink-blink.webp",
        ],
        "emirates-bali-weekend" => [
            "slug" => "emirates-bali-weekend",
            "title" => "Bali week",
            "copy" => "The beauty of Bali on your doorstep.",
            "img" => "emirates-bali.webp",
        ],
        "samoa" => [
            "slug" => "samoa",
            "title" => "Samoa",
            "copy" => "Interrupting busy lives with moments of unique, simple beauty.",
            "img" => "samoa.webp",
        ],
        "q-airbnb" => [
            "slug" => "q-airbnb",
            "title" => "Q Mastercard + Airbnb",
            "copy" => "Helping Q Card holders get their home Airbnb ready.",
            "img" => "news-img-a.webp",
        ],
        "cctv" => [
            "slug" => "cctv",
            "title" => "CCTV Bus Lanes",
            "copy" => "Getting across a serious message with a lighter touch.",
            "img" => "cctv-bus-lanes-img.webp",
        ],
        "great-barrier" => [
            "slug" => "great-barrier",
            "title" => "Great Barrier",
            "copy" => "Getting the recycling message out to Great Barrier Island.",
            "img" => "great-barrier-img.webp",
        ],
        "hop-top-up" => [
            "slug" => "hop-top-up",
            "title" => "Hop Top Up",
            "copy" => "Helping to make commuters’ lives just a little bit easier.",
            "img" => "hop-top-up-img.webp",
        ],
        "simparica" => [
            "slug" => "simparica",
            "title" => "Simparica Taste Test",
            "copy" => "The flea treatment that goes down a treat.",
            "img" => "simparica-img.webp",
        ],
        "suncorp-early-warning" => [
            "slug" => "suncorp-early-warning",
            "title" => "Suncorp Early Warning",
            "copy" => "Helping customers prepare for severe weather.",
            "img" => "suncorp-ews-img.webp",
        ],
        "seatbelts" => [
            "slug" => "seatbelts",
            "title" => "Seatbelts",
            "copy" => "Finding the right way to reach a specific audience.",
            "img" => "seatbelts.webp",
        ],
    ];
    
    $page_title = "News";
    $page_description = "The world is a dynamically changing place. New work. New people. New capabilities. New technologies. Check out what’s been happening with Federation.";

    include 'config.php';
	include ABSPATH . '/partials/header.php';
?>

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
                    $i = 0;
                    foreach ($news as $item) {
                        $side = ($i%2 === 0) ? 'left' : 'right';
                        includeNewsItem($side, $item["title"], $item["copy"], $item["slug"], $item["img"]);
                        $i++;
                    }
                ?>
                
            </div>
        </div>
    </div>
</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>