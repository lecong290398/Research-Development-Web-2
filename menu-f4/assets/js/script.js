wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
    }
)
wow.init();
$(document).ready(function(){
    /*  mmenu */
    $('nav#menu').mmenu({
        offCanvas: {
            position: "right"
        },
    });
    
    
});