<?php
/*
 * Template Name: Team Page
 */



get_header();
?>
<main>
    <?php get_template_part("template-parts/hero-section"); ?>

    <?php
    $arg = array(
        "post_status" => "publish",
        "post_type" => "team-members",
        "posts_per_page" => -1,
        "order" => "DESC",
        "orderby" => "date"
    );
    $teamMembers = new WP_Query($arg);
    if ($teamMembers->have_posts()) {
        ?>
        <section class="service-info services">
            <div class="container">
                <h2 class="section-title text-uppercase animation slideRight" data-animation="slideRight">
    <?php printf(__("TRUST OUR PROFESSIONALS", "news-theme")); ?>
                </h2>

    <?php
    while ($teamMembers->have_posts()) {
        $teamMembers->the_post();
        get_template_part("template-parts/content-team-page");
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


</div><!-- Intro-row ends -->        
</div>
</section>




</main>
<?php
get_footer();

