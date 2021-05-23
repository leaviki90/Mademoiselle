<article class="blog-item h-100">
    <a href="<?php the_permalink(); ?>" target="_blank" class="blog-item-image d-block image-placeholder size-4by3">
        <img src="<?php the_post_thumbnail_url("blog-thumb"); ?>" alt="alt"/>
    </a>
    <div class="blog-item-data">
        <p><?php echo get_the_date(); ?></p>
        <h3>
            <a href="<?php the_permalink(); ?>" target="_blank"><?PHP the_title(); ?></a> 
        </h3>
    </div>
</article>

                            
                        
