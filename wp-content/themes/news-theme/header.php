<!doctype html>
<html lang="<?PHP bloginfo("language"); ?>">
    <head>
        <title><?PHP bloginfo("name"); ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content='Violeta Petrović'>
        <meta name="description" content='Mademoiselle Project'>
        <meta name="keywords" content='mademoiselle, beauty, makeup, haircut, bootstrap, sass, css, responsive'>

        <!-- IOS compatibility -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?PHP bloginfo("name"); ?>">
        <link rel="apple-touch-icon" href="<?PHP echo get_template_directory_uri(); ?>/frontend/apple-icon-144x144.png">

        <!--        Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="aplication-name" content="<?PHP bloginfo("name"); ?>">
        <link rel="icon" type="image/png" href="<?PHP echo get_template_directory_uri(); ?>/frontend/android-icon-192x192.png">

        <link rel="icon" type="image/ico" href="<?PHP echo get_template_directory_uri(); ?>/frontend/favicon.ico">
       
<?PHP wp_head(); ?>
 
    </head>
    <body <?PHP body_class(); ?>>
        <header class="bg-white fixed-top py-1 py-sm-2 py-md-4">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="<?PHP echo get_home_url();  ?>">
                        <img src="<?PHP echo get_template_directory_uri(); ?>/frontend/img/logo.png" alt=""/>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="services.html">services</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="blog.html">blog</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="contact.html">contact</a>
                            </li>
                        </ul> <!-- Navbar-nav ends here -->
                    </div> <!-- #main-menu ends -->
                </div> <!-- Container ends -->
            </nav> <!-- Navbar ends -->
        </header> <!-- Header ends  -->

