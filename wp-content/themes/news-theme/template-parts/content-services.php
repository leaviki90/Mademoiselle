<!-- Article 1 starts -->
<article class="service-info-item mb-3 mb-sm-0 px-4 px-sm-0">
    <div class="row g-0">
        <div class="col-12 col-sm-6 service-info-image">
            <a href="<?php the_permalink(); ?>" class="h-100 d-flex">
                <img alt="" class='h-100' src="<?php the_post_thumbnail_url("service-thumb"); ?>"/>
            </a>
        </div>
        <div class="col-12 col-sm-6 service-info-content h-100 text-center text-lg-start">
            <h3 class="text-uppercase"><?php echo get_the_title(); ?></h3>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark text-uppercase learn more"><?php printf(__("learn more", "news-theme")); ?></a>
        </div>
    </div>
</article> <!-- Article 1 ends -->
