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
                            ?>
                            <div class="col-12 col-sm-6 col-lg-4 px-4 px-sm-2 mb-6 mb-sm-4">
                                <?PHP
                                get_template_part("template-parts/content-news");
                                ?>
                            </div>    

                            <?PHP
                        endwhile;

                        get_template_part("template-parts/number-pagination");
                        ?>
                    </div> <!-- Row ends -->
                </div> <!-- Blog-list ends -->
            </div> <!-- Container ends -->
        </section> <!-- Blog-news ends here -->                       

        <?php
    else: get_template_part("template-parts/content-none");
    endif;
    ?> 
</main>
<?PHP
get_footer();

