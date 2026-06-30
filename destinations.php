<?php 
$page_title = "Destinasi Wisata";
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<header class="hero-section" style="height: 60vh; min-height: 400px; background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=2000&auto=format&fit=crop') center/cover;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-3 font-playfair"><?= __('Eksplorasi Destinasi', $t) ?></h1>
        <p class="lead fw-light text-white-50 mx-auto" style="max-width: 600px;"><?= __('Temukan keajaiban alam, peninggalan bersejarah, dan tempat nongkrong asik dalam satu kota.', $t) ?></p>
    </div>
</header>

<section class="py-5 bg-white">
    <div class="container pb-5">
        
        <!-- Filter and Search -->
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card shadow-sm border-0 rounded-pill p-2 filter-bar bg-white">
                    <div class="d-flex align-items-center">
                        <div class="input-group border-0 px-2 ms-2 me-2">
                            <span class="input-group-text bg-white border-0 text-muted"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" id="searchInput" class="form-control border-0 shadow-none ps-0" placeholder="Cari destinasi... (misal: Prambanan)">
                        </div>
                        <div class="d-none d-md-flex align-items-center btn-group-filter">
                            <button type="button" class="btn btn-outline-secondary rounded-pill border-0 mx-1 active-filter filter-btn" data-filter="all">Semua</button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill border-0 mx-1 filter-btn" data-filter="heritage">Heritage</button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill border-0 mx-1 filter-btn" data-filter="nature">Nature</button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill border-0 mx-1 filter-btn" data-filter="beach">Beach</button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill border-0 mx-1 filter-btn" data-filter="urban">Urban</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Destination Cards Grid -->
        <div class="row g-4" id="destinationList">
            <!-- Item -->
            <div class="col-md-4 destination-item" data-category="urban" data-aos="fade-up" data-aos-delay="100">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px;">
                        <img src="https://images.unsplash.com/photo-1596422846543-7ec410425c27?q=80&w=800&auto=format&fit=crop" class="card-img-top h-100" style="object-fit: cover;" alt="Malioboro">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Urban</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold">Jalan Malioboro</h4>
                        <p class="card-text text-muted small dest-desc">Pusat perbelanjaan dan jalan raya ikonik tempat berkumpulnya seniman, musisi jalanan, dan pedagang kaki lima di malam hari.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                            <span class="text-primary-custom small"><i class="fa-solid fa-map-location-dot me-1"></i> Pusat Kota</span>
                            <a href="https://maps.google.com/?q=Jalan+Malioboro" target="_blank" class="btn btn-sm btn-outline-custom rounded-pill">Peta</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-md-4 destination-item" data-category="heritage" data-aos="fade-up" data-aos-delay="200">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px;">
                        <img src="https://images.unsplash.com/photo-1627997871235-90146ff99ee6?q=80&w=800&auto=format&fit=crop" class="card-img-top h-100" style="object-fit: cover;" alt="Keraton">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Heritage</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold">Keraton Yogyakarta</h4>
                        <p class="card-text text-muted small dest-desc">Istana resmi Kesultanan Ngayogyakarta Hadiningrat yang juga berfungsi sebagai museum hidup kebudayaan Jawa sentris.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                            <span class="text-primary-custom small"><i class="fa-solid fa-map-location-dot me-1"></i> Alun-Alun Utara</span>
                            <a href="https://maps.google.com/?q=Keraton+Yogyakarta" target="_blank" class="btn btn-sm btn-outline-custom rounded-pill">Peta</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-md-4 destination-item" data-category="heritage" data-aos="fade-up" data-aos-delay="300">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px;">
                        <img src="https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=800&auto=format&fit=crop" class="card-img-top h-100" style="object-fit: cover;" alt="Taman Sari">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Heritage</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold">Taman Sari</h4>
                        <p class="card-text text-muted small dest-desc">Reruntuhan taman air eksotis tempat peristirahatan keluarga kerajaan zaman lampau. Sangat indah dan instagenic.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                            <span class="text-primary-custom small"><i class="fa-solid fa-map-location-dot me-1"></i> Patehan, Kraton</span>
                            <a href="https://maps.google.com/?q=Taman+Sari+Yogyakarta" target="_blank" class="btn btn-sm btn-outline-custom rounded-pill">Peta</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-md-4 destination-item" data-category="heritage" data-aos="fade-up" data-aos-delay="400">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px;">
                        <img src="https://images.unsplash.com/photo-1577717903520-22c60c2394c5?q=80&w=800&auto=format&fit=crop" class="card-img-top h-100" style="object-fit: cover;" alt="Prambanan">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Heritage</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold">Candi Prambanan</h4>
                        <p class="card-text text-muted small dest-desc">Kompleks candi Hindu abad ke-9 yang megah, menorehkan relief epik Ramayana di dinding batunya.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                            <span class="text-primary-custom small"><i class="fa-solid fa-map-location-dot me-1"></i> Sleman</span>
                            <a href="https://maps.google.com/?q=Candi+Prambanan" target="_blank" class="btn btn-sm btn-outline-custom rounded-pill">Peta</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-md-4 destination-item" data-category="beach" data-aos="fade-up" data-aos-delay="500">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px;">
                        <!-- Using a generic beach image since Parangtritis might be specific -->
                        <img src="https://images.unsplash.com/photo-1520483601560-389dff434fdf?q=80&w=800&auto=format&fit=crop" class="card-img-top h-100" style="object-fit: cover;" alt="Parangtritis">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Beach</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold">Pantai Parangtritis</h4>
                        <p class="card-text text-muted small dest-desc">Pantai ikonik berpasir hitam di selatan Jogja dengan ombak besar, gumuk pasir pelangkus, dan mitos Nyi Roro Kidul.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                            <span class="text-primary-custom small"><i class="fa-solid fa-map-location-dot me-1"></i> Bantul</span>
                            <a href="https://maps.google.com/?q=Pantai+Parangtritis" target="_blank" class="btn btn-sm btn-outline-custom rounded-pill">Peta</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item -->
            <div class="col-md-4 destination-item" data-category="nature" data-aos="fade-up" data-aos-delay="600">
                <div class="card feature-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px;">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800&auto=format&fit=crop" class="card-img-top h-100" style="object-fit: cover;" alt="HeHa Sky View">
                        <span class="position-absolute top-0 end-0 m-3 badge glass-badge">Nature / Modern</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="card-title font-playfair fw-bold">HeHa Sky View</h4>
                        <p class="card-text text-muted small dest-desc">Tempat hits perbukitan Gunungkidul yang menawarkan pemandangan gemerlap kota malam hari, restoran, dan spot foto kekinian.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                            <span class="text-primary-custom small"><i class="fa-solid fa-map-location-dot me-1"></i> Gunungkidul</span>
                            <a href="https://maps.google.com/?q=HeHa+Sky+View" target="_blank" class="btn btn-sm btn-outline-custom rounded-pill">Peta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inline Script for Filter/Search (jQuery) -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // We use jQuery here as requested by specification
        if (window.jQuery) {
            $(document).ready(function() {
                // Category Filter
                $('.filter-btn').on('click', function() {
                    $('.filter-btn').removeClass('active-filter fw-bold text-primary-custom').addClass('text-muted');
                    $(this).addClass('active-filter fw-bold text-primary-custom').removeClass('text-muted');
                    
                    var filterValue = $(this).attr('data-filter');
                    
                    if(filterValue === 'all') {
                        $('.destination-item').show(400);
                    } else {
                        $('.destination-item').hide(400);
                        $('.destination-item[data-category="' + filterValue + '"]').show(400);
                    }
                    // Reset search
                    $('#searchInput').val('');
                });

                // Search Bar
                $('#searchInput').on('keyup', function() {
                    var value = $(this).val().toLowerCase();
                    // Reset category button to "all" to avoid confusion
                    $('.filter-btn').removeClass('active-filter fw-bold text-primary-custom').addClass('text-muted');
                    $('.filter-btn[data-filter="all"]').addClass('active-filter fw-bold text-primary-custom').removeClass('text-muted');
                    
                    $('.destination-item').filter(function() {
                        $(this).toggle($(this).find('.card-title, .dest-desc').text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });
        }
    });
</script>

<?php require_once 'includes/footer.php'; ?>
