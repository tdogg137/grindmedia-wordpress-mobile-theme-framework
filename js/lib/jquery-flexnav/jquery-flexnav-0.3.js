/*  FlexNav jQuery Plugin v0.3
 *  https://github.com/indyplanets/flexnav
 *
 *  Copyright 2012, Jason Weaver
 *  Released under the WTFPL license 
 *  http://sam.zoy.org/wtfpl/
 *
 *  Updates by Jeffrey Mayfield
 *  jeff.mayfield@grindmedia.com
 *  Nov. 5th 2012
 */

(function($) {
	$.fn.flexNav = function(options) {
	    var settings = $.extend({
	        'breakpoint': '800',
	        'animationSpeed': 'fast'
	    },
	    options);

	    var $this = $(this);

	    var resizer = function() {
	        if ($(window).width() < settings.breakpoint) {
	            $("body").removeClass("lg-screen").addClass("sm-screen");
	        }
	        else {
	            $("body").removeClass("sm-screen").addClass("lg-screen");
	        }
	        if ($(window).width() >= settings.breakpoint) {
	            $this.show();
	        }
	    };

	    // Call once to set.
	    resizer();

	    // Function for testing touch screens
	    function is_touch_device() {
	        return !! ('ontouchstart' in window);
	    }

	    // Set class on html element for touch/no-touch
	    if (is_touch_device()) {
	        $('html').addClass('flexNav-touch');
	    } else {
	        $('html').addClass('flexNav-no-touch');
	    }

	    // Toggle for nav menu
	    $('.menu-button').click(function() {
	    	$(this).toggleClass("menu-opened");
	        $this.slideToggle(settings.animationSpeed);
	    });
	
	    // Closes nav menu after links clicked/touched
	    $this.find('a').click(function() {
	        $this.hide();
	        $(this).toggleClass("menu-opened");
	    });

	    // Call on resize.
	    $(window).on('resize', resizer);

	};

})(jQuery);