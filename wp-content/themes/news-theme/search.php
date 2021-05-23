<?php
get_header();
?>
<main>
    <section class = "hero-section about-hero px-1 text-center mb-10" style = "background-image: linear-gradient(180deg, #000000 0%, rgba(208,182,182,0.45) 100%), url('<?php echo get_template_directory_uri() . "/frontend/img/image-search.jpg" ?>')">
        <div class = "container">
            <h1 class = "hero-section-title"><?php printf(__("Search results for:", "news-theme")) ?> <?php echo get_search_query(); ?></h1>
        </div>
    </section><!-- Hero-section ends here -->

    <div class="container">
        <?PHP
        get_sidebar("search");
        ?>
    </div>
    <?PHP
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

