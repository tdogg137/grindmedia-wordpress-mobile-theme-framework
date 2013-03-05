<?php 

    //Display 404 content for non-mobile support URLs
    $pages = array('2012-heavy-pedal-tour', 'apps' , 'contact', 'newsletter', 'podium', 'wallpapers', 'bike-bible');

    foreach( $pages as $page )
    {
        if( $GLOBALS['sect'] == $page)
        {
            echo get_template_part('templates/header');
            echo get_template_part('templates/top');
            
            echo '<article class="bg-404">
    
                    <h1>That page doesn\'t exist</h1>
                    <p>
                        Unfortunately, the page you\'ve requested cannot be displayed.  It appears that you\'ve lost your way either
                        through an outdated link or a typo on the page you were trying to reach.
                    </p>
                    <a href="/" title="Bike Magazine"><button class="btn">Return to homepage</button></a>

                    <div class="social clearfix">
                        <a href="mailto:tito@grindmedia.com?subject=Bike 404 Error" title="Email">Email</a>
                        |
                        <a href="http://facebook.com/bikemag/" title="facebook">Facebook</a>
                        |
                        <a href="http://twitter.com/bikemag/" title="twitter">Twitter</a>
                    </div>
     
                </article>';
            
            echo get_template_part('templates/footer');
            
            die();
        }
    }
    

    /* loading of ajax data */
    if(isset($_GET['start'])) {
	/* spit out the posts within the desired range */
	$posts = grindmedia_get_posts( array( 'category_name' => $GLOBALS['sect'], 'offset' => $_GET['start'], 'posts_per_page' => $_GET['desiredPosts']) );
        
	// decode the result to know the exact length of the result
	// It could be 5 in this case or less
	$postsDecoded = json_decode($posts);
	// If the result is not empty we update the session
	if (!empty($postsDecoded))
	{
		/* save the user's "spot", so to speak */
		//$_SESSION['posts_start']+= count($postsDecoded);
	}
	echo grindmedia_get_posts( array( 'category_name' => $GLOBALS['sect'], 'offset' => $_GET['start'], 'posts_per_page' => $_GET['desiredPosts']) );
	/* kill the page */
	die();
    }

    echo get_template_part('templates/header', 'home');
    echo get_template_part('templates/top');
    
?>

<div id="widget" class="article-list">
    <div class="content"></div>
    
    <a class="article-item last more-container">
        <button class="more btn btn-inverse">More</button>
    </a>
    
</div>

<?php

    echo get_template_part('templates/footer', 'home');
    
?>		