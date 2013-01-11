<!-- MANTLE IMAGE AND CAPTION -->
<div id="slider" class="swipe">
    <ul>
<?php
    $query = new WP_Query( array( 'tag' => 'mantle', 'posts_per_page' => 3) );
    $cnt = 0;
    
    // The Loop
    while ( $query->have_posts() ) :
	$query->the_post();
        $cnt++;
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large-16-9' );
	
?>
        <li style="<?php echo ( $cnt==1 ) ? 'display:block;' : 'display:none;' ?>">
            <div class="mantle">
                <img src="<?php echo $thumb[0]; ?>" alt="<?php echo get_the_title(); ?>">
                <div class="caption">
                        <p><?php echo get_the_title(); ?></p>
                </div>
            </div>
        </li>    
<?php

    endwhile;

?>
    </ul>
    <a class="slider-prev" href='#' onclick='slider.prev();return false;'><i class="icon-chevron-left"></i></a> 
    <a class="slider-next" href='#' onclick='slider.next();return false;'><i class="icon-chevron-right"></i></a>
</div>
<!-- / MANTLE IMAGE AND CAPTION -->

