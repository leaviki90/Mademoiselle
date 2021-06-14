<?php
/*
 * Template Name: Page Full Width
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
                <div class="col-12 px-5">
                    <article class="about-blog">
                        <?php the_content(); ?>
                    </article> <!-- About-blog ends -->
                </div><!-- Col 1 ends -->


            </div> <!-- Row ends -->
        </div> <!-- Container ends -->
    </section> <!-- About section ends -->
</main>
<?php
get_footer();

