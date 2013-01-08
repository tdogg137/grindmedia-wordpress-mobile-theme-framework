<?php
//----------------------------------------------------------------------------------------------------------------------
//set default time zone to LA
date_default_timezone_set('America/Los_Angeles');

//----------------------------------------------------------------------------------------------------------------------
// define file path
define('THEME_PATH', TEMPLATEPATH);
define('THEME_URL', get_bloginfo('template_url'));

// post thumbnail support
add_theme_support('post-thumbnails');

