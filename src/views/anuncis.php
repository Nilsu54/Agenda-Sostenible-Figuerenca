<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncis - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="icon" href="/public/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="/public/img/logoblanco.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="consells.php">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="anuncis.php">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="esdeveniments.php">Esdeveniments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/adminpanel.php">Admin</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="perfil.php" class="image-cropper">
                        <img src="/public/img/Dan Franklin.jpg" alt="foto de perfil" class="profile-pic">
                    </a>
                    <button class="btn btn-light" onclick="window.location.href='/src/views/login.php'">Login</button>
                </div>
        </div>
    </nav>

    <!-- Search Container -->
    <div class="search-container">
        <div class="container-fluid px-3 px-md-4">
            <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-stretch align-items-md-center">
                <div class="d-flex flex-column flex-md-row gap-3">
                    <select class="form-select">
                        <option>Filtro 1</option>
                    </select>
                    <select class="form-select">
                        <option>Categoría 1</option>
                    </select>
                </div>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Slider -->
    <div class="container-fluid p-0">
        <div class="swiper anuncisSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <img src="/public/img/lago.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Anuncis Destacats</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="/public/img/lago2.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Compra i Venda</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="/public/img/lago3.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Intercanvis</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="bg-white shadow p-4">
            <div class="list-group">
                <?php for($i = 1; $i <= 5; $i++): ?>
                <div class="list-group-item border-0 mb-4 p-0 card hover-effect">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2 text-center py-3">
                            <div class="display-4 text-primary fw-bold">0<?php echo $i; ?></div>
                            <div class="text-muted text-uppercase">Anunci</div>
                        </div>
                        <div class="col-md-7 p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="mb-0">Venda de Compostadors</h4>
                                <span class="badge bg-success">Públic</span>
                            </div>
                            <span class="badge bg-primary mb-2">Categoria: Jardí</span>
                            <p class="mb-0 text-muted">Disponibles compostadors domèstics a preu reduït. Perfectes per començar a fer el teu propi compost. Aprofita aquesta oportunitat única.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="/public/img/lago.jpg" class="img-fluid rounded-end h-100 object-fit-cover" alt="Anunci">
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.anuncisSlider', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <?php include 'cookie_banner.php'; ?>
</body>
</html>