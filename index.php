<?php 
$page_title = "Beranda";
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<header class="hero-section">
    <div class="container text-center text-md-start" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <span class="badge text-bg-warning mb-3 px-3 py-2 text-dark fw-bold rounded-pill"><i class="fa-solid fa-star me-1"></i> The Soul of Java</span>
                <h1 class="display-3 fw-bold mb-3"><?= __('hero_title', $t) ?></h1>
                <p class="lead mb-4 fw-light opacity-75"><?= __('hero_subtitle', $t) ?></p>
                <a href="#explore" class="btn btn-primary-custom btn-lg me-3 shadow"><i class="fa-solid fa-compass me-2"></i><?= __('hero_cta', $t) ?></a>
                <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_LINK" class="btn btn-outline-light btn-lg rounded-pill" target="_blank"><i class="fa-solid fa-play me-2"></i>Watch Video</a>
            </div>
        </div>
    </div>
</header>

<!-- Stats/Features Bar -->
<section class="py-4 bg-white shadow-sm position-relative z-1" style="margin-top: -30px; border-radius: 12px; max-width: 90%; margin-left: auto; margin-right: auto;" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="row text-center px-3">
            <div class="col-md-3 col-6 mb-3 mb-md-0 border-end">
                <h3 class="fw-bold text-primary-custom mb-0 font-playfair">1755</h3>
                <p class="text-muted small mb-0">Tahun Berdiri</p>
            </div>
            <div class="col-md-3 col-6 mb-3 mb-md-0 border-end-md">
                <h3 class="fw-bold text-primary-custom mb-0 font-playfair">100+</h3>
                <p class="text-muted small mb-0">Destinasi Unik</p>
            </div>
            <div class="col-md-3 col-6 border-end">
                <h3 class="fw-bold text-primary-custom mb-0 font-playfair">139</h3>
                <p class="text-muted small mb-0">Perguruan Tinggi</p>
            </div>
            <div class="col-md-3 col-6">
                <h3 class="fw-bold text-primary-custom mb-0 font-playfair">24/7</h3>
                <p class="text-muted small mb-0">Budaya Hidup</p>
            </div>
        </div>
    </div>
</section>

<!-- Highlight Destinations -->
<section id="explore" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-secondary-custom fw-bold text-uppercase tracking-wide">Wonderful Indonesia</h6>
            <h2 class="font-playfair fw-bold text-dark display-5"><?= __('section_destinations', $t) ?></h2>
            <div class="mx-auto bg-primary-custom mt-3" style="height: 3px; width: 60px;"></div>
            <p class="text-muted mt-3 max-w-700 mx-auto"><?= __('section_destinations_desc', $t) ?></p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative">
                        <img src="https://images.unsplash.com/photo-1577717903520-22c60c2394c5?w=500&h=350&fit=crop" class="card-img-top" alt="Prambanan">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Budaya & Sejarah</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold h5">Candi Prambanan</h4>
                        <p class="card-text text-muted small">Candi Hindu terbesar di Indonesia yang memiliki legenda Roro Jonggrang yang memikat.</p>
                        <a href="destinations.php" class="text-primary-custom fw-bold text-decoration-none border-bottom border-primary-custom pb-1"><?= __('btn_learn_more', $t) ?> <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative">
                        <img src="https://images.unsplash.com/photo-1596422846543-7ec410425c27?w=500&h=350&fit=crop" class="card-img-top" alt="Malioboro">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Ikon Kota</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold h5">Jalan Malioboro</h4>
                        <p class="card-text text-muted small">Jantung kota Yogyakarta, pusat perbelanjaan, kesenian jalanan, dan kehidupan malam.</p>
                        <a href="destinations.php" class="text-primary-custom fw-bold text-decoration-none border-bottom border-primary-custom pb-1"><?= __('btn_learn_more', $t) ?> <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative">
                        <img src="https://images.unsplash.com/photo-1533201357341-8d79b10dd0f0?w=500&h=350&fit=crop" class="card-img-top" alt="Gudeg">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Kuliner Khas</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold h5">Gudeg Kendil</h4>
                        <p class="card-text text-muted small">Rasakan manisnya nangka muda berpadu dengan krecek pedas dalam warisan kuliner turun temurun.</p>
                        <a href="culinary.php" class="text-primary-custom fw-bold text-decoration-none border-bottom border-primary-custom pb-1"><?= __('btn_learn_more', $t) ?> <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="destinations.php" class="btn btn-outline-custom">Lihat Semua Destinasi</a>
        </div>
    </div>
</section>

<!-- Modern City Crossfade Section -->
<section class="py-5 bg-dark text-white position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(90deg, #1a1a24 40%, rgba(26,26,36,0) 100%), url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2000&auto=format&fit=crop') center right/cover; opacity: 0.8; z-index: 0;"></div>
    
    <div class="container position-relative z-1 py-5 my-5">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="text-secondary-custom fw-bold mb-2 d-block text-uppercase"><i class="fa-solid fa-laptop-code me-2"></i> Inovasi & Masa Depan</span>
                <h2 class="font-playfair display-5 fw-bold mb-4">Kota Pelajar & Ekonomi Kreatif Digital</h2>
                <p class="lead fw-light mb-4 text-light-50">Selain akar budayanya yang kuat, Yogyakarta adalah inkubator bagi talenta muda, startup teknologi, dan komunitas kreatif industri digital Indonesia.</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-primary-custom text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow" style="width: 50px; height: 50px;">
                        <i class="fa-solid fa-wifi"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold">Smart City Initiative</h5>
                        <p class="mb-0 small text-white-50">Infrastruktur publik terintegrasi</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-secondary-custom text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow" style="width: 50px; height: 50px;">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold">Creative Hubs</h5>
                        <p class="mb-0 small text-white-50">Ratusan co-working space & komunitas IT</p>
                    </div>
                </div>
                <a href="modern-city.php" class="btn btn-primary-custom mt-3">Pelajari Potensi Kota</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
