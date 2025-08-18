<?php
/**
 * The main template file
 * Template Name: About
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
        <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Start Overview Section -->
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h2 class="section-title">Company Overview</h2>
            <div class="card overview-card animate-on-scroll">
                <div class="card-header">
                    <h3 class="text-light mb-0"><i class="fas fa-building me-2"></i>About Seven Star International Co.
                    </h3>
                </div>
                <div class="card-body">
                    <p>Seven Star International Co. is a leading name in the HVAC and MEP industry, delivering reliable,
                        high-performance solutions for cooling, ventilation, and cleanroom requirements. With a strong
                        presence across India and overseas, we are known for our commitment to innovation, precision
                        engineering, and exceptional customer service.</p>

                    <p>Our expertise spans HVAC projects, electrical systems, fire-fighting installations, modular
                        cleanroom setups, and complete turnkey executions. Whether it’s a commercial, industrial, or
                        specialized environment, we provide customized designs that ensure efficiency, safety, and
                        long-term performance.</p>

                    <p>Equipped with modern tools, advanced fabrication facilities, and a highly skilled workforce, we
                        manage projects from design and supply to installation and commissioning — all under one roof.
                        Our approach integrates technical excellence with strict adherence to quality standards and
                        deadlines.</p>

                    <p>We proudly serve industries such as pharmaceuticals, healthcare, manufacturing, hospitality, and
                        data centers. Each project is executed with a focus on sustainability, energy efficiency, and
                        compliance with international norms.</p>

                    <p>At Seven Star International Co., our mission is simple — to deliver integrated, high-quality
                        engineering solutions that exceed client expectations.</p>

                    <div class="tagline animate-on-scroll">
                        <i class="fas fa-quote-left me-2"></i>Engineering Comfort, Ensuring Quality.<i
                            class="fas fa-quote-right ms-2"></i>
                    </div>
                    <div class="tagline animate-on-scroll">
                        <i class="fas fa-quote-left me-2"></i>From Concept to Commissioning — We Deliver.<i
                            class="fas fa-quote-right ms-2"></i>
                    </div>
                    <div class="tagline animate-on-scroll">
                        <i class="fas fa-quote-left me-2"></i>Innovating for a Better, Cooler Tomorrow.<i
                            class="fas fa-quote-right ms-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Overview Section -->


<!-- Start History Section -->
<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card history-card animate-on-scroll">
                <div class="card-header">
                    <h3 class="text-light mb-0"><i class="fas fa-history me-2"></i>The Seven Star International Co.
                        Journey</h3>
                </div>
                <div class="card-body">
                    <p>Seven Star International Co. began with a vision to provide world-class HVAC, MEP, and turnkey
                        engineering solutions that combine technical precision with customer-focused service. What
                        started as a small, dedicated team has grown into a trusted partner for industries across India
                        and abroad.</p>

                    <p>From our early days, we placed a strong emphasis on adopting advanced technology, modern tools,
                        and best industry practices. This forward-thinking approach allowed us to successfully execute
                        complex, large-scale projects in pharmaceuticals, cleanrooms, commercial buildings, and
                        industrial facilities — each with stringent performance and compliance requirements.</p>

                    <p>Our breakthrough came with the successful delivery of multi-site HVAC projects for high-profile
                        clients, where our ability to integrate design, supply, installation, and commissioning set us
                        apart. These achievements helped us move from being a local contractor to a global engineering
                        solutions provider.</p>

                    <p>In 2016, we upgraded our capabilities by introducing automated fabrication processes, improving
                        efficiency, precision, and scalability. This investment in technology reinforced our commitment
                        to delivering projects that meet the highest quality and safety standards.</p>

                    <p>By 2019, we expanded internationally, offering project supervision, on-site execution teams, and
                        training services to help overseas clients maintain uniform quality and compliance.</p>

                    <p>During the global pandemic, we played a crucial role in supporting essential infrastructure —
                        completing HVAC and ventilation works for hospitals, pharma units, and cleanroom facilities
                        without delays, while ensuring maximum safety for our workforce.</p>

                    <p>Today, Seven Star International Co. stands as a symbol of reliability, innovation, and
                        engineering excellence. Our vision is to continue expanding into sectors such as data centers,
                        modular infrastructure, green buildings, and sustainable HVAC solutions.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End History Section -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container py-0 py-lg-5">
        <div class="row g-5">
            <!-- Image Section -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5"
                        src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg"
                        alt="Seven Star International Co. Cooling Solutions" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                        src="<?php bloginfo('template_directory'); ?>/img/service-1.jpg"
                        alt="Seven Star International Co. Team" style="width: 200px; height: 200px;">
                </div>
            </div>

            <!-- Content Section -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill text-secondary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-3">Your Trusted Partner in Cooling Solutions</h1>

                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">
                            At Seven Star International Co., we pride ourselves on delivering premium-quality cooling
                            appliances with a focus on innovation, durability, and complete customer satisfaction.
                        </p>
                        <span class="text-primary">Mr. [Founder Name], Founder & General Manager</span>
                    </div>

                    <p class="mb-5">
                        Based in Nashik, Maharashtra, we are a trusted name in the cooling appliance industry, offering
                        a wide range of high-performance solutions including water coolers, water chillers, RO chillers,
                        processing water chillers, oil chillers, bottle coolers, deep freezers, and custom-built
                        industrial refrigeration systems.
                        <br><br>
                        Our products are built with <strong>top-brand compressors</strong> from Emerson, Tecumseh,
                        Godrej, LG, and Whirlpool, ensuring unmatched performance and long-term reliability. Capacities
                        range from 20 liters to 400 liters per hour to meet both domestic and industrial requirements.
                        <br><br>
                        With stylish modular designs, rust-free base plates, and silver-coated components, our
                        appliances combine aesthetics with hygiene. Every unit comes with an <strong>18-month compressor
                            warranty</strong> and is backed by dedicated after-sales service and maintenance.
                    </p>

                    <a class="btn btn-primary py-2 px-3 me-3" href="about.html">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary text-dark border-secondary mt-3 mt-lg-0 py-2 px-3" href="contact.html">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white border-1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Our Mission, Vision, Values Start -->
<div class="container-xxl bg-light py-5">
    <div class="container py-2 py-lg-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">Our Mission, Vision & Core Values</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Mission -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Mission</small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3">Delivering Cooling Excellence</h5>
                            <p>Our mission is to design, manufacture, and deliver high-performance cooling solutions
                                that meet diverse domestic and industrial requirements. We aim to enhance comfort,
                                improve operational efficiency, and provide unmatched reliability through precision
                                engineering and advanced technology. Every product we create reflects our dedication to
                                sustainable practices, uncompromising quality, and personalized customer service. By
                                focusing on innovation and trust.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vision -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Vision</small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3">Leading the Cooling Industry</h5>
                            <p>Our vision is to be recognized as a global leader in the cooling appliance industry by
                                setting new benchmarks for product quality, energy efficiency, and customer
                                satisfaction. We aim to continuously expand our portfolio with innovative and customized
                                solutions for homes, businesses, and industries. By leveraging advanced technology,
                                trusted component brands, and sustainable designs, we seek to build a reputation for
                                excellence that inspires trust, fosters growth, and drives the future of cooling
                                solutions worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Core Values -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Core Values</small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3">What Drives Us</h5>
                            <p>Our core values define who we are and how we work. We operate with integrity, always
                                putting honesty and transparency first. We uphold quality as a non-negotiable standard,
                                ensuring every product meets rigorous performance and safety benchmarks. Innovation
                                drives our designs, enabling us to offer solutions that are efficient and future-ready.
                                We believe in strong customer relationships, ethical practices, and continuous
                                improvement — values that guide every project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Mission, Vision, Values End -->


<!-- Team Start -->
<div class="container-fluid bg-light py-2 py-lg-5">
    <div class="container pb-5">
        <div class="d-flex flex-column mx-auto text-start text-lg-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-secondary">Our Team</h4>
            <h1 class="display-6 mb-4">The Skilled Minds Powering Seven Star International Co.</h1>
            <p class="mb-0">Our team at Seven Star International Co. brings together decades of expertise in cooling 
                solutions, refrigeration systems, and engineering innovation. Each member is dedicated to delivering 
                excellence, ensuring precision in manufacturing, and maintaining our strong reputation for quality 
                and reliability worldwide.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" alt="CEO - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Founder & CEO</small>
                        <h4 class="lh-base text-light">Mohammed Rashid</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg" alt="Technical Director - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Technical Director</small>
                        <h4 class="lh-base text-light">Ahmed Khan</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg" alt="Production Manager - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Production Manager</small>
                        <h4 class="lh-base text-light">Sarah Ali</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" alt="Sales & Marketing Head - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Sales & Marketing Head</small>
                        <h4 class="lh-base text-light">Zara Mehmood</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Seven Star International Co.</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Have questions about our water coolers, chillers, freezers, or custom cooling appliances?
                    Here you’ll find detailed answers to the most common queries we receive from our customers,
                    helping you make informed decisions about our products and services.
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
                                    Q: What types of cooling appliances do you manufacture?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We produce a comprehensive range of cooling appliances to meet both domestic and
                                    industrial needs.
                                    Our lineup includes water coolers, water chillers, RO chillers, processing water and
                                    oil chillers,
                                    bottle coolers, deep freezers, industrial deep freezers, and fully customized
                                    refrigeration systems.
                                    Each unit is built with high-quality materials, advanced technology, and a focus on
                                    performance,
                                    durability, and energy efficiency, ensuring that every customer receives the ideal
                                    solution for
                                    their specific application.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
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
                                    A: Yes, customization is one of our core strengths. We work closely with clients to
                                    design and
                                    manufacture cooling appliances that match their exact requirements. From selecting
                                    the right
                                    cooling capacity and compressor brand to choosing the external finish and
                                    dimensions,
                                    we ensure every detail is tailored to your needs. Whether for specialized industrial
                                    processes
                                    or unique domestic applications, our team delivers precision-engineered solutions
                                    that
                                    combine functionality, efficiency, and long-term reliability.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
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
                                    A: We prioritize performance and reliability by using compressors from trusted
                                    global brands
                                    such as Emerson, Tecumseh, Godrej, LG, and Whirlpool. These brands are known for
                                    their
                                    consistent quality, energy efficiency, and long operational life. By partnering with
                                    established manufacturers, we ensure our cooling systems run smoothly under diverse
                                    conditions, deliver consistent results, and require minimal maintenance over time —
                                    offering our clients excellent value and peace of mind.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
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
                                    A: All our products come with an 18-month warranty on compressors and coverage for
                                    manufacturing
                                    defects. This warranty is our assurance of quality and reliability, giving you
                                    confidence in
                                    your purchase. We stand by our engineering and materials, and our dedicated service
                                    team is
                                    always available to resolve any issues promptly. Our goal is to ensure that every
                                    unit delivers
                                    consistent performance and value throughout its lifespan.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
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
                                    A: Absolutely. We offer comprehensive after-sales support, including routine
                                    maintenance,
                                    repair services, and Annual Maintenance Contracts (AMC) to keep your cooling systems
                                    operating at peak performance. Our trained technicians use genuine spare parts and
                                    follow industry best practices to ensure long-term efficiency and reliability.
                                    Whether it’s troubleshooting, preventive care, or performance upgrades, our
                                    support team is committed to keeping your equipment running smoothly year after
                                    year.
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