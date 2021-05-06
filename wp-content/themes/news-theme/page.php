<?php

get_header();

?>
<main>
    
<?php

if(have_posts()):
    while(have_posts()): the_post();
    
    get_template_part("template-parts/hero-section");

      
    

    endwhile;
endif;

?> 
</main>
<?PHP get_footer();


