<?php
/**
 * The main template file
 * Template Name: Bottle Coolers
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Bottle Coolers</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Products</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Bottle Coolers</li>
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
                    <img src="<?php bloginfo('template_directory'); ?>/img/sevenstar_img/product-2.jpg" 
                         class="img-fluid rounded" alt="Bottle Cooler">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-8 col-md-7">
                <span class="badge bg-primary text-uppercase mb-2 px-3 py-2">Seven Star Cooling Solutions</span>
                <h2 class="display-6 fw-bold text-primary mb-3">PREMIUM COOLING FOR BEVERAGE STORAGE</h2>
                <p class="lead mb-2"><strong>Capacity Range:</strong> Custom Sizes Available</p>
                
                <h5 class="text-secondary fw-bold mb-3">Features</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Uniform cooling for all bottles</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Energy-efficient compressor technology</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Adjustable temperature settings</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Low-noise operation</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Durable stainless steel body</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> LED lighting for clear visibility</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Easy-to-clean interiors</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Compact space-saving design</li>
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
            Seven Star Bottle Coolers are designed to deliver consistent and reliable cooling for beverages in commercial and hospitality environments. 
            With robust construction, energy efficiency, and an elegant design, our coolers keep your products fresh, appealing, and ready to serve.
        </p>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Consistent Temperature Control</h5>
                        <p>Ensures beverages are stored at optimal serving temperatures at all times.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Energy Efficiency</h5>
                        <p>Advanced refrigeration components reduce power consumption without compromising performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Premium Build Quality</h5>
                        <p>Durable stainless steel exterior and corrosion-resistant interiors for long-term use.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Customizable Designs</h5>
                        <p>Available in various sizes, configurations, and styles to suit your business needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Easy Maintenance</h5>
                        <p>Quick-access panels and removable shelving for hassle-free cleaning and servicing.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Perfect for Multiple Settings</h5>
                        <p>Ideal for bars, restaurants, cafes, supermarkets, and catering events.</p>
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
                <h4 class="text-primary">FAQs - Bottle Coolers</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Here are answers to common questions about our bottle coolers, 
                    covering storage capacity, cooling performance, maintenance, 
                    and customization features. This will help you select the right 
                    cooler for your commercial or hospitality needs.
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
                                    Q: What is a bottle cooler used for?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Bottle coolers are designed to keep beverages at optimal 
                                    serving temperatures in bars, restaurants, cafes, and events. 
                                    They ensure drinks stay chilled and ready to serve.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: What sizes and capacities are available?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We offer bottle coolers in various sizes, from compact 
                                    under-counter units to large back-bar models, with capacities 
                                    ranging from 50 to over 500 bottles.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: What is the typical cooling range?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Most bottle coolers operate between 2°C and 10°C, ensuring 
                                    beverages remain crisp and refreshing while preventing freezing.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Can the design be customized for branding?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we offer custom branding options including 
                                    decals, colors, and LED lighting to match your business 
                                    theme and increase visual appeal.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: What maintenance is required?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Regular cleaning of condenser coils, checking door seals, 
                                    and verifying thermostat settings every 2–3 months helps ensure 
                                    efficient cooling and longer unit life.
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