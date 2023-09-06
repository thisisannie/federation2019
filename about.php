<?php
    function includeHorizontalScrollerItem($name, $img, $title, $description) {
        include('partials/horizontal-scroller-item.php');
    }
    function includeMobileProfileItem($name, $img, $title, $description) {
        include('partials/mobile-profile-item.php');
    }

    $staff = [
        "sharon" => [
            "name" => "Sharon Henderson",
            "img" => "staff-photos_sharon.webp",
            "title" => "Founder / Director",
            "description" => "Sharon is an agency leader and overall strategic partner to Federation’s clients. She is passionate about building the bond between a brand and its customers and is a champion for marketing integration. Prior to starting Federation in 2008, Sharon was Managing Director of DDB New Zealand. She also spent more than ten years with Clemenger BBDO, as CEO of Proximity New Zealand, and also Group MD of Proximity Australia. Sharon is busy with her two teenagers. She is also active in the community as the Vice President board member of Variety, the Children’s Charity, and an appointee to the Business Development Group by the Ministry of Business, Innovation and Employment. Sharon was also inaugural Board Chair of the NZ Marketing Association.",
        ],
        // "tony" => [
        //     "name" => "Tony Clewett",
        //     "img" => "staff-photos_tony.jpg",
        //     "title" => "Chief Creative Officer",
        //     "description" => "The creative leader behind some of NZ’s most-loved, well-known, and internationally-acclaimed brand campaigns of recent memory. Previously the Chief Creative Officer and overall Creative lead of FCB NZ; earning over 100 awards for creativity and effectiveness along the way.",
        // ],
        "elizabeth" => [
            "name" => "Elizabeth Beatty",
            "img" => "staff-photos_elizabeth.jpg",
            "title" => "Managing Partner",
            "description" => "Elizabeth has worked in the advertising and communications industry for over 20 years in the UK, Australia and New Zealand and brings a wealth of integrated experience and leadership qualities to Federation. Coming from a Marketing Director role in the tech industry most recently, she was previously General Manager at FCB specifically responsible for the Agency’s largest integrated account, Vodafone. Prior to this she was the Managing Partner/Lead Business Partner for the DDB Group, in Auckland, where she led integrated teams for Auckland Council, Westpac and BMW/MINI. Other experience includes running OgilvyOne in Sydney, Australia’s largest CRM agency. During her eight years there she also ran the integrated business for American Express across Australia and New Zealand, Ogilvy Australia’s largest account, generating more work than any other international office outside of the US. Other agency experience includes working in London where she looked after pan-European accounts at OgilvyOne and Saatchi & Saatchi. Elizabeth started her career at the Bank of New Zealand in the Marketing department where she joined as a Graduate Trainee.",
        ],
        "olly" => [
            "name" => "Olly Boden",
            "img" => "staff-photos_olly.jpg",
            "title" => "Managing Partner",
            "description" => "Olly is a rare breed of account leader, combining a wealth of digital, social and mobile expertise (Isobar UK) with years of blue chip brand experience across all media, for prominent organizations such as Adidas, BNZ and Auckland Council Group. Areas of specialist experience include travel, tourism and sport, including sponsorship. His global experience and ‘big picture’ perspective perfectly compliment the team at Federation.",
        ],
        "opeta" => [
            "name" => "Opeta Elika",
            "img" => "staff-photos_opeta.webp",
            "title" => "Senior Designer",
            "description" => "Opeta is a celebrated designer with an understanding of the power of branding. As the creator of the Advance Pasifika symbol, Opeta has the rare honour of being featured in Te Papa’s history collection. He says of the piece: “It is a rallying cry for equality and access to health, education, housing and fairness in the justice system.” A thoughtful designer, Opeta is able to consider design through a Pasifika and tikanga Māori lens. Oh, and he also happens to be a very cool guy.",
        ],
        "jc" => [
            "name" => "Jeremy Clark",
            "img" => "staff-photos_jeremy.jpg",
            "title" => "Digital Director",
            "description" => "Ask Jeeves, Napster, Bebo – after 15 years in the digital design and advertising world, Jeremy has pretty much seen it all. He’s an inquisitive creative, always researching and building on his encyclopedic knowledge of all things online, mobile and all the bits and bytes in between. Jeremy has worked on plenty of memorable campaigns, like the Speight’s Great Beer Delivery, as well as being involved in multichannel launches for Virgin Mobile and Tourism Victoria. Through the years, Jeremy’s stashed away a fair chunk of metal from the local and international award scenes, including One Show, Cannes, D&AD, and Axis.",
        ],
        "gene" => [
            "name" => "Gene Wheaton",
            "img" => "staff-photos_geno.jpg",
            "title" => "Senior Digital Designer",
            "description" => "Gene has been into Design since his teenage years. During his career he has gained a broad range of experience in the digital sphere. He loves a good creative digital challenge, believes in constant improvement and bringing the best possible experience for the end user. In his spare time he enjoys crate diving for vinyl & whipping up a storm in the kitchen.",
        ],
        "phoebe" => [
            "name" => "Phoebe Brown",
            "img" => "Phoebe.jpg",
            "title" => "Designer",
            "description" => "After growing up in Bristol, UK with its thriving art and design scene Phoebe was always destined for the visual arts. Backed by a degree in Graphic Design at Kingston University, London she has worked in a wide variety of creative roles including Print and Digital Designer at Flourish, TV Art Department Intern for Riviera at Sky Atlantic and Freelance Designer at Lucky Voice, Music Licensing. Did we mention she loves animals? Done.",
        ],
        "nat" => [
            "name" => "Nattaya Jongjarupat",
            "img" => "staff-photos_nat.jpg",
            "title" => "Digital/Motion Designer",
            "description" => "Nattaya started her career as a novice creative freelancer - through this she has worked in various roles from photography, graphic design, jewellery design, illustration, web design and social media management. Since then she has ditched freelancing for pixels and all things digital. Jack of all trades - always enthusiastic about learning new creative skills. Passionately obsessed with photography where she combines with her love of nature and the outdoors. When she’s not designing at Federation, you’ll probably find her in the garden, hiking with her husky, getting amongst music festivals, or cooking up a storm!",
        ],
        "liz" => [
            "name" => "Liz Adams",
            "img" => "Liz.jpg",
            "title" => "Group Business Director",
            "description" => "Liz Adams is one of New Zealand’s most experienced and savvy customer marketers. Across her career, Liz has worked as Team Leader on the agency side for some of New Zealand’s foremost organisations, including Air New Zealand, Flexi Group and Spark.",
        ],
        "ollie" => [
            "name" => "Ollie Crawford",
            "img" => "Ollie.jpg",
            "title" => "Business Director",
            "description" => "After spending time in London working on product launch and brand campaigns for Apple, Ollie has rejoined our client service team. He has a particular interest in sports marketing, brand strategy and creative execution. Having also worked on Spark, Volvo and Vodafone, Ollie has an impressive array of experience.",
        ],
        "emma" => [
            "name" => "Emma Fern",
            "img" => "staff-photos_emma.webp",
            "title" => "Planning Director",
            "description" => "Emma Fern is one of New Zealand’s most experienced integrated communications Planning Directors. She works alongside clients at Federation to create strategies that grow consumer love and engagement for our client’s brands. Emma has worked across many global brands and also New Zealand’s largest brands in her capacity as a planner. Brands worked on include Air New Zealand, Bank of New Zealand, ANZ Bank, Sky TV and Cadbury. Emma was formerly Senior Brand Planner at DDB New Zealand, Former Planning Director at BBDO-owned Aim Proximity and former Group Account Director at Rapp Collins London.",
        ],
        // "naz" => [
        //     "name" => "Naresh Makan",
        //     "img" => "staff-photos_naz.jpg",
        //     "title" => "Studio/Production Manager",
        //     "description" => "Naresh leads Federation’s studio and is responsible for the day-to-day delivery of final art. With over 20 years in the biz, Naresh has developed some super-efficient processes along the way. He’s a highly experienced and detail oriented manager and finished artist who makes sure the artwork that leaves the agency exceeds client expectations every time. Naresh is a proud citizen of Waiheke Island where he enjoys some of New Zealand’s finest.",
        // ],
        // "maddie" => [
        //     "name" => "Maddie Johnson",
        //     "img" => "maddie_bu.jpg",
        //     "title" => "Account Manager",
        //     "description" => "Born and raised right here in central Auckland. Maddie has spent the last few years chasing the snow and adventure all around the world. After graduating University with a BA in Psychology she worked in the ski industry. Selling adventure gave her the opportunity to interact with an amazingly diverse range of people, from bums to biologists. When she’s not off seeking powder or hunting for shoe sales, she can be found religiously researching new eateries.",
        // ],
        "miranda" => [
            "name" => "Miranda Kennedy",
            "img" => "staff-photos_miranda.webp",
            "title" => "Creative Services Lead",
            "description" => "Miranda’s official title is Creative Delivery Lead but her colleagues prefer to call her “an energiser battery wrapped in cashmere”.<br>
            Reflecting on her career, Miranda comments how lucky she is to have worked in advertising in the 90s. Not only does she have better work stories than most, but it was during this period that she developed her love affair for craft and typography.<br>
            Every day, Miranda aspires to be an effective presence in the work place. Job done, Miranda. ",
        ],
        "mikade" => [
            "name" => "Mikade Barns Graham",
            "img" => "staff-photos_mikade.webp",
            "title" => "Account Manager",
            "description" => "Mikade hails from Central Otago. As a kid, she won ribbons at Pony Club, panned for gold in the rivers and was bottle-fed Speights.<br>
            When it comes to the workplace, she’s prepared to turn her hand to anything. Her time at Christchurch City Council gave her a solid understanding of local government and the satisfaction of leading behaviour change at a community level. Having made the move north, she’s revelling in the chance to work in a creative industry, tackling challenges for a diverse range of clients. And we’re very glad to have her.<br>
            Good on ya mate, er, Mikade. ",
        ],
        "annie" => [
            "name" => "Annie Kyles",
            "img" => "staff-photos_annie.webp",
            "title" => "Web Developer",
            "description" => "With 10 years’ experience in the field, Annie knows her stuff in the world of crafting websites and has a special interest in creating clean, accessible sites that are a pleasure to use. Annie is also keen on improving environmental impacts of everyday life and is a cycling enthusiast, using one for her commute even on the roughest days. In the weekends you can find her out exploring in her kayak or admiring the view from a mountain trail.",
        ],
    ];
    $page_title = "About Us";
    $page_description = "In a world where businesses are expected to change at lightning speeds, we are changemakers. How is your brand seen on the outside?";

    include 'config.php';
	include ABSPATH . '/partials/header.php';
?>

<div class="page page--about">   
    <div class="section section--white section--intro">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="feature-img">
                    <h1 class="visuallyhidden">Federation | About Us</h1>
                    <div class="feature-img__text-mask feature-img__text-mask--outer">
                        <div class="feature-img__text feature-img__text--outer">
                            <span class="animate animate--slide-right-25">Creators and</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;Changemakers</span>
                        </div>
                        <div class="feature-img__text feature-img__text--mobile feature-img__text--outer">
                            <span class="animate animate--slide-right-25">Creators and</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;Changemakers</span>
                        </div>
                    </div>
                    <div class="feature-img__bgvideo-wrapper" id="feature-img__bgvideo-wrapper">
                        <img src="<?=HTML_ROOT;?>/img/about/banner-about-us.jpg" alt="" class="feature-img__bgimage">
                    </div>
                    <div class="feature-img__text-mask feature-img__text-mask--inner">
                        <div class="feature-img__text feature-img__text--desktop feature-img__text--inner">
                        <span class="animate animate--slide-right-25">Creators and</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;Changemakers</span>
                        </div>
                        <div class="feature-img__text feature-img__text--mobile feature-img__text--inner">
                            <span class="animate animate--slide-right-25">Creators and</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;Changemakers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p class="animate animate--fade-up-25">In a world where businesses are expected to change at lightning speeds, we are changemakers. </p>
                    <p class="animate animate--fade-up-25">How is your brand seen on the outside? Does this reflect who you are on the inside?  With an understanding of people, purpose, culture, society and business, we can help you imagine entirely new connected consumer experiences.</p>
                    <a href="<?=HTML_ROOT;?>/our-work" class="button button--red-inverse animate animate--fade-up-25">See the results</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--white section--founders">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-header">
                        <h2 class="visuallyhidden">Climate and purpose run through our veins</h2>
                        <div class="feature-header__text">
							<span class="animate animate--slide-right-25">Climate and purpose</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;run through our veins</span>
                        </div>
                        <div class="feature-header__text feature-header__text--mobile">
							<span class="animate animate--slide-right-25">Climate and purpose</span><br>
                            <span class="animate animate--slide-left-25">&nbsp;&nbsp;run through</span><br>
							<span class="animate animate--slide-right-25">our veins</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6">
                    <p class="animate animate--fade-up-25">We are the first and only agency in New Zealand to qualify with Cambridge University’s Sustainability Leadership Institute.  We understand that the best brands put people and the planet first by defining and owning purpose as your own unfair advantage.</p>
                    <p class="animate animate--fade-up-25"><strong>So, let’s talk. And together we can lead your next big&nbsp;change.</strong></p>
                    <a href="mailto:hello@federation.net.nz" class="button button--red-inverse animate animate--fade-up-25">hello@federation.net.nz</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section--white section--founder-profiles">
        <div class="horizontal-scroller profile-scroller">
            <ul class="horizontal-scroller__list">
                <?php

                    // Show the last member first so Sharon doesn't scroll away immediately
                    $lastMember = end($staff);
                    includeHorizontalScrollerItem($lastMember["name"], $lastMember["img"], $lastMember["title"], $lastMember["description"]);

                    // Show everyone else
                    foreach ($staff as $member) {
                        if ($member !== $lastMember) {
                            includeHorizontalScrollerItem($member["name"], $member["img"], $member["title"], $member["description"]);
                        }
                    }
                ?>
            </ul>
        </div>        
        <div class="profiles--mobile" id="profiles--mobile">
            <?php
                foreach ($staff as $member) {
                    includeMobileProfileItem($member["name"], $member["img"], $member["title"], $member["description"]);
                }
            ?>
        </div>
    </div>
    <div class="section section--white section--images">
        <div class="image-container">
            <div class="image-a">
                <img src="<?=HTML_ROOT;?>/img/about/tane.jpg" alt="Auckland Transport promo for Tane vs Tane, try our new commuter calculator" class="image-a__img">
                <div class="stamp">
                    <img src="<?=HTML_ROOT;?>/img/home/stamp__rondell.png" alt="Transforming brands and behaviours" class="stamp__rondell animate animate--rotate">
                    <img src="<?=HTML_ROOT;?>/img/home/stamp__f.png" alt="Federation logo" class="stamp__f">
                </div>
            </div>
            <img src="<?=HTML_ROOT;?>/img/about/samoa.jpg" alt="Beautiful Samoa Travel promo - out of office" class="image-b">
            <img src="<?=HTML_ROOT;?>/img/about/true-honey.jpg" alt="The True Honey Co. Manuka Honey promo" class="image-c">
        </div>
    </div>
    
    <?php /*    
    <div class="section section--white section--clients">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-header">
                        <h2 class="visuallyhidden">Our Clients</h2>
                        <div class="feature-header__text">
                            <span class="animate animate--slide-left-25">Our Clients</span>
                        </div>
                        <div class="feature-header__text feature-header__text--mobile">
                            <span class="animate animate--slide-left-25">Our Clients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-3 col-md-6">
                    <p class="clients-description animate animate--fade-up-25">For us, success is cultivating long-term relationships with marketing and management professionals – earning their respect and trust by producing results.</p>
                </div>
            </div>
        </div>
        
        <div class="horizontal-scroller client-logo-scroller">
            <ul class="horizontal-scroller__list">
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/flexi-cards.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/ffc.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/qmc.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/qcard.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/at.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/auckland-council.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/zoetis.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/emirates.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/nufarm.png" class="logo"></div>
                </li>
                <li class="horizontal-scroller__item">
                    <div class="client-logo-container"><img src="<?=HTML_ROOT;?>/img/about/kings-college.png" class="logo"></div>
                </li>
            </ul>
        </div>
    </div>
    */ ?>

</div>
    
<?php include ABSPATH . '/partials/footer.php'; ?>