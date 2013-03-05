<?php

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