<?php
/**
 * The main template file
 * Template Name: Processing Water Chillers
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Processing Water Chillers</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Products</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Processing Water Chillers</li>
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
                    <img src="<?php bloginfo('template_directory'); ?>/img/sevenstar_img/product-8.jpg" 
                         class="img-fluid rounded" alt="Processing Water Chiller">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-8 col-md-7">
                <span class="badge bg-primary text-uppercase mb-2 px-3 py-2">Seven Star Industrial Chillers</span>
                <h2 class="display-6 fw-bold text-primary mb-3">PRECISION COOLING FOR INDUSTRIAL PROCESSES</h2>
                <p class="lead mb-2"><strong>Capacity Range:</strong> 1 TR – 500 TR</p>
                
                <h5 class="text-secondary fw-bold mb-3">Features</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> High-efficiency refrigeration compressors</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Precision temperature control systems</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Stainless steel heat exchangers for durability</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Low-noise operation</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Energy-efficient condenser designs</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Built for continuous 24/7 operation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Compact modular construction</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Compatible with various industrial processes</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#contact" class="btn btn-primary px-4 py-2 me-2">
                        <i class="bi bi-envelope-fill me-2"></i> Request a Quote
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
            Seven Star Processing Water Chillers are engineered for critical process cooling across industries such as food processing, pharmaceuticals, plastics, chemicals, and manufacturing. 
            Designed for high efficiency and precision temperature control, our chillers ensure reliable operation and consistent product quality in demanding environments.
        </p>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Industrial-Grade Performance</h5>
                        <p>Optimized for continuous duty cycles with heavy-duty components for long operational life.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Precise Temperature Management</h5>
                        <p>Maintains process water temperatures with ±0.5°C accuracy, ensuring consistent output quality.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Energy Efficient Operation</h5>
                        <p>Advanced compressor and condenser designs reduce energy consumption without sacrificing performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Corrosion-Resistant Construction</h5>
                        <p>All wetted parts are made from corrosion-resistant materials to ensure long-term reliability.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Custom-Built Solutions</h5>
                        <p>Designed and built to match your process requirements, space limitations, and cooling capacity needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Wide Application Range</h5>
                        <p>Suitable for plastics, food & beverage, chemical processing, printing, and more.</p>
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
                <h4 class="text-primary">FAQs - Processing Water Chillers</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Here are answers to common questions about our processing water chillers, 
                    covering capacity options, applications, maintenance, and customization 
                    features. This will help you choose the right solution for your industrial 
                    or commercial needs.
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
                                    Q: What is a processing water chiller used for?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Processing water chillers are designed to cool water for industrial 
                                    processes such as plastic molding, chemical manufacturing, food processing, 
                                    and pharmaceutical production, ensuring temperature control for optimal 
                                    efficiency.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: What capacities do you offer?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Our processing water chillers are available in capacities ranging from 
                                    1 TR to over 100 TR, catering to small-scale operations as well as large 
                                    industrial plants.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: What type of cooling systems are available?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We provide both air-cooled and water-cooled processing chillers, 
                                    depending on site conditions, cooling requirements, and energy efficiency goals.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Can the chillers be customized for specific processes?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we can customize capacity, temperature range, control systems, 
                                    compressor type, and construction materials to suit your exact process requirements.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: What is the recommended maintenance schedule?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Preventive maintenance should be performed quarterly, 
                                    including cleaning condensers, checking refrigerant levels, inspecting 
                                    pumps, and testing control systems. This ensures reliable, 
                                    long-term performance.
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