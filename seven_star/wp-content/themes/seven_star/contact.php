<?php
/**
 * The main template file
 * Template Name: Contact
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="mx-auto text-center">
            <h1 class="mb-4 mb-md-5">Connect with Seven Star International Co.</h1>
        </div>
        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                        <div class="py-2">
                            <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">
                                Seven Star International Co.
                            </div>

                            <h5 class="mt-4">Email:</h5>
                            <p>esquire.sales4u@gmail.com</p>

                            <h5 class="mt-4">Phone:</h5>
                            <p>+91 9881195810 / +91 9527969822</p>

                            <h5 class="mt-4">Office Address:</h5>
                            <p>
                                Seven Star International Co.,<br>
                                Nashik City, Nashik – 422001,<br>
                                Maharashtra, India
                            </p>

                            <h5 class="mt-4">Social Media:</h5>
                            <p>Follow us for updates, projects & industry insights:</p>
                            <div class="d-flex gap-3">
                                <a class="btn btn-outline-primary rounded-pill"
                                    href="https://www.linkedin.com/company/seven-star-international-co"
                                    target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-outline-primary rounded-pill"
                                    href="https://www.facebook.com/sevenstarintl" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary rounded-pill" href="https://www.instagram.com/sevenstarintl"
                                    target="_blank"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary rounded-pill" href="https://wa.me/919881195810"
                                    target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-outline-primary rounded-pill" href="https://www.youtube.com/@sevenstarintl"
                                    target="_blank"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-primary rounded-pill" href="https://x.com/sevenstarintl"
                                    target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="8395a11" title="Contact form 1 - Contact"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Contact Image and Map Start -->
<div class="container-fluid bg-white py-5">
    <div class="container d-flex flex-column flex-lg-row gap-4 align-items-stretch">
        <!-- Left: Building Image -->
        <div class="w-100 w-lg-50" style="flex: 1;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ctc_contact.jpg" alt="RR Engineers Building"
                style="height: 500px; width: 100%; object-fit: Contain;" />
        </div>

        <!-- Right: Map -->
        <div class="w-100 w-lg-50" style="flex: 1;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.361586727012!2d73.7988894739367!3d18.557730168040596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf25dad97d9b%3A0xe83365026b840a22!2sShree%20Ganesh%20Vastu%20Apartments!5e0!3m2!1sen!2sin!4v1753610309542!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
<!-- Contact Image and Map End -->

<?php
// get_sidebar();
get_footer();