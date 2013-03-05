<?php

    $gallery_id = get_post_meta($post->ID, 'gallery_id',true);
    $photographer = get_post_meta($post->ID, 'pod-photographer', TRUE);
    
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium-4-3' );
    $image = ( empty($thumb[0]) ) ? '/wp-content/themes/m.bikemag.com/images/bike-placeholder.jpg' : $thumb[0];

    if(!empty($gallery_id))
        echo get_template_part('templates/header', 'photo-gallery');
    else
        echo get_template_part('templates/header');    
    
    echo get_template_part('templates/top');
    
?>

<?php
    
    if( !empty($gallery_id) ) {
        echo '<div id="gallery-content"></div>';
        echo get_template_part('templates/content', 'photo-gallery');
    }
    
    if( $GLOBALS['sect'] == "magazine") {
        echo get_template_part('templates/content', 'single-magazine');
    } else {
        echo get_template_part('templates/content', 'single');
    }
    
    if( !empty($photographer) ) {
        echo get_template_part('templates/photographer');
    }
    
?>

<div class="article-share">
    <h4 style="text-transform: uppercase;">Share this story</h4>
    <!-- AddThis Button BEGIN -->
    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="a1" href="mailto:?subject=<?php echo get_the_title(); ?> | BIKE Magazine&body=Check out this link I found on BIKE Magazine: <?php echo get_permalink(); ?>">
            <img src="<?php echo THEME_URL; ?>/images/btn-share-email.png">
        </a>
        <a class="addthis_button_facebook a2"><img src="<?php echo THEME_URL; ?>/images/btn-share-facebook.png"></a>
        <a class="addthis_button_twitter a3"><img src="<?php echo THEME_URL; ?>/images/btn-share-twitter.png"></a>
    </div>
    <!-- AddThis Button END -->
</div>

<?php
    
    $categoryNames = '';
    $category = get_the_category();
    
    foreach ($category as $value) {
        $categoryNames .= $value->cat_name.',';
    }
    
    $query = new WP_Query( array( 'category_name' => $categoryNames, 'posts_per_page' => 5) );
    
    if( $query->have_posts() && $GLOBALS['sect' != "magazine"] ):
        echo '<h4 style="text-transform:uppercase;margin-left:2%;">Related Posts</h4>';
        echo '<ul class="no-style" style="padding-left:2%;">';
    
        // The Loop
        while ( $query->have_posts() ) :
            $query->the_post();
	
?>
            <li><i class="icon-chevron-right"></i><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></li>
<?php 
    
        endwhile;
        echo '</ul>';
    endif;
?>

<?php

    if(!empty($gallery_id)) 
        echo get_template_part('templates/footer', 'photo-gallery');
    else
        echo get_template_part('templates/footer');
    
?>		