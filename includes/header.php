<?php require_once __DIR__ . '/functions.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title . ' - ' : '' ?>Experience Yogyakarta</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Portal informasi dan panduan digital wisata Yogyakarta. Experience Yogyakarta - Where Tradition Meets Innovation.">
    <meta name="keywords" content="Yogyakarta, Wisata Jogja, Budaya, Kuliner, Travel Guide">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fa-solid fa-gopuram text-primary-custom me-2"></i> Jogja.
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa-solid fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php"><?= __('nav_home', $t) ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="history.php"><?= __('nav_history', $t) ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="culture.php"><?= __('nav_culture', $t) ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="culinary.php"><?= __('nav_culinary', $t) ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="destinations.php"><?= __('nav_destinations', $t) ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="travel-guide.php"><?= __('nav_guide', $t) ?></a></li>
                    
                    <!-- Language Switcher -->
                    <li class="nav-item dropdown ms-lg-3 mt-3 mt-lg-0">
                        <a class="nav-link dropdown-toggle lang-switch" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe"></i> <?= strtoupper($lang) ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?= $lang == 'id' ? 'active' : '' ?>" href="?lang=id">Bahasa Indonesia</a></li>
                            <li><a class="dropdown-item <?= $lang == 'en' ? 'active' : '' ?>" href="?lang=en">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
