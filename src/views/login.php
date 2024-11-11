<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agenda Sostenible Figuerenca</title>
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
    <button class="btn btn-primary fw-bold" onclick="window.location.href='index.php'">
        <i class="bi bi-arrow-left me-2"></i>Tornar a l'inici
    </button>
</div>  

    <!-- Login Container -->
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <?php if(isset($_GET["ok"])){ ?>
            <div class="alert alert-success position-fixed top-0 start-50 translate-middle-x mt-5" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>Usuario registrado correctamente
            </div>
        <?php } ?>
        <?php if(isset($_GET["logged"])){ ?>
            <div class="alert alert-success position-fixed top-0 start-50 translate-middle-x mt-5" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>Error al iniciar sessió
            </div>
        <?php } ?>
        
        <div class="row w-100 justify-content-center p-4" style="background-color: var(--bs-secondary);">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-5 bg-white" style="transition: none;">
                        <div class="text-center mb-4">
                            <img src="/public/img/logo.png" alt="Logo" height="60" class="mb-3">
                            <h2 class="fw-bold">Benvingut/da</h2>
                            <p class="text-muted">Inicia sessió per continuar</p>
                        </div>
                        
                        <form action="index.php?r=loginProcess" method="POST">
                            <input type="hidden" name="r" value="loginProcess">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Usuari" required>
                                <label for="username"><i class="bi bi-person-fill me-2"></i>Usuari</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contrasenya" required>
                                <label for="password"><i class="bi bi-lock-fill me-2"></i>Contrasenya</label>
                            </div>
                            
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Entrar <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                                </button>
                            </div>
                            
                            <div class="text-center">
                                <a href="/src/views/contrasenya.php" class="text-success fw-bold text-decoration-none d-block mb-2">Has oblidat la contrasenya?</a>
                                <p class="mb-0">No tens compte? 
                                <a href="index.php?r=registerUser" class="text-success fw-bold text-decoration-none">Registra't</a>                                </p>
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

