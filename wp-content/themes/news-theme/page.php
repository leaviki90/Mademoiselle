<?php
get_header();
?>
<main>
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-between">
                <!-- col 1 starts -->
                <div class="col-12 col-sm-6 px-4 px-sm-2 px-md-1 mb-5 mb-sm-0">

                    <form class="contact-form" method="post" action="">
                        <h2 class="section-title text-center text-sm-start text-uppercase mb-2"><?PHP printf(__("Please contact us using the form bellow", "news-theme")); ?></h2>
                        <?PHP the_content(); ?>
                    </form>  
                </div> <!-- Col 1 ends -->

                <!-- Col 2 starts -->
                <div class="col-12 col-sm-6 col-md-5">
                    <div class= "contact-map">
                        <?PHP the_field("contact_map"); ?>
                    </div>
                </div>
            </div> <!-- Row ends -->
        </div> <!-- container ends -->
    </section> <!-- contact-section ends here -->

    <section class="contact-address">
        <div class="container">
            <div class="address-info text-center">
                <?PHP get_template_part("template-parts/contact-data"); ?>
            </div> <!-- Address-info ends here -->
        </div> <!-- Container ends here -->
    </section> <!-- contact-address ends -->
</main>
<?PHP get_footer();


