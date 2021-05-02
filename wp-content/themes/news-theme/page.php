<?php

get_header();

?>
<main>
    
<?php

if(have_posts()):
    while(have_posts()): the_post();
    ?>
<h2><?PHP the_title(); ?></h2>
<div><?PHP the_content(); ?></div>
<?PHP
    endwhile;
endif;

?> 
</main>
<?PHP get_footer();


