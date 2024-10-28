<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncis - Agenda Sostenible Figuerenca</title>
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
                <h1>Anuncis</h1>
            </div>
        </div>
    </div>
    
    <div class="consells-container">
        <h2>Anuncis Ambientals</h2>
        <ul class="consells-list">
            <li>
                <div class="consell-content">
                    <div class="consell-number">01</div>
                    <div class="consell-info">
                        <h4>Venda de Compostadors</h4>
                        <p>Disponibles compostadors domèstics a preu reduït. Perfectes per començar a fer el teu propi compost. Inclou manual d'ús i assessorament inicial.</p>
                    </div>
                </div>
                <div class="consell-image">
                    <img src="img/lago.jpg" alt="Compostadors">
                </div>
            </li>
            <li>
                <div class="consell-content">
                    <div class="consell-number">02</div>
                    <div class="consell-info">
                        <h4>Cerca Voluntaris Ambientals</h4>
                        <p>Es busquen voluntaris per a projectes de conservació local. Formació proporcionada. Compromís mínim de 4 hores setmanals.</p>
                    </div>
                </div>
                <div class="consell-image">
                    <img src="img/lago2.jpg" alt="Voluntariat">
                </div>
            </li>
            <li>
                <div class="consell-content">
                    <div class="consell-number">03</div>
                    <div class="consell-info">
                        <h4>Intercanvi de Llavors</h4>
                        <p>Xarxa d'intercanvi de llavors locals. Porta les teves llavors i intercanvia-les per altres varietats. Fomentem la biodiversitat local.</p>
                    </div>
                </div>
                <div class="consell-image">
                    <img src="img/lago3.jpg" alt="Llavors">
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
