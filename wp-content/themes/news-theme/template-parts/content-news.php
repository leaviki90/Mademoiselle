
<!-- Col 1 starts -->
<div class="col-12 col-sm-6 col-lg-4 px-4 px-sm-2 mb-6 mb-sm-4">
    <article class="blog-item h-100">
        <a href="<?php the_permalink(); ?>" target="_blank" class="blog-item-image d-block image-placeholder size-4by3">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="alt"/>
        </a>
        <div class="blog-item-data">
            <p><?php echo get_the_date(); ?></p>
            <h3>
                <a href="<?php the_permalink(); ?>" target="_blank"><?PHP echo get_field("news_subtitle"); ?></a> 
            </h3>
        </div>
    </article>
</div><!-- Col 1 ends -->
                            
                        
