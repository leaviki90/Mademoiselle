<?php
if (is_home() && get_option('page_for_posts')) {
    $heroImage = get_the_post_thumbnail_url(get_option("page_for_posts"));
    $heroTitle = get_the_title(get_option("page_for_posts"));
} else {
    $heroImage = get_the_post_thumbnail_url();
    $heroTitle = get_the_title();
}
?>

<!--Hero-section starts here-->

<section class = "hero-section about-hero px-1 text-center" style = "background-image: linear-gradient(180deg, #000000 0%, rgba(208,182,182,0.45) 100%), url('<?php echo $heroImage; ?>')">
    <div class = "container">
        <h1 class = "hero-section-title"><?php echo $heroTitle; ?></h1>
    </div>
</section><!-- Hero-section ends here -->









