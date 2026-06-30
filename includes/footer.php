    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-secondary-custom mb-3 font-playfair"><i class="fa-solid fa-gopuram me-2"></i>Experience Yogyakarta</h5>
                    <p class="text-light-50">Where Tradition Meets Innovation. <?= __('footer_desc', $t) ?></p>
                    <div class="social-icons mt-4">
                        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-2 mb-4 mb-lg-0">
                    <h5 class="mb-3"><?= __('footer_explore', $t) ?></h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="destinations.php"><?= __('nav_destinations', $t) ?></a></li>
                        <li><a href="culture.php"><?= __('nav_culture', $t) ?></a></li>
                        <li><a href="culinary.php"><?= __('nav_culinary', $t) ?></a></li>
                        <li><a href="history.php"><?= __('nav_history', $t) ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-3"><?= __('footer_contact', $t) ?></h5>
                    <ul class="list-unstyled text-light-50">
                        <li class="mb-2"><i class="fa-solid fa-location-dot me-2 text-primary-custom"></i> Jl. Malioboro, Yogyakarta, Indonesia</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope me-2 text-primary-custom"></i> info@experienceyogyakarta.id</li>
                        <li><i class="fa-solid fa-phone me-2 text-primary-custom"></i> +62 274 123456</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4 border-light opacity-25">
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="mb-0 text-light-50"><small>&copy; <?= date('Y') ?> Experience Yogyakarta. All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Main JS -->
    <script>
        $(document).ready(function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });

            // Navbar scroll effect
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#mainNav').addClass('navbar-scrolled');
                } else {
                    $('#mainNav').removeClass('navbar-scrolled');
                }
            });

            // Trigger scroll on load
            $(window).trigger('scroll');
        });
    </script>
</body>
</html>
