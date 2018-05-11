function pointRand() {
    jQuery('.list-point .point').mouseenter(function(){
        var el = jQuery(this);

        jQuery('.list-point .point').addClass('is-hover');
        el.removeClass('is-hover');
    });

    jQuery('.list-point .point').mouseleave(function(){
        jQuery('.list-point .point').removeClass('is-hover');
    });

    $( ".list-point .point" ).draggable({
        containment: ".container-points"
    });
}



function playButton() {

    var playClick;

    function startPlay() {
        playClick = setTimeout(function(){
            var video = document.getElementById('video-bg');
            jQuery('.container-points').fadeOut(600);
            jQuery('.link-video').addClass('is-open');
            jQuery('.link-video').addClass('is-open');
            jQuery('.image-intro').addClass('is-play');
            jQuery('.logo').addClass('hidde');
            jQuery('.social').addClass('hidde');
            jQuery("video").prop('muted', false);
            jQuery('.actu-star').fadeOut(300);
            jQuery('.actu-star').fadeOut(300);
            setTimeout(function(){
                jQuery('.close-popin').fadeIn(300);
            }, 300);
            jQuery('.menu').fadeOut();
            video.currentTime = 0;
        }, 1700);
    }

    function stopPlay() {
        clearTimeout(playClick);
    }


    jQuery('.link-video').mousedown(function(){
        jQuery('.link-video').addClass('is-click');
        startPlay();
    });
    jQuery('.link-video').mouseup(function(){
        jQuery('.link-video').removeClass('is-click');
        stopPlay();
    });

    jQuery('.close-popin').click(function(){
        jQuery('.container-points').fadeIn(600);
        jQuery('.link-video').removeClass('is-open');
        jQuery('.link-video').removeClass('is-open');
        jQuery('.image-intro').removeClass('is-play');
        jQuery('.logo').removeClass('hidde');
        jQuery('.social').removeClass('hidde');
        jQuery("video").prop('muted', true);
        jQuery('.actu-star').fadeIn(300);
        jQuery('.actu-star').fadeIn(300);
        jQuery('.close-popin').fadeOut(300);
        setTimeout(function(){
            jQuery('.menu').fadeIn();
        }, 300);
    });
}


function triggerMenu() {
    jQuery('.menu').click(function(){
        event.preventDefault();

        jQuery('.container-menu').toggleClass('hidde');
    });
}


function smoothScroll() {
    jQuery(function(){
        var $window = jQuery(window);
    	var scrollTime = .6;
    	var scrollDistance = 200;

    	$window.on("mousewheel DOMMouseScroll", function(event){

    		event.preventDefault();

    		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
    		var scrollTop = $window.scrollTop();
    		var finalScroll = scrollTop - parseInt(delta*scrollDistance);

    		TweenMax.to($window, scrollTime, {
    			scrollTo : { y: finalScroll, autoKill:true },
    				ease: Power2.easeOut,
    				overwrite: 5
    			});

    	});
    });
}
