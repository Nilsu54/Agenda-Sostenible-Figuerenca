<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="icon" href="/public/img/logo.png" type="image/x-icon">
</head>
<body class="overflow-hidden" style="background-color: var(--bs-secondary);">
   
<!-- Back Button -->
<div class="position-fixed top-0 start-0 p-4">
    <button class="btn btn-primary fw-bold" onclick="window.location.href='login.php'">
        <i class="bi bi-arrow-left me-2"></i>Tornar a l'inici
    </button>
</div>
    
<!-- Register Container -->
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100 justify-content-center p-4" style="background-color: var(--bs-secondary);">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow border-0 rounded-4 overflow-hidden">
                <div class="card-body p-5 bg-white">
                    <div class="text-center mb-4">
                        <img src="/public/img/logo.png" alt="Logo" height="60" class="mb-3">
                        <h2 class="fw-bold">Registre</h2>
                        <p class="text-muted">Crea el teu compte</p>
                    </div>
                    
                    <form action="index.php?r=storeUser" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                                    <label for="name"><i class="bi bi-person-fill me-2"></i>Nom</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Cognoms" required>
                                    <label for="surname"><i class="bi bi-person-fill me-2"></i>Cognoms</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'usuari" required>
                            <label for="username"><i class="bi bi-person-badge-fill me-2"></i>Nom d'usuari</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <label for="email"><i class="bi bi-envelope-fill me-2"></i>Email</label>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contrasenya" required>
                                    <label for="password"><i class="bi bi-lock-fill me-2"></i>Contrasenya</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirma la contrasenya" required>
                                    <label for="confirm_password"><i class="bi bi-lock-fill me-2"></i>Confirma la contrasenya</label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <label class="form-label small"><i class="bi bi-image-fill me-2"></i>Imatge de perfil</label>
                            <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*">
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Registrar-se <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                            </button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <p class="mb-0">Ja tens compte? 
                                <a href="login.php" class="text-success fw-bold text-decoration-none">Inicia sessió</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'cookie_banner.php'; ?>
</body>
</html>
