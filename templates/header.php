<?php echo get_template_part('templates/meta'); ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo SITE_TITLE; ?></title>
        <meta name="description" content="<?php echo SITE_DESC; ?>" />
        <meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>" />
        <meta name="viewport" content="width=device-width,user-scalable=no">

        <link rel="canonical" href="<?php echo str_replace('http://m.', 'http://', get_bloginfo('url')).$_SERVER['REQUEST_URI']; ?>" >
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo THEME_URL.'/css/main.css?v='.filemtime( get_stylesheet_directory() . '/css/main.css'); ?>" />
        <link rel="icon" href="<?php echo THEME_URL; ?>/images/favicon.ico" type="image/x-icon" />
        
<?php //wp_head(); ?>
        
        <script src="<?php echo THEME_URL.'/js/mustache.js'; ?>"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo THEME_URL.'/js/libs/jquery/jquery-1.8.2.min.js'; ?>"><\/script>')</script>
        <script src="<?php echo THEME_URL.'/js/libs/jquery-cookie/jquery-cookie.js'; ?>"></script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-141486-30'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </head>
        <body class="home">

            <!-- PAGE CONTAINER -->
            <div class="container">
