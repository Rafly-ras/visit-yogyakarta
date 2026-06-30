<?php 
$page_title = "Budaya & Tradisi";
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<header class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=2000&auto=format&fit=crop') center/cover;">
    <div class="container text-center" data-aos="fade-up">
        <span class="text-secondary-custom fw-bold text-uppercase d-block mb-3 tracking-wide">Heritage & Tradition</span>
        <h1 class="display-3 fw-bold mb-4 font-playfair"><?= __('Kekayaan Budaya Yogyakarta', $t) ?></h1>
        <p class="lead mb-4 fw-light opacity-75 max-w-700 mx-auto"><?= __('Menyelami kedalaman filosofi hidup masyarakat Jawa melalui seni, tradisi, dan arsitektur peninggalan Kerajaan Mataram Islam yang masih hidup hingga hari ini.', $t) ?></p>
    </div>
</header>

<!-- Main Culture Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <!-- Kraton -->
        <div class="row align-items-center mb-5 pb-5 border-bottom">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1627997871235-90146ff99ee6?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-4 shadow" alt="Keraton Yogyakarta">
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <h6 class="text-primary-custom fw-bold text-uppercase">Pusat Kebudayaan</h6>
                <h3 class="font-playfair fw-bold display-6 mb-3">Keraton Ngayogyakarta Hadiningrat</h3>
                <p class="text-muted">Bukan sekadar tempat tinggal Sultan, Keraton adalah museum hidup peninggalan budaya Jawa. Dibangun pada tahun 1755 oleh Sri Sultan Hamengkubuwono I, arsitektur Keraton penuh dengan makna filosofis yang melambangkan hubungan manusia dengan Tuhan, alam, dan sesama.</p>
                <ul class="list-unstyled text-muted mt-3">
                    <li class="mb-2"><i class="fa-solid fa-check text-secondary-custom me-2"></i> Tarian klasik keraton pusaka</li>
                    <li class="mb-2"><i class="fa-solid fa-check text-secondary-custom me-2"></i> Abdi dalem dan tradisi kehidupan keraton</li>
                    <li><i class="fa-solid fa-check text-secondary-custom me-2"></i> Koleksi pusaka, keris, dan kereta kencana</li>
                </ul>
            </div>
        </div>

        <!-- Batik & Wayang Kulit -->
        <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1601614945829-9e8c474d2bcf?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-4 shadow" alt="Batik & Wayang">
            </div>
            <div class="col-lg-6 pe-lg-5" data-aos="fade-right">
                <h6 class="text-primary-custom fw-bold text-uppercase">Warisan Dunia UNESCO</h6>
                <h3 class="font-playfair fw-bold display-6 mb-3">Batik & Wayang Kulit</h3>
                <p class="text-muted">Batik Yogyakarta memiliki ciri khas warna latar putih bersih atau coklat gelap, dengan motif geometris (seperti Kawung dan Parang) bermakna luhur. Wayang Kulit, pentas bayangan sakral, digunakan sebagai media dakwah, hiburan, dan pendidikan filosofis berbekal epos Ramayana dan Mahabharata.</p>
            </div>
        </div>

        <!-- Gamelan & Sekaten -->
        <div class="row align-items-center mb-5 pb-5">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-4 shadow" alt="Gamelan & Sekaten">
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <h6 class="text-primary-custom fw-bold text-uppercase">Harmoni Musik & Perayaan</h6>
                <h3 class="font-playfair fw-bold display-6 mb-3">Gamelan & Tradisi Sekaten</h3>
                <p class="text-muted">Orkestra tradisional Jawa yang dimainkan dalam keselarasan (laras Slendro dan Pelog). Gamelan bukan tentang penonjolan individual, melainkan kebersamaan yang terpadu.<br><br>Sekaten merupakan tradisi merayakan Maulid Nabi Muhammad SAW selama seminggu penuh dengan membunyikan dua set gamelan pusaka, disusul acara puncak Grebeg Muludan berupa arak-arakan gunungan hasil bumi.</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-playfair fw-bold">Galeri Budaya</h2>
            <div class="mx-auto bg-primary-custom mt-3 mb-4" style="height: 3px; width: 60px;"></div>
        </div>
        <div class="row g-3">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="0">
                <div class="card bg-dark text-white border-0 overflow-hidden" style="height: 250px;">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=500&auto=format&fit=crop" class="card-img" alt="Gallery 1" style="object-fit: cover; height: 100%; opacity: 0.7; transition: transform 0.5s;">
                    <div class="card-img-overlay d-flex align-items-end">
                        <h5 class="card-title font-playfair mb-0">Tarian Adat</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card bg-dark text-white border-0 overflow-hidden" style="height: 250px;">
                    <img src="https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=500&auto=format&fit=crop" class="card-img" alt="Gallery 2" style="object-fit: cover; height: 100%; opacity: 0.7; transition: transform 0.5s;">
                    <div class="card-img-overlay d-flex align-items-end">
                        <h5 class="card-title font-playfair mb-0">Pementasan Wayang</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card bg-dark text-white border-0 overflow-hidden" style="height: 250px;">
                    <img src="https://images.unsplash.com/photo-1627997871235-90146ff99ee6?q=80&w=500&auto=format&fit=crop" class="card-img" alt="Gallery 3" style="object-fit: cover; height: 100%; opacity: 0.7; transition: transform 0.5s;">
                    <div class="card-img-overlay d-flex align-items-end">
                        <h5 class="card-title font-playfair mb-0">Arsitektur Candi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-white text-center" style="background-color: var(--primary-color);">
    <div class="container py-4" data-aos="fade-up">
        <h2 class="font-playfair fw-bold mb-3">Saksikan Langsung Keindahannya</h2>
        <p class="lead mb-4 fw-light text-white-50">Jelajahi sudut-sudut magis Kota Budaya secara langsung.</p>
        <a href="destinations.php" class="btn btn-outline-light btn-lg rounded-pill px-5">Jelajahi Destinasi Budaya</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
