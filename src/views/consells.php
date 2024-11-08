<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consells sostenibles a Figueres - Aprèn a viure de manera més ecològica i responsable">
    <title>Consells - Agenda Sostenible Figuerenca</title>
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
    <!-- Skip to main content -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar al contenido principal</a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" role="navigation" aria-label="Navegación principal">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="/src/views/index.php" aria-label="Inicio">
                <img src="/public/img/logoblanco.png" height="50" alt="Logo ASF" width="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="consells.php">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anuncis.php">Anuncis</a>
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
                    </select>
                    <select class="form-select" aria-label="Seleccionar categoría">
                        <option value="">Selecciona una categoría</option>
                        <option value="1">Categoría 1</option>
                    </select>
                </div>
                <div class="d-flex gap-2 w-100 w-md-auto">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Campo de búsqueda">
                    <button class="btn btn-primary" aria-label="Realizar búsqueda">Buscar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="container-fluid p-0">
        <div class="swiper consellsSlider" role="region" aria-label="Carrusel de secciones">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <img src="/public/img/lago.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Consells Destacats">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="h2 h1-md display-4-lg mb-2">Consells Destacats</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="/public/img/lago2.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Estalvi Energètic">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="h2 h1-md display-4-lg mb-2">Estalvi Energètic</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="/public/img/lago3.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Reciclatge">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="h2 h1-md display-4-lg mb-2">Reciclatge</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev d-none d-md-flex"></div>
            <div class="swiper-button-next d-none d-md-flex"></div>
        </div>
    </div>

    <!-- Main Content -->
    <main id="main-content">
        <div class="container-fluid my-4 my-md-5">
            <div class="bg-white shadow p-3 p-md-4 rounded">
                <h2 class="mb-3 mb-md-4 text-center">Consells Disponibles</h2>
                <div class="list-group" role="list">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                    <div class="list-group-item border-0 mb-3 p-0 card hover-effect" role="listitem" tabindex="0" 
                         onclick="window.location.href='consell.php?id=<?php echo $i; ?>'" 
                         onkeypress="if(event.key==='Enter') window.location.href='consell.php?id=<?php echo $i; ?>'">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                                <img src="/public/img/lago.jpg" class="img-fluid h-100 object-fit-cover rounded-top rounded-md-start" 
                                     alt="Imatge del consell" width="400" height="300">
                            </div>
                            <div class="col-12 col-md-8 p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="h5 h4-md mb-0">Reducció del Consum d'Aigua</h3>
                                    <span class="badge bg-success">Destacat</span>
                                </div>
                                <p class="mb-2 text-muted">Aprèn com reduir el consum d'aigua a casa amb petits canvis en els teus hàbits diaris.</p>
                                <div class="mb-2">
                                    <span class="badge bg-primary me-1">#EstalviAigua</span>
                                    <span class="badge bg-info me-1">#SostenibilitatDomèstica</span>
                                    <span class="badge bg-success">#RecursosNaturals</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2 gap-md-4 mt-2">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-star-fill text-warning me-2"></i>
                                        <span class="small">4.5</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-chat-fill text-primary me-2"></i>
                                        <span class="small">8</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-eye-fill text-secondary me-2"></i>
                                        <span class="small">156</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.consellsSlider', {
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
