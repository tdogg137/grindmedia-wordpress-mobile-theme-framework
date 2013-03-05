<!-- ARTICLE LIST -->
        <div class="article-list">
<?php
    // The Loop
    while ( have_posts() ) :
	the_post();
    
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium-4-3' );
        $category = get_the_category();
        $image = ( empty($thumb[0]) ) ? '/wp-content/themes/m.bikemag.com/images/bike-placeholder.jpg' : $thumb[0];
	
?>
    <!-- ARTICLE ITEM -->
    <a class="article-item" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">                        
        <div class="article-content clearfix">
            <div class="article-img">
                <img src="<?php echo $image; ?>" alt="<?php echo get_the_title(); ?>">
            </div>
            <div class="article-title">
                <h4><?php echo preg_replace('/\s+?(\S+)?$/', '', substr(get_the_title(), 0, 50)); ?></h4>
            </div>
            <div class="meta">
                <span><time datetime="<?php echo get_the_date('Y-n-j'); ?>"><?php echo get_the_date('F j, Y'); ?></time> | <?php echo $category[0]->cat_name; ?></span>
            </div>            
        </div>
		<div class="tap-right"><i class="icon-chevron-right"></i></div>
    </a>
    <!-- / ARTICLE ITEM -->
<?php

    endwhile;
    
    if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
?>
        </div>

<!-- / ARTICLE LIST -->