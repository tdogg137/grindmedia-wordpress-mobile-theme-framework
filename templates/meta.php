<?php
/*
* define SEO meta values base on the following:
* 1. SEO plugin data
* 2. Post Data
* 3. Site Info data
*/

//don't forget to remove html characters, and encode punctuation marks from these fields.
$seoTitle= htmlspecialchars(get_post_meta($post->ID, '_aioseop_title', TRUE));
$seoDescription= htmlspecialchars(get_post_meta($post->ID, '_aioseop_description', TRUE));
$seoKeywords= htmlspecialchars(get_post_meta($post->ID, '_aioseop_keywords', TRUE));
$postExerpt = htmlspecialchars(get_the_excerpt());
$postTitle =  str_replace("&#8211;", "-", get_the_title($post->ID));
$postTitle = str_replace("&#8217;", "'", $postTitle);
$categoryPageTitle =  trim(wp_title( '', false, 'right'));

$fb_image = wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); //get post thumb.
$fb_noImage = THEME_URL . '/images/bike-placeholder.jpg'; //placeholder image

$postKeywords = ($seoKeywords) ? $seoKeywords : META_KEYWORDS;

if(!$postExerpt)
        $postExerpt = META_DESC;	// this applies to pages, where exerpt does not exist.

if(is_single() || is_page()) {
        //define values for posts and pages
        $fb_url = get_permalink($post->ID);
        $postTitle = ($seoTitle) ? $seoTitle : $postTitle;
        $postExerpt = ($seoDescription) ? $seoDescription : $postExerpt;
} else {
        //define values for category pages
        $fb_image = $fb_noImage;
        $fb_url = 'http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $postTitle = 'Bike Magazine - '. (($categoryPageTitle) ? $categoryPageTitle : META_TITLE);
        $postExerpt = META_DESC;
}

define('SHARE_URL', $fb_url);
define('SHARE_IMAGE', ($fb_image) ? $fb_image : $fb_noImage);
define('SITE_TITLE', $postTitle);
define('SITE_DESC', $postExerpt);
define('SITE_KEYWORDS', $postKeywords);
