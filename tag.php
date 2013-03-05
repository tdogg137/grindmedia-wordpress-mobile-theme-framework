<?php

    echo get_template_part('templates/header');
    echo get_template_part('templates/top');
    
    the_post();
    
?>
<div class="page-meta">
        <h4><?php echo get_the_tag(); ?> <span style="font-weight:normal;">| Tag</span></h4>
        
</div>

<?php

    echo get_template_part('templates/content', 'author-search');
    echo get_template_part('templates/footer');
    
?>		