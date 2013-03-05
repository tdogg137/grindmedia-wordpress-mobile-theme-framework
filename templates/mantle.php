<!-- MANTLE IMAGE AND CAPTION -->
<div id="slider" class="swipe">
    <ul>
<?php
    $query = new WP_Query( array( 'tag' => 'mantle', 'posts_per_page' => 5) );
    $cnt = 0;
    
    // The Loop
    while ( $query->have_posts() ) :
	$query->the_post();
        $cnt++;
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large-16-9' );
        $image = ( empty($thumb[0]) ) ? '/wp-content/themes/m.bikemag.com/images/bike-placeholder.jpg' : $thumb[0];
	
?>
        <li style="<?php echo ( $cnt==1 ) ? 'display:block;' : 'display:none;' ?>">
            <div class="mantle">
                <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>" ><img src="<?php echo $image; ?>" alt="<?php echo get_the_title(); ?>"></a>
                <div class="caption">
                        <p><?php echo get_the_title(); ?></p>
                </div>
            </div>
        </li>    
<?php

    endwhile;

?>
    </ul>
    <!--<a class="slider-prev" href='#' onclick='slider.prev();return false;'><i class="icon-chevron-left"></i></a> 
    <a class="slider-next" href='#' onclick='slider.next();return false;'><i class="icon-chevron-right"></i></a>-->
</div>
<!-- / MANTLE IMAGE AND CAPTION -->

<div class="ad top">
    <!-- begin ad tag -->
    <script type="text/javascript">
    //<![CDATA[
    document.write('<script type="text/javascript" src="http://ad.mo.doubleclick.net/DARTProxy/mobile.handler?k=bikemag.m.primedia.com;sect=<?php echo $GLOBALS['sect']; ?>;subs=<?php echo $GLOBALS['subs']; ?>;cpo=false;pos=top;kw=Index;sz=320x50;ord=227407;&c=it&dw=1"><\/script>');
    //]]>
    </script>
    <!-- end ad tag -->
</div>
