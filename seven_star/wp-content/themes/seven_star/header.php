<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seven_star
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title>Seven Star Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-light bg-light-radial shadow-sm py-2 px-3 px-lg-3">
    <nav class="navbar navbar-expand-lg bg-light bg-light-radial navbar-dark py-3 py-lg-0 justify-content-center">
        <a href="<?php echo site_url('/index'); ?>" class="navbar-brand d-flex align-items-center mx-auto ms-0 ms-lg-5">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo_seven_star.png" alt="RR Engineers Logo" style="height: 60px;">
            <!-- <h1 class="m-0 fs-5 text-white">RREngineers & Contractors</h1> -->
        </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                 <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-1',
                            'container'         => false,
                            'container_class'   => '',
                            'menu_class'        => 'navbar-nav ms-auto me-0',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'depth'             => 3,
                            'walker'            => new wp_bootstrap_navwalker()
                        ));
                    ?>
                <a href="<?php echo site_url('/quote'); ?>" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

	<!-- Full Screen Search End -->
    <div class="clearfix"></div>