<?php
get_header();
?>
<main>
    <?PHP
    get_template_part("template-parts/hero-section");

    get_template_part("template-parts/news-partial");

    $ServicesTitle = get_field("homepage_services_title", get_option("page_on_front"));
    $numberOfServices = get_field("number_of_services", get_option("page_on_front"));
    $argService = array(
        "post_status" => "publish",
        "post_type" => "our-services",
        "posts_per_page" => $numberOfServices,
        "order" => "DESC",
        "orderby" => "date"
    );
    $services = new WP_Query($argService);

    if ($services->have_posts()) {
        ?>
        <section class="service-info">
            <div class="container">
                <h2 class="text-uppercase section-title text-center text-lg-start animation slideRight" data-animation="slideRight"><?php echo $ServicesTitle; ?></h2>
                <?PHP
                while ($services->have_posts()) {
                    $services->the_post();
                    get_template_part("template-parts/content-services");
                }
                ?>
            </div>
        </section><!-- Services ends here -->
        <?PHP
    }

    wp_reset_postdata();
    ?> <!---  Services added -->

    <?PHP get_template_part("template-parts/team-slider-partial"); ?>              

</main>
<?PHP
get_footer();

