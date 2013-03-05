<?php
    
   if( function_exists("get_user_device") ) {
    
        $device = get_user_device();
        
        switch ($device) {
            case "iphone":
                $html = '<button id="popup-close" class="close">Close</button>';
                $html .= '<a href="http://itunes.apple.com/us/app/bike-mag/id469444271?mt=8">';
                $html .= '<img src="/wp-content/themes/m.bikemag.com/images/bike-popup-iphone.png" />';
                $html .= '</a>';
                break;
            case "android":
                $html = '<button id="popup-close" class="close">Close</button>';
                $html .= '<a href="https://play.google.com/store/magazines/details/Bike?id=CAow6qxU">';
                $html .= '<img src="/wp-content/themes/m.bikemag.com/images/bike-popup-android.png" />';
                $html .= '</a>';
                break;
            default:
                $html = '<button id="popup-close" class="close">Close</button>';
                $html .= '<a href="https://www.circsource.com/store/Subscribe.html?magazineId=254&sourceCode=I8ABDD">';
                $html .= '<img src="/wp-content/themes/m.bikemag.com/images/bike-popup-windows.png" />';
                $html .= '</a>';
                break;
        }
        
    } 

    //wp_footer();
    
?>

    <div class="ad bottom">
        <!-- begin ad tag -->
        <script type="text/javascript">
        //<![CDATA[
        document.write('<script type="text/javascript" src="http://ad.mo.doubleclick.net/DARTProxy/mobile.handler?k=bikemag.m.primedia.com;sect=<?php echo $GLOBALS['sect']; ?>;subs=<?php echo $GLOBALS['subs']; ?>;cpo=false;pos=bottom;kw=Index;sz=320x50;ord=227407;&c=it&dw=1"><\/script>');
        //]]>
        </script>
        <!-- end ad tag -->
    </div>
</div>
		<!-- / PAGE CONTAINER -->
		
                <!-- FOOTER -->
                <div class="top-gradient clearfix"></div>
		<footer>
			<div id="footer-nav">
                            <a href="<?php echo SITE_URL; ?>/news/" title="News"><button class="btn btn-inverse" type="button">News</button></a>
			    <a href="<?php echo SITE_URL; ?>/photos/" title="Photos"><button class="btn btn-inverse" type="button">Photos</button></a>
                            <a href="<?php echo SITE_URL; ?>/gallery/" title="Gallery"><button class="btn btn-inverse" type="button">Gallery</button></a>
                            <a href="<?php echo SITE_URL; ?>/videos/" title="Videos"><button class="btn btn-inverse" type="button">Videos</button></a>
                            <a href="<?php echo SITE_URL; ?>/gear/" title="Gear"><button class="btn btn-inverse" type="button">Gear</button></a>
                            <a href="<?php echo SITE_URL; ?>/magazine/" title="Magazine"><button class="btn btn-inverse" type="button">Magazine</button></a>
			</div>
                    
                        <!-- AddThis Follow BEGIN -->
                        
                        <h2>Follow <?php echo SITE_NAME ?></h2>
                        <div class="addthis_toolbox addthis_32x32_style addthis_vertical_style">
                                <a class="addthis_button_facebook_follow" addthis:userid="bikemag"><i class="icon icon-facebook-sign"></i><i class="icon-chevron-right"></i><p>Facebook</p></a>
                                <a class="addthis_button_twitter_follow" addthis:userid="bikemag"><i class="icon icon-twitter-sign"></i><i class="icon-chevron-right"></i><p>Twitter</p></a>
                                <a class="addthis_button_google_follow" addthis:userid="109140078163134577289"><i class="icon icon-google-plus-sign"></i><i class="icon-chevron-right"></i><p>Google Plus</p></a>
                                <a class="addthis_button_instagram_follow" addthis:userid="bikemag"><i class="icon icon-camera-retro"></i><i class="icon-chevron-right"></i><p>Instagram</p></a>
                        </div>			
                        <!-- AddThis Follow END -->
		
			<p class="site-logo"><a href="/" title="Bike Magazine"><img src="<?php echo THEME_URL; ?>/images/bikemag-logo-bottom.png" alt="Bike Magazine"></a></p>
			<p><a href="http://www.grindmedia.com/privacy-policy/" title="Privacy Policy">Privacy Policy</a> | <a href="http://www.grindmedia.com/terms-of-use/" title="Terms of Service">Terms of Service</a></p>
			<p class="copyright"><a href="http://www.grindmedia.com/" title="Copyright &copy; <?php echo date('Y'); ?> GrindMedia, LLC. All Rights Reserved">Copyright &copy; <?php echo date('Y'); ?> GrindMedia, LLC. All Rights Reserved</a></p>
			<p><a href="#" id="full-site" title="View Full Site">View Full Site</a></p>
			<p class="back-to-top"><a href="#" title="Back to Top"><button class="more btn btn-inverse">Back to Top <i class="icon-double-angle-up"></i></button></a></p>	
					
		</footer>
		<!-- / FOOTER -->
                
                <div class="popup-overlay">
<?php

    if( isset($device) && $device == 'iphone' || $device == 'android' || $device == 'windows')
    {
        echo $html;
    }

?>
                </div>
		
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-510965f342ab7989"></script>
                <script src="<?php echo THEME_URL.'/js/swipe.min.js'; ?>"></script>
		<script src="<?php echo THEME_URL.'/js/main.js?v='.filemtime( get_stylesheet_directory() . '/js/main.js'); ?>"></script>
		
                <script>
                    var slider = new Swipe(document.getElementById('slider'), {
                        auto: 3000
                    });
                </script>
	</body>
</html>

