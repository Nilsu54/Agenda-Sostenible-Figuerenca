<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="img/logoblanco.png" height="50" alt="Logo">
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
                        <a class="nav-link" href="anuncis.php">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="esdeveniments.php">Esdeveniments</a>
                    </li>
                </ul>
                <button class="btn btn-light" onclick="window.location.href='login.php'">Login</button>
            </div>
        </div>
    </nav>

    <!-- Search Container -->
    <div class="search-container">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex gap-2">
                <select class="form-select">
                    <option>Filtro 1</option>
                    <option>Filtro 2</option>
                    <option>Filtro 3</option>
                </select>
                <select class="form-select">
                    <option>Categoría 1</option>
                    <option>Categoría 2</option>
                    <option>Categoría 3</option>
                </select>
            </div>
            <div class="d-flex gap-2">
                <input type="text" class="form-control" placeholder="Buscar...">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>

    <!-- Hero Slider -->
    <div class="container-fluid p-0">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <img src="img/lago.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Esdeveniments</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="img/lago2.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Consells</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="img/lago3.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Anuncis</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Events List -->
    <div class="container-fluid">
        <div class="bg-white shadow p-4">
            <h2 class="mb-4">Próximos Eventos</h2>
            <div class="list-group">
                <?php for($i = 1; $i <= 5; $i++): ?>
                <div class="list-group-item border-0 mb-3 p-0 card hover-effect" onclick="window.location.href='esdeveniment.php?id=<?php echo $i; ?>'">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2 text-center py-3">
                            <div class="display-4 text-primary fw-bold">15</div>
                            <div class="text-muted text-uppercase">Març</div>
                        </div>
                        <div class="col-md-10 p-4">
                            <h4 class="mb-3">Taller de Compostatge</h4>
                            <p class="mb-3 text-muted">Aprèn a fer el teu propi compost casolà i contribueix a reduir els residus orgànics. Taller pràctic amb experts en compostatge.</p>
                            <div class="d-flex gap-4">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-star-fill text-warning me-2"></i>
                                    <span>4.0</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-chat-fill text-primary me-2"></i>
                                    <span>12</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-eye-fill text-secondary me-2"></i>
                                    <span>234</span>
                                </div>
                            </div>
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
        const swiper = new Swiper('.heroSwiper', {
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
</body>
</html>
