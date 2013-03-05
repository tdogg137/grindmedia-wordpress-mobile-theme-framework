<script>
jQuery.noConflict();
(function($) {
  $(function() {
      $('.more-photos').click(function(){
         if( $('.more-photos i').hasClass('icon-expand') ) {
             $('#Gallery').css({ display: "none" });
             $('.more-photos i').removeClass('icon-expand');
             return false;
         } else {
             $('.more-photos i').addClass('icon-expand');
             $('#Gallery').css({ display: "block" });
         }
      });
 });
})(jQuery);

(function(window, PhotoSwipe){
    document.addEventListener('DOMContentLoaded', function(){

            var options = {},
                instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a, #slider a'), options );

    }, false);
}(window, window.Code.PhotoSwipe));
		
</script>
<script id="photo-gallery" type="text/template">
    <!-- PHOTO GALLERY IMAGE AND CAPTION -->
    <div id="slider" class="swipe">
        <ul>
    {{#gallery}}
            <li><a href="{{img}}" title="{{title}}">
                    <div class="mantle gallery">
                        <img src="{{img}}" alt="{{title}}">
                        <div class="caption">
                                <p>{{desc}}</p>
                        </div>
                    </div>
                </a>
            </li>  
    {{/gallery}}
        </ul>
    </div>
    
    <!-- GALLERY CONTROL BUTTONS -->
    <div class="btn-row clearfix" style="margin-top:3%;text-align:center;">
        <a name="gallery-thumbs"></a>
        <a class="btn pull-left" href="#" title="Prev Photo" onclick='slider.prev();return false;'><i class="icon-step-backward"></i></a>
        <a class="btn more-photos" href="#gallery-thumbs" title="View All"><i class="icon-th"></i></a>
        <a class="btn pull-right" href="#" title="Next Photo" onclick='slider.next();return false;'><i class="icon-step-forward"></i></a>
    </div>
    <!-- GALLERY CONTROL BUTTONS -->
    <!-- / PHOTO GALLERY IMAGE AND CAPTION -->
    
    <div id="Gallery" class="gallery img-gallery" style="display:none;">
            <div class="gallery-all clearfix">
            {{#gallery}}
                <div class="gallery-grid-img">
                    <a href="{{img}}" title="{{title}}"><img src="{{thumb}}" alt="{{title}}" /></a>
                </div>
            {{/gallery}}
            </div>
    </div>
    
</script>    
<?php

    $gallery = new GalleryView($GLOBALS['gallery_id']);
        
    $html = '<script type="text/javascript">
                var data = {"gallery" : '.$gallery->output().'};
                var template = jQuery("#photo-gallery").html();
                var html = Mustache.to_html(template, data);

                jQuery("#gallery-content").html(html);
            </script>';

    echo $html;
        
?>
