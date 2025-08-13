<?php
/**
 * The main template file
 * Template Name: Blog 5
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Blog 5</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Blog 5</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Details Start  -->
<div class="container pt-5 pb-0 py-lg-5">
    <!-- About the Project Section -->
    <div class="text-start mb-5 wow fadeIn" data-wow-delay="0.1s">
        <img src="<?php bloginfo('template_directory'); ?>/img/blog/5.jpg"
            style="width: 450px; height: 250px; object-fit: cover;" alt="Industrial Freezing Solutions" class="border">
        <h5 class="mt-3 fs-2">About the Topic</h5>
        <p class="mt-4" style="font-size: 16px; line-height: 1.6;">
            In sectors like seafood processing, frozen food manufacturing, and pharmaceutical storage, 
            rapid and reliable freezing is essential to preserve quality and extend product life. 
            At Seven Star International Co., we design and install industrial freezing solutions 
            that combine high-speed cooling, consistent temperature maintenance, and 
            energy efficiency—ensuring products remain fresh from production to delivery.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <h6>Location</h6>
                <p>Worldwide Industrial Installations</p>
            </div>
            <div class="col-md-4">
                <h6>Industry</h6>
                <p>Food Processing & Pharmaceutical Freezing</p>
            </div>
            <div class="col-md-4">
                <h6>Services Provided</h6>
                <p>
                    <span class="badge badge-warning text-white bg-primary">Blast Freezer Installation</span>
                    <span class="badge badge-warning text-white bg-primary">Tunnel & Spiral Freezing Systems</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Business Situation Section -->
    <div class="wow fadeIn" data-wow-delay="0.2s">
        <h5 class="mb-4 fs-2">Business Situation</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Manufacturers in the food and pharmaceutical industries face increasing demand 
            for products with longer shelf life and uncompromised quality. 
            Traditional freezing methods often result in uneven cooling, 
            ice crystallization, and higher operational costs.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Our clients required advanced freezing technology that could deliver rapid temperature drops 
            without damaging the texture, taste, or integrity of their products.
        </p>
    </div>

    <!-- The Solution Section -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4 fs-2">Our Industrial Freezing Approach</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            We engineer our freezing systems using the following principles:
        </p>
        <ul style="font-size: 16px; line-height: 2;">
            <li>Blast freezing technology for ultra-rapid cooling.</li>
            <li>Even airflow distribution for consistent product freezing.</li>
            <li>Energy-efficient compressors to minimize operational costs.</li>
            <li>Advanced temperature monitoring with automated alerts.</li>
            <li>Custom-built solutions to fit varying production capacities.</li>
        </ul>
        <p style="font-size: 16px; line-height: 1.6;">
            This ensures faster processing times, reduced waste, 
            and improved product quality for our clients.
        </p>
    </div>

    <!-- Key Advantages -->
    <div class="wow fadeIn" data-wow-delay="0.4s">
        <h5 class="mb-4 fs-2">Benefits of Our Freezing Solutions</h5>
        <ul style="font-size: 16px; line-height: 2;">
            <li>Preserves product texture, flavor, and nutritional value.</li>
            <li>Reduces freezing time by up to 50% compared to conventional methods.</li>
            <li>Lower energy usage through optimized system design.</li>
            <li>Minimizes waste due to product spoilage.</li>
            <li>Customizable for small-scale and high-capacity operations.</li>
        </ul>
    </div>

    <!-- Client Trust Section -->
    <div class="py-5 wow fadeIn" data-wow-delay="0.5s">
        <h5 class="mb-4 fs-2">Why Clients Choose Our Freezing Systems</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Our freezing solutions are trusted by global leaders in food processing and healthcare 
            because we deliver consistent, high-quality results. Every system is tailored 
            to meet specific product requirements and undergoes rigorous performance testing 
            before installation.
        </p>
    </div>

    <!-- Sustainability Commitment -->
    <div class="wow fadeIn" data-wow-delay="0.6s">
        <h5 class="mb-4 fs-2">Our Green Promise</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            We are committed to reducing environmental impact by incorporating 
            eco-friendly refrigerants, optimizing energy use, and extending the lifespan 
            of our freezing systems—helping clients meet their sustainability goals 
            while maintaining premium product quality.
        </p>
    </div>
</div>
<!-- Blog Details End  -->


<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize text-primary mb-3 py-3">Blog & News</h1>
            <p class="mb-0">
                Stay updated with Seven Star's latest insights on project excellence, construction trends, technology
                innovations, and sustainable infrastructure solutions.
            </p>
        </div>

        <div class="row g-4">
            <!-- Blog Post 1 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/blog/1.jpg"
                            class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">30 Dec 2025</div>
                        <div class="blog-comment my-3 d-flex justify-content-between">
                            <div class="small">
                                <span class="fa fa-user text-primary"></span>
                                <span class="ms-2">Seven Star Editorial</span>
                            </div>
                            <div class="small">
                                <span class="fa fa-comment-alt text-primary"></span>
                                <span class="ms-2">3 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">7 Key Factors in Successful Turnkey Project Execution</a>
                        <p class="mb-3">
                            From planning to handover, discover how Seven Star ensures precision, quality, and client
                            satisfaction in every turnkey project we deliver.
                        </p>
                        <a href="<?php echo site_url('/blog-1'); ?>" class="btn btn-primary">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/blog/2.jpg"
                            class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">25 Dec 2025</div>
                        <div class="blog-comment my-3 d-flex justify-content-between">
                            <div class="small">
                                <span class="fa fa-user text-primary"></span>
                                <span class="ms-2">Seven Star Editorial</span>
                            </div>
                            <div class="small">
                                <span class="fa fa-comment-alt text-primary"></span>
                                <span class="ms-2">5 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Modern Trends in Commercial Building Interiors</a>
                        <p class="mb-3">
                            Explore the latest design trends that combine functionality, aesthetics, and sustainability
                            for next-generation commercial spaces.
                        </p>
                        <a href="<?php echo site_url('/blog-2'); ?>" class="btn btn-primary">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/blog/3.jpg"
                            class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">27 Dec 2025</div>
                        <div class="blog-comment my-3 d-flex justify-content-between">
                            <div class="small">
                                <span class="fa fa-user text-primary"></span>
                                <span class="ms-2">Seven Star Editorial</span>
                            </div>
                            <div class="small">
                                <span class="fa fa-comment-alt text-primary"></span>
                                <span class="ms-2">4 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">How Technology is Transforming the Construction Industry</a>
                        <p class="mb-3">
                            Learn how Seven Star integrates BIM, IoT, and smart monitoring systems to improve
                            efficiency, safety, and accuracy in construction projects.
                        </p>
                        <a href="<?php echo site_url('/blog-3'); ?>" class="btn btn-primary">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/blog/4.jpg"
                            class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">22 Dec 2025</div>
                        <div class="blog-comment my-3 d-flex justify-content-between">
                            <div class="small">
                                <span class="fa fa-user text-primary"></span>
                                <span class="ms-2">Seven Star Editorial</span>
                            </div>
                            <div class="small">
                                <span class="fa fa-comment-alt text-primary"></span>
                                <span class="ms-2">2 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Sustainable Building Materials for a Greener Future</a>
                        <p class="mb-3">
                            Discover how eco-friendly materials and innovative design choices can reduce environmental
                            impact without compromising quality.
                        </p>
                        <a href="<?php echo site_url('/blog-4'); ?>" class="btn btn-primary">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 5 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/blog/5.jpg"
                            class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">18 Dec 2025</div>
                        <div class="blog-comment my-3 d-flex justify-content-between">
                            <div class="small">
                                <span class="fa fa-user text-primary"></span>
                                <span class="ms-2">Seven Star Editorial</span>
                            </div>
                            <div class="small">
                                <span class="fa fa-comment-alt text-primary"></span>
                                <span class="ms-2">7 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Project Management Best Practices for Large-Scale Builds</a>
                        <p class="mb-3">
                            Effective project management is the backbone of timely delivery. Here’s how Seven Star
                            handles large-scale projects with precision.
                        </p>
                        <a href="<?php echo site_url('/blog-5'); ?>" class="btn btn-primary">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 6 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/blog/6.jpg"
                            class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">15 Dec 2025</div>
                        <div class="blog-comment my-3 d-flex justify-content-between">
                            <div class="small">
                                <span class="fa fa-user text-primary"></span>
                                <span class="ms-2">Seven Star Editorial</span>
                            </div>
                            <div class="small">
                                <span class="fa fa-comment-alt text-primary"></span>
                                <span class="ms-2">4 Comments</span>
                            </div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Smart Infrastructure: Building Cities for Tomorrow</a>
                        <p class="mb-3">
                            Learn how Seven Star is contributing to future-ready cities through smart infrastructure
                            planning and sustainable urban development.
                        </p>
                        <a href="<?php echo site_url('/blog-6'); ?>" class="btn btn-primary">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <!-- FAQ Intro -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Seven Star International Co.</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Have questions about our products or services? Here are detailed answers to the most common
                    queries from our customers — covering everything from product ranges to customization,
                    warranties, and support.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Ask Your Question</a>
            </div>

            <!-- FAQ Accordion -->
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionExample">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What types of products does Seven Star International Co. offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We offer a wide range of cooling appliances, including water coolers,
                                    water chillers, RO chillers, process water and oil chillers, bottle coolers,
                                    deep freezers, industrial deep freezers, and tailor-made cooling systems.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Do you provide custom-built cooling appliances?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Absolutely. We design and build custom cooling solutions for domestic,
                                    commercial, and industrial use, tailored to capacity, dimensions, compressor
                                    brand, finish, and other requirements.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: Which compressor brands do you use in your products?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We use premium compressor brands like Emerson, Tecumseh, Godrej, LG,
                                    and Whirlpool to ensure reliability, durability, and top-notch performance.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: What kind of warranty do you provide?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: All our products come with an 18-month compressor warranty along with
                                    coverage for any manufacturing defects.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: Do you offer after-sales service and maintenance support?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes. We provide complete after-sales services, including repairs,
                                    preventive maintenance, and comprehensive Annual Maintenance Contracts (AMC).
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q: What industries and sectors do you serve?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Our products are used across residential, commercial, hospitality,
                                    manufacturing, pharmaceutical, food processing, and various other sectors.
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