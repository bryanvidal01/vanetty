function pointRand() {


    jQuery('.list-point .point').mouseenter(function(){
        var el = jQuery(this);

        jQuery('.list-point .point').addClass('is-hover');
        el.removeClass('is-hover');
    });

    jQuery('.list-point .point').mouseleave(function(){
        jQuery('.list-point .point').removeClass('is-hover');
    });

    $( ".list-point .point" ).draggable();


}
