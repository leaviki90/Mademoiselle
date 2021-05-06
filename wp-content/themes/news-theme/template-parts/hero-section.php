<!-- Hero-section starts here -->

<section class="hero-section about-hero px-1 text-center" style="background-image: linear-gradient(180deg, #000000 0%, rgba(208,182,182,0.45) 100%), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>')">
    <div class="container">
        <h1 class="hero-section-title"><?php the_title(); ?></h1>
  
        <a href="<?PHP the_field("hero_link"); ?>" class="btn btn-outline-white text-white text-uppercase backtohome"><?PHP the_field("hero_link_desc"); ?></a>
        </a>
    
        
    </div>
</section><!-- Hero-section ends here -->

