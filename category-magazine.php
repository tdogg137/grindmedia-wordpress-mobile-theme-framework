<?php

    echo get_template_part('templates/header');    
    
    echo get_template_part('templates/top');
    
?>
<style>
    .slider-prev {
        visibility: hidden;
    }
</style>
<?php
    
    echo get_template_part('templates/content', 'single-magazine');

    echo get_template_part('templates/footer');
    
?>		