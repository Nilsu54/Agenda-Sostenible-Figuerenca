<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="icon" href="/public/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                    <div class="image-cropper">
                        <img src="/public/img/Dan Franklin.jpg" alt="foto de perfil" class="profile-pic">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Profile Container -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Perfil de Usuario</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Información Personal</h5>
                <form id="profileForm">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="firstName" value="Dan">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Cognoms</label>
                        <input type="text" class="form-control" id="lastName" value="Franklin">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d’usuari</label>
                        <input type="text" class="form-control" id="username" value="danfranklin">
                    </div>
                    <div class="mb-3">
                        <label for="profileImage" class="form-label">Imatge de perfil</label>
                        <input type="text" class="form-control" id="profileImage" value="/public/img/Dan Franklin.jpg">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="dan@example.com">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="saveProfile()">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function saveProfile() {
            // Aquí puedes agregar la lógica para guardar los cambios
            alert('Configuración guardada!');
        }
    </script>
</body>
</html> 