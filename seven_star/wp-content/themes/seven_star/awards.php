<?php
/**
 * The main template file
 * Template Name: Awards
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seven_star
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Awards</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Awards</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Awards & Recognition Section Start -->
<div class="container px-3 px-lg-0">
    <div class="py-5">
        <h2 class="text-dark fw-bold text-start mb-4 mb-lg-5">Awards & Recognition</h2>

        <div class="row g-4 g-lg-5 portfolio-container">
            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award1.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: fill;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Global Installation Milestone</p>
                        <span class="text-body"><i class="fa fa-industry text-primary me-2"></i>
                            Recognition for completing 100+ industrial refrigeration and cold storage projects worldwide.
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award2.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Sustainability Excellence Award</p>
                        <span class="text-body"><i class="fa fa-flask text-primary me-2"></i>
                            Honored for integrating eco-friendly refrigerants and energy-efficient technologies in cold chain systems.
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award3.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Innovation in Cold Chain Solutions</p>
                        <span class="text-body"><i class="fa fa-hotel text-primary me-2"></i>
                            Awarded for pioneering customized freezing and storage systems for the seafood and pharmaceutical sectors.
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award4.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">25 Years of Industry Leadership</p>
                        <span class="text-body"><i class="fa fa-hotel text-primary me-2"></i>
                            Celebrating over two decades of excellence in delivering world-class refrigeration solutions.
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Awards & Recognition Section End -->

	
<?php
// get_sidebar();
get_footer();