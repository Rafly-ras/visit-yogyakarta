<?php 
$page_title = "Kuliner Khas";
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<header class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=2000&auto=format&fit=crop') center/cover;">
    <div class="container text-center" data-aos="fade-up">
        <span class="badge bg-secondary-custom mb-3 px-3 py-2 text-dark fw-bold rounded-pill">Taste of Jogja</span>
        <h1 class="display-3 fw-bold mb-4 font-playfair"><?= __('Kelezatan Kuliner Otentik', $t) ?></h1>
        <p class="lead mb-4 fw-light opacity-75 max-w-700 mx-auto"><?= __('Mencicipi ragam cita rasa yang lahir dari perpaduan resep leluhur, bumbu rempah Nusantara, dan cerita kehangatan Jogja di setiap suapannya.', $t) ?></p>
    </div>
</header>

<!-- Highlight Kuliner -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary-custom fw-bold text-uppercase">Legenda Rasa</h6>
            <h2 class="font-playfair fw-bold">Menu Wajib Dicoba</h2>
            <div class="mx-auto bg-secondary-custom mt-3 mb-4" style="height: 3px; width: 60px;"></div>
        </div>

        <div class="row g-4 pt-3">
            <!-- Gudeg -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 culinary-card align-items-center text-center p-4">
                    <div class="rounded-circle overflow-hidden mb-3 shadow" style="width: 150px; height: 150px;">
                        <img src="https://images.unsplash.com/photo-1533201357341-8d79b10dd0f0?q=80&w=400&auto=format&fit=crop" alt="Gudeg" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 class="font-playfair fw-bold text-primary-custom">Gudeg</h4>
                    <span class="badge bg-light text-dark mb-3 border">Manis & Gurih</span>
                    <p class="text-muted small">Sayur nangka muda yang dimasak berjam-jam dengan gula aren dan santan cethil. Disajikan dengan nasi, krecek pedas, ayam kampung, dan telur pindang.</p>
                </div>
            </div>

            <!-- Bakpia -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0 culinary-card align-items-center text-center p-4">
                    <div class="rounded-circle overflow-hidden mb-3 shadow" style="width: 150px; height: 150px;">
                        <img src="https://images.unsplash.com/photo-1550519391-49e0feecaeac?q=80&w=400&auto=format&fit=crop" alt="Bakpia Pathok" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 class="font-playfair fw-bold text-primary-custom">Bakpia Pathok</h4>
                    <span class="badge bg-light text-dark mb-3 border">Oleh-oleh Ikonik</span>
                    <p class="text-muted small">Kue pastri panggang lembut yang awalnya berisi kacang hijau manis, kini berkembang ke rasa keju, cokelat, hingga rasa modern lainnya.</p>
                </div>
            </div>

            <!-- Sate Klathak -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm border-0 culinary-card align-items-center text-center p-4">
                    <div class="rounded-circle overflow-hidden mb-3 shadow" style="width: 150px; height: 150px;">
                        <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=400&auto=format&fit=crop" alt="Sate Klathak" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 class="font-playfair fw-bold text-primary-custom">Sate Klathak</h4>
                    <span class="badge bg-light text-dark mb-3 border">Daging Kambing</span>
                    <p class="text-muted small">Keunikan sate kambing muda khas Imogiri yang ditusuk menggunakan jeruji besi sepeda agar matang sempurna hingga ke dalam. Disajikan dengan kuah gulai.</p>
                </div>
            </div>
            
            <!-- Oseng Mercon -->
            <div class="col-lg-4 col-md-6 offset-lg-2" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-sm border-0 culinary-card align-items-center text-center p-4">
                    <div class="rounded-circle overflow-hidden mb-3 shadow" style="width: 150px; height: 150px;">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=400&auto=format&fit=crop" alt="Oseng Mercon" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 class="font-playfair fw-bold text-primary-custom">Oseng Mercon</h4>
                    <span class="badge bg-light text-dark mb-3 border">Pedas Ekstrem</span>
                    <p class="text-muted small">Bagi pecinta pedas, tumisan kikil dan daging sapi dengan puluhan cabai rawit ini meledak di mulut layaknya mercon (petasan).</p>
                </div>
            </div>

            <!-- Jadah Tempe -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 shadow-sm border-0 culinary-card align-items-center text-center p-4">
                    <div class="rounded-circle overflow-hidden mb-3 shadow" style="width: 150px; height: 150px;">
                        <img src="https://images.unsplash.com/photo-1621503378601-525c3f91de94?q=80&w=400&auto=format&fit=crop" alt="Jadah Tempe" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 class="font-playfair fw-bold text-primary-custom">Jadah Tempe</h4>
                    <span class="badge bg-light text-dark mb-3 border">Burger Jawa</span>
                    <p class="text-muted small">Paduan ketan gurih padat (jadah) khas Kaliurang yang ditumpuk dengan tempe atau tahu bacem manis, menciptakan harmoni rasa otentik Jogja utara.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review / Recommend Section -->
<section class="py-5" style="background-color: var(--bg-color);">
    <div class="container text-center">
        <h3 class="font-playfair fw-bold mb-4">Mencari Pengalaman Lainnya?</h3>
        <p class="text-muted max-w-700 mx-auto mb-5">Selain makanan legendaris, Yogyakarta kini dipenuhi ratusan kedai kopi modern, *hidden gem* di perbukitan, hingga kafe *aesthetic* yang menghadap hamparan sawah.</p>
        <a href="destinations.php" class="btn btn-primary-custom rounded-pill mt-2">Menuju Direktori Wisata</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
