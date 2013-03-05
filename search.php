<?php

    echo get_template_part('templates/header');
    echo get_template_part('templates/top');
    
?>
<div class="page-meta">
        <h4>Your search returned the following articles:</h4>
</div>

<?php

    echo get_template_part('templates/content','author-search');
    echo get_template_part('templates/footer');
    
?>		