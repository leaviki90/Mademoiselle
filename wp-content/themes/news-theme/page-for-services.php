<?php
/*
 * Template Name: Services Page
 */



get_header();
?>
<main>
    <?php get_template_part("template-parts/hero-section"); ?>
    <section class="service-info services">
        <div class="container">
            <h2 class="text-uppercase section-title text-center text-lg-start animation" data-animation="slideRight"><?php the_field("homepage_services_title", get_option("page_on_front")); ?></h2>
            <?php
            $arg = array(
                "post_status" => "publish",
                "post_type" => "our-services",
                "posts_per_page" => -1,
                "order" => "DESC",
                "orderby" => "date"
            );
            $services = new WP_Query($arg);

            if ($services->have_posts()) {
                ?>
                <div class="services-list">
                    <div class="row">
                        <?php
                        while ($services->have_posts()) {
                            $services->the_post();
                            get_template_part("template-parts/content-services");
                        }
                        ?>
                    </div>
                    </section><!-- Services ends here -->
                    <?php
                } else {
                    get_template_part("template-parts/content-none");
                }

                wp_reset_postdata();
                ?>
                </main>

                <?php get_footer(); ?>   





