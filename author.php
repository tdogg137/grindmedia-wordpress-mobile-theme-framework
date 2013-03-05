<?php

    echo get_template_part('templates/header');
    echo get_template_part('templates/top');
    
    the_post();
    
?>
<div class="page-meta">
        <h4><?php echo get_the_author(); ?> <span style="font-weight:normal;">| Author</span></h4>
        
</div>

<?php

    echo get_template_part('templates/content', 'author-search');
    echo get_template_part('templates/footer');
    
?>		