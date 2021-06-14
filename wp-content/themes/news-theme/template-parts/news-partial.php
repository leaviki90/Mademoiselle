<?PHP
$blogNewsTitle = get_field("homepage_blog_title", get_option("page_on_front"));
$numberOfBlogNews = get_field("number_of_blognews", get_option("page_on_front"));
$argBlog = array(
    "post_status" => "publish",
    "post_type" => "post",
    "posts_per_page" => $numberOfBlogNews,
    "order" => "DESC",
    "orderby" => "date"
);
$blogNews = new WP_Query($argBlog);
if ($blogNews->have_posts()) {
    ?>
    <section class="blog-info">
        <div class='container'>
            <h2 class="text-uppercase section-title mb-10 text-center text-lg-start animation slideRight" data-animation="slideRight"><?php echo $blogNewsTitle; ?></h2>
            <div class='blog-list'>
                <!-- Row starts here -->
                <div class='row justify-content-center'>
                    <?php
                    while ($blogNews->have_posts()) {
                        $blogNews->the_post();
                        ?>
                        <div class="col-12 col-sm-6 col-lg-4 px-4 px-sm-2 mb-6 mb-sm-4 mb-lg-0">
                            <?php
                            get_template_part("template-parts/content-news");
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}
wp_reset_postdata();
?> <!--blog news added -->
