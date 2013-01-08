<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

                <link rel="stylesheet" type="text/css" media="all" href="<?php echo THEME_URL.'/css/main.css?v='.filemtime( get_stylesheet_directory() . '/css/main.css'); ?>" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                <script>window.jQuery || document.write('<script src="<?php echo THEME_URL.'/js/libs/jquery/jquery-1.8.2.min.js?v='.filemtime( get_stylesheet_directory() . '/js/libs/jquery/jquery-1.8.2.min.js'); ?>"><\/script>')</script>
                <script src="<?php echo THEME_URL.'/js/libs/jquery-flexnav/jquery-flexnav-0.3.js?v='.filemtime( get_stylesheet_directory() . '/js/libs/jquery-flexnav/jquery-flexnav-0.3.js'); ?>"></script>
                
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
		
			<!-- HEADER: CONTAINS LOGO AND MENU BUTTON -->
			<div class="header clearfix">
				<div class="site-logo pull-left">
					<img src="http://placehold.it/650x250&text=650x250+Logo">
				</div>
				<div class="menu-button pull-right"></div>
			</div>
			<!-- / HEADER -->

			<!-- DROPDOWN NAVIGATION MENU -->
			<nav>
				<ul id="nav" role="navigation">
					<li class="top-level"><a href="/views/article.html" title="">Article Page</a></li>
					<li class="top-level"><a href="/views/author.html" title="">Author Page</a></li>
					<li class="top-level"><a href="/views/category.html" title="">Category Page</a></li>
					<li class="top-level"><a href="/views/search_results.html" title="">Search Results Page</a></li>
					<li class="top-level"><a href="/views/tag.html" title="">Tag Page</a></li>
					<li class="top-level"><a href="/views/photo_gallery_list.html" title="">Gallery List Page</a></li>
					<li class="top-level"><a href="/views/photo_gallery.html" title="">Gallery Page</a></li>
					<li class="top-level"><a href="/views/photo_gallery_all.html" title="">Gallery View All</a></li>
					<li class="top-level">
						<form class="form-search clearfix">
							<input type="text" class="pull-left">
							<button type="submit" class="btn pull-right">Search</button>
						</form>
					</li>

				</ul>
			</nav>
			<!-- / DROPDOWN NAVIGATION MENU -->

			<!-- SITE CONTENT -->
			<div class="content">
				
				<!-- MANTLE IMAGE AND CAPTION -->
				<a class="mantle" href="" title="">
					<img src="http://placehold.it/640x480&text=640x480+Mantle" alt="">
					<div class="caption">
						<p>This is a Caption for a Mantle Image</p>
					</div>
				</a>
				<!-- / MANTLE IMAGE AND CAPTION -->

				<!-- ARTICLE LIST -->
				<div class="article-list">
				
					<!-- ARTICLE ITEM -->
					<a class="article-item" href="#" title="">
						<div class="meta">
							<span><time datetime="2012-12-13">December 13, 2012</time> | Category Name</span>
						</div>
						<div class="article-content clearfix">
							<div class="article-img">
								<img src="http://placehold.it/640x480&text=640x480+Mantle" alt="">
							</div>
							<div class="article-title">
								<h4>This is an Article Title that You Could Tap On</h4>
							</div>
							<div class="tap-right"><img src="<?php echo THEME_URL.'/images/arrow-right.png'; ?>"></div>
						</div>
					</a>
					<!-- / ARTICLE ITEM -->
					
					<!-- ARTICLE ITEM -->
					<a class="article-item" href="#" title="#">
						<div class="meta">
							<span><time datetime="2012-12-13">December 13, 2012</time> | Category Name</span>
						</div>
						<div class="article-content clearfix">
							<div class="article-img">
								<img src="http://placehold.it/640x480&text=640x480+Mantle" alt="">
							</div>
							<div class="article-title">
								<h4>This is an Article Title that You Could Tap On</h4>
							</div>
							<div class="tap-right"><img src="<?php echo THEME_URL.'/images/arrow-right.png'; ?>"></div>
						</div>
					</a>
					<!-- / ARTICLE ITEM -->
					
					<!-- ARTICLE ITEM -->
					<a class="article-item" href="#" title="#">
						<div class="meta">
							<span><time datetime="2012-12-13">December 13, 2012</time> | Category Name</span>
						</div>
						<div class="article-content clearfix">
							<div class="article-img">
								<img src="http://placehold.it/640x480&text=640x480+Mantle" alt="">
							</div>
							<div class="article-title">
								<h4>This is an Article Title that You Could Tap On</h4>
							</div>
							<div class="tap-right"><img src="<?php echo THEME_URL.'/images/arrow-right.png'; ?>"></div>
						</div>
					</a>
					<!-- / ARTICLE ITEM -->
					
					<!-- ARTICLE ITEM -->
					<a class="article-item" href="#" title="#">
						<div class="meta">
							<span><time datetime="2012-12-13">December 13, 2012</time> | Category Name</span>
						</div>
						<div class="article-content clearfix">
							<div class="article-img">
								<img src="http://placehold.it/640x480&text=640x480+Mantle" alt="">
							</div>
							<div class="article-title">
								<h4>This is an Article Title that You Could Tap On</h4>
							</div>
							<div class="tap-right"><img src="<?php echo THEME_URL.'/images/arrow-right.png'; ?>"></div>
						</div>
					</a>
					<!-- / ARTICLE ITEM -->
					
				</div>
				<!-- / ARTICLE LIST -->
				
			</div>
			<!-- / SITE CONTENT -->

		</div>
		<!-- / PAGE CONTAINER -->
		
		<!-- FOOTER -->
		<footer>
			<p><a href="#" title="View Full Site">View Full Site</a></p>
			<p><a href="#" title="View Full Site">Privacy Policy</a> | <a href="#" title="View Full Site">Terms of Service</a></p>
			<p class="copyright"><a href="http://www.grindmedia.com/" title="Copyright &copy; <?php echo date('Y'); ?> GrindMedia, LLC. All Rights Reserved">Copyright &copy; <?php echo date('Y'); ?> GrindMedia, LLC. All Rights Reserved</a></p>
		</footer>
		<!-- / FOOTER -->
		
		<script src="<?php echo THEME_URL.'/js/main.js?v='.filemtime( get_stylesheet_directory() . '/js/main.js'); ?>"></script>

	</body>
</html>