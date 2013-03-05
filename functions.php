<?php
//----------------------------------------------------------------------------------------------------------------------
//set default time zone to LA
date_default_timezone_set('America/Los_Angeles');

//----------------------------------------------------------------------------------------------------------------------
// define file path
define('THEME_PATH', get_template_directory());
define('THEME_URL', get_bloginfo('template_url'));
define('SITE_URL', get_bloginfo('url'));
define('SITE_NAME', 'BikeMag');

//define default SEO values.
define('META_TITLE', "Bike Magazine - Mountain Bike Photos, Reviews, Videos, Trails");
define('META_DESC', "Bike magazine features the world's best mountain biking photos, videos, news, gear, reviews, trails, athletes, race results and much more. Styles of riding covered include downhill, cross country, trail, freeride, all mountain, cyclocross, singlespeeds, enduro, super d and trials.");
define('META_KEYWORDS', "bike magazine, mountain bikes, bike, photos, photography, bike gear, bike reviews, bike trails, bike athletes, bike wallpapers, downhill, free ride, downhill, all mountain, cross country, trail, trials, cyclocross, enduro, super d, XC, DH, CX, FR, MTB");

require_once(THEME_PATH .'/app/libs/GalleryView.php');

// post thumbnail support
add_theme_support('post-thumbnails');

// set up DART variables
$segments = explode('/', trim(reset(explode('?', $_SERVER['REQUEST_URI'])), '/'));

$sect = $subs = $subss = "";
$sect  = (!empty($segments[0])) ? $segments[0] : $sect;
$subs  = (!empty($segments[1]) && $segments[1] != 'page') ? $segments[1] : '';
$subss = (!empty($segments[2]) && $segments[2] != 'page' && $segments[1] != 'page') ? $segments[2] : '';

//----------------------------------------------------------------------------------------------------------------------
/*
/* settings for load more ajax */
//session_start();
//$_SESSION['posts_start'] = $_SESSION['posts_start'] ? $_SESSION['posts_start'] : $number_of_posts;

/* get posts ajax function */
function grindmedia_get_posts( $args ) {

    $posts = array();
    $temp = array();

    /* get the posts */
    $query = new WP_Query( $args );
    
    while ( $query->have_posts() ) {
        $query->the_post();
        
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium-4-3' );
        $category = get_the_category();
        $image = ( empty($thumb[0]) ) ? '/wp-content/themes/m.bikemag.com/images/bike-placeholder.jpg' : $thumb[0];

        $string = html_entity_decode( get_the_title(), ENT_QUOTES, "UTF-8");
        $shortdesc = wordwrap(substr($string, 0, 120), 26, "\n");
        preg_match("/(.+\n?){2}/", $shortdesc, $regs);
        $temp['post_title'] = $regs[0];
        unset($shortdesc, $regs);
        $temp['post_url'] = get_permalink();
        $temp['post_category'] = $category[0]->cat_name;
        $temp['post_image_url'] = $image;
        $temp['post_date'] = get_the_date('F j, Y');
        $temp['post_time'] = get_the_date('Y-n-j');
        
        $posts[] = $temp;
    }

    /* return the posts in the JSON format */
    return json_encode($posts);
}