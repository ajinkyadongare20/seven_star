<?php
/**
 * The main template file
 * Template Name: Services
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-5">Complete Air Cooling & Refrigeration Solutions</h1>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Precision Engineering</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Reliable After-Sales Support</h5>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4">
                        Seven Star Engineers specializes in advanced cooling systems, commercial refrigeration,
                        industrial HVAC setups, and custom-built air management solutions. We design, fabricate,
                        and install equipment that ensures high efficiency, low maintenance, and long-lasting
                        performance.
                        Our team combines modern technology with proven expertise to serve factories, offices,
                        cold storage units, and retail spaces with unmatched quality and precision.
                    </p>
                    <div class="mt-4 pt-2 border-top">
                        <p class="fw-semibold mb-0">
                            At Seven Star, we don’t just cool spaces — we create comfort, preserve freshness,
                            and deliver solutions you can trust.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Image Grid -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                            src="<?php bloginfo('template_directory'); ?>/img/services/1.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                            src="<?php bloginfo('template_directory'); ?>/img/services/2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                            src="<?php bloginfo('template_directory'); ?>/img/services/3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                            src="<?php bloginfo('template_directory'); ?>/img/services/4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Services Section -->
<div class="container py-5">
    <h1 class="text-start text-lg-center display-6 fw-bold mb-3">Our Product Range</h1>
    <p class="text-start text-lg-center text-muted mb-5">
        Seven Star offers a wide range of high-performance cooling appliances designed for domestic, commercial, and
        industrial needs. From efficient water coolers to heavy-duty industrial chillers, each product is built with
        advanced technology for superior cooling, durability, and energy efficiency.
    </p>

    <div class="row g-4">
        <!-- Water Coolers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-tint text-white"></i>
                </div>
                <h3 class="ssc-service-title">Water Coolers</h3>
                <p>Durable and efficient water coolers for consistent chilled drinking water in offices, schools, and
                    public spaces.</p>
            </div>
        </div>

        <!-- Water Chillers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-snowflake text-white"></i>
                </div>
                <h3 class="ssc-service-title">Water Chillers</h3>
                <p>High-capacity chillers delivering reliable water cooling for industrial and commercial applications.
                </p>
            </div>
        </div>

        <!-- RO Chillers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-filter text-white"></i>
                </div>
                <h3 class="ssc-service-title">RO Chillers</h3>
                <p>Integrated RO purification and chilling systems for safe, pure, and cool drinking water.</p>
            </div>
        </div>

        <!-- Processing Water Chillers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-industry text-white"></i>
                </div>
                <h3 class="ssc-service-title">Processing Water Chillers</h3>
                <p>Engineered for precise temperature control in food, pharma, and chemical processing plants.</p>
            </div>
        </div>

        <!-- Processing Oil Chillers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-oil-can text-white"></i>
                </div>
                <h3 class="ssc-service-title">Processing Oil Chillers</h3>
                <p>Specialized chillers for cooling industrial oils in machinery and manufacturing units.</p>
            </div>
        </div>

        <!-- Bottle Coolers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-wine-bottle text-white"></i>
                </div>
                <h3 class="ssc-service-title">Bottle Coolers</h3>
                <p>Compact cooling solutions for beverages, ideal for restaurants, bars, and retail outlets.</p>
            </div>
        </div>

        <!-- Deep Freezers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-ice-cream text-white"></i>
                </div>
                <h3 class="ssc-service-title">Deep Freezers</h3>
                <p>Reliable freezers designed to preserve food products at low temperatures for longer shelf life.</p>
            </div>
        </div>

        <!-- Industrial Deep Freezers -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-box-open text-white"></i>
                </div>
                <h3 class="ssc-service-title">Industrial Deep Freezers</h3>
                <p>Heavy-duty deep freezers built for large-scale storage needs in industries and cold storage
                    facilities.</p>
            </div>
        </div>

        <!-- Customised Cooling Appliances -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-tools text-white"></i>
                </div>
                <h3 class="ssc-service-title">Customised Cooling Appliances</h3>
                <p>Tailor-made cooling solutions designed to meet unique requirements across industries and sectors.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->


<!-- Why Choose US Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                <h1 class="display-6 mb-4">High-Performance Cooling Solutions You Can Trust</h1>
                <p class="mb-5">
                    Seven Star delivers advanced, reliable, and energy-efficient cooling appliances for residential,
                    commercial, and industrial needs. From water coolers to customised industrial chillers, our
                    solutions are engineered for long-term performance, low maintenance, and superior cooling
                    efficiency.
                </p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Cutting-Edge Technology</h5>
                        </div>
                        <span>Equipped with the latest cooling systems for consistent temperature control and maximum
                            efficiency.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Energy Efficient Designs</h5>
                        </div>
                        <span>Our appliances are optimised to reduce power consumption and operational costs.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Wide Product Range</h5>
                        </div>
                        <span>From compact coolers to industrial-grade chillers, we cater to all capacity
                            requirements.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Custom-Built Solutions</h5>
                        </div>
                        <span>We design and manufacture cooling appliances tailored to specific industrial
                            applications.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/services/why_choose_rr.jpg"
                        alt="Why Choose Seven Star" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3"
                        src="<?php bloginfo('template_directory'); ?>/img/services/wwww.jpg"
                        alt="Seven Star Cooling" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose US End -->


<!-- Why Choose Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Left Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-5">Why Clients Choose Seven Star</h1>
                <p class="mb-5">
                    For decades, Seven Star has been a trusted name in high-performance cooling solutions.
                    We combine advanced engineering, energy efficiency, and robust build quality to deliver
                    appliances that perform reliably in homes, businesses, and demanding industrial environments.
                    Our customer-focused service ensures you get the right cooling solution every time.
                </p>

                <!-- Reason 1 -->
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-snowflake fa-2x text-white"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Advanced Cooling Technology</h5>
                        <span>
                            From energy-efficient compressors to precision temperature control, our products
                            use the latest innovations for maximum performance and durability.
                        </span>
                    </div>
                </div>

                <!-- Reason 2 -->
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-bolt fa-2x text-white"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Energy Efficiency</h5>
                        <span>
                            Our cooling systems are engineered to reduce energy consumption without compromising
                            performance, helping you save on costs while protecting the environment.
                        </span>
                    </div>
                </div>

                <!-- Reason 3 -->
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-cogs fa-2x text-white"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Custom-Built Solutions</h5>
                        <span>
                            Whether you need a compact water cooler or a heavy-duty industrial chiller, we design
                            and deliver customised cooling appliances to fit your exact requirements.
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/services/wwww.jpg"
                        alt="Why Choose Seven Star" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose End -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Seven Star International Co.</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Here are answers to common questions about our cooling appliances and services.
                    From product specifications to after-sales support, we’ve covered everything you
                    need to make an informed choice.
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
                                    Q: What products does Seven Star International Co. offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We manufacture and supply water coolers, water chillers, RO chillers,
                                    processing water and oil chillers, bottle coolers, deep freezers,
                                    industrial deep freezers, and customized cooling appliances.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Can you customize cooling appliances for specific needs?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes. We design and build custom solutions for domestic, commercial,
                                    and industrial applications—tailored to capacity, dimensions, compressor
                                    brand, and finish.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: Which compressor brands do you use?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We use trusted brands like Emerson, Tecumseh, Godrej, LG, and Whirlpool,
                                    ensuring high performance, durability, and energy efficiency.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: What is the warranty on your products?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Our products come with an 18-month compressor warranty and coverage
                                    for manufacturing defects.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: Do you offer after-sales service and maintenance?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we provide complete after-sales support, including repairs,
                                    preventive maintenance, and Annual Maintenance Contracts (AMC).
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q: What industries do you serve?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We cater to residential, commercial, hospitality, manufacturing,
                                    pharmaceuticals, food processing, and more.
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