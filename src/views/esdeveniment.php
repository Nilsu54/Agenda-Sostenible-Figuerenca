<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Compostatge - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
</head>
<body> <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="/img/logoblanco.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=tips">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=news">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=events">Esdeveniments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=dashboard">Admin</a>
                    </li>
                </ul>
                <button class="btn btn-light" onclick="window.location.href='login.php'">Login</button>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="event-container">
        <div class="container">
            <div class="bg-white rounded-4 shadow p-4">
                <!-- Event Header -->
                <div class="mb-4">
                    <h1 class="text-primary mb-3">Taller de Compostatge</h1>
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <span class="badge bg-primary"><i class="bi bi-tag-fill"></i> Aire Lliure</span>
                        <span class="fs-5">15 Març 2024</span>
                        <div>
                            <i class="bi bi-clock-fill"></i>
                            10:00 - 13:00
                            <small class="text-muted">(3 hores)</small>
                        </div>
                    </div>
                </div>

                <!-- Event Gallery -->
                <div class="mb-4">
                    <img src="/img/lago.jpg" class="img-fluid rounded-4 w-100 mb-3 object-fit-cover" style="height: 400px;" alt="Imatge Principal">
                    <div class="row g-3">
                        <div class="col-4">
                            <img src="/img/lago2.jpg" class="img-fluid rounded-3 object-fit-cover w-100" style="height: 100px;" alt="Imatge 2">
                        </div>
                        <div class="col-4">
                            <img src="/img/lago3.jpg" class="img-fluid rounded-3 object-fit-cover w-100" style="height: 100px;" alt="Imatge 3">
                        </div>
                        <div class="col-4">
                            <img src="/img/lago.jpg" class="img-fluid rounded-3 object-fit-cover w-100" style="height: 100px;" alt="Imatge 4">
                        </div>
                    </div>
                </div>

                <!-- Event Description -->
                <div class="mb-4">
                    <h2 class="h4 mb-3">Descripció</h2>
                    <p class="lead">Aprèn a fer el teu propi compost casolà i contribueix a reduir els residus orgànics. Taller pràctic amb experts en compostatge. Durant aquesta sessió, aprendràs les tècniques bàsiques per crear i mantenir el teu propi compostador.</p>
                </div>

                <!-- Event Stats -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h5 class="mb-3">Valoració</h5>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span class="fs-4">4.0</span>
                                    <span class="text-muted">de 5</span>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                <div class="mb-2"><i class="bi bi-eye-fill"></i> 234 visualitzacions</div>
                                <div><i class="bi bi-chat-fill"></i> 12 comentaris</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4"><i class="bi bi-chat-square-text-fill"></i> Comentaris</h5>
                        
                        <div class="mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold">Joan Garcia</span>
                                <div>
                                    <small class="text-muted me-2">10 Març 2024</small>
                                    <span class="badge bg-success">Publicat</span>
                                </div>
                            </div>
                            <p class="mb-0">Molt interessant! Tinc ganes d'aprendre sobre compostatge.</p>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold">Maria Puig</span>
                                <div>
                                    <small class="text-muted me-2">11 Març 2024</small>
                                    <span class="badge bg-warning">Pendent</span>
                                </div>
                            </div>
                            <p class="mb-0">Hi haurà material inclòs en el taller?</p>
                        </div>
                    </div>
                </div>
<!-- Location Section -->
<div class="card mb-4">
    <div class="card-body">
        <h5 class="mb-3 text-danger"><i class="bi bi-geo-alt-fill"></i> Ubicación</h5>
        <div class="mb-3">
            <small class="text-danger">
                Latitud: 42.2668° N | Longitud: 2.9580° E
            </small>
        </div>
        <div id="map" class="rounded-3" style="height: 400px;"></div>
    </div>
</div>

                <!-- Rating Widget -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center mb-4">La teva opinió importa!</h5>
                        <p class="text-center text-muted mb-4">Ajuda'ns a millorar amb la teva valoració</p>
                        
                        <div class="text-center mb-4">
                            <p class="mb-2">Quina puntuació li dones?</p>
                            <div class="rating-stars d-flex justify-content-center gap-2 fs-2">
                                <i class="bi bi-star" data-rating="1" title="Dolent"></i>
                                <i class="bi bi-star" data-rating="2" title="Regular"></i>
                                <i class="bi bi-star" data-rating="3" title="Bo"></i>
                                <i class="bi bi-star" data-rating="4" title="Molt bo"></i>
                                <i class="bi bi-star" data-rating="5" title="Excel·lent"></i>
                            </div>
                            <small class="text-muted" id="rating-text">Selecciona una puntuació</small>
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">El teu comentari (opcional)</label>
                            <textarea class="form-control" id="comment" rows="4" 
                                placeholder="Comparteix la teva experiència amb altres usuaris..."></textarea>
                        </div>

                        <button class="btn btn-primary w-100">
                            <i class="bi bi-send-fill me-2"></i>
                            Enviar valoració
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inicializar el mapa
        var map = L.map('map').setView([42.2668, 2.9580], 15);
        
        L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        var customIcon = L.divIcon({
            html: '<i class="bi bi-geo-alt-fill"></i>',
            className: 'custom-marker',
            iconSize: [30, 30],
            iconAnchor: [15, 30]
        });
   

        L.marker([42.2668, 2.9580], {icon: customIcon}).addTo(map)
            .bindPopup(`
                <div class="text-center">
                    <h6 class="mb-2">Taller de Compostatge</h6>
                    <p class="small mb-2">15 Març 2024 | 10:00 - 13:00</p>
                    <button class="btn btn-primary btn-sm" onclick="getDirections()">
                        <i class="bi bi-sign-turn-right-fill"></i>
                        Com arribar-hi
                    </button>
                </div>
            `);

        function getDirections() {
            window.open(`https://www.google.com/maps/dir/?api=1&destination=42.2668,2.9580`);
        }

        // Rating stars functionality
        document.querySelectorAll('.rating-stars i').forEach(star => {
            star.addEventListener('mouseover', function() {
                const rating = this.dataset.rating;
                highlightStars(rating);
            });

            star.addEventListener('click', function() {
                const rating = this.dataset.rating;
                setRating(rating);
            });
        });

        function highlightStars(rating) {
            document.querySelectorAll('.rating-stars i').forEach(star => {
                star.classList.remove('bi-star-fill', 'bi-star');
                if (star.dataset.rating <= rating) {
                    star.classList.add('bi-star-fill');
                } else {
                    star.classList.add('bi-star');
                }
            });
        }

        function setRating(rating) {
            document.querySelectorAll('.rating-stars i').forEach(star => {
                star.classList.remove('bi-star-fill', 'bi-star');
                if (star.dataset.rating <= rating) {
                    star.classList.add('bi-star-fill');
                } else {
                    star.classList.add('bi-star');
                }
            });
            document.getElementById('rating-text').textContent = `Has seleccionat ${rating} estrelles`;
        }
    </script>
<?php include 'cookie_banner.php'; ?>
</body>
</html>
