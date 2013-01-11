<?php

    /* loading of ajax data */
    if(isset($_GET['start'])) {
	/* spit out the posts within the desired range */
	$posts = grindmedia_get_posts($_GET['start'],$_GET['desiredPosts']);
	// decode the result to know the exact length of the result
	// It could be 5 in this case or less
	$postsDecoded = json_decode($posts);
	// If the result is not empty we update the session
	if (!empty($postsDecoded))
	{
		/* save the user's "spot", so to speak */
		$_SESSION['posts_start']+= count($postsDecoded);
	}
	echo grindmedia_get_posts($_GET['start'],$_GET['desiredPosts']);
	/* kill the page */
	die();
    }

    echo get_template_part('templates/header', 'home');
    echo get_template_part('templates/top');
    echo get_template_part('templates/nav');
    
?>

<?php

    echo get_template_part('templates/mantle');
    //echo get_template_part('templates/content', 'home');
    
?>

<div id="widget" class="article-list">
    <div class="content"></div>
    
    <a class="article-item last more-container">
        <button class="more btn btn-inverse">More</button>
    </a>
    
</div>

<div align="center">
    <iframe name="google_ads_frame" width="320" height="50" id="google_ads_frame" src="http://googleads.g.doubleclick.net/pagead/ads?channel=7762979900&amp;oe=utf8&amp;client=ca-mb-pub-1870585188453152&amp;correlator=1357866229299&amp;dt=1357866229299&amp;ea=0&amp;flash=0&amp;frm=1&amp;js=afmc-v1.2&amp;output=html&amp;u_ah=1178&amp;u_aw=1916&amp;u_cd=24&amp;u_h=960&amp;u_w=640&amp;u_his=13&amp;u_tz=-480&amp;url=http%3A%2F%2Fwww.grindtv.com%2F&amp;ad_type=text_image&amp;color_bg=FFFFFF&amp;color_border=9CB3C5&amp;color_link=2578C7&amp;color_text=000000&amp;color_url=008000&amp;format=320x50_mb&amp;dtd=1" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" style="position:relative" align="center"></iframe>
</div>

<?php

    echo get_template_part('templates/footer', 'home');
    
?>		