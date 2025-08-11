<?php
/**
 * The main template file
 * Template Name: Home
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

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to Seven Star
                                    International Co.</h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">Trusted Experts in Cooling
                                    Appliances</h1>
                                <a href="#about" class="btn btn-primary py-3 px-5">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Custom Engineered
                                    Cooling</h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">Precision Cooling for
                                    Industrial Needs</h1>
                                <a href="#products" class="btn btn-primary py-3 px-5">View Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">After-Sales & Support
                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">Reliable Service with Every
                                    Installation</h1>
                                <a href="#contact" class="btn btn-primary py-3 px-5">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="" style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                        style="width: 200px; height: 200px;">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                            <h1 class="text-white">25</h1>
                            <h2 class="text-white">Years</h2>
                            <h5 class="text-white mb-0">Experience</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-0">Cooling Solutions Engineered for Performance & Reliability</h1>
                    </div>
                    <p>Seven Star International Co. is a trusted manufacturer and supplier of high-performance cooling
                        appliances, serving both domestic and industrial sectors across India. With over 25 years of
                        excellence, we specialize in water coolers, RO chillers, deep freezers, ice cube machines, and
                        more.</p>
                    <p class="mb-4">Our products are designed to withstand extreme weather conditions and deliver
                        unmatched durability. With a commitment to innovation, quality, and customer satisfaction, we
                        cater to clients across Maharashtra and beyond with tailored cooling solutions backed by
                        reliable support.</p>
                    <div class="border-top mt-4 pt-4">
                        <div class="row g-4">
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Timely Delivery</h6>
                            </div>
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">24/7 Support Services</h6>
                            </div>
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Certified Products</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Expertise Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-0 py-lg-5 ">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-body text-uppercase mb-2">Feature Expertise</h6>
            <h1 class="display-6 mb-5">Precision Cooling Systems for Industrial Needs</h1>
        </div>
        <div class="row g-4 justify-content-center">

            <!-- Expertise 1 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Cooling</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Water Coolers</h5>
                        <p>Reliable and energy-efficient water cooling solutions ideal for industrial and commercial
                            spaces.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-1.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 2 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Cooling</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Water Chillers</h5>
                        <p>Advanced water chilling units designed for consistent cooling performance across
                            applications.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 3 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>RO Systems</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">RO Chillers</h5>
                        <p>Chillers integrated with RO systems to provide clean, chilled water for drinking and process
                            needs.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-3.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 4 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Industrial</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Processing Water Chillers</h5>
                        <p>Engineered for manufacturing processes requiring stable and precise water cooling
                            performance.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-4.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 5 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Industrial</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Processing Oil Chillers</h5>
                        <p>Specialized chillers for temperature control in hydraulic and lubrication oil circuits in
                            factories.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-5.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 6 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Beverage</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Bottle Coolers</h5>
                        <p>Compact and efficient cooling units designed for beverage bottling and retail environments.
                        </p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-6.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 7 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Freezing</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Deep Freezers</h5>
                        <p>Energy-efficient deep freezers for long-term preservation of food, medicines, and other
                            perishables.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-1.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 8 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Industrial</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Industrial Deep Freezers</h5>
                        <p>Heavy-duty deep freezers designed for high-capacity storage in industrial and commercial
                            facilities.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise 9 -->
            <div class="col-lg-4 col-md-6 py-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Custom Solutions</small>
                        </div>
                        <h5 class="mb-3 fw-bold text-secondary">Customised Cooling Appliances</h5>
                        <p>Tailor-made cooling systems developed to meet unique.</p>
                    </div>
                    <div class="causes-progress bg-light p-3 pt-2 mb-0 mb-lg-2">
                        <div class="d-flex justify-content-between">
                            <p class="text-dark">10,000 <small class="text-body">Target</small></p>
                            <p class="text-dark">9,542 <small class="text-body">Sales</small></p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/service-3.jpg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Expertise End -->


<!-- Our Core Strengths Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">Our Core Strengths</h6>
                    <h1 class="display-6 mb-0">Expert Cooling Solutions Backed by Industry Trust</h1>
                </div>
                <p class="mb-5">
                    At Seven Star, we specialize in delivering precision-engineered cooling and refrigeration systems 
                    tailored to industrial, commercial, and institutional needs. With a strong commitment to innovation, 
                    quality, and after-sales support, we help clients maintain operational efficiency and sustainability.
                </p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Wide Range of Cooling Products</h6>
                        </div>
                        <span>From chillers and freezers to custom cooling appliances, we cover all industrial requirements.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Decades of Engineering Expertise</h6>
                        </div>
                        <span>Built on over 25 years of hands-on experience in designing efficient cooling systems.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Trusted by Leading Industries</h6>
                        </div>
                        <span>We proudly serve pharmaceutical, food processing, chemical, and manufacturing sectors.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Service-Centric Approach</h6>
                        </div>
                        <span>End-to-end support, AMC contracts, and technical guidance ensure customer satisfaction.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" alt=""
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                        style="width: 200px; height: 200px;">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                            <h1 class="text-white">25</h1>
                            <h2 class="text-white">Years</h2>
                            <h5 class="text-white mb-0">of Excellence</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Core Strengths End -->


<!-- Why Choose Us -->
<div class="container-fluid bg-dark feature pt-5">
    <div class="container pt-0 pt-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
                <h1 class="text-white mb-4">Why Choose Us<br>Seven Star Engineers</h1>
                <p class="text-light mb-4">
                    With over 25 years of excellence, Seven Star Engineers is a trusted name in industrial and commercial cooling systems. We offer turnkey solutions in HVACR design, manufacturing, and project execution, including cold storage, chillers, and custom refrigeration. Our client-first approach, sustainable engineering, and after-sales support set us apart in the cooling industry.
                </p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>End-to-End Cooling & Refrigeration Projects</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Customized Cold Rooms & Walk-in Freezers</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Energy-Efficient, Eco-Friendly Designs</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Dedicated After-Sales & AMC Support</span>
                </div>
                <div class="row g-4 pt-3">
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <div class="d-flex">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">97</h2>
                                    <span class="text-primary ms-1" style="font-size: 1.5rem;">%</span>
                                </div>
                                <p class="text-white mb-0">Happy Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">820</h2>
                                <p class="text-white mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-user-tie fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">40</h2>
                                <p class="text-white mb-0">Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">3</h2>
                                <p class="text-white mb-0">Locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pb-5">
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-cogs fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">In-House Manufacturing</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        All critical components including condenser units, evaporators, and control panels are designed and assembled in-house to ensure reliability and customization for each project.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-snowflake fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Turnkey Cold Chain Expertise</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        From dairy and pharma to warehousing and logistics, we build cold storage systems that meet industry-specific standards, ensuring temperature control and energy savings.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-tools fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">AMC & Maintenance</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        We offer Annual Maintenance Contracts and 24/7 technical support for minimal downtime, extended equipment life, and consistent cooling performance.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.6s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-leaf fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Green & Energy-Smart Systems</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        Our solutions incorporate eco refrigerants, smart automation, and insulated panels that lower carbon footprints while maintaining top-tier cooling efficiency.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-4">We Provide Advanced Cooling Solutions</h1>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/fact-1.jpg" alt="Water Coolers">
                    <div class="service-img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/fact-1.jpg" alt="Water Coolers">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">Processing Water Chillers</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">Stainless steel, rust-free water coolers with top-brand compressors. Capacities from 20 to 400 LPH, ideal for industrial and domestic use.</p>
                        </div>
                    </div>
                    <a class="btn btn-light" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/fact-2.jpg" alt="Water & RO Chillers">
                    <div class="service-img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/fact-2.jpg" alt="Water & RO Chillers">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">Industrial Deep Freezers</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">Energy-efficient water chillers designed for RO systems, processing lines, and industrial cooling requirements.</p>
                        </div>
                    </div>
                    <a class="btn btn-light" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/fact-3.jpg" alt="Deep Freezers & Bottle Coolers">
                    <div class="service-img">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/fact-3.jpg" alt="Deep Freezers & Bottle Coolers">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">Customised Cooling Appliances</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">Reliable deep freezers and bottle coolers with fast cooling, low power consumption, and robust build for heavy-duty use.</p>
                        </div>
                    </div>
                    <a class="btn btn-light" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-dark py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-white">Testimonials</h4>
                <h1 class="display-5 text-white mb-4">What Our Clients Say About Us</h1>
                <p class="text-white mb-4">Here’s what industry experts, plant managers, and project consultants have to say about our precision cooling solutions, service quality, and dedicated team.</p>
                <a class="btn btn-light py-3 px-5" href="#">View All Reviews</a>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.4s">
                <div class="owl-carousel testimonial-carousel">

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-1.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Ajay Kulkarni</h4>
                                <p>Plant Head, Pharma Manufacturing</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">Seven Star provided a state-of-the-art cooling system for our cleanroom facilities. Their team’s technical expertise and commitment to on-time delivery have helped us maintain stringent temperature and humidity control without a hitch.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-2.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Ms. Priya Shah</h4>
                                <p>Project Consultant – Food Processing Unit</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">We required reliable low-temperature storage solutions, and Seven Star delivered beyond expectations. Their refrigeration units are efficient, low-maintenance, and perfectly suited for our operational needs.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-3.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Nilesh Patil</h4>
                                <p>Architect – Industrial Projects</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">Seven Star’s team understands both the technical and aesthetic aspects of HVAC integration. Their designs complement the architecture while ensuring maximum efficiency.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-4.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Ramesh Shetty</h4>
                                <p>Engineering Consultant</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">Their AMC support is top-notch. Seven Star’s service team is proactive, ensuring minimal downtime and smooth operations across our facilities.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-5.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Ms. Kavita Iyer</h4>
                                <p>Operations Manager, Cold Storage Chain</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">Seven Star’s cold storage solutions have drastically reduced our energy consumption while improving cooling performance. The installation was seamless and professionally handled.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-6.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Arvind Menon</h4>
                                <p>Service Head, Manufacturing Plant</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">We trust Seven Star for their deep knowledge of process cooling systems. Their approach to problem-solving and after-sales service is unmatched.</p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                        <div class="testimonial-inner p-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testimonial/sevenstar-7.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Mr. Sandeep Joshi</h4>
                                <p>Industrial Project Manager</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="text-white mb-0">Seven Star delivers exactly what they promise – reliable cooling systems, exceptional service, and a customer-first attitude. Highly recommended for any industrial HVAC project.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Seven Star International Co.</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Have questions about our water coolers, chillers, freezers, or custom cooling appliances? 
                    Here you’ll find answers to some of the most common queries from our customers.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Ask Your Question</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What types of cooling appliances do you manufacture?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We manufacture a wide range of cooling appliances including water coolers, water chillers, RO chillers,
                                    processing water & oil chillers, bottle coolers, deep freezers, industrial deep freezers, and customized
                                    refrigeration systems.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Do you offer customized cooling solutions?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we specialize in designing and manufacturing customized cooling appliances tailored to your specific
                                    requirements — from size and capacity to compressor brand and finish.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: What brands of compressors do you use?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We use only trusted and high-performance compressors from leading brands like Emerson, Tecumseh, Godrej, LG,
                                    and Whirlpool to ensure durability and efficiency.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: What is the warranty period for your products?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Our products come with an 18-month warranty on compressors, along with coverage for manufacturing defects,
                                    ensuring peace of mind and long-term reliability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: Do you provide after-sales service and maintenance?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Absolutely! We offer full after-sales support, including maintenance, spare parts, and AMC contracts to
                                    ensure your cooling systems run efficiently year after year.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->


<!-- Appointment Start -->
<div class="container-fluid py-5 px-5">
    <div class="row gx-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-4">
                <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
            </div>
            <p class="mb-5">
                Looking for expert solutions in Pre-Insulated Ducting, HVAC systems, CNC Fabrication, or Ventilation
                Projects?
                Fill out the form and our team will get in touch to discuss your project and offer the best service and
                pricing options.
            </p>
            <a class="btn btn-primary py-3 px-5" href="<?php echo site_url('/contact'); ?>">Contact Us</a>
        </div>
        <div class="col-lg-8">
            <?php echo do_shortcode('[contact-form-7 id="e3c7d23" title="Contact form 2 - Quote"]'); ?>
        </div>
    </div>
</div>
<!-- Appointment End -->


<?php
// get_sidebar();
get_footer();