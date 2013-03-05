// ==========================================================================
// PROJECT SPECIFIC JAVASCRIPT
// --------------------------------------------------------------------------
// Project:		GrindMedia Mobile Wordpress Framework
// Author:		Jeffrey Mayfield jeff.mayfield@grindmedia.com
// ==========================================================================
// --------------------------------------------------------------------------

jQuery.noConflict();
(function($) {
  $(function() {
        var h = $(window).height();
        var w = $(window).width();
            
        // Check cookie to display App popup for iphone, android, and windows only
        if( $.cookie('bike-app-popup') != "download" && $(".popup-overlay").html().trim() ) {
            $.cookie( 'bike-app-popup', 'download', { expires: 7 } );
            $("body").addClass("ps-active");
            $(".popup-overlay").css({
               display: "block",
               position: "absolute",
               left: "0",
               top: "0",
               width: w-40,
               height: h-40,
               "z-index": "1000",
               opacity: "1"
            });
            
            $("#popup-close").click(function() {
                $("body").removeClass("ps-active");
                $(".popup-overlay").hide();

                return false;
            });
        }
        
        $("#nav-button").click(function(){
           if( $("#nav-button i").hasClass("icon-caret-up") ){
                $("[role='navigation']").hide();
                $("#nav-button i").removeClass("icon-caret-up");
           } else {
                $("[role='navigation']").show();
                $("#nav-button i").addClass("icon-caret-up");
           }
        });

        // Update "VIEW FULL SITE" link.
        $('#full-site').click(function(){
           var siteUrl = window.location.href;  

            $("#full-site").attr("href", siteUrl.replace("http://m.", "http://") + '?mobile=off');
            
        });
        
	// Gets Domain
        var s = location.hostname.split('.');	
        var domain = s[s.length-2]+'.'+s[s.length-1];
        // Modifies External Links To Open In A New Window
        $('a').filter(function() {
                if (this.hostname) {
                        var t = this.hostname.split('.');
                        var test = t[t.length-2]+'.'+t[t.length-1];
                        if (test != domain)
                        return true;
                        else
                        return false;
                }
        }).attr('target', '_blank');
  });
})(jQuery);

// other code using $ as an alias to the other library



