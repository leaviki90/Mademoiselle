<!-- Slide 1 starts -->
<div class="slide-item">
    <div class="row align-items-center justify-content-center align-items-center">
        <!-- Col 1 starts -->
        <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-5 mb-sm-0 px-4 px-sm-3 px-md-1 col-slider-image">
            <figure class="slider-image mb-0">
                <?php the_post_thumbnail(); ?>
            </figure>
        </div> <!-- Col 1 ends -->

        <!-- Col 2 starts -->
        <div class="col-12 col-sm-6 col-md-5 col-lg-4 px-4 px-sm-3 px-md-0 col-slider-content">
            <article class="slider-content">
                <h3>
                    <a href="<?PHP the_permalink(); ?>"><?PHP the_title(); ?></a>
                </h3>
                <p><?php the_field("short_desc"); ?></p>
            </article>
        </div> <!-- Col 2 ends -->
    </div> <!-- Row ends -->
</div><!-- Slide 1 ends -->




