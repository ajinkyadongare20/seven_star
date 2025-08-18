<?php
/**
 * The main template file
 * Template Name: Career
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Career</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Career</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Careers Start -->
<div class="container-fluid careers py-5">
    <div class="container py-5">
        <div class="d-flex flex-column mx-auto text-start text-lg-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-secondary">Careers at Seven Star International Co.</h4>
            <h1 class="display-6 mb-4">Join Our Cooling Solutions Team</h1>
            <p class="mb-0">At Seven Star, we design and manufacture cutting-edge cooling appliances for domestic and industrial needs. If you’re passionate about innovation, quality, and client satisfaction, we’d love to have you on board.</p>
        </div>
        <div class="row g-4">

            <!-- Cooling Appliance Production Supervisor -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-1.jpg"
                            class="career-img-fluid w-100" alt="Cooling Appliance Production Supervisor">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Cooling Appliance Production Supervisor</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Nashik, Maharashtra</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Oversee daily manufacturing of water coolers, chillers, and deep freezers. Requires 3–6 years of production management experience in cooling appliance or HVAC manufacturing.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Cooling Appliance Production Supervisor">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Service & Maintenance Engineer -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-2.jpg"
                            class="career-img-fluid w-100" alt="Service & Maintenance Engineer">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Service & Maintenance Engineer</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Maharashtra / Pan India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Responsible for on-site installation, troubleshooting, and maintenance of water chillers and refrigeration units. 4+ years of field experience preferred.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Service & Maintenance Engineer">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Quality Control Inspector -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-3.jpg"
                            class="career-img-fluid w-100" alt="Quality Control Inspector">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Quality Control Inspector</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Nashik, Maharashtra</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Inspect cooling appliances during and after production to ensure compliance with Seven Star’s quality standards. Experience in ISO quality systems is a plus.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Quality Control Inspector">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Procurement & Logistics Coordinator -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-1.jpg"
                            class="career-img-fluid w-100" alt="Procurement & Logistics Coordinator">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Procurement & Logistics Coordinator</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Nashik Office</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Manage vendor orders, track deliveries, and coordinate logistics for raw materials and finished goods. 2–5 years relevant experience preferred.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Procurement & Logistics Coordinator">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Sales & Marketing Executive -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-2.jpg"
                            class="career-img-fluid w-100" alt="Sales & Marketing Executive">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Sales & Marketing Executive</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Maharashtra / Pan India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Promote Seven Star’s range of water coolers, chillers, and deep freezers. Strong communication skills and ability to achieve sales targets required.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Sales & Marketing Executive">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Refrigeration Technician -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-3.jpg"
                            class="career-img-fluid w-100" alt="Refrigeration Technician">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Refrigeration Technician</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Maharashtra</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Install and repair refrigeration systems, including custom chillers and freezers. Minimum 2 years hands-on experience required.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Refrigeration Technician">Apply Now</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Careers End -->


<!-- Application Modal Start -->
<div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="applicationModalLabel">Apply for Position</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <?php echo do_shortcode('[contact-form-7 id="faf7d2f" title="Contact form 1 - Career"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Application Modal End -->


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