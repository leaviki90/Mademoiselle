<?php
get_header();
?>
<main>
    <section class = "hero-section about-hero px-1 text-center" style = "background-image: linear-gradient(180deg, #000000 0%, rgba(208,182,182,0.45) 100%), url('<?php echo get_template_directory_uri() . "/frontend/img/hero/hero_404.jpg"; ?>')">
        <div class = "container">
            <h1 class = "hero-section-title">Eror 404<br>Page not found</h1> 
            <a href="<?php echo home_url(); ?>" class="btn btn-outline-white text-white text-uppercase backtohome"><?php printf(__("back to home", "news-theme")); ?></a>
        </div>
    </section><!-- Hero-section ends here -->

</main>
<?php
get_footer();

