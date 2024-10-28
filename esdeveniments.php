<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esdeveniments - Agenda Sostenible Figuerenca</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <header>
        <div class="logo">
            <img onclick="window.location.href='index.php'" class="foto-logo" src="img/logoblanco.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="consells.php">Consells</a></li>
                <li><a href="anuncis.php">Anuncis</a></li>
                <li><a href="esdeveniments.php">Esdeveniments</a></li>
            </ul>
        </nav>
        <div class="login">
            <button onclick="window.location.href='login.php'">Login</button>
        </div>
    </header>
    
    <div class="subheader">
        <div class="filters">
            <select>
                <option>Filtro 1</option>
                <option>Filtro 2</option>
                <option>Filtro 3</option>
            </select>
            <select>
                <option>Categoría 1</option>
                <option>Categoría 2</option>
                <option>Categoría 3</option>
            </select>
        </div>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <button>Buscar</button>
        </div>
    </div>

    <!-- Slider principal -->
    <div class="swiper consellsSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/lago.jpg" alt="Slider 1">
            </div>
            <div class="swiper-slide">
                <img src="img/lago2.jpg" alt="Slider 2">
            </div>
            <div class="swiper-slide">
                <img src="img/lago3.jpg" alt="Slider 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="slider-title">
            <div class="title-container">
                <h1>Esdeveniments</h1>
            </div>
        </div>
    </div>
    
    <div class="consells-container">
        <h2>Esdeveniments Ambientals</h2>
        <ul class="consells-list">
            <li>
                <div class="consell-content">
                    <div class="consell-number">15</div>
                    <div class="consell-info">
                        <h4>Taller de Compostatge</h4>
                        <p>Aprèn a fer el teu propi compost casolà i contribueix a reduir els residus orgànics. Taller pràctic amb experts en compostatge.</p>
                    </div>
                </div>
                <div class="consell-image">
                    <img src="img/lago.jpg" alt="Taller Compostatge">
                </div>
            </li>
            <li>
                <div class="consell-content">
                    <div class="consell-number">22</div>
                    <div class="consell-info">
                        <h4>Neteja del Riu Muga</h4>
                        <p>Jornada de neteja col·lectiva del riu. Junts podem mantenir net el nostre entorn natural. Material de neteja proporcionat.</p>
                    </div>
                </div>
                <div class="consell-image">
                    <img src="img/lago2.jpg" alt="Neteja Riu">
                </div>
            </li>
            <li>
                <div class="consell-content">
                    <div class="consell-number">27</div>
                    <div class="consell-info">
                        <h4>Mercat d'Intercanvi</h4>
                        <p>Porta objectes que ja no utilitzis i intercanvia'ls. Promovem el consum responsable i la reutilització.</p>
                    </div>
                </div>
                <div class="consell-image">
                    <img src="img/lago3.jpg" alt="Mercat Intercanvi">
                </div>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.consellsSlider', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
