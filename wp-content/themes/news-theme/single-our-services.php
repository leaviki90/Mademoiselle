<?php
get_header();
?>
<main>

    <?php
    if (have_posts()):
        while (have_posts()): the_post();
            ?>

            <section class="single-service">
                <div class="container">
                    <div class="row justify-content-between intro-row">
                        <div class="col-12 col-lg-5 px-4 px-lg-0 mb-4 mb-lg-0 order-2">
                            <div class="blog-intro h-100 text-center text-lg-start animation slideRight" data-animation="slideRight"">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 px-4 px-lg-0 mb-4 mb-lg-0">
                            <figure class="mb-0 h-100">
                                <?php the_post_thumbnail("service-thumb"); ?>
                            </figure>
                        </div> 
                    </div> <!-- Intro-row ends --->
                </div>     
            </section> <!-- single-service section ends --> 
            <?PHP
        endwhile;
        get_template_part("template-parts/single-pagination");

    endif;
    get_template_part("template-parts/news-partial")
    ?> 
</main>
<?PHP
get_footer();

