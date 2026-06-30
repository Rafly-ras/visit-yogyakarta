<?php 
$page_title = "Sejarah Yogyakarta";
require_once 'includes/header.php'; 
?>

<!-- 1. Hero Section -->
<header class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1596404746372-911e8a60da11?q=80&w=2000&auto=format&fit=crop') center/cover;">
    <div class="container text-center text-md-start" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <span class="text-secondary-custom fw-bold text-uppercase d-block mb-3 tracking-wide"><i class="fa-solid fa-clock-rotate-left me-2"></i> Time Travel</span>
                <h1 class="display-3 fw-bold mb-4 font-playfair text-white"><?= __('The Story Behind Yogyakarta', $t) ?></h1>
                <p class="lead mb-4 fw-light opacity-75 max-w-700 text-white"><?= __('Menelusuri perjalanan Yogyakarta dari pusat Kesultanan Jawa hingga menjadi destinasi budaya dan pariwisata terkemuka di Indonesia.', $t) ?></p>
                <a href="destinations.php" class="btn btn-primary-custom btn-lg rounded-pill px-4 shadow"><i class="fa-solid fa-map-location-dot me-2"></i> Jelajahi Destinasi Sejarah</a>
            </div>
        </div>
    </div>
</header>

<!-- 3. Birth of Yogyakarta -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1627997871235-90146ff99ee6?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-4 shadow" alt="Kraton Yogyakarta">
                    <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white rounded-3 shadow-sm d-none d-md-block" style="max-width: 250px;">
                        <h6 class="font-playfair fw-bold text-primary-custom mb-1">Sri Sultan Hamengkubuwono I</h6>
                        <p class="small text-muted mb-0">Raja pertama dan pendiri Kesultanan Yogyakarta.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5" data-aos="fade-right">
                <span class="badge bg-secondary-custom text-dark px-3 py-2 rounded-pill mb-3">Tahun 1755</span>
                <h2 class="font-playfair fw-bold display-5 mb-4">Lahirnya Kesultanan Yogyakarta</h2>
                <p class="text-muted mb-3">Sejarah Yogyakarta secara defacto dimulai dari ditandatanganinya <strong>Perjanjian Giyanti</strong> pada 13 Februari 1755. Perjanjian ini membagi Kerajaan Mataram Islam menjadi dua wilayah kekuasaan: Kasunanan Surakarta dan Kasultanan Ngayogyakarta Hadiningrat.</p>
                <p class="text-muted">Di bawah kepemimpinan <strong>Pangeran Mangkubumi</strong> yang kemudian bergelar Sri Sultan Hamengkubuwono I, dimulailah pembangunan Keraton Yogyakarta sebagai pusat pemerintahan, kebudayaan, dan spiritualitas Jawa yang baru.</p>
            </div>
        </div>
    </div>
</section>

<!-- 2. Historical Timeline -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary-custom fw-bold text-uppercase">Garis Waktu</h6>
            <h2 class="font-playfair fw-bold">Jejak Perjalanan Kota</h2>
            <div class="mx-auto bg-primary-custom mt-3 mb-4" style="height: 3px; width: 60px;"></div>
        </div>
        
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="position-relative">
                    <!-- Vertical Line -->
                    <div class="position-absolute h-100" style="left: 50%; width: 2px; background-color: var(--primary-color); transform: translateX(-50%);"></div>
                    
                    <!-- Timeline Item: 1755 -->
                    <div class="row align-items-center mb-5" data-aos="fade-up">
                        <div class="col-5 text-end pe-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">1755</h4>
                            <p class="text-muted small mb-0">Perjanjian Giyanti dan berdirinya Kesultanan Yogyakarta.</p>
                        </div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 ps-4"></div>
                    </div>
                    
                    <!-- Timeline Item: 1812 -->
                    <div class="row align-items-center mb-5" data-aos="fade-up">
                        <div class="col-5 pe-4"></div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 text-start ps-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">1812</h4>
                            <p class="text-muted small mb-0">Geger Sepehi (Serangan Inggris). Kekusaan politik Kesultanan berkurang, namun peran budayanya menguat.</p>
                        </div>
                    </div>

                    <!-- Timeline Item: 1945 -->
                    <div class="row align-items-center mb-5" data-aos="fade-up">
                        <div class="col-5 text-end pe-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">1945</h4>
                            <p class="text-muted small mb-0">Dukungan penuh Kesultanan terhadap proklamasi kemerdekaan Republik Indonesia.</p>
                        </div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 ps-4"></div>
                    </div>

                    <!-- Timeline Item: 1946-1949 -->
                    <div class="row align-items-center mb-5" data-aos="fade-up">
                        <div class="col-5 pe-4"></div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 text-start ps-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">1946 – 1949</h4>
                            <p class="text-muted small mb-0">Yogyakarta secara heroik menjadi Ibu Kota sementara Republik Indonesia saat kondisi Jakarta tidak aman.</p>
                        </div>
                    </div>

                    <!-- Timeline Item: 1950 -->
                    <div class="row align-items-center mb-5" data-aos="fade-up">
                        <div class="col-5 text-end pe-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">1950</h4>
                            <p class="text-muted small mb-0">Penetapan resmi status Daerah Istimewa Yogyakarta oleh pemerintah Indonesia.</p>
                        </div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 ps-4"></div>
                    </div>

                    <!-- Timeline Item: 2000+ -->
                    <div class="row align-items-center mb-5" data-aos="fade-up">
                        <div class="col-5 pe-4"></div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 text-start ps-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">2000+</h4>
                            <p class="text-muted small mb-0">Pertumbuhan ekstensif pariwisata modern, komunitas seni, dan ekonomi kreatif.</p>
                        </div>
                    </div>

                    <!-- Timeline Item: 2020+ -->
                    <div class="row align-items-center" data-aos="fade-up">
                        <div class="col-5 text-end pe-4">
                            <h4 class="font-playfair fw-bold text-primary-custom mb-1">2020+</h4>
                            <p class="text-muted small mb-0">Bertransisi menjadi model Smart Tourism dan Kota Inovasi digital.</p>
                        </div>
                        <div class="col-2 text-center position-relative">
                            <div class="rounded-circle bg-secondary-custom mx-auto" style="width: 20px; height: 20px; border: 4px solid #fff; box-shadow: 0 0 0 4px rgba(122, 70, 40, 0.2); position: relative; z-index: 2;"></div>
                        </div>
                        <div class="col-5 ps-4"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Role in Indonesian Independence -->
<section class="py-5" style="background-color: var(--primary-color);">
    <div class="container py-4 text-white">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="zoom-in">
                <img src="https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=600&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg border border-3 border-light opacity-75" alt="Monumen Perjuangan">
            </div>
            <div class="col-lg-7 ps-lg-5" data-aos="fade-up">
                <div class="d-inline-block bg-white text-primary-custom fw-bold px-3 py-2 rounded-pill mb-4 shadow"><i class="fa-solid fa-crown me-2 text-secondary-custom"></i> Capital of the Republic of Indonesia (1946–1949)</div>
                <h2 class="font-playfair display-6 fw-bold mb-4">Benteng Terakhir Kemerdekaan</h2>
                <p class="fw-light lead text-white-50">Ketika ibu kota Jakarta jatuh ke tangan Belanda pada masa Agresi Militer, Yogyakarta dengan tangan terbuka menjadi pelindung bagi para pemimpin bangsa.</p>
                <p class="fw-light">Sri Sultan Hamengkubuwono IX dan Sri Paduka Paku Alam VIII memainkan peran krusial dengan menyumbangkan dana kerajaan untuk operasional pemerintahan Republik serta menjamin keamanan Presiden Soekarno.</p>
                <p class="fst-italic fw-bold mt-4 border-start border-4 border-secondary-custom ps-3">"Yogyakarta telah menjadi tulang punggung revolusi, tempat di mana api kemerdekaan tetap dijaga agar tidak padam."</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Why Yogyakarta is Special -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-playfair fw-bold">Mengapa Yogyakarta Istimewa?</h2>
            <p class="text-muted mt-3 max-w-700 mx-auto">Predikat "Daerah Istimewa" bukan sekadar gelar, melainkan pengakuan atas peranan sejarah dan kekokohan fondasi kulturalnya.</p>
        </div>

        <div class="row g-4 text-center">
            <!-- Icon 1 -->
            <div class="col-lg-5ths col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm p-4 d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-primary-custom mb-3" style="width:70px; height:70px;">
                        <i class="fa-solid fa-chess-rook fs-3"></i>
                    </div>
                    <h6 class="fw-bold">Daerah Istimewa</h6>
                    <p class="small text-muted mb-0">Dipimpin langsung oleh Sultan yang bertahta sebagai Gubernur.</p>
                </div>
            </div>
            <!-- Icon 2 -->
            <div class="col-lg-5ths col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm p-4 d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-primary-custom mb-3" style="width:70px; height:70px;">
                        <i class="fa-solid fa-mask fs-3"></i>
                    </div>
                    <h6 class="fw-bold">Pusat Budaya Jawa</h6>
                    <p class="small text-muted mb-0">Gudangnya seniman, tradisi, dan filosofi kehidupan luhur.</p>
                </div>
            </div>
            <!-- Icon 3 -->
            <div class="col-lg-5ths col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm p-4 d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-primary-custom mb-3" style="width:70px; height:70px;">
                        <i class="fa-solid fa-graduation-cap fs-3"></i>
                    </div>
                    <h6 class="fw-bold">Kota Pendidikan</h6>
                    <p class="small text-muted mb-0">Rumah bagi ratusan perguruan tinggi dan ribuan mahasiswa.</p>
                </div>
            </div>
            <!-- Icon 4 -->
            <div class="col-lg-5ths col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm p-4 d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-primary-custom mb-3" style="width:70px; height:70px;">
                        <i class="fa-solid fa-earth-asia fs-3"></i>
                    </div>
                    <h6 class="fw-bold">Destinasi Dunia</h6>
                    <p class="small text-muted mb-0">Memiliki berbagai warisan dunia (UNESCO) seperti Prambanan.</p>
                </div>
            </div>
            <!-- Icon 5 -->
            <div class="col-lg-5ths col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm p-4 d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-primary-custom mb-3" style="width:70px; height:70px;">
                        <i class="fa-solid fa-lightbulb fs-3"></i>
                    </div>
                    <h6 class="fw-bold">Kota Inovatif</h6>
                    <p class="small text-muted mb-0">Poros industri kreatif dan ekonomi digital masa depan Indonesia.</p>
                </div>
            </div>
            <!-- Custom CSS for 5 columns -->
            <style>
                @media (min-width: 992px) {
                    .col-lg-5ths {
                        flex: 0 0 auto;
                        width: 20%;
                    }
                }
            </style>
        </div>
    </div>
</section>

<!-- 6. From Heritage to Innovation -->
<section class="py-5 bg-light overflow-hidden">
    <div class="container text-center py-4">
        <h2 class="font-playfair fw-bold mb-5" data-aos="fade-up">Perjalanan Evolusi Kota</h2>
        
        <div class="d-flex flex-wrap flex-md-nowrap justify-content-around align-items-center position-relative">
            <!-- Road Line -->
            <div class="d-none d-md-block position-absolute w-100" style="top: 35px; height: 3px; background-color: var(--secondary-color); z-index: 1;"></div>
            
            <!-- Nodes -->
            <div class="text-center position-relative mb-4 mb-md-0" style="z-index: 2; width: 120px;" data-aos="zoom-in" data-aos-delay="0">
                <div class="bg-primary-custom text-secondary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 shadow" style="width: 70px; height: 70px;">
                    <i class="fa-solid fa-chess-king fs-4"></i>
                </div>
                <h6 class="fw-bold small mb-0">Royal City</h6>
            </div>
            
            <div class="d-md-none text-secondary-custom mb-3" data-aos="fade-down"><i class="fa-solid fa-arrow-down fs-4"></i></div>
            
            <div class="text-center position-relative mb-4 mb-md-0" style="z-index: 2; width: 120px;" data-aos="zoom-in" data-aos-delay="100">
                <div class="bg-primary-custom text-secondary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 shadow" style="width: 70px; height: 70px;">
                    <i class="fa-solid fa-ankh fs-4"></i>
                </div>
                <h6 class="fw-bold small mb-0">Cultural City</h6>
            </div>

            <div class="d-md-none text-secondary-custom mb-3" data-aos="fade-down"><i class="fa-solid fa-arrow-down fs-4"></i></div>

            <div class="text-center position-relative mb-4 mb-md-0" style="z-index: 2; width: 120px;" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-primary-custom text-secondary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 shadow" style="width: 70px; height: 70px;">
                    <i class="fa-solid fa-book-open text-white fs-4"></i>
                </div>
                <h6 class="fw-bold small mb-0">Education City</h6>
            </div>

            <div class="d-md-none text-secondary-custom mb-3" data-aos="fade-down"><i class="fa-solid fa-arrow-down fs-4"></i></div>

            <div class="text-center position-relative mb-4 mb-md-0" style="z-index: 2; width: 120px;" data-aos="zoom-in" data-aos-delay="300">
                <div class="bg-primary-custom text-secondary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 shadow" style="width: 70px; height: 70px;">
                    <i class="fa-solid fa-camera-retro text-white fs-4"></i>
                </div>
                <h6 class="fw-bold small mb-0">Tourism City</h6>
            </div>

            <div class="d-md-none text-secondary-custom mb-3" data-aos="fade-down"><i class="fa-solid fa-arrow-down fs-4"></i></div>

            <div class="text-center position-relative mb-4 mb-md-0" style="z-index: 2; width: 120px;" data-aos="zoom-in" data-aos-delay="400">
                <div class="bg-primary-custom text-secondary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 shadow" style="width: 70px; height: 70px;">
                    <i class="fa-solid fa-palette text-white fs-4"></i>
                </div>
                <h6 class="fw-bold small mb-0">Creative Hub</h6>
            </div>

            <div class="d-md-none text-secondary-custom mb-3" data-aos="fade-down"><i class="fa-solid fa-arrow-down fs-4"></i></div>

            <div class="text-center position-relative mb-0" style="z-index: 2; width: 120px;" data-aos="zoom-in" data-aos-delay="500">
                <div class="bg-secondary-custom text-primary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 shadow-lg" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-satellite-dish fs-3"></i>
                </div>
                <h6 class="fw-bold mb-0 text-primary-custom">Smart City</h6>
            </div>
        </div>
    </div>
</section>

<!-- 7. Historical Landmarks -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary-custom fw-bold text-uppercase">Tengara Bersejarah</h6>
            <h2 class="font-playfair fw-bold display-6">Saksi Bisu Perjalanan Waktu</h2>
            <div class="mx-auto bg-primary-custom mt-3 mb-4" style="height: 3px; width: 60px;"></div>
        </div>

        <div class="row g-4">
            <!-- Kraton -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 flex-md-row">
                    <img src="https://images.unsplash.com/photo-1627997871235-90146ff99ee6?q=80&w=400&auto=format&fit=crop" class="img-fluid" alt="Keraton" style="width: 100%; max-width: 250px; object-fit: cover;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="font-playfair fw-bold text-primary-custom">Keraton Yogyakarta</h4>
                        <p class="text-muted small">Pusat pemerintahan Kesultanan Ngayogyakarta Hadiningrat yang sarat dengan ornamen dan arsitektur filosofis.</p>
                        <a href="destinations.php" class="text-decoration-none fw-bold small text-dark border-bottom pb-1" style="width:fit-content;">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Taman Sari -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 flex-md-row">
                    <img src="https://images.unsplash.com/photo-1549472352-03d3680e69ed?q=80&w=400&auto=format&fit=crop" class="img-fluid" alt="Taman Sari" style="width: 100%; max-width: 250px; object-fit: cover;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="font-playfair fw-bold text-primary-custom">Taman Sari</h4>
                        <p class="text-muted small">Istana air eksotis dan tempat pemandian raja serta putrinya pada abad ke-18 yang terhubung dengan terowongan bawah tanah.</p>
                        <a href="destinations.php" class="text-decoration-none fw-bold small text-dark border-bottom pb-1" style="width:fit-content;">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Vredeburg -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 flex-md-row">
                    <img src="https://images.unsplash.com/photo-1596404746372-911e8a60da11?q=80&w=400&auto=format&fit=crop" class="img-fluid" alt="Benteng Vredeburg" style="width: 100%; max-width: 250px; object-fit: cover;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="font-playfair fw-bold text-primary-custom">Benteng Vredeburg</h4>
                        <p class="text-muted small">Benteng pertahanan Belanda yang kini menjadi museum visual perjalanan kemerdekaan berteknologi diorama canggih.</p>
                        <a href="destinations.php" class="text-decoration-none fw-bold small text-dark border-bottom pb-1" style="width:fit-content;">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- Tugu -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 flex-md-row">
                    <img src="https://images.unsplash.com/photo-1596422846543-7ec410425c27?q=80&w=400&auto=format&fit=crop" class="img-fluid" alt="Tugu Yogyakarta" style="width: 100%; max-width: 250px; object-fit: cover;">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <h4 class="font-playfair fw-bold text-primary-custom">Tugu Yogyakarta</h4>
                        <p class="text-muted small">Monumen penanda kota yang berada tepat di garis imajiner antara Laut Selatan, Keraton, dan Gunung Merapi.</p>
                        <a href="destinations.php" class="text-decoration-none fw-bold small text-dark border-bottom pb-1" style="width:fit-content;">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. Call To Action -->
<section class="py-5 flex-center text-center" style="background: linear-gradient(rgba(122, 70, 40, 0.8), rgba(122, 70, 40, 0.9)), url('https://images.unsplash.com/photo-1577717903520-22c60c2394c5?q=80&w=2000&auto=format&fit=crop') center/cover fixed; min-height: 400px; display: flex; flex-direction: column; justify-content: center;">
    <div class="container text-white py-5" data-aos="zoom-in">
        <h2 class="font-playfair display-5 fw-bold mb-4">Experience the Legacy of Yogyakarta</h2>
        <p class="lead fw-light opacity-75 mb-5 max-w-700 mx-auto">Mari menjelajahi situs peninggalan bersejarah dan meresapi hangatnya budaya yang terus hidup berdampingan dengan inovasi modern kota ini.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="destinations.php" class="btn btn-secondary-custom text-dark btn-lg rounded-pill px-4 fw-bold">Explore Destinations</a>
            <a href="culture.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Discover Culture</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
