<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrasenya - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
</head>
<body class="overflow-hidden" style="background-color: var(--bs-secondary);">
    <!-- Back Button -->
    <div class="position-fixed top-0 start-0 p-4">
        <button class="btn btn-primary fw-bold" onclick="window.location.href='login.php'">
            <i class="bi bi-arrow-left me-2"></i>Tornar al login
        </button>
    </div>

    <!-- Message Container -->
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center p-4" style="background-color: var(--bs-secondary);">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-4 bg-white">
                        <div class="text-center mb-4">
                            <img src="/img/logo.png" alt="Logo" height="50" class="mb-3">
                            <h2 class="fw-bold mb-3">¯\_(ツ)_/¯</h2>
                            <p class="text-muted">Em sap greu, però m'és igual que hagis oblidat la teva contrasenya</p>
                        </div>
                        
                        <div class="text-center">
                            <a href="login.php" class="btn btn-primary">
                                Torna-ho a intentar <i class="bi bi-arrow-repeat ms-2"></i>
                            </a>
                        </div>
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