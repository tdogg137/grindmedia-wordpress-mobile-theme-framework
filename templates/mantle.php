<?php
    $query = new WP_Query( array( 'tag' => 'mantle', 'posts_per_page' => 1) );
    
    // The Loop
    while ( $query->have_posts() ) :
	$query->the_post();
    
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large-16-9' );
	
?>

<!-- MANTLE IMAGE AND CAPTION -->
    <a class="mantle" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
            <img src="<?php echo $thumb[0]; ?>" alt="<?php echo get_the_title(); ?>">
            <div class="caption">
                    <p><?php echo get_the_title(); ?></p>
            </div>
    </a>
<!-- / MANTLE IMAGE AND CAPTION -->
<?php

    endwhile;

?>