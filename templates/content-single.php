<?php
    
    the_post();
    $category = get_the_category();
    
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium-4-3' );
    $image = ( empty($thumb[0]) ) ? '/wp-content/themes/m.bikemag.com/images/bike-placeholder.jpg' : $thumb[0];
    
?>
<!-- ARTICLE -->
<article>
        <header>
                <h3><?php echo get_the_title(); ?></h3>
                <span><time datetime="<?php echo get_the_date('Y-n-j'); ?>"><?php echo get_the_date('F j, Y'); ?></time> | <?php echo $category[0]->cat_name; ?></span>
        </header>

<?php
    
    the_content(); 

?>

</article>
<!-- / ARTICLE -->