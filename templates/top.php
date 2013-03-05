<?php

    if( function_exists("get_user_device") )
    {
        $device = get_user_device();
    
        switch ($device) {
            case "iphone":
                $html = '<a href="http://itunes.apple.com/us/app/bike-mag/id469444271?mt=8">SUBSCRIBE</a>';
                break;
            case "android":
                $html = '<a href="https://play.google.com/store/magazines/details/Bike?id=CAow6qxU">SUBSCRIBE</a>';
                break;
            default:
               $html = '<a href="https://www.circsource.com/store/Subscribe.html?magazineId=254&sourceCode=I8ABDD">SUBSCRIBE</a>';
                break;
            }
    } 
    else
    {
       $html = '<a href="https://www.circsource.com/store/Subscribe.html?magazineId=254&sourceCode=I8ABDD">SUBSCRIBE</a>';
    }
    
?>
<span id="dark"></span>	
<!-- HEADER: CONTAINS LOGO AND MENU BUTTON -->
    <div class="header clearfix">
		<div class="row1 clearfix">            
                <span class="site-logo"><a href="/" title="Bike Magazine"><img src="<?php echo THEME_URL; ?>/images/bikemag-logo.png" alt="Bike Magazine"></a></span>
				<span class="app-btn"><button class="btn btn-inverse pull-right"><?php echo $html; ?></button></span>
		</div>
		<div class="row2 clearfix">
			<button id="nav-button" class="menu-button btn btn-inverse pull-left">Navigate<i class="icon-caret-down"></i></button>
			<div class="search pull-left">
				<form action="/" class="form-search clearfix" method="get" role="search">				
					<input type="text" class="pull-left" id="s" name="s" value="">
                                        <i class="icon-search"></i>
				</form>				
			</div>	
		</div>
    </div>
<!-- / HEADER -->
<?php echo get_template_part('templates/nav'); ?>