<?php
if (has_custom_logo()):
    the_custom_logo();
else:
    ?>
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/frontend/img/logo.png" alt=""/>
    </a>
<?php
endif;
?>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
</button>
<div class="collapse navbar-collapse" id="main-menu">
    <?php
    wp_nav_menu(array(
        "theme_location" => "main-menu",
        "container" => "",
        "menu_class" => "navbar-nav ms-auto mb-2 mb-md-0",
        "depth" => 1
    ));
    ?>
</div>