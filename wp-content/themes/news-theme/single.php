<?php
get_header();
?>
<main>

<?php
if (have_posts()):
    while (have_posts()): the_post();
        ?>
    <section class="single-blog">
                <div class="container">
                    <div class="category-wrapper d-flex flex-wrap align-content-center ">
                        <div class="category-list category"> 
                            <?php the_category(" | "); ?>
                        </div>
                        <p class="date fst-italic mb-0"><?php the_date(); ?></p>
                    </div>
                    <div class="row justify-content-between intro-row">
                        <div class="col-12 col-md-5 px-4 px-md-0 mb-4 mb-sm-0">
                            <div class="blog-intro h-100">
                                <h1 class="animation slideRight" data-animation="slideRight"><?php the_title(); ?></h1>
                                <p><?php echo get_field("short_desc"); ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 px-4 px-md-0 mb-4 mb-md-0">
                            <figure class="mb-0 h-100">
                                <img src="<?php echo get_field("side_image"); ?>" alt=""/>
                            </figure>
                        </div> 
                    </div><!-- Intro-row ends -->
                    <article class="single-blog-content">
                        <?php
                        the_content();
                        $tags = get_the_tags();
                        if (!empty($tags)) {
                            ?>
                            <div class="tags">
                                <p class="tags-label fst-italic mb-4">Tags:</p>
                                <div class="tag-list">
                                    <?php
                                    foreach ($tags as $tag) {
                                        ?>
                                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-light text-dark px-5 py-0"><?php echo $tag->name ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div> <!-- Tags ends -->
                            <?php
                        }
                        ?>  
                    </article> <!-- single-blog-content ends -->
                </div> <!-- Container ends here -->
            </section> <!-- single-blog section ends -->
<?PHP
    endwhile;
   get_template_part("template-parts/single-pagination");
  
endif;

?> 
</main>
<?PHP get_footer();

