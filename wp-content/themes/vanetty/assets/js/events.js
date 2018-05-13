jQuery(document).ready(function(){

    const noise = () => {
        let canvas, ctx;

        let wWidth, wHeight;

        let noiseData = [];
        let frame = 0;

        let loopTimeout;


        // Create Noise
        const createNoise = () => {
            const idata = ctx.createImageData(wWidth, wHeight);
            const buffer32 = new Uint32Array(idata.data.buffer);
            const len = buffer32.length;

            for (let i = 0; i < len; i++) {
                if (Math.random() < 0.5) {
                    buffer32[i] = 0xff000000;
                }
            }

            noiseData.push(idata);
        };


        // Play Noise
        const paintNoise = () => {
            if (frame === 9) {
                frame = 0;
            } else {
                frame++;
            }

            ctx.putImageData(noiseData[frame], 0, 0);
        };


        // Loop
        const loop = () => {
            paintNoise(frame);

            loopTimeout = window.setTimeout(() => {
                window.requestAnimationFrame(loop);
            }, (1000 / 25));
        };


        // Setup
        const setup = () => {
            wWidth = window.innerWidth;
            wHeight = window.innerHeight;

            canvas.width = wWidth;
            canvas.height = wHeight;

            for (let i = 0; i < 10; i++) {
                createNoise();
            }

            loop();
        };


        // Reset
        let resizeThrottle;
        const reset = () => {
            window.addEventListener('resize', () => {
                window.clearTimeout(resizeThrottle);

                resizeThrottle = window.setTimeout(() => {
                    window.clearTimeout(loopTimeout);
                    setup();
                }, 200);
            }, false);
        };


        // Init
        const init = (() => {
            canvas = document.getElementById('noise');
            ctx = canvas.getContext('2d');
            setup();
        })();
    };


    lanceVideoGalerie();

    function parallaxIt(e, target, movement){
      var $this = jQuery('.container-points');
      var relX = e.pageX - Math.round(Math.random() * 10);
      var relY = e.pageY - Math.round(Math.random() * 10);

      TweenMax.to(target, 1, {
        x: (relX - $this.width()/2) / $this.width() * movement,
        y: (relY - $this.height()/2) / $this.height() * movement
      })
    }

    jQuery(window).mousemove(function(e) {

        var start = Math.round(Math.random() * 20) ;

        jQuery('.point ').each(function(){
          var el = jQuery(this);
          var gravity = el.data('gravity');
          parallaxIt(e, el, start - gravity);
        });
    });

    noise();


    playButton();

    pointRand();

    triggerMenu();

    smoothScroll();

    dragAudio();

});

jQuery(window).on('load', function(){
    jQuery('.parallax').each(function(){
        var el = jQuery(this);
        var top = el.offset().top;
        var height = el.height();
        var bottom = top + height;
        var scrollParallax = 1;
        var gravity = el.data('gravity');


        function animParallax(){
            var currentScroll = jQuery(window).scrollTop();
            var detectAnim = currentScroll + ((jQuery(window).height() / 4) * 2);
            var bottomWindow = currentScroll + jQuery(window).height();

            if(bottomWindow > top && bottomWindow < (bottom + jQuery(window).height()) ){
                var progress = bottomWindow - top;

                // el.find('.text-push').css({'-webkit-transform':'translate(0, -'+ progress / 2 +'px)'});
                el.css({'-webkit-transform':'translate3D(0, -' + progress * gravity + 'px, 2px)'});
            }
        }


        jQuery(window).scroll(function(){
            animParallax();
        });

        animParallax();

    })


    var isPlay = false;

    var wavesurfer = WaveSurfer.create({
        container: '#waveform',
        waveColor: 'rgba(255, 255, 255, .3)',
        progressColor: 'rgba(255, 255, 255, 1)',
        barHeight: 1,
        height: 80
    });



    jQuery('.list-sound a').click(function(event){
        event.preventDefault();
        var el = jQuery(this);
        var parent = el.parent();
        var link = el.attr('href');

        jQuery('.list-sound li').removeClass('is-active');

        parent.addClass('is-active');
        wavesurfer.load(link);

        jQuery('.play-pause').removeClass('is-pause');
        isPlay = false;
    });

    jQuery('.list-sound li:first-child a').trigger('click');


    jQuery('.play-pause').click(function(){

        if(isPlay == false){
            wavesurfer.play();
            jQuery('.play-pause').addClass('is-pause');
            isPlay = true;
        }else{
            wavesurfer.pause();
            jQuery('.play-pause').removeClass('is-pause');
            isPlay = false;
        }
    });

});
