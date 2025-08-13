<?php
/**
 * The main template file
 * Template Name: Customised Cooling Appliances
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Customised Cooling Appliances</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Products</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Customised Cooling Appliances</li>
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
                    <img src="<?php bloginfo('template_directory'); ?>/img/sevenstar_img/product-5.jpg" 
                         class="img-fluid rounded" alt="Customised Cooling Appliances">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-8 col-md-7">
                <span class="badge bg-primary text-uppercase mb-2 px-3 py-2">Seven Star Cooling Solutions</span>
                <h2 class="display-6 fw-bold text-primary mb-3">TAILORED COOLING SOLUTIONS FOR UNIQUE NEEDS</h2>
                <p class="lead mb-2"><strong>Capacity Range:</strong> Fully customizable – from compact units to industrial-scale systems</p>
                
                <h5 class="text-secondary fw-bold mb-3">Features</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Custom temperature ranges from +10°C to -60°C</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Bespoke designs to fit specific spaces</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Choice of refrigeration technology</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Energy-efficient and eco-friendly refrigerants</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Industry-specific hygiene and safety compliance</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Durable materials for long-term reliability</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Flexible interior layouts</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Remote temperature monitoring options</li>
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
            Seven Star Customised Cooling Appliances are designed to meet the exact requirements of businesses across diverse industries. 
            Whether you need compact storage for a specialty kitchen or a large-scale cooling system for industrial operations, our team engineers solutions that perfectly fit your operational and spatial needs.
        </p>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Tailored Performance</h5>
                        <p>Engineered for your exact temperature, size, and operational requirements.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Space-Optimized Design</h5>
                        <p>Custom dimensions to maximize storage without wasting valuable space.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Industry-Specific Compliance</h5>
                        <p>Built to meet hygiene, safety, and efficiency standards for your sector.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Advanced Technology Options</h5>
                        <p>Choice of compressor, insulation, and refrigerant systems for performance tuning.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Long-Term Reliability</h5>
                        <p>Heavy-duty build ensures durability in continuous-use environments.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Versatile Applications</h5>
                        <p>Ideal for hospitality, food processing, pharmaceuticals, and more.</p>
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
                <h4 class="text-primary">FAQs - Customized Cooling Appliances</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Here are answers to common questions about our customized cooling appliances, 
                    covering design flexibility, performance specifications, energy efficiency, and 
                    application-specific adaptations. This will help you choose the right tailor-made 
                    solution for industrial, commercial, or specialized cooling needs.
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
                                    Q: What are customized cooling appliances?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Customized cooling appliances are refrigeration or cooling units 
                                    specifically designed and built to match your operational requirements, 
                                    including temperature range, storage capacity, layout, and special features. 
                                    They are ideal for unique industrial, commercial, or scientific applications.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: What customization options are available?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Options include size and capacity adjustments, temperature 
                                    control precision, shelving configurations, energy-efficient 
                                    components, mobility features, automation, and integration 
                                    with monitoring systems.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: What temperature ranges can be supported?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Depending on the application, we can design appliances 
                                    for chilled storage (+2°C to +8°C), frozen storage (-18°C to -40°C), 
                                    or ultra-low temperature environments down to -86°C.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Are these appliances energy-efficient?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we prioritize energy-efficient design by using advanced 
                                    compressors, high-grade insulation, and smart control systems to 
                                    reduce operating costs and environmental impact.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: How long does it take to build a custom cooling appliance?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Production timelines depend on the complexity of the design 
                                    and required features, but most customized units are built and 
                                    delivered within 4–10 weeks after final design approval.
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