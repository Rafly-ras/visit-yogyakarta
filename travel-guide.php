<?php 
$page_title = "Travel Guide & FAQ";
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<header class="hero-section" style="height: 50vh; min-height: 350px; background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1596404746372-911e8a60da11?q=80&w=2000&auto=format&fit=crop') center/cover;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-3 font-playfair"><?= __('Panduan Wisatawan', $t) ?></h1>
        <p class="lead fw-light text-white-50 mx-auto" style="max-width: 600px;"><?= __('Semua informasi yang Anda butuhkan untuk merencanakan perjalanan tak terlupakan ke Yogyakarta.', $t) ?></p>
    </div>
</header>

<section class="py-5 bg-white">
    <div class="container py-4">
        
        <div class="row">
            <!-- Left Content -->
            <div class="col-lg-8 pe-lg-5">
                
                <!-- Cara Menuju Jogja -->
                <div class="mb-5" data-aos="fade-up">
                    <h3 class="font-playfair fw-bold mb-4 border-bottom pb-2">Cara Menuju Yogyakarta</h3>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4 mt-1">
                            <i class="fa-solid fa-plane text-primary-custom fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Via Udara (Pesawat)</h5>
                            <p class="text-muted">Penerbangan dilayani melalui <strong>Yogyakarta International Airport (YIA)</strong> di Kulon Progo. Dari bandara, Anda dapat menggunakan Kereta Bandara langsung menuju Stasiun Tugu di pusat kota dengan waktu tempuh sekitar 40 menit.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4 mt-1">
                            <i class="fa-solid fa-train-subway text-secondary-custom fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Via Kereta Api</h5>
                            <p class="text-muted">Yogyakarta memiliki dua stasiun utama: <strong>Stasiun Tugu</strong> (kelas eksekutif/bisnis, persis di Malioboro) dan <strong>Stasiun Lempuyangan</strong> (kelas ekonomi). Sangat disarankan bagi wisatawan dari Jakarta, Bandung, atau Surabaya.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4 mt-1">
                            <i class="fa-solid fa-bus text-accent fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Via Bus Antar Kota</h5>
                            <p class="text-muted">Terminal utama bus antar kota adalah <strong>Terminal Giwangan</strong>. Terdapat banyak bus eksekutif malam (Sleeper Bus) dari berbagai kota besar di Pulau Jawa, Bali, dan Sumatera.</p>
                        </div>
                    </div>
                </div>

                <!-- Transportasi Lokal -->
                <div class="mb-5 bg-light p-4 rounded-4 shadow-sm" data-aos="fade-up">
                    <h3 class="font-playfair fw-bold mb-4">Transportasi Lokal (Di Dalam Kota)</h3>
                    <div class="row g-3">
                        <div class="col-md-6 border-end-md">
                            <h6 class="fw-bold"><i class="fa-solid fa-van-shuttle text-primary-custom me-2"></i> TransJogja</h6>
                            <p class="small text-muted mb-3">BRT murah (kini sekitar Rp 3.600) ber-AC yang mengelilingi titik-titik utama pariwisata.</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold"><i class="fa-brands fa-uber text-primary-custom me-2"></i> Ojek & Taksi Online</h6>
                            <p class="small text-muted mb-3">Gojek, Grab, dan Maxim beroperasi penuh 24 jam dengan mudah di seluruh penjuru kota.</p>
                        </div>
                        <div class="col-md-6 border-end-md">
                            <h6 class="fw-bold"><i class="fa-solid fa-bicycle text-primary-custom me-2"></i> Becak Tradisional</h6>
                            <p class="small text-muted mb-3">Pengalaman kultural. Sangat disarankan untuk rute pendek (Malioboro - Keraton). <em>Selalu negosiasikan harga di awal.</em></p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold"><i class="fa-solid fa-horse text-primary-custom me-2"></i> Andong (Kereta Kuda)</h6>
                            <p class="small text-muted mb-3">Transportasi turis keluarga menyusuri kawasan heritage Malioboro pada malam hari.</p>
                        </div>
                    </div>
                </div>

                <!-- Tips & Estimasi Biaya -->
                <div class="mb-5" data-aos="fade-up">
                    <h3 class="font-playfair fw-bold mb-4 border-bottom pb-2">Tips & Estimasi Biaya</h3>
                    <p class="text-muted">Yogyakarta terkenal dengan biaya hidup yang relatif murah dibandingkan kota besar lainnya di Indonesia.</p>
                    
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="border rounded p-3 text-center mb-3 mb-md-0 border-primary-custom">
                                <h6 class="fw-bold text-dark mb-1">Backpacker</h6>
                                <p class="text-primary-custom fw-bold h4 mb-0">Rp 150k - Rp 300k</p>
                                <span class="small text-muted">per hari / orang</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border rounded p-3 text-center mb-3 mb-md-0 border-secondary-custom">
                                <h6 class="fw-bold text-dark mb-1">Comfortable</h6>
                                <p class="text-secondary-custom fw-bold h4 mb-0">Rp 500k - Rp 1M</p>
                                <span class="small text-muted">per hari / orang</span>
                            </div>
                        </div>
                    </div>
                    
                    <ul class="text-muted mt-4">
                        <li><strong>Pakaian:</strong> Cuaca dominan tropis. Pakailah baju berbahan katun ringan. Bawalah topi/payung dan tabir surya.</li>
                        <li><strong>Etika Berpakaian:</strong> Ketika mengunjungi Keraton atau Candi, Anda diharapkan memakai pakaian sopan (menutup lutut dan bahu). Pihak wisata sering meminjamkan kain sarung/selendang.</li>
                        <li><strong>Sikap:</strong> Senyum! Orang Jogja sangat ramah. Jangan ragu membalas senyuman mereka.</li>
                    </ul>
                </div>

                <!-- FAQ (Accordion) -->
                <div class="mb-5" data-aos="fade-up">
                    <h3 class="font-playfair fw-bold mb-4 border-bottom pb-2">Pertanyaan yang Sering Diajukan (FAQ)</h3>
                    <div class="accordion" id="accordionFAQ">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent shadow-none fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Kapan waktu terbaik berkunjung ke Yogyakarta?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-muted small">
                                    Musim kemarau (Mei - September) adalah saat terbaik untuk aktivitas luar ruangan seperti ke Gunungkidul atau Prambanan. Namun Jogja tetap indah di musim hujan (Oktober - April) untuk kulineran dan musium.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent shadow-none fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Apakah lingkungan aman bagi wisatawan asing atau wanita solo?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-muted small">
                                    Sangat aman. Yogyakarta diakui sebagai salah satu kota paling nyaman dan ramah di Indonesia. Namun standar kehati-hatian malam hari di kawasan sepi tetap disarankan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent shadow-none fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Apakah Grab/Gojek boleh masuk bandara YIA?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-muted small">
                                    Terdapat titik jemput khusus untuk taksi online (Grab/Gojek) di bandara YIA. Namun opsi Kereta Bandara YIA lebih direkomendasikan karena cepat, murah, dan langsung tiba di pusat kota (Stasiun Tugu).
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0" data-aos="fade-left">
                <div class="card border-0 shadow rounded-4 bg-primary-custom text-white position-sticky" style="top: 100px;">
                    <div class="card-body p-4 text-center">
                        <div class="bg-white text-primary-custom rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                            <i class="fa-solid fa-headset fs-3"></i>
                        </div>
                        <h4 class="font-playfair fw-bold mb-3">Butuh Bantuan?</h4>
                        <p class="small text-white-50 mb-4">Dinas Pariwisata Yogyakarta siap membantu rencana perjalanan (itinerary) Anda.</p>
                        
                        <a href="mailto:info@pariwisata.jogjakota.go.id" class="btn btn-light w-100 rounded-pill mb-2 fw-bold text-dark">
                            <i class="fa-solid fa-envelope text-primary-custom me-2"></i> Email Kami
                        </a>
                        <a href="tel:+62274123456" class="btn btn-outline-light w-100 rounded-pill mt-2">
                            <i class="fa-solid fa-phone me-2"></i> +62 274 515865
                        </a>

                        <hr class="border-light opacity-25 my-4">

                        <h6 class="fw-bold">Pusat Informasi Wisata (TIC)</h6>
                        <p class="small text-white-50 mb-0">Jl. Malioboro No.16, Suryatmajan, Danurejan, Kota Yogyakarta.</p>
                        <p class="small text-white-50 mt-1"><em>Jam Buka: 08.00 - 16.00 WIB</em></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
