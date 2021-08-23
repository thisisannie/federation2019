var VideoManager = {
    player : null,
    playerDiv : null,
    endFrame : null,
    modalContainer : null,
    replay : null,
    init : function(){
        VideoManager.body = $('body');
        VideoManager.modalContainer = $("#work-video");
        VideoManager.playerDiv = $("#player-div");
        VideoManager.endFrame = $("#endframe");
        VideoManager.replay = $('#replay');
        $('#modal-close-btn, #close-btn, #work-video-bg').click(VideoManager.closeModal);
    },
    onPlayerStateChange : function(event){
        if(event.data === 0) {
            VideoManager.endFrame.addClass('is-visible');
        }
        VideoManager.replay.on('click', function(){
            event.target.playVideo();
            VideoManager.endFrame.removeClass('is-visible');
        });
    },
    closeModal : function(){
        VideoManager.body.removeClass('body--video-open');
        VideoManager.modalContainer.removeClass('videoopen');
        VideoManager.endFrame.removeClass('is-visible');
        VideoManager.playerDiv.html("");
        VideoManager.replay.off();
    },
    openModal : function(youtubeNo){
        VideoManager.modalContainer.addClass('videoopen');
        VideoManager.body.addClass('body--video-open');
        VideoManager.openVideo(youtubeNo);
    },
    openVideo : function(videoIdNo){
        VideoManager.playerDiv.show();
        VideoManager.playerDiv.html('<div id="player"></div>');
        VideoManager.player = new YT.Player('player', {
            height: '390',
            width: '640',
            videoId: videoIdNo, 
            playerVars: { 'autoplay': 1, 'rel': 0 },
            events: {
                'onStateChange': VideoManager.onPlayerStateChange
            }
        });
    }
};

// videos - youtube
$('#home__why-work').on('click', function(){
    VideoManager.openModal('ScMzIvxBSi4');
});
$('#elemental__video').on('click', function(){
    VideoManager.openModal('w-69k-USKqI');
});
$('#elemental__video-a').on('click', function(){
    VideoManager.openModal('yxhZcYAhQi4');
});
$('#elemental__video-b').on('click', function(){
    VideoManager.openModal('xTdSa0ebcS0');
});
$('#akhys__feature-video').on('click', function(){
    VideoManager.openModal('146DuhNTQvk');
});
$('#cavbrem-rebrand__feature-video').on('click', function(){
    VideoManager.openModal('bAfGuiMCrm4');
});
$('#akhys-social-1').on('click', function(){
    VideoManager.openModal('EvG1JQ7iLf0');
});
$('#akhys-social-2').on('click', function(){
    VideoManager.openModal('nor6M0uyYjo');
});
$('#akhys-social-3').on('click', function(){
    VideoManager.openModal('rJBShVJfPYs');
});
$('#akhys-social-4').on('click', function(){
    VideoManager.openModal('jTkEhDe6yks');
});
$('#laura-rewards__video-a').on('click', function(){
    VideoManager.openModal('qk2qiy6DzdM');
});
$('#laura-rewards__video-b').on('click', function(){
    VideoManager.openModal('D0F4khwn8nk');
});
$('#laura-rewards__video-c').on('click', function(){
    VideoManager.openModal('lImfSfb0M4o');
});
$('#laura-rewards__video-d').on('click', function(){
    VideoManager.openModal('i_9LDpOkDvU');
});
$('#zoetis__video-a').on('click', function(){
    VideoManager.openModal('39kxj4hEOCI');
});
$('#zoetis__video-b').on('click', function(){
    VideoManager.openModal('0KGe3G0EtoY');
});
$('#bike-life-1').on('click', function(){
    VideoManager.openModal('Kjclwj_d9bo');
});
$('#bike-life-fb-1').on('click', function(){
    VideoManager.openModal('wVo00nkZykM');
});
$('#summer-cycling').on('click', function(){
    VideoManager.openModal('qu1GiG8f0RY');
});
$('#q-airbnb-news-video, #q-airbnb-news-video-b').on('click', function(){
    VideoManager.openModal('un6BIoZ3_ZE');
});
$('#simparica-video-a, #simparica-video-b').on('click', function(){
    VideoManager.openModal('GRi5dzZQOpg');
});
$('#simparica-video-c').on('click', function(){
    VideoManager.openModal('1DaHwQ8XjdQ');
});
$('#seatbelts__video').on('click', function(){
    VideoManager.openModal('mFQKFKU8OyI');
});
$('#samoa-news-video-a').on('click', function(){
    VideoManager.openModal('21xY0PyoWPg');
});
$('#blink-blink-video-a').on('click', function(){
    VideoManager.openModal('Z9YX47rKu1s');
});
$('#blink-blink-video-c').on('click', function(){
    VideoManager.openModal('8lEi9oy7atE');
});
$('#magical-mondays').on('click', function(){
    VideoManager.openModal('l2vSjKoUA20');
});
$('#emirates-bali-activation').on('click', function(){
    VideoManager.openModal('IkhFP09GeQ0');
});
$('#true-honey-boxing-clever').on('click', function(){
    VideoManager.openModal('Dh2N_qcTzIg');
});
$('#at-mobile-moment').on('click', function(){
    VideoManager.openModal('PcREHGT_ZhU');
});
$('#blues, #blues-link').on('click', function(){
    VideoManager.openModal('5YaGokU9KRY');
});
