<?php

    echo get_template_part('templates/header');
    echo get_template_part('templates/top');
    echo get_template_part('templates/nav');
    
?>

<?php

    echo get_template_part('templates/mantle');
    echo get_template_part('templates/article', 'list');
    
?>

<?php

    echo get_template_part('templates/footer');
    
?>		