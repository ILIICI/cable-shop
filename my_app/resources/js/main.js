(function($) {
    'use strict';
    /* cart */
    $(".icon-cart").on("click", function() {
        $(this).parent().find('.shopping-cart-content').slideToggle('medium');
    });
})(jQuery);
