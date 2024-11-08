<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda Sostenible Figuerenca - Plataforma per a esdeveniments i iniciatives sostenibles a Figueres">
    <title>Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Skip to main content -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar al contenido principal</a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation" aria-label="Navegación principal">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="/src/views/index.php" aria-label="Inicio">
                <img src="/img/logoblanco.png" height="50" alt="Logo ASF" width="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/src/views/consells.php">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/src/views/anuncis.php">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/src/views/esdeveniments.php">Esdeveniments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/src/views/admin/adminpanel.php">Admin</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="/src/views/perfil.php" class="image-cropper">
                        <img src="/img/Dan Franklin.jpg" alt="foto de perfil" class="profile-pic">
                    </a>
                    <button class="btn btn-light" onclick="window.location.href='/src/views/login.php'">Login</button>
                </div>
        </div>
    </nav>

    <!-- Search Container -->
    <div class="search-container" role="search" aria-label="Búsqueda y filtros">
        <div class="container-fluid px-3 px-lg-4">
            <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-stretch align-items-md-center">
                <div class="d-flex flex-column flex-md-row gap-3 w-100 w-md-auto">
                    <select class="form-select" aria-label="Seleccionar filtro">
                        <option value="">Selecciona un filtro</option>
                        <option value="1">Filtro 1</option>
                        <option value="2">Filtro 2</option>
                        <option value="3">Filtro 3</option>
                    </select>
                    <select class="form-select" aria-label="Seleccionar categoría">
                        <option value="">Selecciona una categoría</option>
                        <option value="1">Categoría 1</option>
                        <option value="2">Categoría 2</option>
                        <option value="3">Categoría 3</option>
                    </select>
                </div>
                <div class="d-flex gap-2 w-100 w-md-auto">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Campo de búsqueda">
                    <button class="btn btn-primary" aria-label="Realizar búsqueda">Buscar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Slider -->
        <section class="container-fluid p-0" aria-label="Secciones destacadas">
            <div class="swiper heroSwiper" role="region" aria-label="Carrusel de secciones">
                <div class="swiper-wrapper">
                    <div class="swiper-slide position-relative" onclick="window.location.href='esdeveniments.php'" style="cursor: pointer;">
                        <img src="/img/lago.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Slider">
                        <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <h1 class="h2 h1-md display-4-lg mb-2">Esdeveniments</h1>
                        </div>
                    </div>
                    <div class="swiper-slide position-relative" onclick="window.location.href='consells.php'" style="cursor: pointer;">
                        <img src="/img/lago2.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Slider">
                        <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <h1 class="h2 h1-md display-4-lg mb-2">Consells</h1>
                        </div>
                    </div>
                    <div class="swiper-slide position-relative" onclick="window.location.href='anuncis.php'" style="cursor: pointer;">
                        <img src="/img/lago3.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Slider">
                        <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <h1 class="h2 h1-md display-4-lg mb-2">Anuncis</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev d-none d-md-flex"></div>
                <div class="swiper-button-next d-none d-md-flex"></div>
            </div>
        </section>

        <!-- Events List -->
        <section class="container-fluid my-4 my-md-5 px-3 px-lg-4" aria-labelledby="upcoming-events">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="bg-primary text-white shadow p-3 p-md-4 rounded">
                        <h2 id="upcoming-events" class="mb-3 mb-md-4 text-center">Próximos Eventos</h2>
                        <div class="list-group" role="list">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                            <div class="list-group-item border-0 mb-3 p-0 card hover-effect" role="listitem" tabindex="0" onclick="window.location.href='esdeveniment.php?id=<?php echo $i; ?>'" onkeypress="if(event.key==='Enter') window.location.href='esdeveniment.php?id=<?php echo $i; ?>'">
                                <div class="row g-0 align-items-center">
                                    <div class="col-4 col-md-2 text-center py-3">
                                        <div class="h3 h2-md text-primary fw-bold mb-0">15</div>
                                        <div class="small text-muted text-uppercase">Març</div>
                                    </div>
                                    <div class="col-8 col-md-10 p-3 p-md-4">
                                        <h4 class="h5 h4-md mb-2 mb-md-3">Taller de Compostatge</h4>
                                        <p class="mb-2 mb-md-3 text-muted d-none d-md-block">Aprèn a fer el teu propi compost casolà...</p>
                                        <div class="d-flex flex-wrap gap-2 gap-md-4">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-star-fill text-warning me-2"></i>
                                                <span class="small">4.0</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-chat-fill text-primary me-2"></i>
                                                <span class="small">12</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-eye-fill text-secondary me-2"></i>
                                                <span class="small">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Configuración del Swiper con mejoras de accesibilidad
        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                bulletAriaLabel: 'Ir a la diapositiva {{index}}'
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            a11y: {
                prevSlideMessage: 'Diapositiva anterior',
                nextSlideMessage: 'Siguiente diapositiva',
                firstSlideMessage: 'Primera diapositiva',
                lastSlideMessage: 'Última diapositiva',
                paginationBulletMessage: 'Ir a la diapositiva {{index}}'
            }
        });
    </script>
    <?php include 'cookie_banner.php'; ?>
</body>
</html>

