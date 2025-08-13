<?php
/**
 * The main template file
 * Template Name: Water Chillers
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Water Chillers</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Products</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Water Chillers</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Section -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Product Image -->
            <div class="col-lg-4 col-md-5 text-center">
                <div class="p-3 bg-white rounded shadow-sm border">
                    <img src="<?php bloginfo('template_directory'); ?>/img/sevenstar_img/product-6.jpg" 
                         class="img-fluid rounded" alt="Water Chiller">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-8 col-md-7">
                <span class="badge bg-primary text-uppercase mb-2 px-3 py-2">Seven Star Water Chillers</span>
                <h2 class="display-6 fw-bold text-primary mb-3">HIGH-EFFICIENCY CHILLER SYSTEM</h2>
                <p class="lead mb-2"><strong>Capacity Range:</strong> 1 – 50 TR</p>
                
                <h5 class="text-secondary fw-bold mb-3">Features</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Energy-efficient compressor technology</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> High-capacity heat exchangers</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Environmentally friendly refrigerants</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Precision temperature control for consistent performance</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Durable weatherproof casing</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Low noise operation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Easy installation and maintenance</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Long service life with reliable components</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#contact" class="btn btn-primary px-4 py-2 me-2">
                        <i class="bi bi-envelope-fill me-2"></i> Get In Touch
                    </a>
                    <a href="#brochure" class="btn btn-primary px-4 py-2">
                        <i class="bi bi-download me-2"></i> Download Brochure
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overview Section -->
<div class="container-fluid py-5">
    <div class="container">
        <h3 class="fw-bold text-primary mb-4">Overview</h3>
        <p class="mb-4">
            Seven Star’s water chillers are engineered for high-performance cooling in both commercial and industrial applications. 
            Designed with advanced technology, they deliver maximum efficiency and reliability under demanding conditions.
        </p>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Advanced Cooling Technology</h5>
                        <p>Utilises modern compressor and heat exchanger designs for rapid temperature control and stable performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Key Capabilities</h5>
                        <ul class="mb-0">
                            <li>Customisable capacity configurations</li>
                            <li>Efficient operation with reduced energy consumption</li>
                            <li>Compliance with environmental and safety standards</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Industrial-Grade Durability</h5>
                        <p>Built with robust materials and designed for continuous operation in challenging environments.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Client-Centric Solutions</h5>
                        <p>We tailor chiller systems to meet specific client needs, ensuring peak performance and cost savings.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Low Maintenance Design</h5>
                        <p>Engineered for easy serviceability with accessible components, reducing downtime and service costs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Versatile Applications</h5>
                        <p>Suitable for industrial processing, commercial facilities, and custom cooling projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Water Chillers</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Get answers to common questions about our water chillers, including specifications,
                    operation, maintenance, and customization options, to help you choose the ideal system for your needs.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Ask Your Question</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionExample">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What is a water chiller and how does it work?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: A water chiller removes heat from water via a refrigeration cycle and circulates chilled water to cool processes or spaces.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: What types of water chillers do you offer?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We offer both air-cooled and water-cooled chillers, available in various capacities to suit industrial, commercial, and institutional applications.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: How do I determine the right chiller size for my needs?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Chiller size depends on your cooling load, process requirements, ambient temperature, and desired water temperature. Our team can help with accurate sizing.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Are your water chillers energy-efficient?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, our chillers feature high-efficiency compressors, optimized heat exchangers, and smart controls to reduce energy usage.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: What is the lifespan of a water chiller?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: With regular maintenance, water-cooled chillers last 15–20 years and air-cooled models last 10–15 years.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q: What maintenance do water chillers require?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Regular tube cleaning, water quality checks, refrigerant inspection, and system performance monitoring are recommended every 6–12 months.
                                </div>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Q: Can water chillers operate in extreme climates?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we provide models with special design features to operate in very hot or cold environments.
                                </div>
                            </div>
                        </div>

                        <!-- Q8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Q: Do you provide installation and after-sales support?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we offer professional installation, training, warranty service, and AMC packages for long-term reliability.
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