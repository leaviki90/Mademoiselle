<?php
/*
 * Template Name: Page Full Width
 */



get_header();
?>
<main>
    <?PHP get_template_part("template-parts/hero-section"); ?>
    <!-- About section starts here -->
    <section class="about">
        <div class="container">
            <div class="row">
                <!-- Col 1 starts -->
                <div class="col-12 px-5">
                    <article class="about-blog">
                        <h2><?php the_field("short_desc"); ?></h2>
                        <?php the_content(); ?>
                    </article> <!-- About-blog ends -->
                </div><!-- Col 1 ends -->


            </div> <!-- Row ends -->
        </div> <!-- Container ends -->
    </section> <!-- About section ends -->
</main>
<?PHP
get_footer();

