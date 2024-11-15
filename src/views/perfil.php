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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="/img/logoblanco.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["role"]=="admin"){?>                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=dashboard">Admin</a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="d-flex align-items-center">
                    <?php if(!isset($_SESSION["user"])){?>
                    <button class="btn btn-light" onclick="window.location.href='index.php?r=login'">Login</button>
                    <?php  }else if (isset($_SESSION["user"])){ ?>
                        <a href="index.php?r=profile" class="image-cropper">
                            <?php if($_SESSION["user"]["img"]!=null){ ?>
                            <img src="<?=$_SESSION["user"]["img"]?>" alt="foto de perfil" class="profile-pic">
                            <?php } else {?>
                            <img src="/img/Dan Franklin.jpg" alt="foto de perfil" class="profile-pic">
                            <?php }?>
                    </a>
                    <button class="btn btn-light" onclick="window.location.href='index.php?r=logout'">Logout</button>
                    <?php }?>
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
                        <img src="<?=$_SESSION["user"]["img"]?>" alt="foto de perfil" id="currentProfileImage" class="profile-pic">
                    </div>
                    <div class="profile-image-actions">
                        <label for="newProfileImage" class="btn btn-outline-primary btn-sm btn-change-photo">
                            <i class="bi bi-camera"></i> Cambiar foto
                        </label>
                        <input type="file" class="d-none" id="newProfileImage" name="newProfileImage" accept="image/*">
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-8">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Información Personal</h5>
                        <form id="profileForm">
                            <div class="row g-3">
                                <input type="hidden" id="iduser" name="iduser" value=<?=$_SESSION["user"]["id"]?>>
                                <div class="col-12 col-sm-6">
                                    <label for="firstName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName"value=<?=$_SESSION["user"]["name"]?>>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="lastName" class="form-label">Cognoms</label>
                                    <input type="text" class="form-control" id="lastName" value=<?=$_SESSION["user"]["surname"]?>>
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="username" class="form-label">Nom d'usuari</label>
                                <input type="text" class="form-control" id="username" name="username" value=<?=$_SESSION["user"]["username"]?>>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value=<?=$_SESSION["user"]["email"]?>>
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