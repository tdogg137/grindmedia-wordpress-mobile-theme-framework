<?php

    if( function_exists("get_user_device") )
    {
        $device = get_user_device();
    
        switch ($device) {
            case "iphone":
                $html = 'http://itunes.apple.com/us/app/bike-mag/id469444271?mt=8';
                break;
            case "android":
                $html = 'https://play.google.com/store/magazines/details/Bike?id=CAow6qxU';
                break;
            default:
               $html = 'https://www.circsource.com/store/Subscribe.html?magazineId=254&sourceCode=I8ABDD';
                break;
            }
    } 
    else
    {
       $html = 'https://www.circsource.com/store/Subscribe.html?magazineId=254&sourceCode=I8ABDD';
    }
    
    the_post();
    
    $title = get_the_title();
    
?>
<div class="magazine-buttons">
    <a style="margin:0 3% 0 1%;" href="https://www.circsource.com/store/Subscribe.html?magazineId=119&amp;sourceCode=I9ABNN"><img src="<?php echo THEME_URL.'/images/print-edition.jpg'; ?>" /></a>
    <a style="margin-right:3%;" href="<?php echo $html; ?>"><img src="<?php echo THEME_URL.'/images/digital-edition.jpg'; ?>" /></a>
    <a href="https://www.circsource.com/store/storeBackIssMagazines.html?magazineId=119"><img src="<?php echo THEME_URL.'/images/back-issues.jpg'; ?>" /></a>
</div>

<!-- ARTICLE -->
<article class="magazine">
        <header>
                <h3><?php echo $title; ?></h3>
        </header>

<?php
    
    the_content(); 

?>

</article>
<!-- / ARTICLE -->

<div class="magazine-thumbs-nav">
    <a class="slider-prev pull-left" href='#' onclick='slider.prev();return false;'><i class="icon-chevron-left"></i> Newer</a> 
    <span>Past Issues</span>
    <a class="slider-next pull-right" href='#' onclick='slider.next();return false;'>Older <i class="icon-chevron-right"></i></a>
</div>

<div id="slider" class="swipe thumbs-wrapper">
    <ul style="margin-left: 0;">
<?php

    $query = new WP_Query( array( 'category_name' => 'magazine', 'posts_per_page' => 50, 'post__not_in' => array( $post->ID )) );
    $cnt = 0;
    
    // The Loop
    while ( $query->have_posts() ) :
	$query->the_post();
        $cnt++;
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        $image = ( empty($thumb[0]) ) ? '/wp-content/themes/m.bikemag.com/images/bike-placeholder.jpg' : $thumb[0];
       
?>
        <li style="<?php echo ( $cnt==1 ) ? 'display:block;' : 'display:none;' ?>">
            <div class="thumbs">
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
    
</div>