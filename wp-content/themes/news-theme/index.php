<?php
get_header();
?>
<main>
<?php
get_template_part("template-parts/hero-section");
if (have_posts()):
    ?>
        <!-- Blog-news starts -->
        <section class="blog-news">
            <div class='container'>
                <div class='blog-list'>
                    <!-- Row starts here -->
                    <div class='row'>
    <?php
    while (have_posts()): the_post();
        get_template_part("template-parts/content-news");
        
         endwhile;
                        
         the_posts_pagination(array(
                 'screen_reader_text' => " ",
                  "mid_size" => 2,
                  "prev_text" => "&Lt;",
                  "next_text" => "&Gt;"
                   )); ?> 
                    </div> <!-- Row ends -->
                </div> <!-- Blog-list ends -->
            </div> <!-- Container ends -->
        </section> <!-- Blog-news ends here -->                       

    <?php
endif;
?> 
</main>
    <?PHP
    get_footer();

    