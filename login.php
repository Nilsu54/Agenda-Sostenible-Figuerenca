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
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
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
    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Entrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

