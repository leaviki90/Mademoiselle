<?php
$arg = array(
    "post_status" => "publish",
    "post_type" => "team-members",
    "numberposts" => 5,
    "order" => "DESC",
    "orderby" => "date"
);
$teamMembers = new WP_Query($arg);
if ($teamMembers->have_posts()) {
    ?>
    <section class="professional">
        <div class="container text-center text-lg-start">
            <h2 class="section-title text-uppercase animation slideRight" data-animation="slideRight">
                <a href="<?php the_field("homepage_team_title") ?>"><?php printf(__("TRUST OUR PROFESSIONALS", "news-theme")); ?></a>
            </h2>
            <div class="professional-slider owl-carousel owl-theme">
                <?php
                while ($teamMembers->have_posts()) {
                    $teamMembers->the_post();

                    get_template_part("template-parts/content-team");
                }
                ?>

            </div>   
        </div> <!-- Container ends -->
    </section><!-- Professional ends here -->   
    <?php
} else {
    get_template_part("template-parts/content-none");
}


wp_reset_postdata();
?> <!---  Team members added -->

