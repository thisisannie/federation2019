$(document).ready(function(){
    
    //init ScrollMagic
  	var controller = new ScrollMagic.Controller();
    
    //general scroll triggered animations
    $('.animate--slide-right-25').each(function(index,elem){     
        var tl = new TimelineMax()
            .to(elem, 2, {left: 0, ease: Power2.easeOut });
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 0
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    $('.animate--slide-left-25').each(function(index,elem){     
        var tl = new TimelineMax()
            .to(elem, 2, {left: 0, ease: Power2.easeOut });
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 0
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    $('.animate--slide-left').each(function(index,elem){     
        var tl = new TimelineMax()
            .from(elem, 1, {x: 50, autoAlpha: 0, ease: Power2.easeOut });
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 0
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    $('.animate--fade-in').each(function(index,elem){     
        var tl = new TimelineMax()
            .to(elem, 1, {autoAlpha: 1, ease: Power2.easeOut });
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 50
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    $('.animate--fade-up-25').each(function(index,elem){     
        var tl = new TimelineMax()
            .from(elem, 1, {y: 25, autoAlpha: 0, ease: Power2.easeOut });
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 50
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    $('.animate--rotate').each(function(index,elem){     
        var tl = new TimelineMax({repeat: -1})
            .to(elem, 4, {rotation: -360, ease: Power0.easeNone});
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 50
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    $('.animate--stagger-left').each(function(index,elem){
        var $tags = $(this).find('li');
        var tl = new TimelineMax()
            .staggerFromTo($tags, 0.5, {autoAlpha:0, x:50}, {autoAlpha:1, x:0, stagger:0.1, ease: Power2.easeOut});
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 50
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    //home page - collaborative section
    $('.feature-titles').each(function(index,elem){
        var $featureTitle1 = $(this).find('.feature-title--1'),
            $featureTitle2 = $(this).find('.feature-title--2'),
            $featureTitle3 = $(this).find('.feature-title--3');
        
        var tl = new TimelineMax({repeat: -1})
            .fromTo($featureTitle1, 0.5, {autoAlpha:0, x:50}, {autoAlpha:1, x:0, ease: Power2.easeOut})
            .to($featureTitle1, 0.25, {autoAlpha:0}, '+=2')
            .fromTo($featureTitle2, 0.5, {autoAlpha:0, x:50}, {autoAlpha:1, x:0, ease: Power2.easeOut})
            .to($featureTitle2, 0.25, {autoAlpha:0}, '+=2')
            .fromTo($featureTitle3, 0.5, {autoAlpha:0, x:50}, {autoAlpha:1, x:0, ease: Power2.easeOut})
            .to($featureTitle3, 0.25, {autoAlpha:0}, '+=2');
        
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 50
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    //horizontal scrollers  
    var profileScroller = {
        openProfile: function(){
            var $profileItem = $(this);
            var $profileItems = $profileItem.closest('.horizontal-scroller__list').find('.profile-item');
            var $closeBtn = $profileItem.find('.close-btn');
            
            $profileItems.removeClass('profile-item--is-open');
            $profileItem.addClass('profile-item--is-open');
        },
        closeProfile: function(event){
            var $closeBtn = $(this);
            var $profileItems = $closeBtn.closest('.horizontal-scroller__list').find('.profile-item');

            event.stopPropagation();
            $profileItems.removeClass('profile-item--is-open');
            $('.horizontal-scroller').on('click', '.profile-item', profileScroller.openProfile);
        },
        horizontalScroll: function(elem) {
            var $this = $(elem);
            var $scrollContent = $this.find('.horizontal-scroller__list');
            var $profileItems = $this.find('.profile-item');
            var scrollContentWidth = $scrollContent.width();
            var $listItems = $this.find(".horizontal-scroller__item");

            $scrollContent.clone().appendTo($this);

            var scrollTl = new TimelineMax({repeat: -1})
                .to($this, 25, {x: -(scrollContentWidth), ease: Linear.easeNone});

            var staggerInTl = new TimelineMax()
                .staggerFromTo($listItems, 0.5, {opacity:0}, {opacity:1, stagger:-0.1});

            var scene = new ScrollMagic.Scene({
                triggerElement: elem,
                triggerHook: 'onEnter',
                reverse: false,
                offset: 0
            })
            .setTween(staggerInTl)
            .addTo(controller);

            var scene = new ScrollMagic.Scene({
                triggerElement: elem,
                triggerHook: 'onEnter',
                reverse: false,
                offset: 0
            })
            .setTween(scrollTl)
            .addTo(controller);

            $this.on("mouseenter", function(){
                if ($profileItems.hasClass('profile-item--is-open')) {
                    return;
                } else {
                    TweenLite.to(scrollTl, 0.5, {timeScale:0});
                }
            }).on("mouseleave", function(){
                if ($profileItems.hasClass('profile-item--is-open')) {
                    return;
                } else {
                    TweenLite.to(scrollTl, 0.5, {timeScale:1});
                }
            });

            $this.on('click', '.profile-item', profileScroller.openProfile);

            $this.on('click', '.close-btn', profileScroller.closeProfile);
        }
    }
    
    $('.profile-scroller').each(function(index,elem){
        var browserwidth = document.getElementById('header').offsetWidth;
        
        if (browserwidth >= 992) {
            profileScroller.horizontalScroll(elem);
        } else {
            return;
        }
    });
    
    $('.client-logo-scroller').each(function(index,elem){
        profileScroller.horizontalScroll(elem);
    });
    
    //what we do page - infinite scroller
    $(".infinite-scroll--forward").each(function(index,elem){
        var $element = $(this);
        var $scrollContainer = $element.find('.infinite-scroll__container');
        var $scrollContent = $element.find('.infinite-scroll__content');
        var scrollContentWidth = $scrollContent.width();
        
        $scrollContent.clone().appendTo($scrollContainer);
        
        var tl = new TimelineMax({repeat: -1})
            .to($scrollContainer, 50, {x: -(scrollContentWidth), ease: Linear.easeNone}); 
    });
    
    $(".infinite-scroll--reverse").each(function(index,elem){
        var $element = $(this);
        var $scrollContainer = $element.find('.infinite-scroll__container');
        var $scrollContent = $element.find('.infinite-scroll__content');
        var scrollContentWidth = $scrollContent.width();
        
        $scrollContent.clone().prependTo($scrollContainer);
        
        var tl = new TimelineMax({repeat: -1})
            .to($scrollContainer, 50, {x: scrollContentWidth, ease: Linear.easeNone});
    });
    
    //projects list page
    $('.project-row').each(function(index,elem){
        var $element = $(this);                       
        var $projects = $element.find('.project');
        
        var tl = new TimelineMax()
            .staggerFromTo($projects, 1, {autoAlpha:0, y:25}, {autoAlpha:1, y:0, stagger:0.15});
        var scene = new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 'onEnter',
            reverse: false,
            offset: 0
        })
        .setTween(tl)
        .addTo(controller);
    });
    
    function animateTags() {
        var browserwidth = document.getElementById('header').offsetWidth;
        var $square = $('#project-detail__square');
        var $projectStatsSection = $('#section--project-stats');
        var $projectStatsWidth = $projectStatsSection.width();
        var verticalDistance = $projectStatsSection.offset().top - $square.offset().top;
        var verticalHeight = $projectStatsSection.outerHeight();
        var $projectStatsGroups = $('.section--project-stats__group');
        var $projectStatsNo1 = $('#section--project-stats__number-1 span');
        var $projectStatsNo2 = $('#section--project-stats__number-2 span');
        var count1 = {val:0};
        var count2 = {val:0};
        var countString1;
        var countString2;
        var newVal1 = $('#section--project-stats__number-1 span').data("value");
        var newVal2 = $('#section--project-stats__number-2 span').data("value");
        var $projectStatsBtn = $('#section--project-stats__button');
        
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        
        var tl = new TimelineMax()
            .to($square, 0.75, {y:verticalDistance, ease: Power4.easeIn})
            .to($square, 0.5, {height:verticalHeight, ease: Power1.easeInOut})
            .to($square, 1, {width:$projectStatsWidth*2, left:-$projectStatsWidth, ease: Power1.easeInOut})
            .set($square, {autoAlpha:0})
            .set($projectStatsGroups, {className: '-=invisible'}, '-=0.5')
            .set($projectStatsSection, {backgroundColor: '#ed1c24'})
            .to(count1, 3, {val:newVal1, roundProps:"val", onUpdate:function(){
                if (newVal1 % 1 == 0) {
                    countString1 = numberWithCommas(count1.val);
                    $projectStatsNo1.html(countString1);
                } else {
                    return
                }
            }, ease: Power4.easeOut}, 1.75)
            .to(count1, 3, {val:newVal1, onUpdate:function(){
                if (newVal1 % 1 != 0) {
                    countString1 = numberWithCommas(count1.val.toFixed(2));
                    $projectStatsNo1.html(countString1);
                } else {
                    return
                }
            }, ease: Power4.easeOut}, 1.75)
            .to(count2, 3, {val:newVal2, roundProps:"val", onUpdate:function(){
                if (newVal2 % 1 == 0) {
                    countString2 = numberWithCommas(count2.val);
                    $projectStatsNo2.html(countString2);
                } else {
                    return
                }
            }, ease: Power4.easeOut}, 1.75)
            .to(count2, 3, {val:newVal2, onUpdate:function(){
                if (newVal2 % 1 != 0) {
                    countString2 = numberWithCommas(count2.val.toFixed(2));
                    $projectStatsNo2.html(countString2);
                } else {
                    return
                }
            }, ease: Power4.easeOut}, 1.75)
            .fromTo($projectStatsBtn, 1, {autoAlpha: 0}, {autoAlpha: 1, ease: Power2.easeOut}, '-=1');
            
        new ScrollMagic.Scene({
            triggerElement: '#section--project-stats__background',
            triggerHook: 'onEnter',
            reverse: false,
            offset: 150
        })
        .setTween(tl)
        .addTo(controller);
    }
    
    animateTags();
    
    //ak have your say page
    function animatePosters() {
        var $posterRow = $('.poster-row'),
            $posters = $('.poster');
        
        var tl = new TimelineMax()
            .fromTo($posterRow, 6, {'left': '10%'}, {'left': '-25%', ease: Power2.easeOut})
            .staggerFromTo($posters, 1, {autoAlpha:0}, {autoAlpha:1, ease: Power2.easeOut}, -0.1, 0);
        new ScrollMagic.Scene({
            triggerElement: '.poster-row',
            triggerHook: 'onEnter',
            reverse: false,
            offset: 150
        })
        .setTween(tl)
        .addTo(controller);
    }
    
    animatePosters();
    
       
});