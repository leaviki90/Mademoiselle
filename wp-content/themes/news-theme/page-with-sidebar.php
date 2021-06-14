<?php
/*
 * Template Name: Page with Sidebar
 */



get_header();
?>
<main>
    <?php get_template_part("template-parts/hero-section"); ?>
    <!-- About section starts here -->
    <section class="about">
        <div class="container">
            <div class="row">
                <!-- Col 1 starts -->
                <div class="col-12 col-sm-8 mb-5 mb-sm-0 px-4 px-sm-1">
                    <article class="about-blog">
                        <?php the_content(); ?>
                    </article> <!-- About-blog ends -->
                </div><!-- Col 1 ends -->

                <!-- Col 2 starts -->
                <div class="col-12 col-sm-4 px-4 px-sm-1">
                    <div class="side-aboutblog blog-list animation slideLeft" data-animation="slideLeft">

                        <?php get_sidebar("about"); ?>

                    </div> 
                </div>

            </div> <!-- Row ends -->
        </div> <!-- Container ends -->
    </section> <!-- About section ends -->
</main>
<?php
get_footer();

