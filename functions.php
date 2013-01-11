<?php
//----------------------------------------------------------------------------------------------------------------------
//set default time zone to LA
date_default_timezone_set('America/Los_Angeles');

//----------------------------------------------------------------------------------------------------------------------
// define file path
define('THEME_PATH', TEMPLATEPATH);
define('THEME_URL', get_bloginfo('template_url'));
define('SITE_NAME', 'skateboardermag');

// post thumbnail support
add_theme_support('post-thumbnails');

/* settings for load more ajax */
session_start();
$number_of_posts = 3; //5 at a time
$_SESSION['posts_start'] = $_SESSION['posts_start'] ? $_SESSION['posts_start'] : $number_of_posts;

/* get posts ajax function */
function grindmedia_get_posts($start = 0, $number_of_posts = 3) {

    $posts = array();
    $temp = array();

    /* get the posts */
    //$query = new WP_Query( array( 'category_name' => '', 'offset' => $start, 'posts_per_page' => $number_of_posts) );
    $query = new WP_Query( array( 'tag' => 'mantle', 'offset' => 0, 'posts_per_page' => 2) );
    
    while ( $query->have_posts() ) {
        $query->the_post();
        
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large-4-3' );
        $category = get_the_category();
        
        $temp['post_title'] = get_the_title();
        $temp['post_url'] = get_permalink();
        $temp['post_category'] = $category[0]->cat_name;
        $temp['post_image_url'] = $thumb[0];
        $temp['post_date'] = get_the_date('F j, Y');
        $temp['post_time'] = get_the_date('Y-n-j');
        
        $posts[] = $temp;
    }

    /* return the posts in the JSON format */
    return json_encode($posts);
}

