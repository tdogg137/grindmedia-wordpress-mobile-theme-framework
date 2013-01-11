<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo THEME_URL.'/css/main.css?v='.filemtime( get_stylesheet_directory() . '/css/main.css'); ?>" />

        <script src="<?php echo THEME_URL.'/js/libs/mootools/mootools-core-1.4.5-full-nocompat-yc.js' ?>"></script>
        <script src="<?php echo THEME_URL.'/js/libs/mootools/mootools-more-1.4.0.1.js'; ?>"></script>
        <script src="<?php echo THEME_URL.'/js/mustache.js'; ?>"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo THEME_URL.'/js/libs/jquery/jquery-1.8.2.min.js'; ?>"><\/script>')</script>
        <script src="<?php echo THEME_URL.'/js/libs/jquery-flexnav/jquery-flexnav-0.3.js'; ?>"></script>
        <script type="text/javascript">
        //domready event  
        window.addEvent('domready',function() {
                // related to the demo page not the demo itself
                var scroll = new Fx.SmoothScroll({
                        links: '.smoothAnchors',
                        wheelStops: false,
                        duration: 1000
                });

                // initialize variables
                var start = <?php echo $_SESSION['posts_start']; ?>;
                var initialPosts = <?php echo grindmedia_get_posts(0,$_SESSION['posts_start']);  ?>;
                var desiredPosts = <?php echo $GLOBALS['number_of_posts']; ?>;
                // either null or contains the mustache template
                var template = null;
                // Widget element
                var widget = $('widget'),
                // Element to load the posts
                content = widget.getElement('.content'),
                // the more container
                moreContainer = widget.getElement('.more-container'),
                // the more button
                more = widget.getElement('.more');
                // the post counter
                //counter = widget.getElement('.badge');
                // Create alerts elements (Display Success or Failure)
                var alerts = {
                                templateFailure : new Element('div',{'class' : 'alert alert-error','html' : 'Could not get the template.'}),
                                requestEmpty : new Element('div',{'class' : 'alert alert-info','html' : 'No more data'}),
                                requestFailure : new Element('div',{'class' : 'alert alert-error','html' : 'Could not get the data. Try again!'})
                }
                // create the Bootstrap progress bar element
                var progressElement = new Element('div', {
                        'class': '',
                        'html': '<i class="icon-spinner icon-spin"></i><div class="clearfix"></div>',
                        'styles': {
                        }
                });
                var progressBar = progressElement.getElement('.icon-spinner');
                // Create a scroll instance on the widget content
                // This Class is included in Mootools More
                var scroll = new Fx.Scroll(content, {
                        duration: 1000,
                        wait: false
                });
                // function that handle posts
                var postHandler = function(data){
                        // Check if the template is already stored
                        if (!template){
                                // If not we get it
                                new Request({
                                        url: '<?php echo THEME_URL; ?>/templates/content-home.mustache',
                                        method: 'get',
                                        async: false,
                                        onSuccess: function(responseText){
                                                // the response text is stored as the template
                                                template = responseText;
                                        },
                                        onFailure: function() {
                                                // insert the failure message
                                                widget.grab(alerts.templateFailure,'before');
                                                // get rid of the widget
                                                widget.dispose();
                                        }
                                        // Send the Ajax request
                                }).send();
                        }
                        else{
                                // Set the progress bar to 100%
                                //progressBar.setStyle('width', '100%');
                                // Delay the normal more button to come back for a better effect
                                moreContainer.set.delay(500, moreContainer, ['html','<button class="more btn btn-inverse">More</button>']);
                        }
                        // Transform the template (String) into Elements that we can use
                        var childrens =  new Element('div', {
                                // Mustache requires an object property to reference in order to
                                // create loops
                                'html' : Mustache.render(template, {'data' : data})
                        }).getChildren('*');
                        // insert childrens at the end of the content element
                        content.adopt(childrens);
                        // Scroll to the first element loaded
                        scroll.toElement(childrens[0]);
                }
                // place the initial posts in the page
                postHandler(initialPosts);

                // create the data Ajax request
                var request = new Request.JSON({  
                        url: '', // ajax script -- same page
                        method: 'get',
                        // Any calls made to start while the request is running will be ignored.
                        link: 'ignore',
                        // We do not want IE to cache the result
                        noCache: true,  
                        onRequest: function() {
                                // Set the progress bar to 0%
                                //progressBar.setStyle('width', '0%');
                                // remove the more button innerHTML and insert the progress bar
                                moreContainer.empty().grab(progressElement);
                        },
                        onSuccess: function(responseJSON) {
                                // Check if data is returned
                                if (responseJSON.length > 0){
                                        // Update the total number of items
                                        start += responseJSON.length;
                                        // Update the counter
                                        //counter.set('html', start);
                                        // load items on the page
                                        postHandler(responseJSON);
                                }
                                else{
                                        // insert the empty message
                                        widget.grab(alerts.requestEmpty,'before');
                                        // Set the progress bar to 100%
                                        //progressBar.setStyle('width', '100%');
                                        // Remove the more button
                                        more.dispose.delay(500,more);
                                        // remove the empty message after 4 seconds
                                        alerts.requestEmpty.dispose.delay(4000,alerts.requestEmpty);
                                }
                        },
                        onFailure: function() {
                                // insert the failure message
                                widget.grab(alerts.requestFailure,'before');
                                // Set the progress bar to 100%
                                //progressBar.setStyle('width', '100%');
                                // Delay the normal more button to come back for a better effect
                                moreContainer.set.delay(500, moreContainer, ['html','<button class="more btn btn-inverse">More</button>']);
                        }
                });
                // add the click event to the more button
                moreContainer.addEvent('click',function(){  
                        // begin the ajax attempt
                        request.send({
                                data: {  
                                        'start': start,  
                                        'desiredPosts': desiredPosts  
                                } 
                        });  
                });
        });
        </script>
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
