<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
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

    <!-- Hero Slider -->
    <div class="container-fluid p-0">
        <div class="swiper heroSwiper" role="region" aria-label="Carrusel de secciones">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative" onclick="window.location.href='index.php?r=events'" style="cursor: pointer;">
                    <img src="/img/lago.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Esdeveniments</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative" onclick="window.location.href='index.php?r=tips'" style="cursor: pointer;">
                    <img src="/img/lago2.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Consells</h1>
                    </div>
                </div>
                <div class="swiper-slide position-relative" onclick="window.location.href='index.php?r=news'" style="cursor: pointer;">
                    <img src="/img/lago3.jpg" class="w-100 object-fit-cover" style="height: 60vh;" alt="Slider">
                    <div class="position-absolute bottom-0 start-0 w-100 text-white p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                        <h1 class="display-4">Anuncis</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Events List -->
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="bg-primary text-white shadow p-3 p-md-4 rounded">
                    <h2 class="mb-4 text-center">Próximos Eventos</h2>
                    <div class="list-group">
                        <?php foreach($events as $event){
                            // print_r($event);
                            // die();
                            $data=explode("-",$event["starting_date"]);
                            $dt = DateTime::createFromFormat('!m', $data['1']);
                            //  $dt->format('F');
                            // print_r( $dt->format('F'));
                          
                            // die();} ?>
                        <div class="list-group-item border-0 mb-3 p-0 card hover-effect" onclick="window.location.href='index.php?r=showEvent&&idEvent=<?=$event['id']?>'">
          
                            <div class="row g-0 align-items-center">
                                <div class="col-md-2 text-center py-3">
                                    <div class="display-4 text-primary fw-bold"><?=$data[2]?></div>
                                    <div class="text-muted text-uppercase"><?=$dt->format('F')?></div>
                                </div>
                                <div class="col-md-10 p-4">
                                    <h4 class="mb-3"><?=$event["title"]?></h4>
                                    <p class="mb-3 text-muted"><?=$event["event_description"]?></p>
                                    <!-- <div class="d-flex gap-4">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-star-fill text-warning me-2"></i>
                                            <span>4.0</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-chat-fill text-primary me-2"></i>
                                            <span>12</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-eye-fill text-secondary me-2"></i>
                                            <span>234</span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="/js/index.js"></script>
    <?php include 'cookie_banner.php'; ?>
</body>

</html>