<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seven_star
 */

?>

<!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-5 px-5">
    <div class="row g-5 py-4">
        <div class="col-lg-6 pe-lg-5">
            <a href="<?php echo site_url('/index'); ?>" class="navbar-brand d-flex align-items-center mx-auto">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_seven_star.png" alt="Seven Star Logo"
                    style="height: 100px;">
            </a>
            <p class="text-white">Seven Star International Co., we take pride in being one of the most trusted names in the cooling appliance industry. With a commitment to quality, innovation, and customer satisfaction, we specialize in manufacturing and supplying a wide range of high-performance cooling solutions tailored to both domestic and industrial needs.</p>
            <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i>Nashik – 420003, Maharashtra, India</p>
            <p class="text-white"><i class="fa fa-phone-alt me-2"></i>+91-9881195810</p>
            <p class="text-white"><i class="fa fa-envelope me-2"></i>esquire.sales4u@gmail.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.facebook.com/sevenstarengg" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.youtube.com/channel/sevenstarengg" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2"
                    href="https://www.linkedin.com/company/sevenstarengg/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="https://x.com/sevenstarengg"
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
            <div class="row g-5">
                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Cleanroom Solutions</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>MEP Installations</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Our Expertise</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>HVAC Projects</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Electrical Solutions</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Fire Fighting Systems</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Modular Cleanrooms</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Turnkey Execution</a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 20px 30px;"
                                placeholder="Your Email Address">
                            <button class="btn btn-primary px-4">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="py-4 px-5 text-center text-md-start">
            <p class="mb-0"> <a class="text-white" href="#">&copy; Seven Star Air Conditioning & Engineers</a>. All Rights Reserved.</p>
        </div>
        <div class="py-4 px-5 bg-secondary footer-shape position-relative text-center text-md-end">
            <p class="mb-0">Designed by <a class="text-dark" href="https://lealsolution.com/" target="_blank">Leal Software Solution Pvt Ltd</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- CounterUp JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>