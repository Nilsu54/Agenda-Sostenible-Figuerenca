<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Els Meus Favorits - Agenda Sostenible Figuerenca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar (copiado del index) -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=favorits">Favorits</a>
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
                        <img src="<?=$_SESSION["user"]["img"]?>" alt="foto de perfil" class="profile-pic">
                    </a>
                    <button class="btn btn-light" onclick="window.location.href='index.php?r=logout'">Logout</button>
                    <?php }?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container-fluid my-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="bg-white shadow p-4 rounded">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h2 mb-0">Els Meus Favorits</h1>
                    </div>

                    <!-- Lista de Favoritos (ejemplo estático) -->
                    <div class="list-group">
                        <!-- Ejemplo de item favorito -->
                        <div class="list-group-item border-0 mb-3 p-0 card hover-effect">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-2">
                                    <img src="/img/lago.jpg" class="img-fluid rounded-4 h-100 object-fit-cover" 
                                         style="aspect-ratio: 1/1;" alt="Imatge esdeveniment">
                                </div>
                                <div class="col-md-8 p-3">
                                    <h4 class="mb-2">Taller de Reciclatge</h4>
                                    <p class="mb-2 text-muted">Aprèn a reciclar correctament i contribueix al medi ambient.</p>
                                    <div class="d-flex gap-3">
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i>15 Març 2024</small>
                                        <small class="text-muted"><i class="bi bi-geo-alt me-1"></i>Centre Cívic</small>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end p-3">
                                    <button class="btn btn-outline-danger" title="Eliminar dels favorits">
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Otro ejemplo de item favorito -->
                        <div class="list-group-item border-0 mb-3 p-0 card hover-effect">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-2">
                                    <img src="/img/lago.jpg" class="img-fluid rounded-4 h-100 object-fit-cover" 
                                         style="aspect-ratio: 1/1;" alt="Imatge esdeveniment">
                                </div>
                                <div class="col-md-8 p-3">
                                    <h4 class="mb-2">Xerrada Sostenibilitat</h4>
                                    <p class="mb-2 text-muted">Descobreix com viure de manera més sostenible.</p>
                                    <div class="d-flex gap-3">
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i>20 Març 2024</small>
                                        <small class="text-muted"><i class="bi bi-geo-alt me-1"></i>Biblioteca</small>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end p-3">
                                    <button class="btn btn-outline-danger" title="Eliminar dels favorits">
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
