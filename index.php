<?php

    echo get_template_part('templates/header');
    echo get_template_part('templates/top');
    
?>
<article class="bg-404">
    <h1>That page doesn't exist</h1>
    <p>
        Unfortunately, the page you've requested cannot be displayed.  It appears that you've lost your way either
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
    
     
</article>
<?php

    echo get_template_part('templates/footer');
    
?>