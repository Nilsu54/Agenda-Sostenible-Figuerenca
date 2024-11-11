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
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                        <img src="/img/Dan Franklin.jpg" alt="foto de perfil" class="profile-pic">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Profile Container -->
    <div class="container mt-5 pt-5">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="profile-image-container bg-white rounded shadow p-4">
                    <div class="image-cropper-large mx-auto">
                        <img src="/img/Dan Franklin.jpg" alt="foto de perfil" id="currentProfileImage" class="profile-pic">
                    </div>
                    <div class="profile-image-actions">
                        <label for="newProfileImage" class="btn btn-outline-primary btn-sm btn-change-photo">
                            <i class="bi bi-camera"></i> Cambiar foto
                        </label>
                        <input type="file" class="d-none" id="newProfileImage" accept="image/*">
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-8">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Información Personal</h5>
                        <form id="profileForm">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label for="firstName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="firstName" value="Dan">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="lastName" class="form-label">Cognoms</label>
                                    <input type="text" class="form-control" id="lastName" value="Franklin">
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="username" class="form-label">Nom d'usuari</label>
                                <input type="text" class="form-control" id="username" value="danfranklin">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="dan@example.com">
                            </div>
                            <button type="submit" class="btn btn-success w-100">
                                <i class="bi bi-save"></i> Guardar Cambios
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/perfil.js"></script>
</body>
</html>