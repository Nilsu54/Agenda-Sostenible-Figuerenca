<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consells - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/adminpanel.php">Admin</a>
                    </li>
                </ul>
                <button class="btn btn-light" onclick="window.location.href='login.php'">Login</button>
            </div>
        </div>
    </nav>
<!-- Search Container -->
<div class="search-container">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4"> <!-- Añadido px-4 para más padding horizontal -->
        <div class="d-flex gap-3"> <!-- Cambiado gap-2 a gap-3 para más espacio entre selects -->
            <select class="form-select" style="min-width: 200px;"> <!-- Añadido min-width -->
                <option>Filtro 1</option>
                <option>Filtro 2</option>
                <option>Filtro 3</option>
            </select>
            <select class="form-select" style="min-width: 200px;"> <!-- Añadido min-width -->
                <option>Categoría 1</option>
                <option>Categoría 2</option>
                <option>Categoría 3</option>
            </select>
        </div>
        <div class="d-flex gap-3"> <!-- Cambiado gap-2 a gap-3 -->
            <input type="text" class="form-control" placeholder="Buscar..." style="min-width: 250px;"> <!-- Añadido min-width -->
            <button class="btn btn-primary">Buscar</button>
        </div>
    </div>
</div>
    <!-- Hero Slider -->
    <div class="container-fluid p-0">
        <div class="swiper consellsSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <img src="img/lago.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Consells Ambientals</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="img/lago2.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Reducció de Residus</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="img/lago3.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Estalvi Energètic</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="bg-white shadow p-4 mx-auto" style="max-width: 1200px;">
            <div class="list-group">
                <?php for($i = 1; $i <= 5; $i++): ?>
                <div class="list-group-item border-0 mb-3 p-0 card hover-effect">
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-2 text-center py-2">
                            <div class="h2 text-primary fw-bold mb-0">0<?php echo $i; ?></div>
                            <div class="text-muted small text-uppercase">Consell</div>
                        </div>
                        <div class="col-md-9 p-3">
                            <h5 class="mb-1">Reducció del Consum d'Aigua</h5>
                            <p class="mb-2 text-muted small">Aprèn com reduir el consum d'aigua a casa amb petits canvis en els teus hàbits diaris.</p>
                            
                            <!-- Etiquetes -->
                            <div class="mb-2">
                                <span class="badge bg-primary me-1">#EstalviAigua</span>
                                <span class="badge bg-info me-1">#SostenibilitatDomèstica</span>
                                <span class="badge bg-success">#RecursosNaturals</span>
                            </div>

                            <!-- Categoria -->
                            <div class="d-flex align-items-center text-muted small">
                                <i class="bi bi-folder me-1"></i>
                                <span>Categoria: Recursos Naturals</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap & Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.consellsSlider', {
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
