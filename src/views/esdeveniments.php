<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esdeveniments sostenibles a Figueres - Tallers, activitats i trobades ecològiques">
    <title>Esdeveniments - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="¡/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Skip to main content -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar al contenido principal</a>

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
                    <?php if (isset($_SESSION["user"])){?>  
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=favorits">Favorits</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">  <!-- $_SESSION["user"]["role"]=="admin" -->
                    
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

    <!-- Search Container -->
    <div class="search-container" role="search" aria-label="Búsqueda y filtros">
        <div class="container-fluid px-3 px-lg-4">
            <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-stretch align-items-md-center">
                <div class="d-flex flex-column flex-md-row gap-3 w-100 w-md-auto">
                    <select class="form-select" aria-label="Seleccionar filtro">
                        <option value="">Selecciona un filtro</option>
                        <option value="1">Filtro 1</option>
                    </select>
                    <select class="form-select" aria-label="Seleccionar categoría">
                        <option value="">Selecciona una categoría</option>
                        <option value="1">Categoría 1</option>
                    </select>
                </div>
                <div class="d-flex gap-2 w-100 w-md-auto">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Campo de búsqueda">
                    <button class="btn btn-primary" aria-label="Realizar búsqueda">Buscar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="container-fluid p-0">
        <div class="swiper esdevenimentsSlider" role="region" aria-label="Carrusel de secciones">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <img src="/img/lago.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Esdeveniments Destacats">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="h2 h1-md display-4-lg mb-2">Esdeveniments Destacats</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="/img/lago2.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Tallers i Activitats">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="h2 h1-md display-4-lg mb-2">Tallers i Activitats</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="/img/lago3.jpg" class="w-100 object-fit-cover" style="height: 40vh; min-height: 300px;" alt="Properes Dates">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-3 p-md-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="h2 h1-md display-4-lg mb-2">Properes Dates</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev d-none d-md-flex"></div>
            <div class="swiper-button-next d-none d-md-flex"></div>
        </div>
    </div>

    <!-- Main Content -->
    <main id="main-content">
        <div class="container-fluid my-4 my-md-5">
            <div class="bg-primary text-white shadow p-3 p-md-4 rounded">
                <h2 class="mb-3 mb-md-4 text-center">Esdeveniments Disponibles</h2>
                <div class="list-group" role="list">
                    <?php foreach($events as $event){
                         $type="";
 
                         switch($event["event_type"]){
                             case "interior": $type="Interior";
                             break;
                             case "outside": $type="Aire lliure";
                             break;
                             case "talk": $type="Xerrada";
                             break;
                             case "days": $type="Jornada";
                         }
                            // print_r($event);
                            // die();
                            $data=explode("-",$event["starting_date"]);
                            $dt = DateTime::createFromFormat('!m', $data['1']); ?>
                    <div class="list-group-item border-0 mb-3 p-0 card hover-effect" role="listitem" tabindex="0" 
                         onclick="window.location.href='index.php?r=showEvent&&idEvent=<?=$event['id']?>'" 
                         onkeypress="if(event.key==='Enter') window.location.href='index.php?r=showEvent&&idEvent=<?=$event['id']?>'">
                        <div class="row g-0 align-items-center">
                            <div class="col-4 col-md-2 text-center py-3">
                                <div class="h3 h2-md text-primary fw-bold mb-0"><?=$data[2]?></div>
                                <div class="small text-muted text-uppercase"><?=$dt->format('F')?></div>
                            </div>
                            <div class="col-8 col-md-7 p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="h5 h4-md mb-0"><?=$event["title"]?></h3>
                                    <span class="badge bg-success">Actiu</span>
                                </div>
                                <span class="badge bg-primary mb-2">Categoria: <?=$type?></span>
                                <p class="mb-0 text-muted d-none d-md-block"><?=$event["event_description"]?></p>
                                <div class="d-flex flex-wrap gap-2 gap-md-4 mt-2">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-star-fill text-warning me-2"></i>
                                        <span class="small">4.0</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-chat-fill text-primary me-2"></i>
                                        <span class="small">12</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-eye-fill text-secondary me-2"></i>
                                        <span class="small">234</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <img src="/img/lago.jpg" class="img-fluid rounded-4 h-100 object-fit-cover" 
                                     alt="Imatge del taller" width="300" height="200">
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/esdeveniments.js"></script>
    <?php include 'cookie_banner.php'; ?>
</body>
</html>